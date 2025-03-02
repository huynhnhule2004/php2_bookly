<?php

namespace App\Views\Admin\Pages\Category;

use App\Views\BaseView;

class Edit extends BaseView
{
    public static function render($data = null)
    {
?>
        <div class="container">
            <div class="page-inner">
                <!-- Page wrapper  -->
                <!-- ============================================================== -->
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
                                            <li class="breadcrumb-item active" aria-current="page">Sửa loại sản phẩm</li>
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
                            <div class="col-md-12">
                                <div class="card">
                                    <form class="form-horizontal" action="/admin/categories/<?= $data['id'] ?>" method="POST" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <h4 class="card-title">Sửa loại sản phẩm</h4>
                                            <input type="hidden" name="method" id="" value="PUT">
                                            <div class="form-group">
                                                <label for="id">ID</label>
                                                <input type="text" class="form-control" id="id" name="id" value="<?= $data['id'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="category_name">Tên*</label>
                                                <input type="text" class="form-control" id="category_name" placeholder="Nhập tên loại sản phẩm..." name="category_name" value="<?= $data['category_name'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Trạng thái*</label>
                                                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;" id="status" name="status" required>
                                                    <option value="" disabled>Vui lòng chọn...</option>
                                                    <option value="active" <?= ($data['status'] == 'active' ? 'selected' : '') ?>>Hoạt động</option>
                                                    <option value="inactive" <?= ($data['status'] == 'inactive' ? 'selected' : '') ?>>Ngưng hoạt động</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Mô tả</label>
                                                <textarea class="form-control" id="description" placeholder="Nhập mô tả cho loại sản phẩm..." name="description" rows="3"><?= htmlspecialchars($data['description']) ?></textarea>

                                            </div>
                                            <!-- Hình ảnh -->
                                            <div class="form-group">
                                                <label for="image">Hình ảnh</label>
                                                <input type="file" class="form-control" id="image" name="image" accept="image/*" value="<?= $data['image'] ?>">
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="reset" class="btn btn-danger text-white" name="">Làm lại</button>
                                                <button type="submit" class="btn btn-primary" name="">Cập nhật</button>
                                            </div>
                                        </div>
                                    </form>
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
                ClassicEditor
                    .create(document.querySelector('#description'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>

    <?php
    }
}
