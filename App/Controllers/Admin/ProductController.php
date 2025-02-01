<?php

namespace App\Controllers\Admin;

use App\Helpers\NotificationHelper;
use App\Models\Category;
use App\Models\Product;
use App\Validations\ProductValidation;
use App\Views\Admin\Layouts\Footer;
use App\Views\Admin\Layouts\Header;
use App\Views\Admin\Components\Notification;
use App\Views\Admin\Pages\Product\Create;
use App\Views\Admin\Pages\Product\Edit;
use App\Views\Admin\Pages\Product\Index;
use App\Models\ProductVariantOption;
use App\Models\ProductVariantOptionCombination;
use App\Models\Sku;
use App\Validations\SkuValidation;

class ProductController
{


    // hiển thị danh sách
    public static function index()
    {
        $data = [
            [
                'id' => 1,
                'image' => 'product.jpg',
                'product_name' => 'Sản phẩm 1',
                'price_default' => 100000,
                'discount_price' => 90000,
                'category_name' => 'Điện tử',
                'status' => 'available',
                'is_feature' => 1,
                'short_description' => 'Sản phẩm chất lượng cao, được nhiều người ưa chuộng.',
            ],
            [
                'id' => 2,
                'image' => 'product.jpg',
                'product_name' => 'Sản phẩm 2',
                'price_default' => 200000,
                'discount_price' => 180000,
                'category_name' => 'Thời trang',
                'status' => 'out_of_stock',
                'is_feature' => 0,
                'short_description' => 'Sản phẩm đẹp và phong cách, phù hợp với mọi lứa tuổi.',
            ],
            [
                'id' => 3,
                'image' => 'product.jpg',
                'product_name' => 'Sản phẩm 3',
                'price_default' => 150000,
                'discount_price' => 140000,
                'category_name' => 'Đồ gia dụng',
                'status' => 'discontinued',
                'is_feature' => 1,
                'short_description' => 'Thiết kế tiện lợi và bền bỉ.',
            ],
            [
                'id' => 4,
                'image' => 'product.jpg',
                'product_name' => 'Sản phẩm 4',
                'price_default' => 300000,
                'discount_price' => 270000,
                'category_name' => 'Điện tử',
                'status' => 'available',
                'is_feature' => 0,
                'short_description' => 'Sản phẩm công nghệ cao với nhiều tính năng hiện đại.',
            ],
            [
                'id' => 5,
                'image' => 'product.jpg',
                'product_name' => 'Sản phẩm 5',
                'price_default' => 120000,
                'discount_price' => 110000,
                'category_name' => 'Phụ kiện',
                'status' => 'available',
                'is_feature' => 1,
                'short_description' => 'Phụ kiện thời trang và bền bỉ.',
            ],
        ];
        // echo "<pre>";
        // var_dump($data);
        Header::render();
        // Notification::render();
        // NotificationHelper::unset();
        // hiển thị giao diện danh sách
        Index::render($data);
        Footer::render();
    }


    // hiển thị giao diện form thêm
    public static function create()
    {

        // echo "<pre>";
        // var_dump($data);
        Header::render();
        // Notification::render();
        // NotificationHelper::unset();
        // hiển thị form thêm
        Create::render();
        Footer::render();
    }


    // xử lý chức năng thêm
    public static function store()
    {

        // Tạo dữ liệu sản phẩm
        $data = [
            'product_name' => $_POST['product_name'],
            'price_default' => $_POST['price_default'],
            'discount_price' => $_POST['discount_price'],
            'is_feature' => $_POST['is_feature'],
            'status' => $_POST['status'],
            'category_id' => $_POST['category_id'],
            'short_description' => $_POST['short_description'],
            'long_description' => $_POST['long_description'],
            'how_to_use' => $_POST['how_to_use'],
        ];
        echo 'Thực hiện lưu vào database';
        // // Upload hình ảnh sản phẩm
        // if ($imagePath = ProductValidation::uploadImage()) {
        //     $data['image'] = $imagePath;
        // }

        // // Thêm sản phẩm vào cơ sở dữ liệu
        // $productId = $product->createProduct($data);

        // // Kiểm tra nếu thêm sản phẩm thành công
        // if ($productId) {
        //     // Thêm SKU nếu có
        //     if (isset($_POST['sku_code'], $_POST['price'], $_POST['stock_quantity'])) {
        //         self::processSku($productId);
        //     }

        //     // Hiển thị thông báo thành công và chuyển hướng về trang quản trị
        //     NotificationHelper::success('store', 'Thêm sản phẩm thành công');
        //     header('location: /admin/products');
        //     exit;
        // } else {
        //     // Nếu không thêm sản phẩm thành công
        //     NotificationHelper::error('store', 'Thêm sản phẩm thất bại');
        //     header('location: /admin/products/create');
        //     exit;
        // }
    }








    // // hiển thị chi tiết
    // public static function show()
    // {
    // }


    // hiển thị giao diện form sửa
    public static function edit(int $id)
    {


        $data = [
            "product" =>
                [
                    'id' => $id,
                    'image' => 'product.jpg',
                    'product_name' => 'Sản phẩm 1',
                    'price_default' => 100000,
                    'discount_price' => 90000,
                    'category_name' => 'Điện tử',
                    'status' => 'available',
                    'is_feature' => 1,
                    'short_description' => 'Sản phẩm chất lượng cao, được nhiều người ưa chuộng.',
                    'long_description' => 'Sản phẩm chất lượng cao, được nhiều người ưa chuộng.',
                ],
        ];
        // echo "<pre>";
        // var_dump($data);
        Header::render();
        // Notification::render();
        // NotificationHelper::unset();
        // hiển thị form sửa
        Edit::render($data);
        Footer::render();
    }


    // xử lý chức năng sửa (cập nhật)
    // public static function update(int $id)
    // {
    //     // Validation dữ liệu
    //     $is_valid = ProductValidation::edit();
    //     if (!$is_valid) {
    //         NotificationHelper::error('update', 'Cập nhật sản phẩm thất bại');
    //         header("location: /admin/products/$id");
    //         exit;
    //     }

    //     $name = $_POST['product_name'];
    //     $product = new Product();
    //     $is_exist = $product->getOneProductByName($name);

    //     if ($is_exist && $is_exist['id'] != $id) {
    //         NotificationHelper::error('update', 'Tên sản phẩm này đã tồn tại');
    //         header("location: /admin/products/$id");
    //         exit;
    //     }

    //     // Thực hiện cập nhật
    //     $data = [
    //         'product_name' => $name,
    //         'price_default' => $_POST['price_default'],
    //         'discount_price' => $_POST['discount_price'],
    //         'is_feature' => $_POST['is_feature'],
    //         'status' => $_POST['status'],
    //         'category_id' => $_POST['category_id'],
    //         'short_description' => $_POST['short_description'],
    //         'long_description' => $_POST['long_description'],
    //         'how_to_use' => $_POST['how_to_use'],
    //     ];

    //     // Kiểm tra và upload ảnh
    //     $is_upload = ProductValidation::uploadImage();
    //     if ($is_upload) {
    //         $data['image'] = $is_upload;
    //     }

    //     $result = $product->updateProduct($id, $data);

    //     if ($result) {
    //         // Cập nhật SKU
    //         if (isset($_POST['sku_code'], $_POST['price'], $_POST['stock_quantity'])) {
    //             self::processSkuUpdate($id);  // Chạy xử lý SKU
    //         }

    //         NotificationHelper::success('update', 'Cập nhật sản phẩm thành công');
    //         header('location: /admin/products');
    //         exit;
    //     } else {
    //         NotificationHelper::error('update', 'Cập nhật sản phẩm thất bại');
    //         header("location: /admin/products/$id");
    //         exit;
    //     }
    // }

    // Phương thức xử lý cập nhật SKU
    





    // // thực hiện xoá
    public static function delete(int $id)
    {
        // $product = new Product();
        // $result = $product->deleteProduct($id);

        // // var_dump($result);
        // if ($result) {
        //     NotificationHelper::success('delete', 'Xóa sản phẩm thành công');
        // } else {
        //     NotificationHelper::error('delete', 'Xóa sản phẩm thất bại');
        // }

        header('location: /admin/products');
    }
}
