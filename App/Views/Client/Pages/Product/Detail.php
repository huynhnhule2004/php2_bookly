<?php

namespace App\Views\Client\Pages\Product;

use App\Views\BaseView;
use App\Helpers\AuthHelper;

class Detail extends BaseView
{
    public static function render($data = null)
    {
        // var_dump($_SESSION);
        $is_login = AuthHelper::checkLogin();

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

            .btn-quantity:hover {
                background-color: var(--black-color);
                transition: background-color 0.3s ease;
            }

            .btn-dark:hover {
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
                            <?= number_format($data['product']['price'] - $data['product']['discount_price']) ?> VNĐ
                        </strong>
                        <del class="ms-2"><?= number_format($data['product']['price']) ?> VNĐ</del>
                        <?php if ($data['product']['discount_price'] > 0): ?>
                            <span class="bg-primary py-1 px-3 fs-6 text-white rounded-2 ms-2">
                                -<?= number_format(($data['product']['discount_price'] / $data['product']['price']) * 100) ?>%
                            </span>
                        <?php endif; ?>
                    </div>
                    <p class="mt-3">
                        Đây là sản phẩm tuyệt vời với nhiều tính năng tuyệt vời và thiết kế đẹp mắt, hoàn hảo cho nhu cầu của bạn.
                    </p>
                    <form action="/cart/add" method="post">
                        <div class="mt-4 d-flex align-items-center">
                            <div class="d-flex align-items-center mt-4">
                                <button class="btn-quantity" id="decrease-quantity">-</button>

                                <input type="hidden" name="method" value="POST">
                                <input type="hidden" name="id" value="<?= $data['product']['id'] ?>" required>
                                <input type="hidden" id="hidden-quantity" name="quantity" value="1">

                                <input type="text" value="1" class="form-control text-center mx-2" id="display-quantity" style="width: 60px; height: 40px;" readonly>

                                <button class="btn-quantity" id="increase-quantity">+</button>

                            </div>
                        </div>
                        <div class="mt-4">

                            <button class="btn btn-primary btn-lg me-2">Thêm vào giỏ hàng</button>
                            <button class="btn btn-outline-danger btn-lg"><i class="fa-solid fa-heart"></i></button>
                        </div>
                    </form>
                    <div class="meta-item d-flex align-items-baseline mt-3">
                        <h6 class="item-title fw-bold no-margin pe-2">Danh mục:</h6>
                        <ul class="select-list list-unstyled d-flex">
                            <li data-value="S" class="select-item">
                                <a href="#"><?= isset($data['product']['category_name']) ? htmlspecialchars($data['product']['category_name']) : 'Chưa phân loại' ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="meta-item d-flex align-items-baseline">
                        <h6 class="item-title fw-bold no-margin pe-2">Kho:</h6>
                        <?= number_format($data['product']['stock']) ?>
                    </div>

                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 ">
                    <h3>Mô tả</h3>
                    <p><?= $data['product']['long_description'] ?></p>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title">Bình luận mới nhất</h4>
                        </div>
                        <div class="comment-widgets px-5">
                            <?php if (!empty($data['comments'])): ?>
                                <?php foreach ($data['comments'] as $item): ?>
                                    <div class="d-flex flex-row align-items-start mb-4">
                                        <div class="pe-3">
                                            <img src="<?= APP_URL ?>/public/uploads/users/<?= $item['avatar'] ?: 'default-user.jpg' ?>"
                                                alt="user" width="50" height="50"
                                                class="rounded-circle" style="object-fit: cover;">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fw-bold m-0"> <?= $item['name'] ?> - <?= $item['username'] ?> </h6>
                                                    <span class="text-dark" style="font-size: 12px"> <?= $item['created_at'] ?> </span>
                                                    <p class="mb-2"> <?= $item['content'] ?> </p>
                                                </div>
                                                <?php if ($is_login && $_SESSION['user']['id'] == $item['user_id']): ?>
                                                    <div class="dropdown">
                                                        <div class="p-3" id="dropdownIcon<?= $item['id'] ?>" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                                        </div>

                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li>
                                                                <button type="button" class="dropdown-item" data-bs-toggle="collapse"
                                                                    data-bs-target="#editComment<?= $item['id'] ?>"
                                                                    onclick="toggleDropdownIcon(<?= $item['id'] ?>, true)">
                                                                    <i class="fa-solid fa-pen-to-square me-2"></i> Sửa
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <form action="/comments/<?= $item['id'] ?>" method="post" onsubmit="return confirm('Chắc chưa?')">
                                                                    <input type="hidden" name="method" value="DELETE">
                                                                    <button type="submit" class="dropdown-item text-danger">
                                                                        <i class="fa-solid fa-trash me-2"></i> Xóa
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="collapse mt-3" id="editComment<?= $item['id'] ?>">
                                                <div class="card card-body">
                                                    <form action="/comments/<?= $item['id'] ?>" method="post">
                                                        <input type="hidden" name="method" value="PUT">
                                                        <input type="hidden" name="product_id" value="<?= $data['product']['id'] ?>" id="">
                                                        <div class="mb-3">
                                                            <label class="form-label">Bình luận</label>
                                                            <textarea class="form-control" name="content" rows="3" required><?= $item['content'] ?></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-sm  me-2" style="padding: 0.5rem 1.25rem;">Gửi</button>
                                                        <button type="button" class="btn btn-secondary btn-sm btn-dark"
                                                            style="padding: 0.5rem 1.25rem;" data-bs-toggle="collapse"
                                                            data-bs-target="#editComment<?= $item['id'] ?>"
                                                            onclick="toggleDropdownIcon(<?= $item['id'] ?>, false)">
                                                            Hủy
                                                        </button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <h6 class="text-center text-danger">Chưa có bình luận</h6>
                            <?php endif; ?>
                        </div>
                        <?php if ($is_login): ?>
                            <div class="d-flex flex-row align-items-start px-5">
                                <div class="pe-3">
                                    <img src="<?= APP_URL ?>/public/uploads/users/<?= $_SESSION['user']['avatar'] ?: 'default-user.jpg' ?>"
                                        alt="user" width="50" height="50" class="rounded-circle" style="object-fit: cover;">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="fw-bold"> <?= $_SESSION['user']['name'] ?> - <?= $_SESSION['user']['username'] ?> </h6>
                                    <form action="/comments" method="post">
                                        <input type="hidden" name="method" value="POST">
                                        <input type="hidden" name="product_id" value="<?= $data['product']['id'] ?>" id="">
                                        <input type="hidden" name="user_id" id="user_id" value="<?= $_SESSION['user']['id'] ?>">
                                        <div class="mb-3">
                                            <label class="form-label">Bình luận</label>
                                            <textarea class="form-control" name="content" rows="3" required placeholder="Nhập bình luận..."></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm mb-3" style="padding: 0.5rem 1.25rem;">Gửi</button>
                                    </form>
                                </div>
                            </div>
                        <?php else: ?>
                            <h6 class="text-center text-danger">Vui lòng đăng nhập để bình luận</h6>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
        </div>


        <section id="best-selling-items" class="position-relative padding-small ">
            <div class="container">
                <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
                    <h3 class="d-flex align-items-center">Sản phẩm liên quan</h3>
                    <!-- <a href="/products" class="btn">Xem tất cả</a> -->
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
                <?php
                if (count($data) && count($data['related_products'])) :
                ?>
                    <div class="swiper product-swiper">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($data['related_products'] as $item) :
                            ?>
                                <div class="swiper-slide">
                                    <div class="card position-relative p-4 border rounded-3">
                                        <div class="position-absolute">
                                            <?php if ($item['discount_price'] > 0): ?>
                                                <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">
                                                    -<?= number_format(($item['discount_price'] / $item['price']) * 100) ?>%
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                        <a href="/products/<?= $item['id'] ?>">
                                            <img src="<?= APP_URL ?>/public/uploads/products/<?= $item['image'] ?>" class="img-fluid shadow-sm" alt="product item">
                                        </a>
                                        <h6 class="mt-4 mb-0 fw-bold"><a href="/products/1"><?= $item['name'] ?></a></h6>
                                        <div class="review-content d-flex mb-2 ">
                                            <div class="rating text-warning d-flex align-items-center my-2 me-2">
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
                                        <?php
                                        if ($item['discount_price'] > 0) :
                                        ?>
                                            <p>Giá gốc: <strike><?= number_format($item['price']) ?> đ</strike></p>
                                            <p>Giá giảm: <strong class="price text-primary fw-bold mb-2 fs-5"><?= number_format($item['price'] - $item['discount_price']) ?> đ</strong></p>
                                        <?php
                                        else :
                                        ?>
                                            <p>Giá tiền: <strong class="price text-primary fw-bold mb-2 fs-5"><?= number_format($item['price']) ?> đ</strong></p>

                                        <?php
                                        endif;
                                        ?>
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

                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
            </div>

        <?php
                else :
        ?>
            <style>
                #best-selling-items {
                    display: none
                }
            </style>

        <?php
                endif;
        ?>
        </section>

        <section id="customers-reviews" class="position-relative padding-large mb-5 mt-5"
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
                const decreaseBtn = document.getElementById("decrease-quantity");
                const increaseBtn = document.getElementById("increase-quantity");
                const hiddenQuantity = document.getElementById("hidden-quantity");
                const displayQuantity = document.getElementById("display-quantity");

                function updateQuantity(newQty) {
                    hiddenQuantity.value = newQty;
                    displayQuantity.value = newQty;
                }

                decreaseBtn.addEventListener("click", function(e) {
                    e.preventDefault();
                    let qty = parseInt(hiddenQuantity.value);
                    if (qty > 1) {
                        updateQuantity(qty - 1);
                    }
                });

                increaseBtn.addEventListener("click", function(e) {
                    e.preventDefault();
                    let qty = parseInt(hiddenQuantity.value);
                    updateQuantity(qty + 1);
                });
            });
        </script>
<?php

    }
}
