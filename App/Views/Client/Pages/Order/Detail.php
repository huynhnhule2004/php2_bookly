<?php

namespace App\Views\Client\Pages\Order;

use App\Views\BaseView;

class Detail extends BaseView
{
    public static function render($data = null)
    {
        if (!$data['orders']) {
            echo "<div class='container mt-5'>Không tìm thấy thông tin đơn hàng.</div>";
            return;
        }
        // echo "<pre/>";
        // var_dump($data['orders']);
        // die();
?>
        <section id="billboard" class="position-relative d-flex flex-column align-items-center justify-content-center py-5 bg-light-gray"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 300px;">

            <h1 class="text-center">Chi tiết đơn hàng</h1>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-black">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-underline">Trang chủ</a></li>
                    <li class="breadcrumb-item active text-black" aria-current="page">Chi tiết đơn hàng</li>
                </ol>
            </nav>

        </section>
        <div class="container mt-5">
            <!-- <h3>Chi tiết</h3> -->
            <div class="order-details">
                <!-- Tóm tắt đơn hàng -->
                <div class="order-summary mb-4">
                    <h3>Tóm tắt đơn hàng</h3>
                    <p><strong>Mã đơn hàng:</strong> <?= htmlspecialchars($data['orders']['id']) ?></p>
                    <p><strong>Ngày đặt hàng:</strong> <?= htmlspecialchars($data['orders']['created_at']) ?></p>
                    <p><strong>Phương thức thanh toán:</strong>
                        <?php
                        $status = $data['orders']['payment_method'];
                        $statusMessages = [
                            'COD' => 'Thanh toán khi nhận hàng',
                            'Online payment' => 'Thanh toán bằng MOMO',
                            'VNPAY' => 'Thanh toán bằng VNPAY',
                        ];

                        $statusClass = $statusClasses[$status] ?? 'text-muted';
                        $statusMessage = $statusMessages[$status] ?? 'Không rõ trạng thái';

                        echo "<span>" . htmlspecialchars($statusMessage) . "</span>";
                        ?>

                    </p>
                    <p><strong>Tình trạng thanh toán:</strong>
                        <?php
                        $status = $data['orders']['payment_status'];
                        $statusMessages = [
                            'Paid' => 'Đã thanh toán',
                            'Unpaid' => 'Chưa thanh toán',
                            'Refunded' => 'Hoàn tiền',
                        ];

                        $statusClass = $statusClasses[$status] ?? 'text-muted';
                        $statusMessage = $statusMessages[$status] ?? 'Không rõ trạng thái';

                        echo "<span>" . htmlspecialchars($statusMessage) . "</span>";
                        ?>

                    </p>
                </div>

                <!-- Danh sách sản phẩm -->
                <h4>Sản phẩm đã đặt</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['order_details'] as $product) : ?>
                            <tr>
                                <td>
                                    <img src="<?= APP_URL ?>/public/uploads/products/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" width="100px">
                                </td>
                                <td><?= htmlspecialchars($product['name']) ?></td>
                                <td><?= number_format($product['price'], 0, ',', '.') ?> VNĐ</td>
                                <td><?= htmlspecialchars($product['quantity']) ?></td>
                                <td><?= number_format($product['price'] * $product['quantity'], 0, ',', '.') ?> VNĐ</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <!-- Tổng cộng -->
                <div class="order-total mt-3">
                    <p><strong>Phí vận chuyển:</strong> <?= number_format($data['orders']['shipping_fee'], 0, ',', '.') ?> VNĐ</p>
                    <p><strong>Tổng tiền:</strong> <?= number_format($data['orders']['total_price'], 0, ',', '.') ?> VNĐ</p>
                </div>
            </div>
        </div>
<?php
    }
}
