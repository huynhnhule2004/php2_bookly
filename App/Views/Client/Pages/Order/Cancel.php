<?php

namespace App\Views\Client\Pages\Order;

use App\Views\BaseView;

class Cancel extends BaseView
{
    public static function render($data = null)
    {

?>
        <div class="container mt-5">
            <h2>Hủy Đơn Hàng #<?= $data['order']['id']; ?></h2>
            <h3>Mã đơn #<?= $data['order']['order_code']; ?></h3>
            <p><strong>Ngày đặt hàng:</strong> <?php echo date("d/m/Y", strtotime($data['order']['created_at'])); ?></p>
            <p><strong>Tổng tiền:</strong> <?php echo number_format($data['order']['total_price'], 0, ',', '.'); ?> VNĐ</p>

            <?php if (!empty($error)) : ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST" action="/orders/cancel">
                <input type="hidden" name="method" id="" value="POST">
                <input type="hidden" name="order_id" id="" value="<?= $data['order']['id'] ?>">
                <input type="hidden" name="order_code" id="" value="<?= $data['order']['order_code'] ?>">
                <div class="mb-3">
                    <label class="form-label">Chọn lý do hủy đơn:</label>
                    <?php foreach ($data['cancel_reasons'] as $reason) : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cancel_reason" id="reason_<?php echo htmlspecialchars($reason); ?>" value="<?php echo htmlspecialchars($reason); ?>" required>
                            <label class="form-check-label" for="reason_<?php echo htmlspecialchars($reason); ?>">
                                <?php echo htmlspecialchars($reason); ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mb-3">
                    <label for="note" class="form-label">Ghi chú (nếu có):</label>
                    <textarea id="note" name="note" class="form-control" rows="3" placeholder="Nhập ghi chú nếu cần"></textarea>
                </div>

                <button type="submit" class="btn btn-danger">Xác nhận hủy đơn</button>
                <a href="/orders/<?php echo htmlspecialchars($$data['order']['id']); ?>" class="btn btn-secondary">Quay lại</a>
            </form>
        </div>
<?php
    }
}
