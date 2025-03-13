<?php

namespace App\Models;

class GHNService extends BaseModel
{
    private $token;
    private $apiUrl;
    private $shopId;
    private $cancelOrder;

    public function __construct()
    {
        $this->token = $_ENV['ghn_api_token'] ?? '';
        $this->apiUrl = $_ENV['api_ghn'] ?? '';
        $this->shopId = $_ENV['ghn_shop_id'] ?? '';
        $this->cancelOrder = $_ENV['api_cancel_order_ghn'] ?? '';
    }

    public function getToken()
    {
        return $this->token;
    }
    // Lấy danh sách tỉnh/thành phố
    public function getProvinces()
    {
        $url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/province";
        return $this->callAPI($url);
    }

    // Lấy danh sách quận/huyện theo tỉnh
    public function getDistricts($province_id)
    {
        $url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/district";
        return $this->callAPI($url, ['province_id' => $province_id]);
    }

    // Lấy danh sách phường/xã theo quận
    public function getWards($district_id)
    {
        $url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/ward";
        return $this->callAPI($url, ['district_id' => $district_id]);
    }

    // Gọi API
    private function callAPI($url, $data = [])
    {
        $headers = [
            "Content-Type: application/json",
            "Token: $this->token"
        ];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        if (!empty($data)) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }

    public function createShippingOrder($orderData)
    {
        $headers = [
            "Content-Type: application/json",
            "Token: {$this->token}",
            "ShopId: {$this->shopId}"
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->apiUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($orderData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return [
            "status" => $httpCode,
            "response" => json_decode($response, true)
        ];
    }

    public function createOrderGHN($name, $phone, $address, $ward, $district, $total, $cart_data)
    {
        $orderData = [
            "payment_type_id" => 2,
            "note" => "Được kiểm tra hàng",
            "required_note" => "CHOXEMHANGKHONGTHU",
            "from_name" => "Boolly",
            "from_phone" => "0987654321",
            "from_address" => "Phường Lê Bình, Quận Cái Răng , TP.Cần Thơ, Vietnam",
            "from_ward_name" => "Phường Lê Bình",
            "from_district_name" => "Quận Cái Răng",
            "from_province_name" => "TP.Cần Thơ",
            "return_phone" => "0364402449",
            "return_address" => "Phường Lê Bình, Quận Cái Răng , TP.Cần Thơ, Vietnam",
            "to_name" => $name,
            "to_phone" => $phone,
            "to_address" => $address,
            "to_ward_code" => $ward,
            "to_district_id" => $district,
            "cod_amount" => (int) $total,
            "content" => "Thông tin đơn hàng của Boolly",
            "weight" => 200,
            "length" => 1,
            "width" => 19,
            "height" => 10,
            "insurance_value" => 500000,
            "service_id" => 0,
            "service_type_id" => 2,
            "items" => [],
        ];

        foreach ($cart_data as $cart) {
            if (isset($cart['data']) && $cart['data']) {
                $weight = isset($cart['data']['weight']) ? $cart['data']['weight'] : 0.6;
                $length = isset($cart['data']['length']) ? $cart['data']['length'] : 10;
                $width = isset($cart['data']['width']) ? $cart['data']['width'] : 10;
                $height = isset($cart['data']['height']) ? $cart['data']['height'] : 10;
                $product = [
                    'name' => $cart['data']['name'],
                    'code' => (string) $cart['data']['id'],
                    'quantity' => (int) $cart['quantity'],
                    'price' => (int) $cart['data']['price'],
                    'length' => (int) $length,
                    'width' => (int) $width,
                    'height' => (int) $height,
                    'weight' => (int) $weight,
                    'category' => $cart['data']['category'] ?? 'Không xác định',
                ];
                $orderData['items'][] = $product;
            }
        }

        try {
            $response = $this->createShippingOrder($orderData);

            if (!empty($response['status']) && $response['status'] === 200) {
                return [
                    'success' => true,
                    'message' => $response['response']['message_display'] ?? 'Tạo đơn hàng thành công!',
                    'data' => $response['response']
                ];
            } else {
                return [
                    'success' => false,
                    'message' => $response['response']['message_display'] ?? 'Lỗi không xác định',
                    'data' => $response
                ];
            }
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Lỗi: ' . $e->getMessage()
            ];
        }

    }

    public function cancelOrderGHN($order_code) {
        $postData = json_encode(['order_codes' => [$order_code]]);
    
        $ch = curl_init($this->cancelOrder);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "Token: {$this->token}",
            "ShopId: {$this->shopId}"
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    
        $response = curl_exec($ch);
        curl_close($ch);
    
        $result = json_decode($response, true);
        if (!empty($result['code']) && $result['code'] == 200) {
            return ['success' => true];
        }
    
        return ['success' => false, 'message' => $result['message'] ?? 'Lỗi không xác định'];
    }
}

