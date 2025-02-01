<?php

namespace App\Views\Client\Pages\Contact;

use App\Views\BaseView;

class Contact extends BaseView
{
    public static function render($data = null)
    {
?>

        <section id="billboard" class="position-relative d-flex flex-column align-items-center justify-content-center py-5 bg-light-gray"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 300px;">

            <h1 class="text-center">Liên hệ</h1>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-black">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-underline">Trang chủ</a></li>
                    <li class="breadcrumb-item active text-black" aria-current="page">Liên hệ</li>
                </ol>
            </nav>

        </section>

        <div class="container row m-auto p-5 mb-5 mt-5 d-flex justify-content-between" >
            <div class="col-sm-12 col-md-5">
                <h3 style="color: var(--primary-color)">Bookly</h3>
                <div>
                    <i class="fa-solid fa-location-dot me-2"></i>
                    <span>288 Nam Kỳ Khởi Nghĩa, Phường Võ Thị Sáu, Quận 3</span>
                </div>
                <div>
                    <i class="fa-solid fa-phone-volume me-2"></i>
                    <span>0364402449</span>
                </div>
                <div>
                    <i class="fa-solid fa-envelope me-2"></i>
                    <span>bookly@gmail.com</span>
                </div>

                <hr>
                <p>Hãy liên hệ với Waggy để được tư vấn một cách cụ thể nhất, về những câu hỏi mà bạn đang thắc mắc, cũng như
                    biết thêm thông tin về các chương trình khuyến mãi hiện có tại Bookly</p>

            </div>
            <div class="col-sm-12 col-md-6">
                <form action="/contact" method="post">
                    <input type="hidden" name="method" id="" value="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ tên</label>
                        <input type="text" class="form-control" id="name" name="name" >
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" >
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="tel" class="form-control" id="phone" name="phone" >
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Lời nhắn</label>
                        <textarea class="form-control" id="message" name="message" rows="3" ></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>

            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.214930129262!2d105.75018147404022!3d9.999097290106247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a089ba2a00f837%3A0xe8a902fb01e1d974!2zMzg2QSBMw6ogQsOsbmgsIEPDoWkgUsSDbmcsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1730553152961!5m2!1svi!2s"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- </div> -->

<?php

    }
}
