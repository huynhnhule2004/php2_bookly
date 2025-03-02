<?php

namespace App\Models;

class Cart extends BaseModel
{
    private $cookieName = 'cart_data';
    private $cookieExpire = 365 * 24 * 60 * 60; // 365 ngày

    private function getCart()
    {
        if (isset($_COOKIE[$this->cookieName])) {
            return json_decode($_COOKIE[$this->cookieName], true);
        }
        return ['buy' => [], 'info' => ['number_order' => 0, 'total' => 0]];
    }

    private function saveCart($cart)
    {
        setcookie($this->cookieName, json_encode($cart), time() + $this->cookieExpire, "/");
    }

    public function addProduct($product, $qty = 1)
    {
        $cart = $this->getCart();
        $id = $product['id'];

        if (isset($cart['buy'][$id])) {
            $cart['buy'][$id]['qty'] += $qty;
        } else {
            $cart['buy'][$id] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'discount_price' => $product['discount_price'],
                'image' => $product['image'],
                'is_feature' => $product['is_feature'],
                'view' => $product['view'],
                'status' => $product['status'],
                'category_id' => $product['category_id'],
                'length' => $product['length'],
                'width' => $product['width'],
                'height' => $product['height'],
                'weight' => $product['weight'],
                'qty' => $qty,
            ];
        }

        $cart['buy'][$id]['sub_total'] = ($cart['buy'][$id]['price'] - $cart['buy'][$id]['discount_price']) * $cart['buy'][$id]['qty'];
        
        $this->updateCartInfo($cart);
        $this->saveCart($cart);

        return $cart['buy'][$id];
    }

    public function deleteItem($id)
    {
        $cart = $this->getCart();

        if (isset($cart['buy'][$id])) {
            unset($cart['buy'][$id]);
            $this->updateCartInfo($cart);
            $this->saveCart($cart);
        }
    }

    public function deleteAllItems()
    {
        $cart = ['buy' => [], 'info' => ['number_order' => 0, 'total' => 0]];
        $this->saveCart($cart);
    }

    private function updateCartInfo(&$cart)
    {
        $total = 0;
        $number_order = 0;

        foreach ($cart['buy'] as $item) {
            $total += $item['sub_total'];
            $number_order += $item['qty'];
        }

        $cart['info'] = [
            'number_order' => $number_order,
            'total' => $total,
        ];
    }


    public function clearCart() {
        if (isset($_COOKIE['cart_data'])) {
            setcookie('cart_data', '', time() - 3600, '/'); // Xóa cookie giỏ hàng
            unset($_COOKIE['cart_data']); // Xóa khỏi biến $_COOKIE
        }
    }
    
}
