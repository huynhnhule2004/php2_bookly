<?php

namespace App\Views\Admin\Pages\BlogCategory;

use App\Views\BaseView;

class Index extends BaseView
{
    public static function render($data = null)
    {
?>
        <div class="container">
            <div class="page-inner">
                <div class="page-wrapper">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="page-breadcrumb">
                        <div class="row">
                            <div class="col-12 d-flex no-block align-items-center">
                                <h4 class="page-title">QUẢN LÝ DANH MỤC BÀI VIẾT</h4>
                                <div class="ms-auto text-end">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/admin">Trang chủ</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Danh sách danh mục bài viết</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Container fluid  -->
                    <!-- ============================================================== -->
                    <div class="container-fluid">
                        <!-- ============================================================== -->
                        <!-- Start Page Content -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Danh sách danh mục bài viết</h5>
                                        <?php
                                        if (count($data)):
                                        ?>
                                            <div class="table-responsive">
                                                <table id="" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Tên Danh Mục</th>
                                                            <th>Mô Tả</th>
                                                            <th>Hành Động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($data as $item):
                                                        ?>
                                                            <tr>
                                                                <td><?= $item['id'] ?></td>
                                                                <td><?= $item['category_name'] ?></td>
                                                                <td>
                                                                    <?php
                                                                    $description = $item['description'];
                                                                    echo (strlen($description) > 100) ? substr($description, 0, 100) . '...' : $description;
                                                                    ?>
                                                                </td>

                                                                <td>
                                                                    <a href="/admin/blog_categories/<?= $item['id'] ?>"
                                                                        class="btn btn-primary text-white"
                                                                        >
                                                                        Sửa
                                                                    </a>
                                                                    <form action="/admin/blog_categories/<?= $item['id'] ?>" method="post"
                                                                        style="display: inline-block; width: 40px; height: 40px; margin-top: 2px; "
                                                                        onsubmit="return handleDelete(event)">
                                                                        <input type="hidden" name="method" value="DELETE">
                                                                        <button type="submit" class="btn btn-danger text-white"
                                                                            >
                                                                            Xóa
                                                                        </button>
                                                                    </form>
                                                                </td>

                                                            </tr>
                                                        <?php
                                                        endforeach;
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>

                                        <?php
                                        else:

                                        ?>
                                            <h4 class="text-center text-danger">Không có dữ liệu</h4>
                                        <?php
                                        endif;

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // Hàm xử lý xác nhận xóa bằng SweetAlert2
                function handleDelete(event) {
                    event.preventDefault(); // Ngừng việc gửi form mặc định

                    Swal.fire({
                        title: 'Bạn chắc chắn muốn xóa?',
                        text: 'Bạn không thể khôi phục sau khi xóa!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Đồng ý',
                        cancelButtonText: 'Hủy'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Nếu xác nhận, gửi form
                            event.target.submit();
                        }
                    });
                }
            </script>
    <?php
    }
}
