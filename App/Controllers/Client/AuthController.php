<?php


namespace App\Controllers\Client;

use App\Helpers\AuthHelper;
use App\Helpers\NotificationHelper;
use App\Models\User;
use App\Validations\AuthValidation;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Auth\ChangePassword;
use App\Views\Client\Pages\Auth\Edit;
use App\Views\Client\Pages\Auth\ForgotPassword;
use App\Views\Client\Pages\Auth\Login;
use App\Views\Client\Pages\Auth\Register;
use App\Views\Client\Pages\Auth\ResetPassword;
use App\Models\Category;
use App\Models\Product;

class AuthController
{


    // Thực hiện đăng ký
    public static function registerAction()
    {
        // Bắt lỗi validation
        //kiểm tra có thỏa điều kiện không
        //nếu có: tiếp tục chạy lệnh ở dưới
        //nếu ko thỏa(có lỗi): thông báo và chuyển hướng về trang đăng ký

        $is_valid = AuthValidation::register();

        if (!$is_valid) {
            NotificationHelper::error('register_valid', 'Đăng ký thất bại');
            header('location: /');
            exit();
        }


        // Lấy dữ liệu người dùng nhập vào
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $email = $_POST['email'];

        // Đưa dữ liệu người dùng vào mảng, lưu ý "key" phải trùng với tên cột trong cơ sở dữ liệu
        $data = [
            'username' => $username,
            'password' => $hash_password,
            'email' => $email,
        ];

        $result = AuthHelper::register($data);

        if ($result) {
            // var_dump('Them ok');

            header('Location: /');
        } else {
            // var_dump("Them loi");
            header('Location: /');
        }
    }

    public static function loginAction()
    {
        //Bắt lỗi
        $is_valid = AuthValidation::login();

        if (!$is_valid) {
            NotificationHelper::error('login', 'Đăng nhập thất bại');
            header('location: /login');
            exit();
        }

        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'remember' => isset($_POST['remember'])
        ];

        $result = AuthHelper::login($data);

        if ($result) {
            NotificationHelper::success('login', 'Đăng nhập thành công');
            header('location: /');
        } else {
            NotificationHelper::error('login', 'Đăng nhập thất bại');
            header('location: /');
        }
    }

    public  static function logout()
    {
        AuthHelper::logout();
        NotificationHelper::success('logout', 'Đăng xuất thành công');
        header('location: /');
    }

    public static function edit($id)
    {
        // $category = new Category();
        // $categories = $category->getAllByStatus();

        // $product = new Product();
        // $products = $product->getAllProductByStatus();

        // $data = [
        //     'products' => $products,
        //     'categories' => $categories
        // ];

        $result = AuthHelper::edit($id);

        if (!$result) {
            if (isset($_SESSION['error']['login'])) {
                header('location: /login');
                exit;
            }

            if (isset($_SESSION['error']['user_id'])) {

                $data = $_SESSION['user'];
                $user_id = $data['id'];
                header("location: /users/$user_id");
                exit;
            }
        }

        $data = $_SESSION['user'];
        Header::render();
        Notification::render();
        NotificationHelper::unset();
        Edit::render($data);
        Footer::render();
    }

    public static function update($id)
    {
        $is_valid = AuthValidation::edit();

        if (!$is_valid) {
            NotificationHelper::error('update_user', 'Cập nhật thông tin tài khoản thất bại');
            header("location: /users/$id");
            exit;
        }

        $data = [
            'email' => $_POST['email'],
            'name' => $_POST['name'],
            'date_of_birth' => $_POST['date_of_birth'],
            'phone_number' => $_POST['phone_number'],
            'address' => $_POST['address'],
        ];

        //kiểm tra có upload hình ảnh không, nếu có: kiểm tra xem có hợp lệ không
        $is_upload = AuthValidation::uploadAvatar();
        if ($is_upload) {
            $data['avatar'] = $is_upload;
        }

        //gọi helper để update
        $result = AuthHelper::update($id, $data);

        //kiểm tra kết quả trả về và chuyển hướng
        header("location: /users/$id");
    }

    //Hiển thị form đổi mật khẩu
    public static function changePassword()
    {
        // $category = new Category();
        // $categories = $category->getAllByStatus();

        // $product = new Product();
        // $products = $product->getAllProductByStatus();

        // $data = [
        //     'products' => $products,
        //     'categories' => $categories
        // ];

        $is_login = AuthHelper::checkLogin();

        if (!$is_login) {
            NotificationHelper::error('login', 'Vui lòng đăng nhập để đổi mật khẩu');
            header('location: /login');
            exit;
        }

        $data = $_SESSION['user'];

        Header::render($data);
        Notification::render();
        NotificationHelper::unset();
        ChangePassword::render($data);
        Footer::render();
    }

    //Thực hiện đổi mật khẩu
    public static function changePasswordAction()
    {
        //Validation
        $is_valid = AuthValidation::changePassword();
        if (!$is_valid) {
            NotificationHelper::error('change-password', 'Đổi mật khẩu thất bại');
            header('location: /change-password');
            exit;
        }

        $id = $_SESSION['user']['id'];

        $data = [
            'old_password' => $_POST['old_password'],
            'new_password' => $_POST['new_password'],
        ];

        //Gọi AuthHelper

        $result = AuthHelper::changePassword($id, $data);

        header('location: /change-password');
    }


    //Thực hiện lấy lại mật khẩu

    public static function forgotPasswordAction()
    {
        //Validation
        $is_valid = AuthValidation::forgotPassword();

        if (!$is_valid) {
            NotificationHelper::error('forgot_password', 'Lấy lại mật khẩu thất bại');
            header('location: /');
            exit;
        }

        $username = $_POST['username'];
        $email = $_POST['email'];

        $data = [
            'username' => $username,

        ];
        //AuthHelper
        $result = AuthHelper::forgotPassword($data);

        if (!$result) {
            NotificationHelper::error('username_exist', 'Không tồn tại tài khoản này');
            header('location: /');
            exit;
        }

        if ($result['email'] != $email) {
            NotificationHelper::error('email_exist', 'Email không đúng');
            header('location: /');
            exit;
        }

        $_SESSION['reset_password'] = [
            'username' => $username,
            'email' => $email
        ];

        header('location: /reset-password');

        // echo 'Thành công';
    }

    //Hiển thị giao diện form lấy lại mật khẩu
    public static function resetPassword()
    {
        // $category = new Category();
        // $categories = $category->getAllByStatus();

        // $product = new Product();
        // $products = $product->getAllProductByStatus();

        // $data = [
        //     'products' => $products,
        //     'categories' => $categories
        // ];

        if (!isset($_SESSION['reset_password'])) {
            NotificationHelper::error('reset_password', 'Vui lòng nhập tên đăng nhập và email để lấy lại mật khẩu');
            header('location: /');
            exit;
        }

        Header::render();
        Notification::render();
        NotificationHelper::unset();
        ResetPassword::render();
        Footer::render();
    }

    public static function resetPasswordAction()
    {
        //Validation
        $is_valid = AuthValidation::resetPassword();

        if (!$is_valid) {
            NotificationHelper::error('reset_password', 'Đặt lại mật khẩu thất bại');
            header('Location: /reset-password');
            exit;
        }

        $password = $_POST['password'];
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'username' => $_SESSION['reset_password']['username'],
            'email' => $_SESSION['reset_password']['email'],
            'password' => $hash_password
        ];

        $result = AuthHelper::resetPassword($data);

        if ($result) {
            NotificationHelper::success('reset_password', 'Đặt lại mật khẩu thành công');
            unset($_SESSION['reset_password']);
            header('location: /');
        } else {
            NotificationHelper::error('reset_password', 'Đặt lại mật khẩu thất bại');
            header('location: /reset-password');
        }
    }
}
