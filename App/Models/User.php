<?php

namespace App\Models;

use \Exception;

use App\Helpers\NotificationHelper;

class User extends BaseModel
{
    protected $table = 'users';
    protected $id = 'id';

    public function getAllUser()
    {
        return $this->getAll();
    }
    public function getOneUser($id)
    {
        return $this->getOne($id);
    }

    public function createUser($data)
    {
        return $this->create($data);
    }
    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->delete($id);
    }
    public function getAllUserByStatus()
    {
        return $this->getAllByStatus();
    }

    public function getNameUserById(int $id)
    {
        try {
            $sql = "SELECT name FROM $this->table WHERE $this->id=?";
            $conn = $this->_conn->MySQLi();
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_assoc();

            return $result['name'] ?? 'Khách hàng'; // Trả về chuỗi thay vì mảng
        } catch (\Throwable $th) {
            error_log('Lỗi khi lấy tên người dùng: ' . $th->getMessage());
            return 'Khách hàng'; // Trả về giá trị mặc định nếu có lỗi
        }
    }
    public function getOneUserByUsername(string $username)
    {
        $result = [];
        try {
            $sql = "SELECT * FROM users WHERE username=?";
            $conn = $this->_conn->MySQLi();
            $stmt = $conn->prepare($sql);

            $stmt->bind_param('s', $username);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        } catch (\Throwable $th) {
            error_log('Lỗi khi hiển thị chi tiết dữ liệu bằng username: ' . $th->getMessage());
            return $result;
        }
    }

    public function getOneUserByEmail(string $email)
    {
        $result = [];
        try {
            $sql = "SELECT * FROM users WHERE email=?";
            $conn = $this->_conn->MySQLi();
            $stmt = $conn->prepare($sql);

            $stmt->bind_param('s', $email);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        } catch (\Throwable $th) {
            error_log('Lỗi khi hiển thị chi tiết dữ liệu bằng email: ' . $th->getMessage());
            return $result;
        }
    }

    public function updateUserByUsernameAndEmail(array $data)
    {
        try {
            $username = $data['username'];
            $email = $data['email'];
            $password = $data['password'];

            $sql = "UPDATE $this->table SET password='$password' WHERE username='$username' AND email='$email'";

            $conn = $this->_conn->MySQLi();
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            // trả về số hàng dữ liệu bị ảnh hưởng
            return $stmt->affected_rows;
        } catch (\Throwable $th) {
            error_log('Lỗi khi cập nhật dữ liệu: ', $th->getMessage());
            NotificationHelper::error('updateUserByUsernameAndEmail', 'Lỗi khi thực hiện cập nhật dữ liệu');
            return false;
        }
    }

    public function countTotalUser()
    {
        return $this->countTotal();
    }

    public function savePasswordResetToken($email, $token)
    {
        $sql = "UPDATE users SET reset_token = ?, reset_token_expiry = ? WHERE email = ?";
        $expiry = date("Y-m-d H:i:s", strtotime("+1 hour"));

        $conn = $this->_conn->MySQLi();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $token, $expiry, $email);
        $stmt->execute();
    }

    public function getUserByResetToken($token)
    {
        $sql = "SELECT * FROM users WHERE reset_token = ? AND reset_token_expiry > NOW()";
        $conn = $this->_conn->MySQLi();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $token);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updatePassword($email, $newPassword)
{
    try {

        $sql = "UPDATE $this->table SET password=? WHERE email=?";

        $conn = $this->_conn->MySQLi();
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Lỗi khi chuẩn bị truy vấn: " . $conn->error);
        }

        // Ràng buộc tham số để tránh SQL Injection
        $stmt->bind_param("ss", $newPassword, $email);
        $stmt->execute();

        // Lấy số hàng bị ảnh hưởng
        $affectedRows = $stmt->affected_rows;

        // Đóng statement và kết nối
        $stmt->close();
        $conn->close();

        return $affectedRows;
    } catch (\Throwable $th) {
        error_log('Lỗi khi cập nhật mật khẩu: ' . $th->getMessage());
        NotificationHelper::error('updateUserEmail', 'Lỗi khi thực hiện cập nhật mật khẩu');
        return false;
    }
}

}
