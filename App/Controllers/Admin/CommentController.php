<?php

namespace App\Controllers\Admin;

use App\Helpers\NotificationHelper;
use App\Models\Comment;
use App\Validations\CommentValidation;
use App\Views\Admin\Layouts\Footer;
use App\Views\Admin\Layouts\Header;
use App\Views\Admin\Components\Notification;
use App\Views\Admin\Pages\Comment\Create;
use App\Views\Admin\Pages\Comment\Edit;
use App\Views\Admin\Pages\Comment\Index;

class CommentController
{


    // hiển thị danh sách
    public static function index()
    {
        // $comment = new Comment();
        // $data = $comment->getAllCommentJoinProductAndUser();

        // $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        // $itemsPerPage = 10;

        // $totalItems = count($data);
        // $totalPages = ceil($totalItems / $itemsPerPage);

        // if ($currentPage < 1) $currentPage = 1;
        // if ($currentPage > $totalPages) $currentPage = $totalPages;

        // $offset = ($currentPage - 1) * $itemsPerPage;
        // $pageData = array_slice($data, $offset, $itemsPerPage);
        $data = [
            [
                'id' => 1,
                'user_id' => 101,
                'username' => 'nguyenvana',
                'product_id' => 201,
                'product_name' => 'Điện thoại iPhone 14 Pro Max',
                'content' => 'Sản phẩm này rất tốt, tôi rất hài lòng!',
                'created_at' => '2025-01-01 10:00:00',
                'status' => 1, // 1: Hiển thị, 0: Ẩn
            ],
            [
                'id' => 2,
                'user_id' => 102,
                'username' => 'tranthib',
                'product_id' => 202,
                'product_name' => 'Laptop Dell XPS 13',
                'content' => 'Máy chạy mượt mà, nhưng pin không được lâu.',
                'created_at' => '2025-01-02 14:30:00',
                'status' => 1,
            ],
            [
                'id' => 3,
                'user_id' => 103,
                'username' => 'phamvanh',
                'product_id' => 203,
                'product_name' => 'Máy ảnh Canon EOS R6',
                'content' => 'Chất lượng hình ảnh tuyệt vời, đáng tiền.',
                'created_at' => '2025-01-03 08:15:00',
                'status' => 0,
            ],
            [
                'id' => 4,
                'user_id' => 104,
                'username' => 'lethic',
                'product_id' => 204,
                'product_name' => 'Tai nghe Sony WH-1000XM5',
                'content' => 'Âm thanh rất tốt, nhưng đeo lâu hơi đau tai.',
                'created_at' => '2025-01-04 19:45:00',
                'status' => 1,
            ],
            [
                'id' => 5,
                'user_id' => 105,
                'username' => 'hoangminhd',
                'product_id' => 205,
                'product_name' => 'Tivi Samsung QLED 4K',
                'content' => 'Màu sắc hiển thị rất đẹp, kích thước phù hợp.',
                'created_at' => '2025-01-05 12:00:00',
                'status' => 0,
            ],
        ];

        Header::render();
        // Notification::render();
        // NotificationHelper::unset();
        // hiển thị giao diện danh sách
        Index::render($data);
        Footer::render();
    }


    // hiển thị giao diện form thêm
    public static function create() {}


    // xử lý chức năng thêm
    public static function store() {}


    // hiển thị chi tiết
    public static function show() {}


    // hiển thị giao diện form sửa
    public static function edit(int $id)
    {
        // $comment = new Comment();
        // $data = $comment->getOneCommentJoinProductAndUser($id);

        // if (!$data) {
        //     NotificationHelper::error('edit', 'Không thể xem bình luận này');
        //     header('location: /admin/comments/');
        //     exit;
        // }
        $data = [
                'id' => $id,
                'user_id' => 101,
                'username' => 'nguyenvana',
                'product_id' => 201,
                'product_name' => 'Điện thoại iPhone 14 Pro Max',
                'content' => 'Sản phẩm này rất tốt, tôi rất hài lòng!',
                'created_at' => '2025-01-01 10:00:00',
                'status' => 1, // 1: Hiển thị, 0: Ẩn
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
        // // validation các trường dữ liệu
        // $is_valid = CommentValidation::edit();

        // if (!$is_valid) {
        //     NotificationHelper::error('update', 'Cập nhật bình luận thất bại');
        //     header("location: /admin/comments/$id");
        //     exit;
        // }

        // $status = $_POST['status'];

        // $comment = new Comment();

        // //Thực hiện cập nhật
        // $data = [
        //     'status' => $status
        // ];

        // $result = $comment->updateComment($id, $data);

        // if ($result) {
        //     NotificationHelper::success('update', 'Cập nhật bình luận thành công');
        //     header('location: /admin/comments');
        // } else {
        //     NotificationHelper::error('update', 'Cập nhật bình luận thất bại');
        //     header("location: /admin/comments/$id");
        // }
    }


    // thực hiện xoá
    public static function delete(int $id)
    {
        // $comment = new Comment();
        // $result = $comment->deleteComment($id);

        // // var_dump($result);
        // if ($result) {
        //     NotificationHelper::success('delete', 'Xóa bình luận thành công');
        // } else {
        //     NotificationHelper::error('delete', 'Xóa bình luận thất bại');
        // }

        header('location: /admin/comments');
    }
}
