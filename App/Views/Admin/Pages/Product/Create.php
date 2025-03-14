<?php

namespace App\Views\Admin\Pages\Product;

use App\Views\BaseView;

class Create extends BaseView
{
    public static function render($data = null)
    {

        // var_dump($data['name']);
        // die();
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
                                            <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
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
                                    <form class="form-horizontal" action="/admin/products" method="POST" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <h4 class="card-title">Thêm sản phẩm</h4>
                                            <input type="hidden" name="method" id="" value="POST">
                                            <div class="form-group">
                                                <label for="name">Tên*</label>
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Nhập tên sản phẩm..." name="name" />
                                                    <span class="error-message text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="category_id">Loại sản phẩm*</label>
                                                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;" id="category_id" name="category_id">
                                                    <option value="" selected disabled>Vui lòng chọn...</option>

                                                    <?php
                                                    foreach ($data as $item) :
                                                    ?>
                                                        <option value="<?= $item['id'] ?>"><?= $item['category_name'] ?></option>
                                                    <?php
                                                    endforeach
                                                    ?>

                                                </select>
                                                <span class="error-message text-danger" id="category_id-error"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="long_description">Mô tả</label>
                                                <textarea class="form-control" name="long_description" id="long_description_editor"
                                                    placeholder="Nhập mô tả..."></textarea>
                                                    <span class="error-message text-danger"></span>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-md-6">
                                                    <label for="price">Giá tiền*</label>
                                                    <input type="number" class="form-control" id="price" placeholder="Nhập giá tiền..."
                                                        name="price">
                                                    <span class="error-message text-danger"></span>
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="discount_price">Giá giảm*</label>
                                                    <input type="number" class="form-control" id="discount_price"
                                                        placeholder="Nhập giá giảm..." name="discount_price">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="stock">Số lượng*</label>
                                                <input class="form-control" name="stock" id="stock"
                                                    placeholder="Nhập số lượng..." />
                                                    <span class="error-message text-danger"></span>

                                            </div>
                                            <div class="form-group">
                                                <label for="image">Hình ảnh</label>
                                                <input type="file" class="form-control" id="image" placeholder="Chọn hình ảnh..."
                                                    name="image">
                                            </div>
                                            <div class="form-group">
                                                <label for="short_description">Mô tả ngắn</label>
                                                <textarea class="form-control" name="short_description" id="short_description_editor"
                                                    placeholder="Nhập mô tả ngắn..."></textarea>
                                                    <span class="error-message text-danger"></span>

                                            </div>
                                            <div class="form-group">
                                                <label for="is_feature">Nổi bật*</label>
                                                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;"
                                                    id="is_feature" name="is_feature">
                                                    <option value="" selected disabled>Vui lòng chọn...</option>
                                                    <option value="1">Nổi bật</option>
                                                    <option value="0">Không</option>
                                                </select>
                                                <span class="error-message text-danger"></span>

                                            </div>
                                            <div class="form-group">
                                                <label for="status">Trạng thái*</label>
                                                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;"
                                                    id="status" name="status">
                                                    <option value="" selected disabled>Vui lòng chọn...</option>
                                                    <option value="available">Còn hàng</option>
                                                    <option value="out_of_stock">Hết hàng</option>
                                                    <option value="discontinued">Ngừng hoạt động</option>
                                                </select>
                                                <span class="error-message text-danger"></span>

                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-md-3">
                                                    <label for="length">Chiều dài (cm)*</label>
                                                    <input type="number" class="form-control" id="length" placeholder="Nhập chiều dài..." name="length">
                                                    <span class="error-message text-danger"></span>
                                                
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="width">Chiều rộng (cm)*</label>
                                                    <input type="number" class="form-control" id="width" placeholder="Nhập chiều rộng..." name="width">
                                                    <span class="error-message text-danger"></span>
                                                
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="height">Chiều cao (cm)*</label>
                                                    <input type="number" class="form-control" id="height" placeholder="Nhập chiều cao..." name="height">
                                                    <span class="error-message text-danger"></span>
                                                
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="weight">Cân nặng (g)*</label>
                                                    <input type="number" step="0.01" class="form-control" id="weight" placeholder="Nhập cân nặng..." name="weight">
                                                    <span class="error-message text-danger"></span>
                                                
                                                </div>
                                            </div>

                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="reset" class="btn btn-danger text-white" name="">Làm lại</button>
                                                <button type="submit" class="btn btn-primary" name="">Thêm</button>
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


            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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





                $(document).ready(function() {
                    $(".form-horizontal").submit(function(event) {
                        
                        let isValid = true;

                        // Reset lỗi cũ
                        $(".error-message").text("");

                        // Kiểm tra tên sản phẩm
                        let name = $("#name").val().trim();
                        if (name === "") {
                            $("#name").next(".error-message").text("Vui lòng nhập tên sản phẩm");
                            isValid = false;
                        }

                        let category_id = $("#category_id").val();
                        if (category_id === null) {
                            $("#category_id").next(".error-message").text("Vui lòng nhập loại sản phẩm");
                            isValid = false;
                        }

                        // let long_description = $("#long_description").val().trim();
                        // if (long_description === "") {
                        //     $("#long_description").next(".error-message").text("Vui lòng nhập mô tả dài");
                        //     isValid = false;
                        // }

                        // let short_description = $("#short_description").val().trim();
                        // if (short_description === "") {
                        //     $("#short_description").next(".error-message").text("Vui lòng nhập mô tả");
                        //     isValid = false;
                        // }

                        let status = $("#status").val();
                        if (status === null) {
                            $("#status").next(".error-message").text("Vui lòng nhập trạng thái");
                            isValid = false;
                        }

                        let is_feature = $("#is_feature").val();
                        if (is_feature === null) {
                            $("#is_feature").next(".error-message").text("Vui lòng chọn nổi bật hay không");
                            isValid = false;
                        }

                        let length = $("#length").val().trim();
                        if (length === "") {
                            $("#length").next(".error-message").text("Vui lòng chọn chiều dài");
                            isValid = false;
                        }

                        let width = $("#width").val().trim();
                        if (width === "") {
                            $("#width").next(".error-message").text("Vui lòng chọn chiều rộng");
                            isValid = false;
                        }

                        let height = $("#height").val().trim();
                        if (height === "") {
                            $("#height").next(".error-message").text("Vui lòng chọn chiều cao");
                            isValid = false;
                        }

                        let weight = $("#weight").val().trim();
                        if (weight === "") {
                            $("#weight").next(".error-message").text("Vui lòng chọn cân nặng");
                            isValid = false;
                        }

                        // Kiểm tra giá tiền
                        let price = $("#price").val();
                        if (price === "" || parseFloat(price) <= 0) {
                            $("#price").next(".error-message").text("Giá tiền phải lớn hơn 0");
                            isValid = false;
                        }

                        // Kiểm tra số lượng
                        let stock = $("#stock").val();
                        if (stock === "" || parseInt(stock) < 1) {
                            $("#stock").next(".error-message").text("Số lượng phải lớn hơn 0");
                            isValid = false;
                        }

                        // Ngăn form gửi nếu có lỗi
                        if (!isValid) {
                            event.preventDefault();
                        }
                    });
                });
            </script>
    <?php
    }
}
