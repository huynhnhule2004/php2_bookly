<?php

namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Home;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Product\Search;

class HomeController
{
    // hiển thị danh sách
    public static function index()
    {
        // $search = $_GET['keyword'];
        // echo $search;
        $category = new Category();
        $categories = $category->getAllByStatus();

        $product = new Product();
        $products = $product->getAllProductByStatus();
        $feature_products = $product->getFeaturedProducts();

        $blog = new Blog();
        $latestBlogs = $blog->getLatestBlogsJoinCategory();


        $data = [
            'products' => $products,
            'categories' => $categories,
            'feature_products' => $feature_products,
            'latestBlogs' => $latestBlogs,
        ];

        // echo "<pre>";
        // var_dump($data['latestBlogs']);
        // die();
        Header::render($data);
        Notification::render();
        NotificationHelper::unset();
        Home::render($data);
        Footer::render();
    }

    public static function search()
    {

        $category = new Category();
        $categories = $category->getAllByStatus();

        $product = new Product();
        $products = $product->getAllProductByStatus();

        if (!isset($_GET['keyword']) || $_GET['keyword'] == '') {
            header('location: /');
            exit();
        }

        $keyword = $_GET['keyword'];
        $product = new Product();

        $result = $product->searchByName($keyword);

        $data = [
            'products' => $products,
            'categories' => $categories,
            'result' => $result,
        ];

        Header::render($data);
        Notification::render();
        NotificationHelper::unset();
        Search::render($data);
        Footer::render();
    }
}
