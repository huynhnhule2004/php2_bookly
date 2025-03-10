<?php

namespace App\Views\Admin\Pages\Product;

use App\Views\BaseView;

class Index extends BaseView
{
    public static function render($data = null, $currentPage = 1, $itemsPerPage = 10, $totalItems = 0)
    {
        $totalPages = ceil($totalItems / $itemsPerPage);

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
                                <h4 class="page-title">QUẢN LÝ SẢN PHẨM</h4>
                                <div class="ms-auto text-end">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/admin">Trang chủ</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
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
                                        <h5 class="card-title">Danh sách sản phẩm</h5>
                                        <?php
                                        if (count($data)) :
                                        ?>
                                            <div class="table-responsive">
                                                <table id="" class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Hình ảnh</th>
                                                            <th>Tên</th>
                                                            <th>Giá</th>
                                                            <th>Giá giảm</th>
                                                            <th>Loại</th>
                                                            <th>Số lượng</th>
                                                            <th>Trạng thái</th>
                                                            <th>Nổi bật</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($data as $item) :
                                                        ?>
                                                            <tr>
                                                                <td style="white-space: nowrap;"><?= $item['id'] ?></td>
                                                                <td>
                                                                    <img src="<?= APP_URL ?>/public/uploads/products/<?= $item['image'] ?>" alt="" width="100px">
                                                                </td>
                                                                <td style="white-space: nowrap;"><?= $item['name'] ?></td>
                                                                <td style="white-space: nowrap;"><?= number_format($item['price']) ?></td>
                                                                <td style="white-space: nowrap;"><?= number_format($item['discount_price']) ?></td>
                                                                <td style="white-space: nowrap;"><?= $item['category_name'] ?></td>
                                                                <td style="white-space: nowrap;"><?= $item['stock'] ?></td>
                                                                <td style="white-space: nowrap;">
                                                                    <?php
                                                                    switch ($item['status']) {
                                                                        case 'available':
                                                                            echo 'Còn hàng';
                                                                            break;
                                                                        case 'out_of_stock':
                                                                            echo 'Hết hàng';
                                                                            break;
                                                                        case 'discontinued':
                                                                            echo 'Ngừng bán';
                                                                            break;
                                                                        default:
                                                                            echo 'Không xác định';
                                                                            break;
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td style="white-space: nowrap;"><?= $item['is_feature'] == 1 ? 'Nổi bật' : 'Không nổi bật' ?></td>
                                                                <td style="white-space: nowrap;">
                                                                    <a href="/admin/products/<?= $item['id'] ?>" class="btn btn-primary ">Sửa</a>
                                                                    <form action="/admin/products/<?= $item['id'] ?>" method="post" style="display: inline-block;" onsubmit="return handleDelete(event)">
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
                                            <!-- Pagination -->
                                            <?php if ($totalPages > 1) : ?>
                                                <div class="pagination">
                                                    <nav aria-label="Page navigation">
                                                        <ul class="pagination justify-content-center">
                                                            <?php if ($currentPage > 1) : ?>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="?page=<?= $currentPage - 1 ?>" aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                    </a>
                                                                </li>
                                                            <?php endif; ?>

                                                            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                                                <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                                                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                                                </li>
                                                            <?php endfor; ?>

                                                            <?php if ($currentPage < $totalPages) : ?>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="?page=<?= $currentPage + 1 ?>" aria-label="Next">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                    </a>
                                                                </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            <?php endif; ?>
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
