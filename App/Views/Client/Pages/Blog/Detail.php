<?php

namespace App\Views\Client\Pages\Blog;

use App\Views\BaseView;

class Detail extends BaseView
{
    public static function render($data = null)
    {
?>

        <section id="billboard"
            class="position-relative d-flex flex-column align-items-center justify-content-center py-5 bg-light-gray"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 300px;">
            <h1 class="text-center">Chi tiết bài viết</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-black">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-underline">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="/blogs" class="text-decoration-underline">Bài viết</a></li>
                    <li class="breadcrumb-item active text-black" aria-current="page">Chi tiết bài viết</li>
                </ol>
            </nav>
        </section>

        <div class="container mb-5" style="margin-top: 100px;">
            <p class="text-dark" style="font-style: italic;">Đăng bởi <strong><?= $data['users']['username'] ?></strong> vào ngày <?= $data['blog_detail']['created_at'] ?></p>
            <article style="text-align: justify; margin-bottom: 100px;">
                <h1 class="mb-3 text-capitalize" style="font-size: 3rem"><?= $data['blog_detail']['title'] ?></h1>
                <img src="<?= APP_URL ?>/public/uploads/blogs/<?= $data['blog_detail']['image'] ?>" alt="<?= $data['blog_detail']['title'] ?>" class="img-fluid mb-4 w-50">

                <div class="content mb-4">
                    <p><?= $data['blog_detail']['content'] ?></p>
                </div>
            </article>


            <div class="row justify-content-center mt-5">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title">Bình luận mới nhất</h4>
                        </div>
                        <div class="comment-widgets px-5">
                            <div class="d-flex flex-row align-items-start mb-4">
                                <div class="pe-3">
                                    <img src="<?= APP_URL ?>/public/uploads/users/avatar-vo-tri-thumbnail.jpg" alt="user"
                                        width="50" height="50" class="rounded-circle" style="object-fit: cover;">
                                </div>

                                <div class="flex-grow-1">
                                    <!-- Phần thông tin người dùng và thời gian -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="fw-bold m-0">Username</h6>
                                            <span class="text-dark ms-auto" style="font-size: 12px">2024-7-8 19:19:19</span>
                                            <p class="mb-2">Good product...</p>
                                        </div>

                                        <!-- Icon menu (Dropdown) -->
                                        <div class="dropdown" id="dropdownIconContainer">
                                            <div class="p-3" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </div>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                                <li>
                                                    <button type="button" class="dropdown-item" data-bs-toggle="collapse"
                                                        data-bs-target="#editComment" aria-expanded="false"
                                                        aria-controls="editComment">
                                                        <i class="fa-solid fa-pen-to-square me-2"></i> Sửa
                                                    </button>
                                                </li>
                                                <li>
                                                    <form action="#" method="post" onsubmit="return confirm('Chắc chưa?')"
                                                        class="d-inline">
                                                        <input type="hidden" name="method" value="DELETE">
                                                        <button type="submit" class="dropdown-item text-danger">
                                                            <i class="fa-solid fa-trash me-2"></i> Xóa
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Form chỉnh sửa bình luận -->
                                    <div class="collapse mt-3" id="editComment">
                                        <div class="card card-body">
                                            <form action="#" method="post">
                                                <input type="hidden" name="method" value="PUT">
                                                <div class="mb-3">
                                                    <label for="editContent" class="form-label">Bình luận</label>
                                                    <!-- Textarea chiếm toàn bộ chiều rộng -->
                                                    <textarea class="form-control" id="editContent" name="content" rows="3"
                                                        placeholder="Nhập bình luận..."
                                                        style="font-size: 18px; width: 100%;">Good product...</textarea>
                                                </div>
                                                <div class="d-flex justify-content-start">
                                                    <button type="submit" class="btn btn-primary btn-sm  me-2"
                                                        style="padding: 0.5rem 1.25rem;">Gửi</button>
                                                    <button type="button" class="btn btn-secondary btn-sm" id="cancelEditButton"
                                                        style="padding: 0.5rem 1.25rem;">
                                                        Hủy
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Thêm bình luận -->
                        <div class="d-flex flex-row align-items-start px-5">
                            <div class="pe-3">
                                <img src="<?= APP_URL ?>/public/uploads/users/avatar-vo-tri-thumbnail.jpg" alt="user" width="50"
                                    height="50" class="rounded-circle" style="object-fit: cover;">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fw-bold">Username</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="method" value="POST">
                                    <div class="mb-3">
                                        <label for="addContent" class="form-label">Bình luận</label>
                                        <textarea class="form-control" id="addContent" name="content" rows="3"
                                            placeholder="Nhập bình luận..." required
                                            style="font-size: 18px;"></textarea></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm mb-3"
                                        style="padding: 0.5rem 1.25rem;">Gửi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section id="latest-posts" class="padding-large">
                <div class="container">
                    <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
                        <h3 class="d-flex align-items-center">Bài viết liên quan</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-3 posts mb-4">
                            <img src="<?= APP_URL ?>/public/assets/client/images/post-item1.jpg" alt="post image" class="img-fluid rounded-3">
                            <a href="blog.html" class="fs-6 text-primary">Sách</a>
                            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="/blogs/1">10 Cuốn Sách Phải Đọc Trong Năm: Lựa Chọn Hàng Đầu Của Chúng Tôi!</a></h4>
                            <p class="mb-2">Khám phá thế giới công nghệ tiên tiến với bài viết blog mới nhất của chúng tôi, nơi chúng tôi giới thiệu năm thiết bị công nghệ thiết yếu... <span><a class="text-decoration-underline text-black-50" href="/blogs/1">Đọc thêm</a></span>
                            </p>
                        </div>
                        <div class="col-md-3 posts mb-4">
                            <img src="<?= APP_URL ?>/public/assets/client/images/post-item2.jpg" alt="post image" class="img-fluid rounded-3">
                            <a href="blog.html" class="fs-6 text-primary">Sách</a>
                            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="/blogs/1">Vùng Đất Hấp Dẫn Của Khoa Học Viễn Tưởng</a></h4>
                            <p class="mb-2">Khám phá sự giao thoa giữa công nghệ và phát triển bền vững trong bài viết blog mới nhất của chúng tôi. Tìm hiểu về những đổi mới... <span><a class="text-decoration-underline text-black-50" href="/blogs/1">Đọc thêm</a></span> </p>
                        </div>
                        <div class="col-md-3 posts mb-4">
                            <img src="<?= APP_URL ?>/public/assets/client/images/post-item3.jpg" alt="post image" class="img-fluid rounded-3">
                            <a href="blog.html" class="fs-6 text-primary">Sách</a>
                            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="/blogs/1">Tìm kiếm tình yêu qua từng trang sách</a></h4>
                            <p class="mb-2">Đi trước xu thế với cái nhìn sâu sắc của chúng tôi về sự phát triển nhanh chóng của công nghệ ... <span><a class="text-decoration-underline text-black-50" href="/blogs/1">Đọc thêm</a></span>
                            </p>
                        </div>
                        <div class="col-md-3 posts mb-4">
                            <img src="<?= APP_URL ?>/public/assets/client/images/post-item4.jpg" alt="post image" class="img-fluid rounded-3">
                            <a href="blog.html" class="fs-6 text-primary">Sách</a>
                            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="/blogs/1">Đọc sách cho sức khỏe tinh thần: Làm thế nào sách có thể chữa lành và truyền cảm hứng</a></h4>
                            <p class="mb-2">Trong môi trường làm việc từ xa ngày nay, năng suất là yếu tố quan trọng. Khám phá các ứng dụng và công cụ hàng đầu giúp bạn duy trì hiệu quả công việc... <span><a class="text-decoration-underline text-black-50" href="/blogs/1">Đọc thêm</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="instagram">
                <div class="container">
                    <div class="text-center mb-4">
                        <h3>Instagram</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item1.jpg" alt="instagram"
                                        class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item2.jpg" alt="instagram"
                                        class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item3.jpg" alt="instagram"
                                        class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item4.jpg" alt="instagram"
                                        class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item5.jpg" alt="instagram"
                                        class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item6.jpg" alt="instagram"
                                        class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script>
            // Lấy các phần tử
            const editButton = document.querySelector('[data-bs-toggle="collapse"]');
            const dropdownIconContainer = document.getElementById('dropdownIconContainer');
            const cancelButton = document.getElementById('cancelEditButton');
            const editCommentForm = document.getElementById('editComment');

            // Khi bấm vào nút "Sửa", ẩn icon ellipsis và mở form chỉnh sửa
            editButton.addEventListener('click', function() {
                dropdownIconContainer.style.display = 'none'; // Ẩn icon ellipsis
            });

            // Khi bấm vào nút "Hủy", hiện lại icon và đóng form
            cancelButton.addEventListener('click', function() {
                // Hiện lại icon ellipsis
                dropdownIconContainer.style.display = 'block';

                // Đóng form chỉnh sửa
                const collapse = new bootstrap.Collapse(editCommentForm, {
                    toggle: false // Không mở form chỉnh sửa
                });

                // Đảm bảo form không mở khi bấm "Hủy"
                collapse.hide();
            });
        </script>
<?php
    }
}
