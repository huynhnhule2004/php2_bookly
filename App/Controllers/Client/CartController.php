<?php

namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Helpers\ViewProductHelper;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Cart\Cart as CartCart;
use App\Views\Client\Pages\Cart\CheckOut;
use App\Views\Client\Pages\Cart\Cart as CartView;
use App\Views\Client\Pages\Product\Category as ProductCategory;
use App\Views\Client\Pages\Product\Detail;
use App\Views\Client\Pages\Product\Index;

class CartController
{
    // hiển thị danh sách
    public static function add()
    {
        if (!isset($_COOKIE['user'])) {
            NotificationHelper::error('login', 'Bạn phải đăng nhập để thêm vào giỏ hàng');
            header('location: /');
            exit();

        }
        
        $category = new Category();
        $categories = $category->getAllByStatus();

        $product = new Product();
        $products = $product->getAllProductByStatus();

        $id = $_POST['id'];
        $qty = $_POST['quantity'] ? $_POST['quantity'] : 1;


        // Fetch the product from the model
        $productModel = new Product();
        $product = $productModel->getOneProduct($id);

        // Add the product to the cart
        $cartModel = new Cart;
        $result = $cartModel->addProduct($product, $qty);

        header('location: /cart');

        // Debugging: Print the cart session
        // echo "<pre>";
        // var_dump($_SESSION['cart']);
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

    public static function index()
    {
        $category = new Category();
        $categories = $category->getAllByStatus();

        $product = new Product();
        $products = $product->getAllProductByStatus();

        // Lấy dữ liệu giỏ hàng từ cookie
        $list_buy = isset($_COOKIE['cart_data']) ? json_decode($_COOKIE['cart_data'], true) : [];

        $data = [
            'products' => $products,
            'categories' => $categories,
            'list_buy' => $list_buy,
        ];

        // echo "<pre>";
        // var_dump($data['list_buy']); // Kiểm tra dữ liệu

        Header::render($data);
        Notification::render();
        CartView::render($data);
        Footer::render();
    }


    public static function delete($id)
    {

        $cart = new Cart();
        $cart->deleteItem($id);

        // Redirect to the cart page or return a response
        header('Location: /cart');
        exit();
    }

    public static function deleteAll()
    {
        // Use the Cart model to delete all items
        $cart = new Cart();
        $cart->deleteAllItems();

        // Redirect to the cart page or return a response
        header('Location: /cart');
        exit();
    }


    public static function clearCart()
    {
        // Use the Cart model to delete all items
        $cart = new Cart();
        $cart->clearCart();

        // Redirect to the cart page or return a response
        header('Location: /cart');
        exit();
    }

}
