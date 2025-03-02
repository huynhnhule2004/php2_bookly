<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailHelper
{
    public static function sendMail($to, $subject, $message) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'huynhnhule2004@gmail.com';
            $mail->Password = 'gkoc tsak dhir eoob'; // Dùng App Password thay vì mật khẩu Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
    
            $mail->setFrom('your_email@gmail.com', 'Bookly');
            $mail->addAddress($to);
            $mail->Subject = $subject;
            $mail->Body = $message;
    
            $mail->send();
            return 'Email đã gửi thành công!';
        } catch (Exception $e) {
            return 'Lỗi khi gửi email: ' . $mail->ErrorInfo;
        }
    }
    
}
