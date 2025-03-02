<?php

namespace App\Views\Client\Layouts;

use App\Views\BaseView;

class Footer extends BaseView
{
    public static function render($data = null)
    {
?>

        <footer id="footer" class="padding-large">
            <div class="container">
                <div class="row">
                    <div class="footer-top-area">
                        <div class="row d-flex flex-wrap justify-content-between">
                            <div class="col-lg-3 col-sm-6 pb-3">
                                <div class="footer-menu">
                                    <img src="<?= APP_URL ?>/public/assets/client/images/main-logo.png" alt="logo" class="img-fluid mb-2">
                                    <p>Chào mừng bạn đến với Bookly! Tại đây chuyên cung cấp các sản phẩm chất lượng cho công việc và học tập. Mua sắm tiện lợi, giao hàng nhanh chóng!</p>
                                    <div class="social-links">
                                        <ul class="d-flex list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <svg class="facebook">
                                                        <use xlink:href="#facebook" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg class="instagram">
                                                        <use xlink:href="#instagram" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg class="twitter">
                                                        <use xlink:href="#twitter" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg class="linkedin">
                                                        <use xlink:href="#linkedin" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg class="youtube">
                                                        <use xlink:href="#youtube" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 pb-3">
                                <div class="footer-menu text-capitalize">
                                    <h5 class="widget-title pb-2">Liên kết nhanh</h5>
                                    <ul class="menu-list list-unstyled text-capitalize">
                                        <li class="menu-item mb-1">
                                            <a href="/">Trang chủ</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="/products">Sản phẩm</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="/blogs">Bài viết</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="/about">Giới thiệu</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="/contact">Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 pb-3">
                                <div class="footer-menu text-capitalize">
                                    <h5 class="widget-title pb-2">Thông tin trợ giúp</h5>
                                    <ul class="menu-list list-unstyled">
                                        <li class="menu-item mb-1">
                                            <a href="#">Theo dõi đơn hàng của bạn</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">Chính sách đổi trả</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">Vận chuyển & Giao hàng</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">Liên hệ với chúng tôi</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">Câu hỏi thường gặp</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 pb-3">
                                <div class="footer-menu contact-item">
                                    <h5 class="widget-title text-capitalize pb-2">Liên hệ với chúng tôi</h5>
                                    <p>Bạn có bất kỳ câu hỏi hoặc đề xuất nào? <a href="mailto:"
                                            class="text-decoration-underline">bookly@gmail.com</a></p>
                                    <p>Nếu bạn cần hỗ trợ? Gọi ngay cho chúng tôi. <a href="#" class="text-decoration-underline">0364402449</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <hr>
        <div id="footer-bottom" class="mb-2">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="ship-and-payment d-flex gap-md-5 flex-wrap">
                        <div class="shipping d-flex">
                            <p>Chúng tôi vận chuyển với:</p>
                            <div class="card-wrap ps-2">
                                <img src="<?= APP_URL ?>/public/assets/client/images/dhl.png" alt="visa">
                                <img src="<?= APP_URL ?>/public/assets/client/images/shippingcard.png" alt="mastercard">
                            </div>
                        </div>
                        <div class="payment-method d-flex">
                            <p>Các phương thức thanh toán:</p>
                            <div class="card-wrap ps-2">
                                <img src="<?= APP_URL ?>/public/assets/client/images/visa.jpg" alt="visa">
                                <img src="<?= APP_URL ?>/public/assets/client/images/mastercard.jpg" alt="mastercard">
                                <img src="<?= APP_URL ?>/public/assets/client/images/paypal.jpg" alt="paypal">
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>© Copyright by PC09147 - Lê Thị Huỳnh Như
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <script lang="javascript">var __vnp = {code : 23609,key:'', secret : '9fc00ace2dd2671f429cb46a14ceb0ec'};(function() {var ga = document.createElement('script');ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = 'https://core.vchat.vn/code/tracking.js?v=95821'; var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="<?= APP_URL ?>/public/assets/client/js/script.js"></script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        </body>

        </html>


<?php

        // unset($_SESSION['success']);
        // unset($_SESSION['error']);
    }
}

?>