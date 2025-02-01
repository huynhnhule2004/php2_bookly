<?php

namespace App\Views\Client\Pages\Cart;

use App\Helpers\AuthHelper;
use App\Views\BaseView;

class Cart extends BaseView
{
    public static function render($data = null)
    {
        // $is_login = AuthHelper::checkLogin();
?>
        <style>
            /*CART*/
            .table>tfoot>tr>td {
                border-top: none !important;
            }

            #info-cart-wp table tr td {
                display: table-cell;
                vertical-align: middle;
                text-align: center;
                white-space: nowrap;
            }

            #info-cart-wp table thead tr td {
                font-family: 'Roboto Medium';
                padding: 10px 20px;
                color: #333;
                border: 0;
            }

            #info-cart-wp table tbody tr td {
                color: #444;
                padding: 15px 0px;
            }

            #info-cart-wp table tbody tr td .num-order {
                width: 35px;
                height: 35px;
                line-height: 35px;
                text-align: center;
                border: 1px solid #bbb;
                border-radius: 3px;
            }

            #info-cart-wp table tbody tr td .thumb {
                display: inline-block;
                width: 100px;
                height: 100px;
                overflow: hidden;
                border: 1px solid #ddd;
            }

            #checkout-cart,
            #update-cart {
                display: inline-block;
                color: #333;
                background: #ececec;
                border: 1px solid #c5c5c5;
                padding: 10px 15px;
                margin-right: 5px;
                font-size: 13px;
                border-radius: 3px;
            }

            #checkout-cart:hover,
            #update-cart:hover {
                background: #d0d0d0;
            }

            #info-cart-wp table tfoot tr td #action-cart a:nth-child(2) {
                margin-right: 0;
            }

            #total-price {
                font-family: 'Roboto Medium';
                font-weight: normal;
            }

            #total-price span {
                color: #ad0000;
            }

            #action-cart-wp {
                padding: 30px 0px;
            }

            #action-cart-wp .title {
                padding-bottom: 5px;
            }

            #action-cart-wp .section-detail .title span {
                font-family: 'Roboto Medium';
                font-weight: normal;
            }

            #action-cart-wp a {
                display: inline-block;
                padding: 5px 0px;
                color: #006cbb;
                line-height: 21px;
            }

            .cart-page #breadcrumb-wp .title {
                display: block;
                padding: 20px 0px;
                font-family: 'Roboto Medium';
                text-transform: uppercase;
                font-size: 18px;
                color: #272727;
                text-align: center;
            }

            #info-cart-wp .table thead {
                background: #efefef;
                border-top: 1px solid #dadada;
            }

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
        </style>

        <section id="billboard" class="position-relative d-flex flex-column align-items-center justify-content-center py-5 bg-light-gray"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 300px;">

            <h1 class="text-center">Giỏ hàng</h1>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-black">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-underline">Trang chủ</a></li>
                    <li class="breadcrumb-item active text-black" aria-current="page">Giỏ hàng</li>
                </ol>
            </nav>

        </section>

            <div class="container" style="margin-top: 100px;">
                <div id="main-content-wp" class="cart-page">
                    <div class="section" id="breadcrumb-wp">
                        <div class="wp-inner">
                            <div class="section-detail">
                                <!-- <h3 class="title">Giỏ hàng</h3> -->
                            </div>
                        </div>
                    </div>
                    <div id="wrapper" class="wp-inner clearfix">
                        <div class="section" id="info-cart-wp">
                            <?php
                            $data['list_buy'] = [
                                [
                                    'id' => 'P001',
                                    'image' => 'product1.jpg',
                                    'name' => 'Sản phẩm 1',
                                    'price' => 50000,
                                    'discount_price' => 5000,
                                    'qty' => 2,
                                    'sub_total' => 95000
                                ],
                                [
                                    'id' => 'P002',
                                    'image' => 'product2.jpg',
                                    'name' => 'Sản phẩm 2',
                                    'price' => 150000,
                                    'discount_price' => 10000,
                                    'qty' => 1,
                                    'sub_total' => 140000
                                ]
                            ];
                            if (!empty($data['list_buy'])) :
                            ?>
                                <div class="section-detail table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>Ảnh sản phẩm</td>
                                                <td>Tên sản phẩm</td>
                                                <td>Giá sản phẩm</td>
                                                <td>Số lượng</td>
                                                <td>Thành tiền</td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($data['list_buy'] as $item) :
                                            ?>
                                                <tr>
                                                    <td>
                                                        <a href="/products/<?= $item['id'] ?>" title="" class="thumb rounded-3 p-3">
                                                            <img src="<?= APP_URL ?>/public/uploads/products/product.jpg" class="card-img-top " alt="" style="width: 100%; display: block;" data-holder-rendered="true">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="/products/<?= $item['id'] ?>" title="" class="name-product"><?= $item['name'] ?></a>
                                                    </td>
                                                    <td><?= number_format($item['price'] - $item['discount_price']) ?> đ</td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <button class="btn-quantity " id="decrease-quantity">-</button>
                                                            <input type="text" value="1" class="form-control text-center mx-2" id="quantity" style="width: 60px; height: 40px;" readonly>
                                                            <button class="btn-quantity" id="increase-quantity">+</button>
                                                        </div>
                                                        <!-- <input type="number" name="qty[<?= $item['id'] ?>]" value="<?= $item['qty'] ?>" class="num-order" min="1" max="10"> -->
                                                    </td>
                                                    <td><?= number_format($item['sub_total']) ?> đ</td>
                                                    <td>
                                                        <form action="/cart/<?= $item['id'] ?>" method="post" style="display: inline-block;" onsubmit="return confirm('Chắc chưa?')">
                                                            <input type="hidden" name="method" value="DELETE">
                                                            <button type="submit" class="btn btn-danger text-white" style="padding: 0.5rem 1.5rem;"><i class="fa-solid fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php
                                            endforeach;
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="7">
                                                    <div class="clearfix">
                                                        <?php
                                                        if (session_status() == PHP_SESSION_NONE) {
                                                            session_start();
                                                        }
                                                        ?>
                                                        <p id="total-price" class="fl-right" style="float: right;">Tổng giá: <span class="text-danger"><?= number_format(210000) ?> đ</span> </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">
                                                    <div class="clearfix">
                                                        <div class="fl-right">
                                                            <a href="/checkout" title="" style="float: right;" class="btn btn-danger text-white">Thanh toán</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                        </div>
                        <div class="section" id="action-cart-wp">
                            <div class="section-detail">
                                <a href="/products" title="" id="buy-more">Mua tiếp</a><br />
                                <a href="/cart/deleteAll" title="" id="delete-cart">Xóa giỏ hàng</a>
                            </div>
                        </div>
                    <?php
                            else :
                    ?>
                        <h3 class="text-center text-danger mt-3 mb-5">Giỏ hàng trống! </h3>
                        <p class="text-center">Click <a href="/" class="text-decoration-underline fw-bold">vào đây</a> để quay lại trang chủ</p>
                    <?php
                            endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
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
        </script>





<?php

    }
}
