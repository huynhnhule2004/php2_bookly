<?php

namespace App\Controllers\Admin;

use App\Helpers\NotificationHelper;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Views\Admin\Layouts\Footer;
use App\Views\Admin\Layouts\Header;
use App\Views\Admin\Components\Notification;
use App\Views\Admin\Pages\Order\Create;
use App\Views\Admin\Pages\Order\Edit;
use App\Views\Admin\Pages\Order\Index;
use App\Validations\CategoryValidation;
use App\Views\Admin\Pages\Order\Detail;
use App\Views\Admin\Pages\Order\Search;

class OrderController
{


    // hiển thị danh sách
    public static function index()
    {
        // $order = new Order();
        // $data = $order->getAllOrderAndNameUser();
        $data = [
            [
                'id' => 1,
                'first_name' => 'Nguyễn Văn A',
                'total_price' => 1500000,
                'status' => 'Pending',
                'payment_method' => 'COD',
                'payment_status' => 'Unpaid',
            ],
            [
                'id' => 2,
                'first_name' => 'Trần Thị B',
                'total_price' => 2000000,
                'status' => 'Shipped',
                'payment_method' => 'Online',
                'payment_status' => 'Paid',
            ],
            [
                'id' => 3,
                'first_name' => 'Phạm Văn C',
                'total_price' => 500000,
                'status' => 'Delivered',
                'payment_method' => 'COD',
                'payment_status' => 'Paid',
            ],
            [
                'id' => 4,
                'first_name' => 'Lê Thị D',
                'total_price' => 750000,
                'status' => 'Cancelled',
                'payment_method' => 'Online',
                'payment_status' => 'Refunded',
            ],
            [
                'id' => 5,
                'first_name' => 'Hoàng Văn E',
                'total_price' => 1200000,
                'status' => 'Pending',
                'payment_method' => 'Online',
                'payment_status' => 'Unpaid',
            ],
        ];

        $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $itemsPerPage = 10;

        $totalItems = count($data);
        $totalPages = ceil($totalItems / $itemsPerPage);

        if ($currentPage < 1)
            $currentPage = 1;
        if ($currentPage > $totalPages)
            $currentPage = $totalPages;

        $offset = ($currentPage - 1) * $itemsPerPage;
        $pageData = array_slice($data, $offset, $itemsPerPage);

        Header::render();
        // Notification::render();
        // NotificationHelper::unset();
        // Truyền $totalItems vào view để tính toán phân trang
        Index::render($pageData, $currentPage, $itemsPerPage, $totalItems);
        Footer::render();
    }

    // hiển thị giao diện form thêm
    public static function create()
    {
        // var_dump($_SESSION);
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
        // // validation các trường dữ liệu
        // $is_valid = CategoryValidation::create();

        // if (!$is_valid) {
        //     NotificationHelper::error('store', 'Thêm loại sản phẩm thất bại');
        //     header('location: /admin/categories/create');
        //     exit;
        // }

        // $category_name = $_POST['category_name'];
        // $status = $_POST['status'];
        // $description = $_POST['description'];

        // // Kiểm tra tên loại có tồn tại chưa => không được trùng tên
        // $category = new Category();
        // $is_exist = $category->getOneCategoryByName($category_name);

        // if ($is_exist) {
        //     NotificationHelper::error('store', 'Tên loại sản phẩm này đã tồn tại');
        //     header('location: /admin/categories/create');
        //     exit;
        // }

        // // Kiểm tra và xử lý file ảnh nếu có
        // if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        //     // Gọi hàm upload image
        //     $is_upload = CategoryValidation::uploadImage();  // Hàm upload hình ảnh

        //     if ($is_upload) {
        //         $image_path = $is_upload; // Đường dẫn của hình ảnh đã upload
        //     } else {
        //         NotificationHelper::error('store', 'Lỗi khi tải ảnh lên');
        //         header('location: /admin/categories/create');
        //         exit;
        //     }
        // } else {
        //     $image_path = null;  // Nếu không có ảnh, có thể để trống hoặc gán giá trị mặc định
        // }

        // // Thực hiện thêm dữ liệu
        // $data = [
        //     'category_name' => $category_name,
        //     'status' => $status,
        //     'description' => $description,
        //     'image' => $image_path
        // ];

        // $result = $category->createCategory($data);

        // if ($result) {
        //     NotificationHelper::success('store', 'Thêm loại sản phẩm thành công');
        //     header('location: /admin/categories');
        // } else {
        //     NotificationHelper::error('store', 'Thêm loại sản phẩm thất bại');
        //     header('location: /admin/categories/create');
        // }
    }


    // hiển thị chi tiết
    public static function show() {}


    // hiển thị giao diện form sửa
    public static function edit(int $id)
    {
        // $order = new Order();
        // $data = $order->getOneOrder($id);

        // if (!$data) {
        //     NotificationHelper::error('edit', 'Không thể xem loại sản phẩm này');
        //     header('location: /admin/categories/');
        //     exit;
        // }
        $data = [
            'id' => $id,
            'user_id' => 'USR123',
            'first_name' => 'Như',
            'last_name' => 'Huỳnh',
            'total_price' => 350000,
            'phone_number' => '0912345678',
            'shipping_address' => '123 Đường ABC, Phường DEF, Quận GHI, TP. Hồ Chí Minh',
            'status' => 'Shipped', // Có thể là 'Pending', 'Shipped', 'Delivered', 'Cancelled'
            'payment_method' => 'COD', // Có thể là 'COD', 'Online payment'
            'payment_status' => 'Unpaid', // Có thể là 'Paid', 'Unpaid', 'Refunded'
        ];
        Header::render();
        // Notification::render();
        // NotificationHelper::unset();
        // hiển thị form sửa
        Edit::render($data);
        Footer::render();
    }


    // xử lý chức năng sửa (cập nhật)
    public static function update(int $id)
    {
        // $order = new Order();

        // // Thực hiện cập nhật
        // $data = [
        //     'user_id' => $_POST['user_id'],
        //     'total_price' => $_POST['total_price'],
        //     'status' => $_POST['status'],
        //     'phone_number' => $_POST['phone_number'],
        //     'shipping_address' => $_POST['shipping_address'],
        //     'payment_method' => $_POST['payment_method'],
        //     'payment_status' => $_POST['payment_status'],
        // ];

        // $result = $order->updateOrder($id, $data);

        // if ($result) {
        //     NotificationHelper::success('update', 'Cập nhật đơn hàng thành công');
        //     header('location: /admin/orders');
        // } else {
        //     NotificationHelper::error('update', 'Cập nhật đơn hàng thất bại');
        //     header("location: /admin/orders/$id");
        // }
        // var_dump($_POST);
        // exit;
    }


    // thực hiện xoá
    public static function delete(int $id)
    {
        // $order = new Order();
        // $result = $order->deleteOrder($id);

        // // var_dump($result);
        // if ($result) {
        //     NotificationHelper::success('delete', 'Xóa đơn hàng thành công');
        // } else {
        //     NotificationHelper::error('delete', 'Xóa đơn hàng thất bại');
        // }

        header('location: /admin/orders');
    }

    public static function search()
    {
        // // $statusMapping = [
        // //     'đang chờ xử lý' => 'Pending',
        // //     'đang giao' => 'Shipped',
        // //     'đã giao' => 'Delivered',
        // //     'đã hủy' => 'Cancelled'
        // // ];
        // if (!isset($_GET['keyword']) || $_GET['keyword'] == '') {
        //     header('location: /admin/orders');
        //     exit();
        // }

        // $keyword = urldecode($_GET['keyword']);
        // // $keyword1 = mb_strtolower($keyword);
        // // $statusEnglish = $statusMapping[$keyword1] ?? null;
        // // if ($statusEnglish === null) {
        // //     NotificationHelper::error('invalid_status', 'Trạng thái không hợp lệ');
        // //     header('location: /admin/orders');
        // //     exit();
        // // }
        // $order = new Order();
        // $data = $order->searchByStatus($keyword);

        // $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        // $itemsPerPage = 10;

        // $totalItems = count($data);
        // $totalPages = ceil($totalItems / $itemsPerPage);

        // if ($currentPage < 1)
        //     $currentPage = 1;
        // if ($currentPage > $totalPages)
        //     $currentPage = $totalPages;

        // $offset = ($currentPage - 1) * $itemsPerPage;
        // $pageData = array_slice($data, $offset, $itemsPerPage);
        // // $statusEnglish = $statusMapping[$keyword1] ?? null;


        // // echo "<pre>";
        // // var_dump($data);

        // Header::render($data);
        // Notification::render();
        // NotificationHelper::unset();
        // Search::render($pageData, $currentPage, $itemsPerPage, $totalItems);
        // Footer::render();
    }

    public static function detail($id)
    {
        // $order = new Order();
        // $orders = $order->getOneOrder($id);
        // $order_detail = new OrderDetail();
        // $order_details = $order_detail->getAllOrderDetailByOrderId($id);
        $order = [
            'id' => $id,
            'first_name' => 'Như',
            'last_name' => 'Huỳnh',
            'total_price' => 350000,
            'created_at' => '2025-01-15 10:30:00',
            'updated_at' => '2025-01-20 15:00:00',
            'status' => 'Shipped',
            'phone_number' => '0912345678',
            'shipping_address' => '123 Đường ABC, Phường DEF, Quận GHI, TP. Hồ Chí Minh',
            'payment_method' => 'COD',
            'payment_status' => 'Unpaid',
        ];

        // Dữ liệu giả cho chi tiết sản phẩm trong đơn hàng
        $orderDetails = [
            [
                'image' => 'product.jpg',
                'product_name' => 'Sản phẩm 1',
                'quantity' => 2,
                'price' => 100000,
            ],
            [
                'image' => 'product.jpg',
                'product_name' => 'Sản phẩm 2',
                'quantity' => 1,
                'price' => 150000,
            ],
        ];

        Header::render();
        // Notification::render();
        // NotificationHelper::unset();

        // Truyền $totalItems vào view để tính toán phân trang
        Detail::render($order, $orderDetails);
        Footer::render();
    }
}
