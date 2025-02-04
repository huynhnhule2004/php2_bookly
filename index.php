<?php
ob_start();
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
ini_set('log_errors', TRUE); 
ini_set('error_log', './logs/php/php-errors.log');

use App\Helpers\AuthHelper;
use App\Route;

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once 'config.php';

AuthHelper::middleware();



// *** Client
Route::get('/', 'App\Controllers\Client\HomeController@index');
Route::get('/products', 'App\Controllers\Client\ProductController@index');
Route::get('/products/{id}', 'App\Controllers\Client\ProductController@detail');

Route::get('/contact', 'App\Controllers\Client\ContactController@index');
Route::get('/checkout', 'App\Controllers\Client\CheckoutController@index');
Route::get('/cart', 'App\Controllers\Client\CartController@index');
Route::get('/wishlist', 'App\Controllers\Client\WishlistController@index');


Route::get('/blogs', 'App\Controllers\Client\BlogController@index');
Route::get('/blogs/{id}', 'App\Controllers\Client\BlogController@detail');
Route::get('/blogs/categories/{id}', 'App\Controllers\Client\BlogController@getBlogByCategory');
Route::get('/about', 'App\Controllers\Client\AboutController@index');

Route::post('/register', 'App\Controllers\Client\AuthController@registerAction');
Route::post('/login', 'App\Controllers\Client\AuthController@loginAction');

Route::get('/logout', 'App\Controllers\Client\AuthController@logout');

Route::get('/users/{id}', 'App\Controllers\Client\AuthController@edit');
Route::put('/users/{id}', 'App\Controllers\Client\AuthController@update');

Route::get('/change-password', 'App\Controllers\Client\AuthController@changePassword');
Route::put('/change-password', 'App\Controllers\Client\AuthController@changePasswordAction');

Route::post('/forgot-password', 'App\Controllers\Client\AuthController@forgotPasswordAction');

Route::get('/reset-password', 'App\Controllers\Client\AuthController@resetPassword');
Route::put('/reset-password', 'App\Controllers\Client\AuthController@resetPasswordAction');

// *** Admin

Route::get('/admin', 'App\Controllers\Admin\HomeController@index');


//  *** Category
// GET /categories (lấy danh sách loại sản phẩm)
Route::get('/admin/categories', 'App\Controllers\Admin\CategoryController@index');

// GET /categories/create (hiển thị form thêm loại sản phẩm)
Route::get('/admin/categories/create', 'App\Controllers\Admin\CategoryController@create');

// POST /categories (tạo mới một loại sản phẩm)
Route::post('/admin/categories', 'App\Controllers\Admin\CategoryController@store');

// GET /categories/{id} (lấy chi tiết loại sản phẩm với id cụ thể)
Route::get('/admin/categories/{id}', 'App\Controllers\Admin\CategoryController@edit');

// PUT /categories/{id} (update loại sản phẩm với id cụ thể)
Route::put('/admin/categories/{id}', 'App\Controllers\Admin\CategoryController@update');

// DELETE /categories/{id} (delete loại sản phẩm với id cụ thể)
Route::delete('/admin/categories/{id}', 'App\Controllers\Admin\CategoryController@delete');

//  *** Product
// GET /products (lấy danh sách sản phẩm)
Route::get('/admin/products', 'App\Controllers\Admin\ProductController@index');

// GET /products/create (hiển thị form thêm sản phẩm)
Route::get('/admin/products/create', 'App\Controllers\Admin\ProductController@create');

// POST /products (tạo mới một sản phẩm)
Route::post('/admin/products', 'App\Controllers\Admin\ProductController@store');

// GET /products/{id} (lấy chi tiết sản phẩm với id cụ thể)
Route::get('/admin/products/{id}', 'App\Controllers\Admin\ProductController@edit');

// PUT /products/{id} (update sản phẩm với id cụ thể)
Route::put('/admin/products/{id}', 'App\Controllers\Admin\ProductController@update');

// DELETE /products/{id} (delete sản phẩm với id cụ thể)
Route::delete('/admin/products/{id}', 'App\Controllers\Admin\ProductController@delete');


//  *** Blog
// GET /blogs (lấy danh sách sản phẩm)
Route::get('/admin/blogs', 'App\Controllers\Admin\BlogController@index');

// GET /blogs/create (hiển thị form thêm sản phẩm)
Route::get('/admin/blogs/create', 'App\Controllers\Admin\BlogController@create');

// POST /blogs (tạo mới một sản phẩm)
Route::post('/admin/blogs', 'App\Controllers\Admin\BlogController@store');

// GET /blogs/{id} (lấy chi tiết sản phẩm với id cụ thể)
Route::get('/admin/blogs/{id}', 'App\Controllers\Admin\BlogController@edit');

// PUT /blogs/{id} (update sản phẩm với id cụ thể)
Route::put('/admin/blogs/{id}', 'App\Controllers\Admin\BlogController@update');

// DELETE /blogs/{id} (delete sản phẩm với id cụ thể)
Route::delete('/admin/blogs/{id}', 'App\Controllers\Admin\BlogController@delete');


//  *** Comment
// GET /Comment (lấy danh sách bình luận)
Route::get('/admin/comments', 'App\Controllers\Admin\CommentController@index');

// GET /Comment/{id} (lấy chi tiết bình luận với id cụ thể)
Route::get('/admin/comments/{id}', 'App\Controllers\Admin\CommentController@edit');

// PUT /Comment/{id} (update bình luậnvới id cụ thể)
Route::put('/admin/comments/{id}', 'App\Controllers\Admin\CommentController@update');

// DELETE /Comment/{id} (delete bình luận với id cụ thể)
Route::delete('/admin/comments/{id}', 'App\Controllers\Admin\CommentController@delete');

//  *** BlogCategory
// GET /blog_categories (lấy danh sách loại bài viết)
Route::get('/admin/blog_categories', 'App\Controllers\Admin\BlogCategoryController@index');

// GET /blog_categories/create (hiển thị form thêm loại sản phẩm)
Route::get('/admin/blog_categories/create', 'App\Controllers\Admin\BlogCategoryController@create');

// POST /blog_categories (tạo mới một loại sản phẩm)
Route::post('/admin/blog_categories', 'App\Controllers\Admin\BlogCategoryController@store');

// GET /blog_categories/{id} (lấy chi tiết loại sản phẩm với id cụ thể)
Route::get('/admin/blog_categories/{id}', 'App\Controllers\Admin\BlogCategoryController@edit');

// PUT /blog_categories/{id} (update loại sản phẩm với id cụ thể)
Route::put('/admin/blog_categories/{id}', 'App\Controllers\Admin\BlogCategoryController@update');

// DELETE /blog_categories/{id} (delete loại sản phẩm với id cụ thể)
Route::delete('/admin/blog_categories/{id}', 'App\Controllers\Admin\BlogCategoryController@delete');


//  *** Blog
// GET /blogs (lấy danh sách sản phẩm)
Route::get('/admin/blogs', 'App\Controllers\Admin\BlogController@index');

// GET /blogs/create (hiển thị form thêm sản phẩm)
Route::get('/admin/blogs/create', 'App\Controllers\Admin\BlogController@create');

// POST /blogs (tạo mới một sản phẩm)
Route::post('/admin/blogs', 'App\Controllers\Admin\BlogController@store');

// GET /blogs/{id} (lấy chi tiết sản phẩm với id cụ thể)
Route::get('/admin/blogs/{id}', 'App\Controllers\Admin\BlogController@edit');

// PUT /blogs/{id} (update sản phẩm với id cụ thể)
Route::put('/admin/blogs/{id}', 'App\Controllers\Admin\BlogController@update');

// DELETE /blogs/{id} (delete sản phẩm với id cụ thể)
Route::delete('/admin/blogs/{id}', 'App\Controllers\Admin\BlogController@delete');


//  *** User
// GET /users (lấy danh sách người dùng)
Route::get('/admin/users', 'App\Controllers\Admin\UserController@index');

// GET /users/create (hiển thị form thêm người dùng)
Route::get('/admin/users/create', 'App\Controllers\Admin\UserController@create');

// POST /users (tạo mới một người dùng)
Route::post('/admin/users', 'App\Controllers\Admin\UserController@store');

// GET /users/{id} (lấy chi tiết người dùng với id cụ thể)
Route::get('/admin/users/{id}', 'App\Controllers\Admin\UserController@edit');

// PUT /users/{id} (update người dùng với id cụ thể)
Route::put('/admin/users/{id}', 'App\Controllers\Admin\UserController@update');

// DELETE /users/{id} (delete người dùng với id cụ thể)
Route::delete('/admin/users/{id}', 'App\Controllers\Admin\UserController@delete');


//  *** Order
// GET /users (lấy danh sách đơn hàng)
Route::get('/admin/orders', 'App\Controllers\Admin\OrderController@index');
Route::get('/admin/orders/details/{id}', 'App\Controllers\Admin\OrderController@detail');


// GET /users/create (hiển thị form thêm người dùng)
// Route::get('/admin/users/create', 'App\Controllers\Admin\UserController@create');

// // POST /users (tạo mới một người dùng)
// Route::post('/admin/users', 'App\Controllers\Admin\UserController@store');

// GET /orders/{id} (lấy chi tiết đơn hàng với id cụ thể)
Route::get('/admin/orders/{id}', 'App\Controllers\Admin\OrderController@edit');

// PUT /users/{id} (update đơn hàng với id cụ thể)
Route::put('/admin/orders/{id}', 'App\Controllers\Admin\OrderController@update');

// DELETE /orders/{id} (delete order với id cụ thể)
Route::delete('/admin/orders/{id}', 'App\Controllers\Admin\OrderController@delete');



Route::dispatch($_SERVER['REQUEST_URI']);
