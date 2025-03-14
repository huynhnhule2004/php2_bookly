<?php

namespace App\Views\Admin\Pages\Category;

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
                                <h4 class="page-title">QUẢN LÝ LOẠI SẢN PHẨM</h4>
                                <div class="ms-auto text-end">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/admin">Trang chủ</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Danh sách loại sản phẩm</li>
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
                                        <h5 class="card-title">Danh sách loại sản phẩm</h5>
                                        <?php
                                        if (count($data)) :
                                        ?>
                                            <div class="table-responsive">
                                                <table id="" class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Tên</th>
                                                            <th>Trạng Thái</th>
                                                            <th>Mô Tả</th>
                                                            <th>Hình Ảnh</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($data as $item) :
                                                        ?>
                                                            <tr>
                                                                <td><?= $item['id'] ?></td>
                                                                <td><?= $item['category_name'] ?></td>
                                                                <td><?= ($item['status'] === 'active') ? 'Hoạt động' : 'Ngưng hoạt động' ?></td>
                                                                <td><?= $item['description'] ?></td>
                                                                <td>
                                                                    <?php if ($item['image']) : ?>
                                                                        <img src="<?= APP_URL ?>/public/uploads/products/<?= $item['image'] ?>" alt="" width="50px" height="50px">
                                                                    <?php else : ?>
                                                                        Không có ảnh
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <a href="/admin/categories/<?= $item['id'] ?>" class="btn btn-primary ">Sửa</a>
                                                                    <form action="/admin/categories/<?= $item['id'] ?>" method="post" style="display: inline-block;" onsubmit="return handleDelete(event)">
                                                                        <input type="hidden" name="method" value="DELETE" id="">
                                                                        <button type="submit" class="btn btn-danger text-white">Xoá</button>
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
                                        else :

                                        ?>
                                            <h4 class="text-center text-danger">Không có dữ liệu</h4>
                                        <?php
                                        endif;

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End PAge Content -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Right sidebar -->
                        <!-- ============================================================== -->
                        <!-- .right-sidebar -->
                        <!-- ============================================================== -->
                        <!-- End Right sidebar -->
                        <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Container fluid  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->

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
