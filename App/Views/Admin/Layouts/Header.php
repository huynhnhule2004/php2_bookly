<?php

namespace App\Views\Admin\Layouts;

use App\Views\BaseView;

class Header extends BaseView
{
    public static function render($data = null)
    {

?>
        <!DOCTYPE html>
        <html dir="ltr" lang="en">

        <head>
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <title>Admin</title>
            <meta
                content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
                name="viewport" />
            <link
                rel="icon"
                href="<?= APP_URL ?>/public/assets/client/images/main-logo.png"
                type="image/x-icon" />

            <!-- Fonts and icons -->
            <script src="<?= APP_URL ?>/public/assets/assets/js/plugin/webfont/webfont.min.js"></script>
            <script>
                WebFont.load({
                    google: {
                        families: ["Public Sans:300,400,500,600,700"]
                    },
                    custom: {
                        families: [
                            "Font Awesome 5 Solid",
                            "Font Awesome 5 Regular",
                            "Font Awesome 5 Brands",
                            "simple-line-icons",
                        ],
                        urls: ["<?= APP_URL ?>/public/assets/assets/css/fonts.min.css"],
                    },
                    active: function() {
                        sessionStorage.fonts = true;
                    },
                });
            </script>
            <!-- CKEditor -->
            <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
            <!-- CSS Files -->
            <link rel="stylesheet" href="<?= APP_URL ?>/public/assets/assets/css/bootstrap.min.css" />
            <link rel="stylesheet" href="<?= APP_URL ?>/public/assets/assets/css/plugins.min.css" />
            <link rel="stylesheet" href="<?= APP_URL ?>/public/assets/assets/css/kaiadmin.min.css" />
            <!-- CSS Just for demo purpose, don't include it in your project -->
            <link rel="stylesheet" href="<?= APP_URL ?>/public/assets/assets/css/demo.css" />
            <!-- SweetAlert2 CSS -->
            <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.6/dist/sweetalert2.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.6/dist/sweetalert2.all.min.js"></script>
            <!-- Thêm Toast.js CSS và JavaScript từ CDN -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
            <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
            <!-- Chart JS -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        </head>

        <body>
            <div class="wrapper">
                <!-- Sidebar -->
                <div class="sidebar" data-background-color="dark">
                    <div class="sidebar-logo">
                        <!-- Logo Header -->
                        <div class="logo-header" data-background-color="dark">
                            <a href="/admin" class="logo text-white fw-bold fs-2">
                                Bookly
                            </a>
                            <div class="nav-toggle">
                                <button class="btn btn-toggle toggle-sidebar">
                                    <i class="gg-menu-right"></i>
                                </button>
                                <button class="btn btn-toggle sidenav-toggler">
                                    <i class="gg-menu-left"></i>
                                </button>
                            </div>
                            <button class="topbar-toggler more">
                                <i class="gg-more-vertical-alt"></i>
                            </button>
                        </div>
                        <!-- End Logo Header -->
                    </div>
                    <div class="sidebar-wrapper scrollbar scrollbar-inner">
                        <div class="sidebar-content">
                            <ul class="nav nav-secondary">
                                <li class="nav-item active">
                                    <a href="/admin">
                                        <i class="fas fa-home"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                <li class="nav-section">
                                    <span class="sidebar-mini-icon">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </span>
                                    <h4 class="text-section">Components</h4>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="collapse" href="#base">
                                        <i class="fas fa-layer-group"></i>
                                        <p>Loại sản phẩm</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="base">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="/admin/categories">
                                                    <span class="sub-item"> Danh sách</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/admin/categories/create">
                                                    <span class="sub-item">Thêm mới</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="collapse" href="#products">
                                        <i class="fas fa-layer-group"></i>
                                        <p>Sản phẩm</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="products">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="/admin/products">
                                                    <span class="sub-item"> Danh sách</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/admin/products/create">
                                                    <span class="sub-item">Thêm mới</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="collapse" href="#comment">
                                        <i class="fas fa-layer-group"></i>
                                        <p>Bình luận</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="comment">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="/admin/comments">
                                                    <span class="sub-item"> Danh sách</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="collapse" href="#blog_categories">
                                        <i class="fas fa-layer-group"></i>
                                        <p>Danh mục bài viết</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="blog_categories">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="/admin/blog_categories">
                                                    <span class="sub-item"> Danh sách</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/admin/blog_categories/create">
                                                    <span class="sub-item">Thêm mới</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="collapse" href="#blogs">
                                        <i class="fas fa-layer-group"></i>
                                        <p>Bài viết</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="blogs">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="/admin/blogs">
                                                    <span class="sub-item"> Danh sách</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/admin/blogs/create">
                                                    <span class="sub-item">Thêm mới</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="collapse" href="#users">
                                        <i class="fas fa-layer-group"></i>
                                        <p>Khách hàng</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="users">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="/admin/users">
                                                    <span class="sub-item"> Danh sách</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/admin/users/create">
                                                    <span class="sub-item">Thêm mới</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="collapse" href="#orders">
                                        <i class="fas fa-layer-group"></i>
                                        <p>Đơn hàng</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="orders">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="/admin/orders">
                                                    <span class="sub-item"> Danh sách</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->

                <div class="main-panel">
                    <div class="main-header">
                        <div class="main-header-logo">
                            <!-- Logo Header -->
                            <div class="logo-header" data-background-color="dark">
                                <a href="index.html" class="logo">
                                    <img
                                        src="<?= APP_URL ?>/public/assets/assets/img/kaiadmin/logo_light.svg"
                                        alt="navbar brand"
                                        class="navbar-brand"
                                        height="20" />
                                </a>
                                <div class="nav-toggle">
                                    <button class="btn btn-toggle toggle-sidebar">
                                        <i class="gg-menu-right"></i>
                                    </button>
                                    <button class="btn btn-toggle sidenav-toggler">
                                        <i class="gg-menu-left"></i>
                                    </button>
                                </div>
                                <button class="topbar-toggler more">
                                    <i class="gg-more-vertical-alt"></i>
                                </button>
                            </div>
                            <!-- End Logo Header -->
                        </div>
                        <!-- Navbar Header -->
                        <nav
                            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                            <div class="container-fluid">
                                <nav
                                    class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="submit" class="btn btn-search pe-1">
                                                <i class="fa fa-search search-icon"></i>
                                            </button>
                                        </div>
                                        <input
                                            type="text"
                                            placeholder="Search ..."
                                            class="form-control" />
                                    </div>
                                </nav>

                                <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                                    <li
                                        class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            data-bs-toggle="dropdown"
                                            href="#"
                                            role="button"
                                            aria-expanded="false"
                                            aria-haspopup="true">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-search animated fadeIn">
                                            <form class="navbar-left navbar-form nav-search">
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        placeholder="Search ..."
                                                        class="form-control" />
                                                </div>
                                            </form>
                                        </ul>
                                    </li>
                                    <li class="nav-item topbar-icon dropdown hidden-caret">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            id="messageDropdown"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                        <ul
                                            class="dropdown-menu messages-notif-box animated fadeIn"
                                            aria-labelledby="messageDropdown">
                                            <li>
                                                <div
                                                    class="dropdown-title d-flex justify-content-between align-items-center">
                                                    Messages
                                                    <a href="#" class="small">Mark all as read</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-notif-scroll scrollbar-outer">
                                                    <div class="notif-center">
                                                        <a href="#">
                                                            <div class="notif-img">
                                                                <img
                                                                    src="<?= APP_URL ?>/public/assets/assets/img/jm_denis.jpg"
                                                                    alt="Img Profile" />
                                                            </div>
                                                            <div class="notif-content">
                                                                <span class="subject">Jimmy Denis</span>
                                                                <span class="block"> How are you ? </span>
                                                                <span class="time">5 minutes ago</span>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="notif-img">
                                                                <img
                                                                    src="<?= APP_URL ?>/public/assets/assets/img/chadengle.jpg"
                                                                    alt="Img Profile" />
                                                            </div>
                                                            <div class="notif-content">
                                                                <span class="subject">Chad</span>
                                                                <span class="block"> Ok, Thanks ! </span>
                                                                <span class="time">12 minutes ago</span>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="notif-img">
                                                                <img
                                                                    src="<?= APP_URL ?>/public/assets/assets/img/mlane.jpg"
                                                                    alt="Img Profile" />
                                                            </div>
                                                            <div class="notif-content">
                                                                <span class="subject">Jhon Doe</span>
                                                                <span class="block">
                                                                    Ready for the meeting today...
                                                                </span>
                                                                <span class="time">12 minutes ago</span>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="notif-img">
                                                                <img
                                                                    src="<?= APP_URL ?>/public/assets/assets/img/talha.jpg"
                                                                    alt="Img Profile" />
                                                            </div>
                                                            <div class="notif-content">
                                                                <span class="subject">Talha</span>
                                                                <span class="block"> Hi, Apa Kabar ? </span>
                                                                <span class="time">17 minutes ago</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item topbar-icon dropdown hidden-caret">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            id="notifDropdown"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bell"></i>
                                            <span class="notification">4</span>
                                        </a>
                                        <ul
                                            class="dropdown-menu notif-box animated fadeIn"
                                            aria-labelledby="notifDropdown">
                                            <li>
                                                <div class="dropdown-title">
                                                    You have 4 new notification
                                                </div>
                                            </li>
                                            <li>
                                                <div class="notif-scroll scrollbar-outer">
                                                    <div class="notif-center">
                                                        <a href="#">
                                                            <div class="notif-icon notif-primary">
                                                                <i class="fa fa-user-plus"></i>
                                                            </div>
                                                            <div class="notif-content">
                                                                <span class="block"> New user registered </span>
                                                                <span class="time">5 minutes ago</span>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="notif-icon notif-success">
                                                                <i class="fa fa-comment"></i>
                                                            </div>
                                                            <div class="notif-content">
                                                                <span class="block">
                                                                    Rahmad commented on Admin
                                                                </span>
                                                                <span class="time">12 minutes ago</span>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="notif-img">
                                                                <img
                                                                    src="<?= APP_URL ?>/public/assets/assetsassets/img/profile2.jpg"
                                                                    alt="Img Profile" />
                                                            </div>
                                                            <div class="notif-content">
                                                                <span class="block">
                                                                    Reza send messages to you
                                                                </span>
                                                                <span class="time">12 minutes ago</span>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="notif-icon notif-danger">
                                                                <i class="fa fa-heart"></i>
                                                            </div>
                                                            <div class="notif-content">
                                                                <span class="block"> Farrah liked Admin </span>
                                                                <span class="time">17 minutes ago</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item topbar-icon dropdown hidden-caret">
                                        <a
                                            class="nav-link"
                                            data-bs-toggle="dropdown"
                                            href="#"
                                            aria-expanded="false">
                                            <i class="fas fa-layer-group"></i>
                                        </a>
                                        <div class="dropdown-menu quick-actions animated fadeIn">
                                            <div class="quick-actions-header">
                                                <span class="title mb-1">Quick Actions</span>
                                                <span class="subtitle op-7">Shortcuts</span>
                                            </div>
                                            <div class="quick-actions-scroll scrollbar-outer">
                                                <div class="quick-actions-items">
                                                    <div class="row m-0">
                                                        <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                <div class="avatar-item bg-danger rounded-circle">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                </div>
                                                                <span class="text">Calendar</span>
                                                            </div>
                                                        </a>
                                                        <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                <div
                                                                    class="avatar-item bg-warning rounded-circle">
                                                                    <i class="fas fa-map"></i>
                                                                </div>
                                                                <span class="text">Maps</span>
                                                            </div>
                                                        </a>
                                                        <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                <div class="avatar-item bg-info rounded-circle">
                                                                    <i class="fas fa-file-excel"></i>
                                                                </div>
                                                                <span class="text">Reports</span>
                                                            </div>
                                                        </a>
                                                        <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                <div
                                                                    class="avatar-item bg-success rounded-circle">
                                                                    <i class="fas fa-envelope"></i>
                                                                </div>
                                                                <span class="text">Emails</span>
                                                            </div>
                                                        </a>
                                                        <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                <div
                                                                    class="avatar-item bg-primary rounded-circle">
                                                                    <i class="fas fa-file-invoice-dollar"></i>
                                                                </div>
                                                                <span class="text">Invoice</span>
                                                            </div>
                                                        </a>
                                                        <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                <div
                                                                    class="avatar-item bg-secondary rounded-circle">
                                                                    <i class="fas fa-credit-card"></i>
                                                                </div>
                                                                <span class="text">Payments</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item topbar-user dropdown hidden-caret">
                                        <a
                                            class="dropdown-toggle profile-pic"
                                            data-bs-toggle="dropdown"
                                            href="#"
                                            aria-expanded="false">
                                            <div class="avatar-sm">
                                                <img
                                                    src="<?= APP_URL ?>/public/assets/assets/img/profile.jpg"
                                                    alt="..."
                                                    class="avatar-img rounded-circle" />
                                            </div>
                                            <span class="profile-username">
                                                <span class="op-7">Hi,</span>
                                                <span class="fw-bold">Huỳnh Như</span>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                                            <div class="dropdown-user-scroll scrollbar-outer">
                                                <!-- <li>
                                                    <div class="user-box">
                                                        <div class="avatar-lg">
                                                            <img
                                                                src="<?= APP_URL ?>/public/assets/assets/img/profile.jpg"
                                                                alt="image profile"
                                                                class="avatar-img rounded" />
                                                        </div>
                                                        <div class="u-text">
                                                            <h4>Hizrian</h4>
                                                            <p class="text-muted">hello@example.com</p>
                                                            <a
                                                                href="profile.html"
                                                                class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                                        </div>
                                                    </div>
                                                </li> -->
                                                <li>
                                                    <!-- <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">My Profile</a>
                                                    <a class="dropdown-item" href="#">My Balance</a>
                                                    <a class="dropdown-item" href="#">Inbox</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Account Setting</a>
                                                    <div class="dropdown-divider"></div> -->
                                                    <a class="dropdown-item" href="#"><i class="fa fa-power-off me-1 ms-1"></i> Đăng xuất</a>
                                                </li>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>



            <?php

        }
    }

            ?>