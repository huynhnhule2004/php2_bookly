<?php

namespace App\Views\Client\Components;

use App\Views\BaseView;

class Category extends BaseView
{
    public static function render($data = null)
    {
        // Lấy đường dẫn hiện tại
        $currentUrl = $_SERVER['REQUEST_URI'];

        // Lấy ID cuối cùng trong URL
        $urlParts = explode('/', trim($currentUrl, '/')); // Cắt đường dẫn thành mảng
        $currentCategoryId = end($urlParts); // Lấy phần tử cuối (ID danh mục)

        // Kiểm tra nếu không phải số thì đặt về null
        if (!is_numeric($currentCategoryId)) {
            $currentCategoryId = null;
        }
?>
        <style>
            .active1 {
                color: var(--primary-color) !important;
            }
        </style>
        <h5 class="text-center mb-3 fw-bold">Danh mục</h5>
        <nav class="nav flex-column border-right">
            <a class="nav-link <?= !$currentCategoryId ? 'active1' : '' ?> text-black" href="/products">Tất cả</a>
            <?php foreach ($data as $item) : ?>
                <a class="nav-link text-black <?= ($currentCategoryId == $item['id']) ? 'active1' : '' ?>"
                    href="/products/categories/<?= $item['id'] ?>">
                    <?= $item['category_name'] ?>
                </a>
            <?php endforeach; ?>
        </nav>

<?php
    }
}
