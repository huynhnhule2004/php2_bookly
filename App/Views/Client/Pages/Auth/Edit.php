<?php

namespace App\Views\Client\Pages\Auth;

use App\Views\BaseView;

class Edit extends BaseView
{
  public static function render($data = null)
  {
?>

    <section id="billboard" class="position-relative d-flex flex-column align-items-center justify-content-center py-5 bg-light-gray"
      style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 300px;">

      <h1 class="text-center">Thông tin tài khoản</h1>

      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-black">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/" class="text-decoration-underline">Trang chủ</a></li>
          <li class="breadcrumb-item active text-black" aria-current="page">Thông tin tài khoản</li>
        </ol>
      </nav>

    </section>

    <div class="container mt-5">
      <div class="row" style="padding-bottom: 7em;">
        <div class="offset-md-1 col-md-3">
          <?php
          if ($data && $data['avatar']) :
          ?>

            <img src="<?= APP_URL ?>/public/uploads/users/<?= $data['avatar'] ?>" alt="" width="100%" class="rounded-3">

          <?php
          else :
          ?>

            <img src="<?= APP_URL ?>/public/uploads/users/default-user.jpg" alt="" width="100%" class="rounded-3">

          <?php
          endif;
          ?>
        </div>
        <div class=" col-md-7">
          <div class="card card-body">
            <form action="/users/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="method" value="PUT" id="">
              <div class="my-3">
                <label for="username">Tên đăng nhập*</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Nhập tên đăng nhập" value="<?= $data['username'] ?>" disabled>
              </div>
              <div class="mb-3">
                <label for="email">Email*</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email" value="<?= $data['email'] ?>" required>
              </div>
              <div class="mb-3">
                <label for="name">Họ và tên*</label>
                <input type="name" name="name" id="name" class="form-control" placeholder="Nhập họ và tên" value="<?= $data['name'] ?? ''  ?>" required>
              </div>
              <div class="mb-3">
                <label for="date_of_birth">Ngày sinh*</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="Nhập ngày sinh" value="<?= $data['date_of_birth'] ?? ''  ?>" required>
              </div>
              <div class="mb-3">
                <label for="phone_number">Số điện thoại*</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Nhập số điện thoại" value="<?= $data['phone_number'] ?? ''  ?>" required>
              </div>
              <div class="mb-3">
                <label for="address">Địa chỉ*</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Nhập địa chỉ" value="<?= $data['address'] ?? ''  ?>" required>
              </div>
              <div class="mb-3">
                <label for="avatar">Ảnh đại diện</label>
                <input type="file" name="avatar" id="avatar" class="form-control" placeholder="Chọn ảnh đại diện">
              </div>

              <button type="reset" class="btn btn-outline-danger mb-3">Nhập lại</button>
              <button type="submit" class="btn btn-outline-info mb-3">Cập nhật</button>
              <br>
              <a href="/change-password" class="text-danger">Đổi mật khẩu</a>
            </form>
          </div>
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
