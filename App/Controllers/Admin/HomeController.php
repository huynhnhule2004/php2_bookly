<?php

namespace App\Controllers\Admin;

use App\Helpers\NotificationHelper;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Views\Admin\Components\Notification;
use App\Views\Admin\Home;
use App\Views\Admin\Layouts\Footer;
use App\Views\Admin\Layouts\Header;

class HomeController
{
    // hiển thị danh sách
    public static function index()
    {
        $user = new User;
        $total_user = $user->countTotalUser();

        $category = new Category();
        $total_category = $category->countTotalCategory();

        $product = new Product();
        $total_product = $product->countTotalProduct();
        $product_by_category = $product->countProductByCategory();

        $comment = new Comment();
        $total_comment = $comment->countTotalComment();
        $comment_by_product = $comment->countCommentByProduct();

        $year = isset($_GET['year']) ?: date('Y');
        $order = new Order();
        $revenue_by_month = $order->getRevenueByMonth($year);
        // var_dump($total_user);

        $data = [
            'total_user' => $total_user['total'],
            'total_category' => $total_category['total'],
            'total_product' => $total_product['total'],
            'total_comment' => $total_comment['total'],
            'product_by_category' => $product_by_category,
            'comment_by_product' => $comment_by_product,
            'revenue_by_month' => $revenue_by_month,
        ];
// echo "<pre>";
// var_dump($data);
// die();
        Header::render();
        Home::render($data);
        Footer::render();
    }
}
