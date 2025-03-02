<?php

namespace App\Validations;

use App\Helpers\NotificationHelper;


class OrderValidation
{
    public static function validate($user_id, $total_price, $status, $phone_number, $shipping_address, $payment_method, $payment_status, $currentOrder)
    {
        $errors = [];

        $validStatuses = ['Pending', 'Processing', 'Shipped', 'Delivered', 'Cancelled'];
        $validPaymentStatuses = ['Paid', 'Unpaid', 'Refunded'];

        if (!$user_id || !filter_var($user_id, FILTER_VALIDATE_INT)) {
            $errors[] = "User ID không hợp lệ!";
        }
        if (!$total_price || !is_numeric($total_price) || $total_price < 0) {
            $errors[] = "Tổng giá trị đơn hàng không hợp lệ!";
        }
        if (!$status || !in_array($status, $validStatuses)) {
            $errors[] = "Trạng thái đơn hàng không hợp lệ!";
        }
        if (!$phone_number || !preg_match('/^0\d{9,10}$/', $phone_number)) {
            $errors[] = "Số điện thoại không hợp lệ!";
        }
        if (!$shipping_address || strlen($shipping_address) < 5) {
            $errors[] = "Địa chỉ giao hàng quá ngắn!";
        }
        if (!$payment_method) {
            $errors[] = "Phương thức thanh toán không hợp lệ!";
        }
        if (!$payment_status || !in_array($payment_status, $validPaymentStatuses)) {
            $errors[] = "Trạng thái thanh toán không hợp lệ!";
        }

        $validTransitions = [
            'Pending'    => ['Pending','Processing', 'Shipped', 'Delivered', 'Cancelled'], // Có thể chuyển lên tất cả trạng thái
            'Processing' => ['Processing','Shipped', 'Delivered', 'Cancelled'], // Có thể chuyển lên Shipped, Delivered hoặc Cancelled
            'Shipped'    => ['Delivered', 'Cancelled'],
            'Delivered'  => ['Delivered'], // Đã giao hàng không thể đổi lại
            'Cancelled'  => ['Cancelled'], // Đã hủy không thể đổi lại
        ];
        
        // Kiểm tra trạng thái đơn hàng chỉ thay đổi theo một chiều hợp lệ
        if (!isset($validTransitions[$currentOrder['status']]) || !in_array($status, $validTransitions[$currentOrder['status']])) {
            $errors[] = "Không thể thay đổi trạng thái từ '{$currentOrder['status']}' sang '{$status}'!";
        }

        // Kiểm tra trạng thái thanh toán chỉ thay đổi theo một chiều hợp lệ
        if ($currentOrder['payment_status'] === 'Paid' && $payment_status !== 'Paid') {
            $errors[] = "Không thể thay đổi trạng thái thanh toán từ 'Đã thanh toán' về trạng thái khác!";
        }
        if ($currentOrder['payment_status'] === 'Refunded' && $payment_status !== 'Refunded') {
            $errors[] = "Không thể thay đổi trạng thái thanh toán từ 'Đã hủy' về trạng thái khác!";
        }

        return $errors;
    }
}
