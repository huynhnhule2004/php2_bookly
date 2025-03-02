<?php

namespace App\Views\Admin\Pages\Product;

use App\Views\BaseView;

class Edit extends BaseView
{
    public static function render($data = null)
    {

?>
        <style>
            #variant_fields .form-group label.variant-option {
                display: inline-block;
                /* Hiển thị trên một dòng */
                margin-right: 20px;
                /* Khoảng cách giữa các label */
                font-size: 16px;
                /* Kích thước font cho tên biến thể */
                line-height: 1.5;
                /* Khoảng cách giữa các dòng */
                font-weight: 600;
                /* Đậm hơn để dễ nhìn */
            }

            #variant_fields .form-group label.variant-option input {
                margin-right: 8px;
                /* Khoảng cách giữa checkbox và tên biến thể */
                vertical-align: middle;
                /* Căn giữa checkbox với chữ */
                transform: scale(1.2);
                /* Làm cho checkbox lớn hơn một chút */
            }

            #variant_fields .form-group label.variant-option input:checked {
                background-color: #007bff;
                /* Màu nền khi checkbox được chọn */
                border-color: #007bff;
                /* Màu viền khi checkbox được chọn */
            }

            #variant_fields .form-group h5 {
                margin-bottom: 10px;
                /* Khoảng cách giữa tiêu đề và danh sách lựa chọn */
                font-size: 14px;
                /* Kích thước tiêu đề */
                color: #333;
                /* Màu chữ tiêu đề */
                font-weight: bold;
                /* Làm cho tiêu đề đậm */
            }

            #variant_fields .form-group {
                margin-bottom: 20px;
                /* Khoảng cách giữa các form-group */
            }

            #variant_fields {
                display: none;
                /* Mặc định ẩn khối biến thể */
                margin-top: 20px;
                /* Khoảng cách trên nếu hiển thị */
            }
        </style>
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
                                <h4 class="page-title">QUẢN LÝ SẢN PHẨM</h4>
                                <div class="ms-auto text-end">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/admin">Trang chủ</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Sửa sản phẩm</li>
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
                                    <form class="form-horizontal" action="/admin/products/<?= $data['product']['id'] ?>" method="POST" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <h4 class="card-title">Sửa sản phẩm</h4>
                                            <input type="hidden" name="method" id="" value="PUT">
                                            <div align="center">
                                                <img src="<?= APP_URL ?>/public/uploads/products/<?= $data['product']['image'] ?>" alt="" width="300px">
                                            </div>
                                            <div class="form-group">
                                                <label for="id">ID</label>
                                                <input type="text" class="form-control" id="id" name="id" value="<?= $data['product']['id'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Hình ảnh</label>
                                                <input type="file" class="form-control" id="image" placeholder="Chọn hình ảnh..." name="image" value="<?= APP_URL ?>/public/uploads/products/<?= $data['product']['image'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="product_name">Tên*</label>
                                                <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm..." name="name" value="<?= $data['product']['name'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="category_id">Loại sản phẩm*</label>
                                                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;" id="category_id" name="category_id" required>
                                                    <option value="" selected disabled>Vui lòng chọn...</option>

                                                    <?php
                                                    foreach ($data['category'] as $item) :
                                                    ?>
                                                        <option value="<?= $item['id'] ?>" <?= ($item['id'] == $data['product']['category_id']) ? 'selected' : '' ?>><?= $item['category_name'] ?></option>
                                                    <?php
                                                    endforeach
                                                    ?>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="long_description">Mô tả</label>
                                                <textarea class="form-control" name="long_description" id="long_description_editor" placeholder="Nhập mô tả..."><?= htmlspecialchars($data['product']['long_description']) ?></textarea>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-md-6">
                                                    <label for="price">Giá tiền*</label>
                                                    <input type="number" class="form-control" id="price" placeholder="Nhập giá tiền..." name="price" value="<?= $data['product']['price'] ?>" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="discount_price ">Giá giảm*</label>
                                                    <input type="number" class="form-control" id="discount_price" placeholder="Nhập giá giảm..." name="discount_price" value="<?= $data['product']['discount_price'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="stock">Số lượng*</label>
                                                <input class="form-control" name="stock" id="stock"
                                                    placeholder="Nhập số lượng..." required value="<?= $data['product']['stock'] ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="short_description">Mô tả ngắn</label>
                                                <textarea class="form-control" name="short_description" id="short_description_editor" placeholder="Nhập mô tả ngắn..."><?= htmlspecialchars($data['product']['short_description']) ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="is_feature">Nổi bật*</label>
                                                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;" id="is_feature" name="is_feature" required>
                                                    <option value="" selected disabled>Vui lòng chọn...</option>
                                                    <option value="1" <?= ($data['product']['is_feature'] == 1 ? 'selected' : '') ?>>Nổi bật</option>
                                                    <option value="0" <?= ($data['product']['is_feature'] == 0 ? 'selected' : '') ?>>Không</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Trạng thái*</label>
                                                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;" id="status" name="status" value="<?= $data['product']['status'] ?>" required>
                                                    <option value="" selected disabled>Vui lòng chọn...</option>
                                                    <option value="available" <?= ($data['product']['status'] == 'available' ? 'selected' : '') ?>>Còn hàng</option>
                                                    <option value="out_of_stock" <?= ($data['product']['status'] == 'out_of_stock' ? 'selected' : '') ?>>Hết hàng</option>
                                                    <option value="discontinued" <?= ($data['product']['status'] == 'discontinued' ? 'selected' : '') ?>>Ngừng hoạt động</option>
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-md-3">
                                                    <label for="length">Chiều dài (cm)</label>
                                                    <input type="number" class="form-control" id="length" placeholder="Nhập chiều dài..." name="length"
                                                        value="<?= !empty($data['product']['length']) ? $data['product']['length'] : '' ?>" />
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="width">Chiều rộng (cm)</label>
                                                    <input type="number" class="form-control" id="width" placeholder="Nhập chiều rộng..." name="width"
                                                        value="<?= !empty($data['product']['width']) ? $data['product']['width'] : '' ?>" />
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="height">Chiều cao (cm)</label>
                                                    <input type="number" class="form-control" id="height" placeholder="Nhập chiều cao..." name="height"
                                                        value="<?= !empty($data['product']['height']) ? $data['product']['height'] : '' ?>" />
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="weight">Cân nặng (g)</label>
                                                    <input type="number" step="0.01" class="form-control" id="weight" placeholder="Nhập cân nặng..." name="weight"
                                                        value="<?= !empty($data['product']['weight']) ? $data['product']['weight'] : '' ?>" />
                                                </div>
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
                </div>
            </div>


            <script>
                // Initialize CKEditor on each textarea with a unique ID
                ClassicEditor
                    .create(document.querySelector('#short_description_editor'))
                    .catch(error => {
                        console.error(error);
                    });

                ClassicEditor
                    .create(document.querySelector('#long_description_editor'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->

    <?php
    }
}
