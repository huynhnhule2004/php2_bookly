<?php

namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Home;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\About\About;
use App\Views\Client\Pages\Contact\Contact;
use App\Models\Category;
use App\Models\Product;
use App\Views\Client\Pages\Checkout\Checkout;

class CheckoutController
{
    // hiển thị danh sách
    public static function index()
    {
        if (!isset($_COOKIE['user'])) {
            NotificationHelper::error('login', 'Bạn phải đăng nhập để thanh toán');
            header('location: /');
            exit();

        }
        $category = new Category();
        $categories = $category->getAllCategoryByStatus();

        $data = [
            'categories' => $categories
        ];

        Header::render();
        Notification::render();
        NotificationHelper::unset();
        Checkout::render($data);
        Footer::render();
    }


}