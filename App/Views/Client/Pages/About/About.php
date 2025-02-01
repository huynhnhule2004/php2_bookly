<?php

namespace App\Views\Client\Pages\About;

use App\Views\BaseView;



class About extends BaseView
{
  public static function render($data = null)
  {
?>
    <section id="billboard" class="position-relative d-flex flex-column align-items-center justify-content-center py-5 bg-light-gray"
      style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 300px;">

      <h1 class="text-center">Giới thiệu</h1>

      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-black">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/" class="text-decoration-underline">Trang chủ</a></li>
          <li class="breadcrumb-item active text-black" aria-current="page">Giới thiệu</li>
        </ol>
      </nav>

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


    <main class="container py-5">
      <!-- Về Bookly -->
      <section class="mb-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h2 class="fw-bold mb-4 text-primary">Về Chúng Tôi</h2>
            <p class="text-dark fs-5">
              <strong>Bookly</strong> tự hào là một trong những nhà cung cấp văn phòng phẩm hàng đầu, mang đến những sản phẩm chất lượng cao, giá cả phải chăng và dịch vụ vượt trội.
              Với sứ mệnh không chỉ đáp ứng mà còn vượt qua mong đợi của khách hàng, chúng tôi nỗ lực mang lại sự tiện lợi và trải nghiệm mua sắm tốt nhất.
            </p>
            <p class="text-dark fs-5">
              Chúng tôi tin rằng những công cụ học tập và làm việc phù hợp sẽ giúp bạn đạt được những thành công lớn lao. Bookly chính là cầu nối, giúp bạn tiến gần hơn đến những mục tiêu của mình.
            </p>
          </div>
          <div class="col-lg-6">
            <img src="<?= APP_URL ?>/public/assets/client/images/category1.jpg" alt="Về Bookly" class="img-fluid rounded-3 shadow">
          </div>
        </div>
      </section>


    </main>

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

    <section id="latest-posts" class="padding-large">
      <div class="container">
        <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
          <h3 class="d-flex align-items-center">Bài viết mới nhất</h3>
          <a href="index.html" class="btn">Xem tất cả</a>
        </div>
        <div class="row">
          <div class="col-md-3 posts mb-4">
            <img src="<?= APP_URL ?>/public/assets/client/images/post-item1.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Sách</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">10 Cuốn Sách Phải Đọc Trong Năm: Lựa Chọn Hàng Đầu Của Chúng Tôi!</a></h4>
            <p class="mb-2">Khám phá thế giới công nghệ tiên tiến với bài viết blog mới nhất của chúng tôi, nơi chúng tôi giới thiệu năm thiết bị công nghệ thiết yếu... <span><a class="text-decoration-underline text-black-50" href="index.html">Đọc thêm</a></span>
            </p>
          </div>
          <div class="col-md-3 posts mb-4">
            <img src="<?= APP_URL ?>/public/assets/client/images/post-item2.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Sách</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">Vùng Đất Hấp Dẫn Của Khoa Học Viễn Tưởng</a></h4>
            <p class="mb-2">Khám phá sự giao thoa giữa công nghệ và phát triển bền vững trong bài viết blog mới nhất của chúng tôi. Tìm hiểu về những đổi mới... <span><a class="text-decoration-underline text-black-50" href="index.html">Đọc thêm</a></span> </p>
          </div>
          <div class="col-md-3 posts mb-4">
            <img src="<?= APP_URL ?>/public/assets/client/images/post-item3.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Sách</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">Tìm kiếm tình yêu qua từng trang sách</a></h4>
            <p class="mb-2">Đi trước xu thế với cái nhìn sâu sắc của chúng tôi về sự phát triển nhanh chóng của công nghệ ... <span><a class="text-decoration-underline text-black-50" href="index.html">Đọc thêm</a></span>
            </p>
          </div>
          <div class="col-md-3 posts mb-4">
            <img src="<?= APP_URL ?>/public/assets/client/images/post-item4.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Sách</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">Đọc sách cho sức khỏe tinh thần: Làm thế nào sách có thể chữa lành và truyền cảm hứng</a></h4>
            <p class="mb-2">Trong môi trường làm việc từ xa ngày nay, năng suất là yếu tố quan trọng. Khám phá các ứng dụng và công cụ hàng đầu giúp bạn duy trì hiệu quả công việc... <span><a class="text-decoration-underline text-black-50" href="index.html">Đọc thêm</a></span>
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
