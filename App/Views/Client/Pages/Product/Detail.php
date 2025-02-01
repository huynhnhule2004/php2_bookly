<?php

namespace App\Views\Client\Pages\Product;

use App\Views\BaseView;

class Detail extends BaseView
{
    public static function render($data = null)
    {
        // var_dump($_SESSION);
?>
        <style>
            .btn-quantity {
                padding: 0.25rem 0.5rem;
                border-radius: 0.25rem;
                color: black;
                background: white;
                border: 1px solid var(--bs-border-color);
            }

            .btn-quantity:hover {
                color: var(--white-color);
                background-color: var(--black-color);
            }

            #cancelEditButton {
                background-color: var(--black-color);
                transition: background-color 0.3s ease;
            }

            #cancelEditButton:hover {
                background-color: var(--primary-color);
            }
        </style>
        <section id="billboard" class="position-relative d-flex flex-column align-items-center justify-content-center py-5 bg-light-gray"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 300px;">

            <h1 class="text-center">Chi tiết sản phẩm</h1>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-black">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-underline">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="/products" class="text-decoration-underline">Sản phẩm</a></li>
                    <li class="breadcrumb-item active text-black" aria-current="page">Chi tiết sản phẩm</li>
                </ol>
            </nav>

        </section>

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="border rounded-3 p-5">
                        <img src="<?= APP_URL ?>/public/uploads/products/<?= $data['product']['image'] ?>" alt="Product Image" class="img-fluid ">
                    </div>
                </div>

                <div class="col-md-6">
                    <h1 class="fw-bold" style="font-size: 3rem"><?= $data['product']['name'] ?></h1>
                    <div class="rating text-warning d-flex align-items-center mb-3">
                        <svg class="star star-fill">
                            <use xlink:href="#star-fill"></use>
                        </svg>
                        <svg class="star star-fill">
                            <use xlink:href="#star-fill"></use>
                        </svg>
                        <svg class="star star-fill">
                            <use xlink:href="#star-fill"></use>
                        </svg>
                        <svg class="star star-fill">
                            <use xlink:href="#star-fill"></use>
                        </svg>
                        <svg class="star star-fill">
                            <use xlink:href="#star-fill"></use>
                        </svg>
                    </div>
                    <div class="mb-3">
                        <strong class="text-primary display-6 fw-bold"
                            id="product-price">
                            <?= number_format(100000) ?> VNĐ
                        </strong>
                        <del class="ms-2"><?= number_format(190000) ?> VNĐ</del>
                    </div>
                    <p class="mt-3">
                    Đây là sản phẩm tuyệt vời với nhiều tính năng tuyệt vời và thiết kế đẹp mắt, hoàn hảo cho nhu cầu của bạn.
                    </p>
                    <div class="mt-4 d-flex align-items-center">
                        <div class="d-flex align-items-center mt-4">
                            <button class="btn-quantity " id="decrease-quantity">-</button>
                            <input type="text" value="1" class="form-control text-center mx-2" id="quantity" style="width: 60px; height: 40px;" readonly>
                            <button class="btn-quantity" id="increase-quantity">+</button>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-primary btn-lg me-2">Thêm vào giỏ hàng</button>
                        <button class="btn btn-outline-danger btn-lg"><i class="fa-solid fa-heart"></i></button>
                    </div>
                    <div class="meta-item d-flex align-items-baseline mt-3">
                        <h6 class="item-title fw-bold no-margin pe-2">Danh mục:</h6>
                        <ul class="select-list list-unstyled d-flex">
                            <li data-value="S" class="select-item">
                                <a href="#"><?= isset($data['product_detail']['category_name']) ? htmlspecialchars($data['product_detail']['category_name']) : 'Danh mục 1' ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="meta-item d-flex align-items-baseline">
                        <h6 class="item-title fw-bold no-margin pe-2">Kho:</h6>
                        123
                    </div>

                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 ">
                    <h3>Mô tả</h3>
                    <p><?= $data['product']['description'] ?></p>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title">Bình luận mới nhất</h4>
                        </div>
                        <div class="comment-widgets px-5">
                            <div class="d-flex flex-row align-items-start mb-4">
                                <div class="pe-3">
                                    <img src="<?= APP_URL ?>/public/uploads/users/avatar-vo-tri-thumbnail.jpg"
                                        alt="user"
                                        width="50"
                                        height="50"
                                        class="rounded-circle"
                                        style="object-fit: cover;">
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
                                            <div class="p-3" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </div>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                                <li>
                                                    <button type="button" class="dropdown-item" data-bs-toggle="collapse" data-bs-target="#editComment" aria-expanded="false" aria-controls="editComment">
                                                        <i class="fa-solid fa-pen-to-square me-2"></i> Sửa
                                                    </button>
                                                </li>
                                                <li>
                                                    <form action="#" method="post" onsubmit="return confirm('Chắc chưa?')" class="d-inline">
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
                                                    <textarea class="form-control" id="editContent" name="content" rows="3" placeholder="Nhập bình luận..." style="font-size: 18px; width: 100%;">Good product...</textarea>
                                                </div>
                                                <div class="d-flex justify-content-start">
                                                    <button type="submit" class="btn btn-primary btn-sm  me-2" style="padding: 0.5rem 1.25rem;">Gửi</button>
                                                    <button type="button" class="btn btn-secondary btn-sm" id="cancelEditButton" style="padding: 0.5rem 1.25rem;">
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
                                <img src="<?= APP_URL ?>/public/uploads/users/avatar-vo-tri-thumbnail.jpg" alt="user" width="50" height="50" class="rounded-circle" style="object-fit: cover;">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fw-bold">Username</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="method" value="POST">
                                    <div class="mb-3">
                                        <label for="addContent" class="form-label">Bình luận</label>
                                        <textarea class="form-control" id="addContent" name="content" rows="3" placeholder="Nhập bình luận..." required style="font-size: 18px;"></textarea></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm mb-3" style="padding: 0.5rem 1.25rem;">Gửi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


        <section id="best-selling-items" class="position-relative padding-small ">
            <div class="container">
                <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
                    <h3 class="d-flex align-items-center">Sản phẩm liên quan</h3>
                    <a href="index.html" class="btn">Xem tất cả</a>
                </div>
                <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next product-slider-button-next">
                    <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
                        <use xlink:href="#alt-arrow-right-outline"></use>
                    </svg>
                </div>
                <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev product-slider-button-prev">
                    <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
                        <use xlink:href="#alt-arrow-left-outline"></use>
                    </svg>
                </div>
                <div class="swiper product-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <div class="position-absolute">
                                    <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">-10%</p>
                                </div>
                                <a href="/products/1">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item1.png" class="img-fluid shadow-sm" alt="product item">
                                </a>
                                <h6 class="mt-4 mb-0 fw-bold"><a href="/products/1">House of Sky Breath</a></h6>
                                <div class="review-content d-flex mb-2">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>

                                </div>
                                <p>Giá gốc: <strike><?= number_format(200000) ?> đ</strike></p>
                                <p>Giá giảm: <strong class="price text-primary fw-bold mb-2 fs-5"><?= number_format(99000) ?> đ</strong></p>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <a href="/cart" class="btn btn-dark">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </a>
                                    <a href="/wishlist" class="btn btn-dark">
                                        <span>
                                            <svg class="wishlist">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <a href="/products/1">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item2.png" class="img-fluid shadow-sm" alt="product item">
                                </a>
                                <h6 class="mt-4 mb-0 fw-bold"><a href="/products/1">Heartland Stars</a></h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>

                                <p>Giá gốc: <strike><?= number_format(200000) ?> đ</strike></p>
                                <p>Giá giảm: <strong class="price text-primary fw-bold mb-2 fs-5"><?= number_format(99000) ?> đ</strong></p>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <a href="/cart" class="btn btn-dark">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </a>
                                    <a href="/wishlist" class="btn btn-dark">
                                        <span>
                                            <svg class="wishlist">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <a href="/products/1">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item3.png" class="img-fluid shadow-sm" alt="product item">
                                </a>
                                <h6 class="mt-4 mb-0 fw-bold"><a href="/products/1">Heavenly Bodies</a></h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>

                                <p>Giá gốc: <strike><?= number_format(200000) ?> đ</strike></p>
                                <p>Giá giảm: <strong class="price text-primary fw-bold mb-2 fs-5"><?= number_format(99000) ?> đ</strong></p>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <a href="/cart" class="btn btn-dark">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </a>
                                    <a href="/wishlist" class="btn btn-dark">
                                        <span>
                                            <svg class="wishlist">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <div class="position-absolute">
                                    <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">-10%</p>
                                </div>
                                <a href="/products/1">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item4.png" class="img-fluid shadow-sm" alt="product item">
                                </a>
                                <h6 class="mt-4 mb-0 fw-bold"><a href="/products/1">His Saving Grace</a></h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>

                                <p>Giá gốc: <strike><?= number_format(200000) ?> đ</strike></p>
                                <p>Giá giảm: <strong class="price text-primary fw-bold mb-2 fs-5"><?= number_format(99000) ?> đ</strong></p>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <a href="/cart" class="btn btn-dark">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </a>
                                    <a href="/wishlist" class="btn btn-dark">
                                        <span>
                                            <svg class="wishlist">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <a href="/products/1">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item5.png" class="img-fluid shadow-sm" alt="product item">
                                </a>
                                <h6 class="mt-4 mb-0 fw-bold"><a href="/products/1">My Dearest Darkest</a></h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>

                                <p>Giá gốc: <strike><?= number_format(200000) ?> đ</strike></p>
                                <p>Giá giảm: <strong class="price text-primary fw-bold mb-2 fs-5"><?= number_format(99000) ?> đ</strong></p>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <a href="/cart" class="btn btn-dark">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </a>
                                    <a href="/wishlist" class="btn btn-dark">
                                        <span>
                                            <svg class="wishlist">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <a href="/products/1">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item6.png" class="img-fluid shadow-sm" alt="product item">
                                </a>
                                <h6 class="mt-4 mb-0 fw-bold"><a href="/products/1">The Story of Success</a></h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>

                                <p>Giá gốc: <strike><?= number_format(200000) ?> đ</strike></p>
                                <p>Giá giảm: <strong class="price text-primary fw-bold mb-2 fs-5"><?= number_format(99000) ?> đ</strong></p>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <a href="/cart" class="btn btn-dark">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </a>
                                    <a href="/wishlist" class="btn btn-dark">
                                        <span>
                                            <svg class="wishlist">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="customers-reviews" class="position-relative padding-large mb-5"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 600px;">
            <div class="container offset-md-3 col-md-6">
                <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next testimonial-button-next">
                    <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
                        <use xlink:href="#alt-arrow-right-outline"></use>
                    </svg>
                </div>
                <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev testimonial-button-prev">
                    <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
                        <use xlink:href="#alt-arrow-left-outline"></use>
                    </svg>
                </div>
                <div class="section-title mb-4 text-center">
                    <h3 class="mb-4">Đánh giá của khách hàng</h3>
                </div>
                <div class="swiper testimonial-swiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card position-relative text-left p-5 border rounded-3">
                                <blockquote>"Tôi tình cờ phát hiện ra cửa hàng sách này khi thăm thành phố, và nó ngay lập tức trở thành địa điểm yêu thích của tôi. Không gian ấm cúng, nhân viên thân thiện, và đa dạng các loại sách khiến mỗi lần ghé thăm đều trở thành một niềm vui!"</blockquote>
                                <div class="rating text-warning d-flex align-items-center">
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                </div>
                                <h5 class="mt-1 fw-normal">Huỳnh Như</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative text-left p-5 border rounded-3">
                                <blockquote>"Là một người yêu sách, tôi luôn tìm kiếm những cuốn sách mới, và cửa hàng sách này chưa bao giờ làm tôi thất vọng. Họ luôn có những đầu sách mới nhất, và những gợi ý của họ đã giúp tôi khám phá được nhiều cuốn sách tuyệt vời!"</blockquote>
                                <div class="rating text-warning d-flex align-items-center">
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                </div>
                                <h5 class="mt-1 fw-normal">Bảo Trân</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative text-left p-5 border rounded-3">
                                <blockquote>"Tôi đã đặt mua vài cuốn sách trực tuyến từ cửa hàng này và rất ấn tượng với dịch vụ giao hàng nhanh chóng cùng cách đóng gói cẩn thận. Rõ ràng họ luôn ưu tiên sự hài lòng của khách hàng, và tôi chắc chắn sẽ tiếp tục mua sắm ở đây!"</blockquote>
                                <div class="rating text-warning d-flex align-items-center">
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                </div>
                                <h5 class="mt-1 fw-normal">Cẩm Ly</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative text-left p-5 border rounded-3">
                                <blockquote>“Tôi tình cờ phát hiện cửa hàng công nghệ này khi đang tìm kiếm một chiếc laptop mới, và tôi không thể hài lòng hơn với trải nghiệm của mình! Nhân viên rất am hiểu và đã hướng dẫn tôi chọn lựa thiết bị phù hợp nhất với nhu cầu. Rất đáng để giới thiệu!”</blockquote>
                                <div class="rating text-warning d-flex align-items-center">
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                </div>
                                <h5 class="mt-1 fw-normal">Bảo Duyên</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative text-left p-5 border rounded-3">
                                <blockquote>“Tôi tình cờ tìm thấy cửa hàng công nghệ này khi đang tìm kiếm một chiếc laptop mới, và tôi thật sự hài lòng với trải nghiệm của mình! Nhân viên ở đây rất hiểu biết và đã giúp tôi chọn được chiếc máy phù hợp với nhu cầu. Rất đáng để giới thiệu!”</blockquote>
                                <div class="rating text-warning d-flex align-items-center">
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                </div>
                                <h5 class="mt-1 fw-normal">Phương Quỳnh</h5>
                            </div>
                        </div>
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
                                <img src="<?= APP_URL ?>/public/assets/client/images/insta-item1.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
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
                                <img src="<?= APP_URL ?>/public/assets/client/images/insta-item2.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
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
                                <img src="<?= APP_URL ?>/public/assets/client/images/insta-item3.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
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
                                <img src="<?= APP_URL ?>/public/assets/client/images/insta-item4.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
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
                                <img src="<?= APP_URL ?>/public/assets/client/images/insta-item5.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
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
                                <img src="<?= APP_URL ?>/public/assets/client/images/insta-item6.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </section>


        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const decreaseButton = document.getElementById("decrease-quantity");
                const increaseButton = document.getElementById("increase-quantity");
                const quantityInput = document.getElementById("quantity");

                decreaseButton.addEventListener("click", function() {
                    let currentValue = parseInt(quantityInput.value, 10);
                    if (!isNaN(currentValue) && currentValue > 1) {
                        quantityInput.value = currentValue - 1;
                    }
                });

                increaseButton.addEventListener("click", function() {
                    let currentValue = parseInt(quantityInput.value, 10);
                    if (!isNaN(currentValue)) {
                        quantityInput.value = currentValue + 1;
                    }
                });
            });

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
