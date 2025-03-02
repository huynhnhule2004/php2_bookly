<?php

namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Helpers\ViewProductHelper;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Product\Category as ProductCategory;
use App\Views\Client\Pages\Product\Detail;
use App\Views\Client\Pages\Product\Index;

class ProductController
{
    // hiển thị danh sách
    public static function index()
    {
    
        $category = new Category();
        $categories = $category->getAllByStatus();

        $product = new Product();
        $products = $product->getAllProductByStatus();
        
        $data = [
            'products' => $products,
            'categories' => $categories
        ];
        Header::render($data);
        Notification::render();
        NotificationHelper::unset();
        Index::render($data);
        Footer::render();
    }
    public static function detail($id)
    {
        $category = new Category();
        $categories = $category->getAllByStatus();

        $product = new Product();
        $products = $product->getAllProductByStatus();
        $product_detail = $product->getOneProductByStatus($id);
        $recently_viewed_products = $product->getRecentlyViewedProducts();

        if (!$product_detail) {
            NotificationHelper::error('product_detail', 'Không thể xem sản phẩm này');
            header('location: /products');
            exit;
        }

        $comment = new Comment();
        $comments = $comment->get5CommentNewestByProductAndStatus($id);

        $data = [
            'product' => $product_detail,
            'comments' => $comments,
            'products' => $products,
            'categories' => $categories,
        ];

        $related_products = $product->getRelatedProducts($id, $data['product']['category_id']);

        $data = [
            'product' => $product_detail,
            'comments' => $comments,
            'products' => $products,
            'categories' => $categories,
            'related_products' => $related_products,
            'recently_viewed_products' => $recently_viewed_products,
        ];


        $view_result = ViewProductHelper::cookieView($id, $product_detail['view']);

        // var_dump($view_result);
        // echo "<pre>";
        // var_dump($data);

        Header::render($data);
        Notification::render();
        NotificationHelper::unset();
        Detail::render($data);
        Footer::render();
    }
    public static function getProductByCategory($id)
    {
        $category = new Category();
        $categories = $category->getAllCategoryByStatus();

        // var_dump($categories);
        $product = new Product();
        $products = $product->getAllProductByCategoryAndStatus($id);

        $data = [
            'products' => $products,
            'categories' => $categories
        ];

        Header::render($data);
        ProductCategory::render($data);
        Footer::render();
    }
}
