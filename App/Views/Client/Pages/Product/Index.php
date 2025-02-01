<?php

namespace App\Views\Client\Pages\Product;

use App\Views\BaseView;
use App\Views\Client\Components\Category;

class Index extends BaseView
{
    public static function render($data = null)
    {

?>

        <section id="billboard" class="position-relative d-flex flex-column align-items-center justify-content-center py-5 bg-light-gray"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 300px;">

            <h1 class="text-center">Sản phẩm</h1>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-black">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-underline">Trang chủ</a></li>
                    <li class="breadcrumb-item active text-black" aria-current="page">Sản phẩm</li>
                </ol>
            </nav>

        </section>

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    Category::render($data['categories']);
                    ?>
                </div>
                <div class="col-md-9">
                    <div class="mb-5 d-flex justify-content-between align-items-center">
                        <span>Hiển thị 1-9 của 55 kết quả</span>
                        <select class="form-select w-auto" aria-label="Lọc theo giá">
                            <option value="">Lọc theo giá</option>
                            <option value="100-200">100 - 200</option>
                            <option value="200-500">200 - 500</option>
                            <option value="500-1000">500 - 1000</option>
                        </select>
                    </div>
                    <?php
                    if (count($data) && count($data['products'])) :
                    ?>
                        <div class="row">
                            <?php
                            foreach ($data['products'] as $item) :
                            ?>
                                <div class="col-md-4 ">
                                    <!-- <div class="card mb-4 shadow-sm">
                                        <img src="<?= APP_URL ?>/public/uploads/products/<?= $item['image'] ?>" class="card-img-top" alt="" style="width: 100%; display: block;" data-holder-rendered="true">
                                        <div class="card-body">
                                            <p class="card-text"><?= $item['name'] ?></p>
                                            <?php
                                            if ($item['discount_price'] > 0) :
                                            ?>
                                                <p>Giá gốc: <strike><?= number_format($item['price']) ?> đ</strike></p>
                                                <p>Giá giảm: <strong class="text-danger"><?= number_format($item['price'] - $item['discount_price']) ?> đ</strong></p>

                                            <?php
                                            else :
                                            ?>
                                                <p>Giá tiền: <?= number_format($item['price']) ?> đ</p>

                                            <?php
                                            endif;
                                            ?>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="/products/<?= $item['id'] ?>" type="button" class="btn btn-sm btn-outline-info">Chi tiết</a>
                                                    <form action="/cart/add" method="post">
                                                        <input type="hidden" name="method" id="" value="POST">
                                                        <input type="hidden" name="id" id="" value="<?= $item['id'] ?>" required>
                                                        <button type="submit" class="btn btn-sm btn-outline-success">Thêm vào giỏ hàng</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="card position-relative p-4 border rounded-3 mb-4">
                                        <div class="position-absolute">
                                            <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">-10%</p>
                                        </div>
                                        <a href="/products/<?= $item['id'] ?>">
                                            <img src="<?= APP_URL ?>/public/uploads/products/<?= $item['image'] ?>" class="img-fluid shadow-sm" alt="product item">
                                        </a>
                                        <h5 class="mt-4 mb-0 fw-bold "><a href="/products/<?= $item['id'] ?>"><?= $item['name'] ?></a></h5>
                                        <div class="review-content d-flex  mb-2">
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
                                        <!-- <span class="price text-primary fw-bold mb-2 fs-5">87000 VNĐ</span> -->
                                        <?php
                                        if ($item['discount_price'] > 0) :
                                        ?>
                                            <p>Giá gốc: <strike><?= number_format($item['price']) ?> đ</strike></p>
                                            <p>Giá giảm: <strong class="price text-primary fw-bold mb-2 fs-5"><?= number_format($item['price'] - $item['discount_price']) ?> đ</strong></p>

                                        <?php
                                        else :
                                        ?>
                                            <p>Giá tiền: <?= number_format($item['price']) ?> đ</p>

                                        <?php
                                        endif;
                                        ?>
                                        <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                            <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Tooltip on top">
                                                <svg class="cart">
                                                    <use xlink:href="#cart"></use>
                                                </svg>
                                            </button>
                                            <a href="#" class="btn btn-dark">
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
                    <?php
                    else :
                    ?>
                        <h3 class="text-center text-danger">Không có sản phẩm</h3>

                    <?php
                    endif;
                    ?>

                </div>
            </div>



        </div>
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


<?php

    }
}
