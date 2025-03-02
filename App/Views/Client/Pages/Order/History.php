<?php

namespace App\Views\Client\Pages\Order;

use App\Views\BaseView;

class History extends BaseView
{
    public static function render($data = null,  $currentPage = 1, $itemsPerPage = 10, $totalItems = 0)
    {
        $totalPages = ceil($totalItems / $itemsPerPage);
        // echo $totalPages;
        // echo $totalItems;
        // die();

?>
        <section id="billboard" class="position-relative d-flex flex-column align-items-center justify-content-center py-5 bg-light-gray"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 300px;">

            <h1 class="text-center">Lịch sử mua hàng</h1>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-black">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-underline">Trang chủ</a></li>
                    <li class="breadcrumb-item active text-black" aria-current="page">Lịch sử mua hàng</li>
                </ol>
            </nav>

        </section>
        <div class="container mt-5 mb-5">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <!-- Tiêu đề Danh sách đơn hàng ở bên trái -->
                <h3 class="mb-4">Danh sách</h3>

                <!-- Form tìm kiếm nằm bên phải -->
                <form action="/orders/history/search" method="GET" class="d-flex">
                    <select class="select2 form-select shadow-none me-2" name="keyword">
                        <option value="" readonly>Chọn trạng thái</option>
                        <option value="Pending" <?= (isset($_GET['keyword']) && $_GET['keyword'] == 'Pending') ? 'selected' : '' ?>>Đang chờ xử lý</option>
                        <option value="Shipped" <?= (isset($_GET['keyword']) && $_GET['keyword'] == 'Shipped') ? 'selected' : '' ?>>Đang giao hàng</option>
                        <option value="Delivered" <?= (isset($_GET['keyword']) && $_GET['keyword'] == 'Delivered') ? 'selected' : '' ?>>Đã giao hàng</option>
                        <option value="Cancelled" <?= (isset($_GET['keyword']) && $_GET['keyword'] == 'Cancelled') ? 'selected' : '' ?>>Đã hủy</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm" style="white-space: nowrap; color: white; background-color: #F86D72; padding: 10px">Tìm kiếm</button>
                </form>

            </div>
            <?php if (!empty($data) && is_array($data)) { ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mã Đơn Hàng</th>
                            <th>Ngày Đặt Hàng</th>
                            <th>Phương thức thanh toán</th>
                            <th>Trạng Thái Thanh Toán</th>
                            <th>Trạng Thái Giao Hàng</th>
                            <th>Tổng Tiền</th>
                            <th>Chi Tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $order) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($order['id']); ?></td>
                                <td><?php echo htmlspecialchars(date("d/m/Y", strtotime($order['created_at']))); ?></td>
                                <td>
                                    <?php
                                    $status = $order['payment_method'];
                                    $statusClass = '';
                                    $statusText = '';

                                    switch ($status) {
                                        case 'COD':
                                            $statusText = 'Thanh toán khi nhận hàng';
                                            break;
                                        case 'Online payment':
                                            $statusText = 'Thanh toán bằng MOMO';
                                            break;
                                        case 'VNPAY':
                                            $statusText = 'Thanh toán bằng VNPAY';
                                            break;
                                        default:
                                            $statusClass = 'text-muted';
                                            $statusText = 'Không xác định';
                                    }

                                    echo "<span class=\"$statusClass\">" . htmlspecialchars($statusText) . "</span>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $status = $order['payment_status'];
                                    $statusClass = '';
                                    $statusText = '';

                                    switch ($status) {
                                        case 'Paid':
                                            $statusText = 'Đã thanh toán';
                                            break;
                                        case 'Unpaid':
                                            $statusText = 'Chưa thanh toán';
                                            break;
                                        case 'Refunded':
                                            $statusText = 'Đã hoàn tiền';
                                            break;
                                        default:
                                            $statusClass = 'text-muted';
                                            $statusText = 'Không xác định';
                                    }

                                    echo "<span class=\"$statusClass\">" . htmlspecialchars($statusText) . "</span>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $status = $order['status'];
                                    $statusClass = '';
                                    $statusText = '';

                                    switch ($status) {
                                        case 'Pending':
                                            $statusText = 'Đang chờ xử lý';
                                            break;
                                        case 'Shipped':
                                            $statusText = 'Đang giao hàng';
                                            break;
                                        case 'Delivered':
                                            $statusText = 'Đã giao hàng';
                                            break;
                                        case 'Cancelled':
                                            $statusText = 'Đã hủy';
                                            break;
                                        default:
                                            $statusClass = 'text-muted';
                                            $statusText = 'Không xác định';
                                    }

                                    echo "<span class=\"$statusClass\">" . htmlspecialchars($statusText) . "</span>";
                                    ?>
                                </td>
                                <td><?php echo number_format($order['total_price'], 0, ',', '.'); ?> VNĐ</td>
                                <td>
                                    <a href="/orders/<?php echo htmlspecialchars($order['id']); ?>" class="btn btn-primary btn-sm" style="padding: 10px">
                                        Xem Chi Tiết
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <style>
                    .custom-pagination {
                        display: flex;
                        justify-content: center;
                        list-style: none;
                        padding: 10px 0;
                    }

                    .custom-pagination li {
                        margin: 0 5px;
                    }

                    .custom-pagination li a {
                        display: block;
                        padding: 8px 15px;
                        background: #f8f9fa;
                        color: #333;
                        text-decoration: none;
                        border-radius: 5px;
                        border: 1px solid #ddd;
                        transition: all 0.3s ease;
                    }

                    .custom-pagination li a:hover {
                        background: var(--primary-color);
                        color: #fff;
                    }

                    .custom-pagination li.active a {
                        background: var(--primary-color);
                        color: #fff;
                        font-weight: bold;
                        border: 1px solid var(--primary-color);
                    }
                </style>
                <!-- Pagination -->
                <?php if ($totalPages > 1) : ?>
                    <nav aria-label="Page navigation">
                        <ul class="custom-pagination">
                            <!-- Nút Previous -->
                            <?php if ($currentPage > 1) : ?>
                                <li>
                                    <a href="?page=<?= $currentPage - 1 ?>" aria-label="Previous">
                                        <span>&laquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <!-- Các số trang -->
                            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                <li class="<?= ($i == $currentPage) ? 'active' : '' ?>">
                                    <a href="?page=<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>

                            <!-- Nút Next -->
                            <?php if ($currentPage < $totalPages) : ?>
                                <li>
                                    <a href="?page=<?= $currentPage + 1 ?>" aria-label="Next">
                                        <span>&raquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                <?php endif; ?>

            <?php } else { ?>
                <div class="alert alert-info">
                    Bạn chưa có đơn hàng nào.
                </div>
            <?php } ?>
        </div>
<?php
    }
}
