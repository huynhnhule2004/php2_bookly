<?php

namespace App\Views\Client\Components;

use App\Views\BaseView;

class BlogCategory extends BaseView
{
    public static function render($data = null)
    {
?>
        <h5 class="text-center mb-3 fw-bold">Danh mục</h5>
        <nav class="nav flex-column border-right">
            <a class="nav-link active text-black" href="/blogs">Tất cả</a>
            <?php
            foreach ($data as $item) :
            ?>
                <a class="nav-link text-black" href="/blogs/categories/<?= $item['id'] ?>"><?= $item['category_name'] ?></a>
            <?php
            endforeach;
            ?>
        </nav>

<?php
    }
}
