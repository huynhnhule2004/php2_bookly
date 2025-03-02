<?php

namespace App\Views\Admin\Pages\User;

use App\Views\BaseView;

class Create extends BaseView
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
                                <h4 class="page-title">QUẢN LÝ NGƯỜI DÙNG</h4>
                                <div class="ms-auto text-end">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/admin">Trang chủ</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Thêm người dùng</li>
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
                                    <form class="form-horizontal" action="/admin/users" method="POST" enctype="multipart/form-data" onsubmit="return validatePhoneNumber()">
                                        <div class="card-body">
                                            <h4 class="card-title">Thêm người dùng</h4>
                                            <input type="hidden" name="method" id="" value="POST">
                                            <div class="form-group">
                                                <label for="username">Tên đăng nhập*</label>
                                                <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập..." name="username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email*</label>
                                                <input type="email" class="form-control" id="email" placeholder="Nhập email..." name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Họ và tên*</label>
                                                <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên người dùng..." name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone_number">Số điện thoại*</label>
                                                <input type="text" class="form-control" id="phone_number" placeholder="Nhập số điện thoại..." name="phone_number" required oninput="validateInput()">
                                                <small id="phoneError" class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Địa chỉ*</label>
                                                <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ người dùng..." name="address" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="date_of_birth">Ngày sinh*</label>
                                                <input type="date" class="form-control" id="date_of_birth" placeholder="Nhập ngày sinh người dùng..." name="date_of_birth" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Mật khẩu*</label>
                                                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu..." name="password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="re_password">Nhập lại mật khẩu*</label>
                                                <input type="password" class="form-control" id="re_password" placeholder="Nhập lại mật khẩu..." name="re_password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="avatar">Hình đại diện</label>
                                                <input type="file" class="form-control" id="avatar" placeholder="Chọn ảnh đại diện..." name="avatar">
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Trạng thái*</label>
                                                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;" id="status" name="status" required>
                                                    <option value="" selected disabled>Vui lòng chọn...</option>
                                                    <option value="1">Hoạt động</option>
                                                    <option value="0">Khoá</option>

                                                </select>
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

            <script>
                function validateInput() {
                    let phoneInput = document.getElementById("phone_number");
                    let phoneError = document.getElementById("phoneError");
                    let phoneNumber = phoneInput.value;

                    // Xóa ký tự không phải số
                    phoneInput.value = phoneNumber.replace(/\D/g, '');

                    // Kiểm tra nếu số vượt quá 10 ký tự
                    if (phoneInput.value.length > 10) {
                        phoneInput.value = phoneInput.value.slice(0, 10);
                    }
                }

                function validatePhoneNumber() {
                    let phoneNumber = document.getElementById("phone_number").value;
                    let phoneError = document.getElementById("phoneError");
                    let phonePattern = /^0\d{9}$/; // Regex kiểm tra số điện thoại hợp lệ

                    if (!phonePattern.test(phoneNumber)) {
                        phoneError.innerText = "Số điện thoại không hợp lệ (phải có 10 số và bắt đầu bằng 0)";
                        return false; // Ngăn form gửi đi
                    }

                    phoneError.innerText = ""; // Xóa lỗi nếu hợp lệ
                    return true;
                }
            </script>
    <?php
    }
}
