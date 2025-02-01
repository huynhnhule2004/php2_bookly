<?php

namespace App\Views\Client;

use App\Views\BaseView;

class Home extends BaseView
{
    public static function render($data = null)
    {
?>

        <section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 800px;">
            <div class="position-absolute end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next main-slider-button-next">
                <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
                    <use xlink:href="#alt-arrow-right-outline"></use>
                </svg>
            </div>
            <div class="position-absolute start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev main-slider-button-prev">
                <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
                    <use xlink:href="#alt-arrow-left-outline"></use>
                </svg>
            </div>
            <div class="swiper main-swiper">
                <div class="swiper-wrapper d-flex align-items-center">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                                    <div class="banner-content">
                                        <h2>Bộ sưu tập sách The Fine Print</h2>
                                        <p>Ưu đãi tốt nhất – Giảm 30%. Nhanh tay sở hữu ngay!</p>
                                        <a href="/products" class="btn mt-3">Cửa hàng</a>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="image-holder">
                                        <img src="<?= APP_URL ?>/public/assets/client/images/banner-image2.png" class="img-fluid" alt="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                                    <div class="banner-content">
                                        <h2>How Innovation works</h2>
                                        <p>Ưu đãi giảm giá. Nhanh tay sở hữu ngay!</p>
                                        <a href="/products" class="btn mt-3">Cửa hàng</a>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="image-holder">
                                        <img src="<?= APP_URL ?>/public/assets/client/images/banner-image1.png" class="img-fluid" alt="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                                    <div class="banner-content">
                                        <h2>Your Heart is the Sea</h2>
                                        <p>Số lượng có hạn. Nhanh tay sở hữu ngay!</p>
                                        <a href="/products" class="btn mt-3">Cửa hàng</a>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="image-holder">
                                        <img src="<?= APP_URL ?>/public/assets/client/images/banner-image.png" class="img-fluid" alt="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="company-services" class="padding-large pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                        <div class="icon-box d-flex">
                            <div class="icon-box-icon pe-3 pb-3">
                                <svg class="cart-outline">
                                    <use xlink:href="#cart-outline" />
                                </svg>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title mb-1 text-capitalize text-dark">Giao hàng toàn quốc</h4>
                                <p> Giao hàng nhanh chóng và đáng tin cậy trên toàn quốc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                        <div class="icon-box d-flex">
                            <div class="icon-box-icon pe-3 pb-3">
                                <svg class="quality">
                                    <use xlink:href="#quality" />
                                </svg>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title mb-1 text-capitalize text-dark">Cam kết chất lượng</h4>
                                <p>Sản phẩm đảm bảo chất lượng, đổi trả dễ dàng nếu không hài lòng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                        <div class="icon-box d-flex">
                            <div class="icon-box-icon pe-3 pb-3">
                                <svg class="price-tag">
                                    <use xlink:href="#price-tag" />
                                </svg>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title mb-1 text-capitalize text-dark">Ưu đãi mỗi ngày</h4>
                                <p>Cập nhật các chương trình khuyến mãi hấp dẫn hàng ngày, mua sắm tiết kiệm ngay hôm nay.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                        <div class="icon-box d-flex">
                            <div class="icon-box-icon pe-3 pb-3">
                                <svg class="shield-plus">
                                    <use xlink:href="#shield-plus" />
                                </svg>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title mb-1 text-capitalize text-dark">Thanh toán 100% bảo mật</h4>
                                <p>Đảm bảo an toàn tuyệt đối cho giao dịch của bạn.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="best-selling-items" class="position-relative padding-large ">
            <div class="container">
                <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
                    <h3 class="d-flex align-items-center">Sản phẩm bán chạy</h3>
                    <a href="/products" class="btn">Xem tất cả</a>
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

        <section id="limited-offer" class="padding-large"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg-1.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 800px;">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 text-center">
                        <div class="image-holder">
                            <img src="<?= APP_URL ?>/public/assets/client/images/banner-image3.png" class="img-fluid" alt="banner">
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                        <h2>Giảm 30% tất cả sản phẩm. Nhanh tay lên nào!!!</h2>
                        <div id="countdown-clock" class="text-dark d-flex align-items-center my-3">
                            <div class="time d-grid pe-3">
                                <span class="days fs-1 fw-normal"></span>
                                <small>Ngày</small>
                            </div>
                            <span class="fs-1 text-primary">:</span>
                            <div class="time d-grid pe-3 ps-3">
                                <span class="hours fs-1 fw-normal"></span>
                                <small>Giờ</small>
                            </div>
                            <span class="fs-1 text-primary">:</span>
                            <div class="time d-grid pe-3 ps-3">
                                <span class="minutes fs-1 fw-normal"></span>
                                <small>Phút</small>
                            </div>
                            <span class="fs-1 text-primary">:</span>
                            <div class="time d-grid ps-3">
                                <span class="seconds fs-1 fw-normal"></span>
                                <small>Giây</small>
                            </div>
                        </div>
                        <a href="/products" class="btn mt-3">Cửa hàng</a>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section id="items-listing" class="padding-large">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="featured border rounded-3 p-4">
                            <div class="section-title overflow-hidden mb-5 mt-2">
                                <h3 class="d-flex flex-column mb-0">Nổi bật</h3>
                            </div>
                            <div class="items-lists">
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item2.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">Echoes of the Ancients</a></h6>
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
                                    </div>
                                </div>
                                <hr class="gray-400">
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item1.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">The Midnight Garden</a></h6>
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
                                    </div>
                                </div>
                                <hr>
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item3.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">Shadow of the Serpent</a></h6>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="latest-items border rounded-3 p-4">
                            <div class="section-title overflow-hidden mb-5 mt-2">
                                <h3 class="d-flex flex-column mb-0">Mới nhất</h3>
                            </div>
                            <div class="items-lists">
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item4.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">Whispering Winds</a></h6>
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
                                    </div>
                                </div>
                                <hr class="gray-400">
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item5.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">The Forgotten Realm</a></h6>
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
                                    </div>
                                </div>
                                <hr>
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item6.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">Moonlit Secrets</a></h6>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="best-reviewed border rounded-3 p-4">
                            <div class="section-title overflow-hidden mb-5 mt-2">
                                <h3 class="d-flex flex-column mb-0">Đánh giá cao</h3>
                            </div>
                            <div class="items-lists">
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item7.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">The Crystal Key</a></h6>
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
                                    </div>
                                </div>
                                <hr class="gray-400">
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item8.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">Starlight Sonata</a></h6>
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
                                    </div>
                                </div>
                                <hr>
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item9.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">Tales of the Enchanted Forest</a></h6>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="on-sale border rounded-3 p-4">
                            <div class="section-title overflow-hidden mb-5 mt-2">
                                <h3 class="d-flex flex-column mb-0">Đang giảm giá</h3>
                            </div>
                            <div class="items-lists">
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item10.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">The Phoenix Chronicles</a></h6>
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
                                    </div>
                                </div>
                                <hr class="gray-400">
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item11.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">Dreams of Avalon</a></h6>
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
                                    </div>
                                </div>
                                <hr>
                                <div class="item d-flex">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/product-item12.png" class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="/products/1">Legends of the Dragon Isles</a></h6>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="categories" class="padding-large pt-0">
            <div class="container">
                <div class="section-title overflow-hidden mb-4">
                    <h3 class="d-flex align-items-center">Danh mục</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 border-0 rounded-3 position-relative">
                            <a href="/products">
                                <img src="<?= APP_URL ?>/public/assets/client/images/category1.jpg" class="img-fluid rounded-3" alt="cart item">
                                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="/products"
                                        class="text-white">Sách</a></h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center mb-4 border-0 rounded-3">
                            <a href="/products">
                                <img src="<?= APP_URL ?>/public/assets/client/images/category2.jpg" class="img-fluid rounded-3" alt="cart item">
                                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="/products"
                                        class="text-white">Giấy và sổ</a></h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center mb-4 border-0 rounded-3">
                            <a href="/products">
                                <img src="<?= APP_URL ?>/public/assets/client/images/category3.jpg" class="img-fluid rounded-3" alt="cart item">
                                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="/products"
                                        class="text-white">Dụng cụ trang trí</a></h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="customers-reviews" class="position-relative padding-large"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 600px;">
            <div class="container offset-md-3 col-md-6 ">
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

        <section id="latest-posts" class="padding-large">
            <div class="container">
                <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
                    <h3 class="d-flex align-items-center">Bài viết mới nhất</h3>
                    <a href="/blogs" class="btn">Xem tất cả</a>
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
<?php
    }
}
