<?php

namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Home;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\About\About;
use App\Views\Client\Pages\Contact\Contact;
use App\Models\Category;
use App\Models\Product;
use App\Views\Client\Pages\Checkout\Checkout;

class CheckoutController
{
    // hiển thị danh sách
    public static function index()
    {
        // $category = new Category();
        // $categories = $category->getAllCategoryByStatus();

        // $data = [
        //     'categories' => $categories
        // ];

        $cart = [
            [
                'buy' => [
                    [
                        'product_name' => 'Sản phẩm 1',
                        'variant_options' => [
                            [
                                'product_variant_option_combination_id' => 'combo_1'
                            ]
                        ],
                        'qty' => 2,
                        'price_default' => 50000
                    ],
                    [
                        'product_name' => 'Sản phẩm 2',
                        'variant_options' => [
                            [
                                'product_variant_option_combination_id' => 'combo_2'
                            ]
                        ],
                        'qty' => 1,
                        'price_default' => 150000
                    ]
                ]
            ]
        ];

        $data = [
            'cart' => $cart
        ];

        Header::render();
        Notification::render();
        // NotificationHelper::unset();
        Checkout::render($data);
        Footer::render();
    }


}