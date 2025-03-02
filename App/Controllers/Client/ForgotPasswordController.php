<?php

namespace App\Controllers\Client;

use App\Models\User;
use App\Helpers\MailHelper;
use App\Helpers\NotificationHelper;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Validations\AuthValidation;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Home;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Auth\ForgotPassword;
use App\Views\Client\Pages\Product\Search;

class ForgotPasswordController
{

    public function sendResetLink()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'] ?? '';

            $userModel = new User();
            $user = $userModel->getOneUserByEmail($email);

            if (!$user) {
                echo "Email không tồn tại!";
                return;
            }

            // Tạo token reset password
            $token = bin2hex(random_bytes(50));
            $userModel->savePasswordResetToken($email, $token);

            // Gửi email
            $resetLink = $_ENV['APP_URL'] . "/reset-password?token=" . $token;
            MailHelper::sendMail($email, "Forgot Password?", "Nhấp vào liên kết để đặt lại mật khẩu: $resetLink");

            NotificationHelper::success('reset_password', 'Email đặt lại mật khẩu đã được gửi! Vui lòng kiểm tra email!');
            header('Location: /');
            exit;
        }
    }

    public function showResetPasswordForm()
    {
        $category = new Category();
        $categories = $category->getAllByStatus();



        $data = [
            'categories' => $categories,
        ];

        // echo "<pre>";
        // var_dump($data['latestBlogs']);
        // die();
        Header::render($data);
        Notification::render();
        NotificationHelper::unset();
        ForgotPassword::render($data);
        Footer::render();
    }

    public function resetPassword()
    {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die("Không tìm thấy trang!");
        }

        $is_valid = AuthValidation::resetPassword();

        if (!$is_valid) {
            NotificationHelper::error('reset_password', 'Đặt lại mật khẩu thất bại');
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }

        // Kiểm tra dữ liệu đầu vào
        if (empty($_POST['token']) || empty($_POST['password'])) {
            NotificationHelper::error('reset_password', 'Thiếu token hoặc mật khẩu');
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }

        $token = $_POST['token'];
        $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if (!$newPassword) {
            NotificationHelper::error('reset_password', 'Lỗi khi mã hóa mật khẩu');
            header("location: /");
        }


        // Kiểm tra token có hợp lệ không
        $userModel = new User();
        $user = $userModel->getUserByResetToken($token);

        if (!$user) {
            NotificationHelper::error('reset_password', 'Token không hợp lệ hoặc đã hết hạn!');
            header("location: /");
        }


        // Cập nhật mật khẩu
        if ($userModel->updatePassword($user['email'], $newPassword)) {
            NotificationHelper::success('reset_password', 'Đặt lại mật khẩu thành công');
            header("location: /");
        } else {
            NotificationHelper::error('reset_password', 'Đặt lại mật khẩu thất bại');
            die();
        }
    }
}
