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
    // public static function add()
    // {

    //     $category = new Category();
    //     $categories = $category->getAllByStatus();

    //     $product = new Product();
    //     $products = $product->getAllProductByStatus();

    //     $id = $_POST['id'];

    //     // Fetch the product from the model
    //     $productModel = new Product();
    //     $product = $productModel->getOneProduct($id);

    //     // Add the product to the cart
    //     $cartModel = new Cart;
    //     $result = $cartModel->addProduct($product);

    //     header('location: /cart/show');

    //     // Debugging: Print the cart session
    //     // echo "<pre>";
    //     // var_dump($_SESSION['cart']);
    //     // $data = [
    //     //     'products' => $products,
    //     //     'categories' => $categories
    //     // ];
    //     // Header::render($data);
    //     // Notification::render();
    //     // NotificationHelper::unset();
    //     // Index::render($data);
    //     // Footer::render();
    // }

    public static function index()
    {
        // $category = new Category();
        // $categories = $category->getAllByStatus();

        // $product = new Product();
        // $products = $product->getAllProductByStatus();

        // $list_buy = isset($_SESSION['cart']) && isset($_SESSION['cart']['buy']) ? $_SESSION['cart']['buy'] : [];

        // $data = [
        //     'products' => $products,
        //     'categories' => $categories,
        //     'list_buy' => $list_buy,
        // ];

        // echo "<pre>";
        // var_dump($data['list_buy']);

        Header::render();
        Notification::render();
        // NotificationHelper::unset();
        CartView::render();
        Footer::render();
    }

    // public static function delete($id)
    // {
    //     // Use the Cart model to delete the item
    //     $cart = new Cart();
    //     $cart->deleteItem($id);

    //     // Redirect to the cart page or return a response
    //     header('Location: /cart/show');
    //     exit();
    // }

    // public static function deleteAll()
    // {
    //     // Use the Cart model to delete all items
    //     $cart = new Cart();
    //     $cart->deleteAllItems();

    //     // Redirect to the cart page or return a response
    //     header('Location: /cart/show');
    //     exit();
    // }

    // public static function update(){
    //     if(isset($_POST['btn_update_cart'])){
    //         var_dump($_POST);
    //     }
    // }

    // public static function checkout()
    // {
    //     $category = new Category();
    //     $categories = $category->getAllByStatus();

    //     $product = new Product();
    //     $products = $product->getAllProductByStatus();

    //     $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

    //     $data = [
    //         'products' => $products,
    //         'categories' => $categories,
    //         'cart' => $cart,
    //     ];

    //     // echo "<pre>";
    //     // var_dump($data['cart']);

    //     Header::render($data);
    //     Notification::render();
    //     NotificationHelper::unset();
    //     CheckOut::render($data);
    //     Footer::render();
    // }
    
}
