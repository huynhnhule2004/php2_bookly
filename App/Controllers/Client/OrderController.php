<?php

namespace App\Controllers\Client;

use App\Helpers\AuthHelper;
use App\Helpers\NotificationHelper;
use App\Models\Cart;
use App\Models\Category;
use App\Models\GHNService;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Pages\Order\Cancel;
use App\Views\Client\Pages\Order\History;
use App\Views\Client\Pages\Order\Index;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Order\Success;
use App\Views\Client\Pages\Order\Detail;
use App\Views\Client\Pages\Order\Search;
use \Exception;

class OrderController
{
    // Hiển thị danh sách
    public static function index()
    {
        // echo "<pre>";
        // var_dump($_POST['shipping_fee']);
        // exit;
        // Lấy danh sách danh mục
        $category = new Category();

        $categories = $category->getAllCategoryByStatus();

        $ghn_service = new GHNService();

        $data = [
            'user_id' => $_POST['user_id'],
            'total_price' => isset($_POST['total_order']) ? (int) str_replace('.', '', $_POST['total_order']) : 0,
            'status' => $_POST['status'],
            'phone_number' => $_POST['phone_number'],
            'shipping_address' => $_POST['address'],
            'payment_method' => $_POST['payment_method'],
            'payment_status' => $_POST['payment_status'],
            'shipping_fee' => isset($_POST['shipping_fee']) ? (int) str_replace('.', '', $_POST['shipping_fee']) : 0,
        ];
        // echo "<pre>";
        // var_dump($data);
        // exit;
        $user = new User();
        $name = $user->getNameUserById($data['user_id']);
        $phone = $_POST['phone_number'];
        $address = $_POST['address'];
        $ward_id = $_POST['phuong'];
        $district_id = $_POST['quan'];
        $total = isset($_POST['total']) ? (int) str_replace('.', '', $_POST['total']) : 0;
        $total_order = isset($_POST['total_order']) ? (int) str_replace('.', '', $_POST['total_order']) : 0;
        $category_names = [];

        if (!empty($_POST['category_id']) && is_array($_POST['category_id'])) {
            foreach ($_POST['category_id'] as $category_id) {
                $category_name = $category->getNameById($category_id);
                if ($category_name) {
                    $category_names[] = $category_name; // Lưu vào mảng
                }
            }
        }

        // Kiểm tra nếu có giỏ hàng
        $cart_data = isset($_COOKIE['cart_data']) ? json_decode($_COOKIE['cart_data'], true) : [];

        // Lưu danh sách category vào giỏ hàng
        $cart_data['category_names'] = $category_names;

        // Lưu lại vào cookie (nếu cần)
        setcookie('cart_data', json_encode($cart_data), time() + 3600, "/");

        // Debug
        //         echo "<pre>";
        //         print_r($total);
        //         echo "</pre>";
        // die();
        if ($cart_data === null) {
            die("Lỗi: Không thể giải mã JSON từ cookie.");
        };

        $result = self::createOrderGHN($name, $phone, $address, $ward_id, $district_id, $total, $cart_data);

        if ($result && isset($result['response']['data']['order_code'])) {

            // NotificationHelper::success('ordered', "Đơn hàng đã tạo thành công! Mã đơn: " . $result['response']['data']['order_code']);
            NotificationHelper::success('ordered', "Đơn hàng đã tạo thành công!");

        } else {
            NotificationHelper::error('order', "Không thể tạo đơn hàng");

            die();
        }

        $data['order_code'] = $result['response']['data']['order_code'];
        // var_dump($data);
        // die();
        $order = new Order();
        $order_detail = new OrderDetail();

        $results = $order->createOrder($data);
        $product_id_array = $_POST['product_id'];
        $qtyArray = $_POST['qty'];
        $priceArray = $_POST['price'];

        for ($i = 0; $i < count($qtyArray); $i++) {
            $qty = (int) $qtyArray[$i]; // Chuyển thành số nguyên
            $price = (float) trim($priceArray[$i]); // Chuyển thành số thực
            $product_id = isset($product_id_array[$i]) ? (int) $product_id_array[$i] : 0;

            if ($product_id === 0) {
                die("Lỗi: product_id không hợp lệ");
            }

            $data_order_detail = [
                'order_id' => $results,
                'product_id' => $product_id,
                'quantity' => $qty,
                'price' => $price,
            ];

            // Thêm vào bảng order_detail
            $action = $order_detail->createOrderDetail($data_order_detail);

            // Trừ số lượng tồn kho (ÉP KIỂU)
            $product = new Product();
            $product->decreaseStock((int) $product_id, quantity: (int) $qty);
        }

        // Lấy phương thức thanh toán từ POST
        $paymentMethod = $_POST['payment_method'] ?? null;

        if ($paymentMethod === 'VNPAY') {
            $vnp_TmnCode = $_ENV['vnp_TmnCode']; //Mã định danh merchant kết nối (Terminal Id)
            $vnp_HashSecret = $_ENV['vnp_HashSecret']; //Secret key
            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://127.0.0.1:8081/orders/success";
            $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
            $apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
            //Config input format
            //Expire

            $startTime = date("YmdHis");
            $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

            $vnp_TxnRef = $results; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = 'Thanh toán đơn hàng ' . $results;
            $vnp_OrderType = 250000;
            $vnp_Amount = isset($_POST['total_order']) ? ((int) str_replace('.', '', $_POST['total_order']) * 100) : 0;
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB';
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
            //Add Params of 2.0.1 Version
            $vnp_ExpireDate = $expire;

            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
                "vnp_ExpireDate" => $vnp_ExpireDate

            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
            // }

            //var_dump($inputData);
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array(
                'code' => '00',
                'message' => 'success',
                'data' => $vnp_Url
            );
            if (isset($_POST['redirect'])) {
                $cart = new Cart();
                $cart->clearCart();
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
        } else {

            // Khởi tạo các biến mặc định
            $qrImage = null;
            $errorMessage = null;
            $orderId = $results; // Ví dụ: Mã đơn hàng giả định
            $shippingFee = isset($_POST['shipping_fee']) ? (int) str_replace('.', '', $_POST['shipping_fee']) : 0; // Phí vận chuyển giả định
            $totalAmount = (float) $_POST['total_price_payment']; // Tổng số tiền thanh toán giả định

            if ($paymentMethod === 'Online payment') {
                // Cấu hình cURL để tạo mã QR
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://bio.ziller.vn/api/qr/add",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 2,
                    CURLOPT_TIMEOUT => 10,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: Bearer fdee16f4e42554c44fefba77ef1d733d",
                        "Content-Type: application/json",
                    ),
                    CURLOPT_POSTFIELDS => json_encode(array(
                        'type' => 'text',
                        'data' => '2|99|0364402449|LE THI HUYNH NHU||0|0|' . $totalAmount . '|Thanh toán đơn hàng #' . $orderId . '|transfer_myqr',
                        'background' => 'rgb(255,255,255)',
                        'foreground' => 'rgb(0,0,0)',
                        'logo' => 'https://firebasestorage.googleapis.com/v0/b/vuejs-cb0f7.appspot.com/o/logo.png?alt=media&token=6e90a4aa-c58a-4816-a2aa-e2d7fa239ffd',
                    )),
                ));

                // Thực hiện yêu cầu cURL
                $response = curl_exec($curl);
                $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE); // Lấy mã trạng thái HTTP
                $response = curl_exec($curl);
                if (!$response) {
                    die("Lỗi cURL: " . curl_error($curl));
                } else {
                    echo "<pre>";
                    print_r(json_decode($response, true));
                    echo "</pre>";
                    die();
                }
                // Kiểm tra lỗi cURL
                // if ($response === false) {
                //     $errorMessage = curl_error($curl); // Lấy thông báo lỗi
                // } else {
                //     // Kiểm tra mã trạng thái HTTP
                //     if ($statusCode == 200) {
                //         // Dữ liệu trả về hợp lệ
                //         $qrData = json_decode($response, true); // Giải mã JSON

                //         if (isset($qrData['link'])) {
                //             $qrImage = $qrData['link']; // Lấy đường dẫn đến mã QR
                //         } else {
                //             $errorMessage = "Không tìm thấy mã QR trong phản hồi từ API.";
                //         }
                //     } else {
                //         // Xử lý lỗi nếu API không trả về kết quả thành công
                //         $errorMessage = "Lỗi khi tạo mã QR. HTTP Status: " . $statusCode;
                //     }
                // }

                curl_close($curl); // Đóng cURL
            } elseif ($paymentMethod === 'COD') {
                // Không cần xử lý thêm cho COD
                // Bạn có thể thêm các logic cần thiết cho COD tại đây
            } else {
                // Xử lý trường hợp không có phương thức thanh toán hoặc phương thức không xác định
                $errorMessage = "Không xác định được phương thức thanh toán.";
            }

            $category = new Category();
            $categories = $category->getAllCategoryByStatus();
            $order = new Order();
            $orders = $order->getOneById($orderId);
            $order_detail = new OrderDetail();
            $order_details = $order_detail->getAllOrderDetailByOrderId($orderId);

            // Dữ liệu để render giao diện
            $data = [
                'payment_method' => $paymentMethod,
                'orders' => $orders,
                'qrImage' => $qrImage ?? null, // Truyền dữ liệu mã QR nếu có
                'errorMessage' => $errorMessage ?? null, // Truyền thông báo lỗi nếu có
                'categories' => $categories,
                'order_id' => $orderId,
                'shipping_fee' => $shippingFee,
                'total_amount' => $totalAmount,
                'order_details' => $order_details
            ];
            $cart = new Cart();
            $cart->clearCart();
            // echo '<pre>';
            // var_dump($data['order_details']);
            // exit;
            // Render giao diện
            Header::render($data); // Hiển thị header
            Notification::render();
            NotificationHelper::unset();
            Index::render($data); // Render trang đơn hàng với dữ liệu
            Footer::render(); // Hiển thị footer
        }
    }

    public function success()
    {
        // Kiểm tra và lấy giá trị từ $_GET với fallback tránh lỗi Undefined Index
        $vnp_Amount = $_GET['vnp_Amount'] ?? null;
        $vnp_BankCode = $_GET['vnp_BankCode'] ?? null;
        $vnp_CardType = $_GET['vnp_CardType'] ?? null;
        $vnp_BankTranNo = $_GET['vnp_BankTranNo'] ?? null;
        $vnp_TransactionNo = $_GET['vnp_TransactionNo'] ?? null;
        $vnp_PayDate = $_GET['vnp_PayDate'] ?? null;
        $vnp_OrderInfo = $_GET['vnp_OrderInfo'] ?? null;
        $vnp_TxnRef = $_GET['vnp_TxnRef'] ?? null;
        $vnp_ResponseCode = $_GET['vnp_ResponseCode'] ?? null;

        // Kiểm tra nếu không có mã giao dịch thì dừng xử lý
        if (!$vnp_TxnRef) {
            echo "Mã giao dịch không hợp lệ!";
            return;
        }

        // Kiểm tra mã phản hồi từ VNPAY
        if ($vnp_ResponseCode !== "00") {
            echo "Giao dịch không thành công! Mã lỗi: " . htmlspecialchars($vnp_ResponseCode);
            return;
        }

        // Cập nhật trạng thái thanh toán của đơn hàng
        $order = new Order();
        $order->updatePaymentStatus($vnp_TxnRef, 'Paid');

        // Lấy ngày hiện tại
        $currentDate = date("d/m/Y");

        // Kiểm tra cookie và lấy thông tin người dùng
        $email = null;
        $name = null;

        if (isset($_COOKIE['user'])) {
            $userData = json_decode($_COOKIE['user'], true);

            if (isset($userData['username'], $userData['email'])) {
                $name = $userData['username'];
                $email = $userData['email'];
            } else {
                echo "Thông tin username hoặc email không tồn tại trong cookie.";
            }
        } else {
            echo "Cookie 'user' không tồn tại.";
        }

        // Lấy thông tin đơn hàng
        $id = intval($vnp_TxnRef);
        $orders = $order->getOneById($id);

        $order_detail = new OrderDetail();
        $order_details = $order_detail->getAllOrderDetailByOrderId($id);

        $data1 = [
            'orders' => $orders,
            'order_details' => $order_details
        ];

        // Gửi email xác nhận đơn hàng nếu có đủ thông tin người nhận
        if (!empty($email) && !empty($name)) {
            AuthHelper::sendEmailOrder($email, $name, $id, $vnp_Amount / 100, $currentDate, 'VNPAY', $data1);
        } else {
            echo "Không thể gửi email do thiếu thông tin người nhận.";
        }

        // Truyền dữ liệu và hiển thị giao diện thành công
        $data = [
            'vnp_Amount' => $vnp_Amount,
            'vnp_BankCode' => $vnp_BankCode,
            'vnp_CardType' => $vnp_CardType,
            'vnp_BankTranNo' => $vnp_BankTranNo,
            'vnp_TransactionNo' => $vnp_TransactionNo,
            'vnp_PayDate' => $vnp_PayDate,
            'vnp_OrderInfo' => $vnp_OrderInfo,
            'vnp_TxnRef' => $vnp_TxnRef
        ];

        Success::render($data);
    }

    public function history()
    {
        $category = new Category();
        $categories = $category->getAllCategoryByStatus();

        $order = new Order();
        $id = null;

        // Kiểm tra cookie 'user'
        if (isset($_COOKIE['user'])) {
            $userData = json_decode($_COOKIE['user'], true);

            if (isset($userData['id'])) {
                $id = $userData['id'];
            } else {
                // Chuyển hướng đến trang đăng nhập nếu không có ID trong cookie
                header("Location: /login");
                exit;
            }
        } else {
            // Chuyển hướng đến trang đăng nhập nếu không có cookie
            header("Location: /login");
            exit;
        }

        // Lấy danh sách đơn hàng của người dùng
        $orders = $order->getAllOrderByUserId($id);

        // Nếu không có đơn hàng, hiển thị thông báo
        if (empty($orders)) {
            $orders = [];
        }

        // Phân trang
        $currentPage = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
        $itemsPerPage = 10;
        $totalItems = count($orders);
        $totalPages = ceil($totalItems / $itemsPerPage);

        $currentPage = max(1, min($currentPage, $totalPages));
        $offset = ($currentPage - 1) * $itemsPerPage;
        $pageData = array_slice($orders, $offset, $itemsPerPage);

        // Hiển thị giao diện
        Header::render(['categories' => $categories]);
        Notification::render();
        NotificationHelper::unset();
        History::render($pageData, $currentPage, $itemsPerPage, $totalItems);
        Footer::render();
    }

    public static function detail($id)
    {

        $category = new Category();
        $categories = $category->getAllCategoryByStatus();
        $order = new Order();
        $orders = $order->getOneById($id);
        $order_detail = new OrderDetail();
        $order_details = $order_detail->getAllOrderDetailByOrderId($id);
        $data = [
            'categories' => $categories,
            'orders' => $orders,
            'order_details' => $order_details
        ];
        // echo '<pre>';
        // var_dump($data['order_details']);
        // exit;
        Header::render($data);
        Detail::render($data);
        Footer::render();
    }

    public static function search()
    {

        $category = new Category();
        $categories = $category->getAllCategoryByStatus();

        if (!isset($_GET['keyword']) || $_GET['keyword'] == '') {
            header('location: /orders/history');
            exit();
        }

        $keyword = urldecode($_GET['keyword']);
        $order = new Order();
        $id = null;

        if (isset($_COOKIE['user'])) {
            $userData = json_decode($_COOKIE['user'], true);

            if (isset($userData['id'])) {
                $id = $userData['id'];
            } else {
                header("Location: /login");
                exit;
            }
        } else {
            header("Location: /login");
            exit;
        }

        // Lấy danh sách đơn hàng của người dùng
        $orders = $order->getAllOrderByUserIdAndStatus($id, $keyword);

        if (empty($orders)) {
            $orders = [];
        }

        // Phân trang
        $currentPage = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
        $itemsPerPage = 10;
        $totalItems = count($orders);
        $totalPages = ceil($totalItems / $itemsPerPage);

        $currentPage = max(1, min($currentPage, $totalPages));
        $offset = ($currentPage - 1) * $itemsPerPage;
        $pageData = array_slice($orders, $offset, $itemsPerPage);

        // echo "<pre>";
        // var_dump($data);

        Header::render(['categories' => $categories]);
        Notification::render();
        NotificationHelper::unset();
        Search::render($pageData, $currentPage, $itemsPerPage, $totalItems);
        Footer::render();
    }

    public static function createOrderGHN($name, $phone, $address, $ward, $district, $total, $cart_data)
    {
        $orderData = [
            "payment_type_id" => 2,
            "note" => "Được kiểm tra hàng",
            "required_note" => "CHOXEMHANGKHONGTHU",
            "from_name" => "Bookly",
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
            "content" => "Thông tin đơn hàng của Bookly",
            "coupon" => null,
            "weight" => 0,
            "insurance_value" => (int) $total < 500000 ? (int) $total : 500000,
            "service_id" => 0,
            "service_type_id" => 2,
            "items" => [],
        ];

        // Kiểm tra dữ liệu danh mục
        $category_names = $cart_data['category_names'] ?? [];

        // Lặp và gán danh mục vào sản phẩm
        if (isset($cart_data['buy']) && is_array($cart_data['buy'])) {
            $index = 0; // Biến để duyệt danh mục
            foreach ($cart_data['buy'] as $key => &$cart) {
                $cart['category_name'] = $category_names[$index]['category_name'] ?? 'Unknown';
                $index++; // Tăng index để lấy danh mục tiếp theo
            }
            unset($cart); // Tránh lỗi tham chiếu sau foreach
        }

        if (isset($cart_data['buy']) && is_array($cart_data['buy'])) {
            foreach ($cart_data['buy'] as $cart) {
                $weight = isset($cart['weight']) ? (int) round($cart['weight']) : 1;
                $length = isset($cart['length']) ? (int) $cart['length'] : 10;
                $width = isset($cart['width']) ? (int) $cart['width'] : 10;
                $height = isset($cart['height']) ? (int) $cart['height'] : 10;

                $category = ['level1' => $cart['category_name']];

                $product = [
                    'name' => $cart['name'],
                    'code' => (string) $cart['id'],
                    'quantity' => (int) $cart['qty'],
                    'price' => (int) $cart['price'],
                    'length' => $length,
                    'width' => $width,
                    'height' => $height,
                    'weight' => $weight,
                    'category' => $category,
                ];

                // Thêm sản phẩm vào danh sách trước khi tính tổng trọng lượng
                $orderData['items'][] = $product;

                // Cập nhật tổng trọng lượng sau khi thêm sản phẩm
                $orderData['weight'] = array_sum(array_column($orderData['items'], 'weight'));
            }
        }




        // echo "<pre>";
        // var_dump($orderData);
        // echo $orderData['weight'];
        // die();

        try {
            $ghnService = new GHNService();
            $response = $ghnService->createShippingOrder($orderData);

            if (!isset($response['status'])) {
                echo "Lỗi: API không trả về status.";
                return null;
            }

            if ($response['status'] !== 200 || !isset($response['response']['code']) || $response['response']['code'] !== 200) {
                echo "Lỗi khi tạo đơn hàng: " . ($response['response']['message_display'] ?? 'Không có thông báo lỗi.');
                var_dump($response);
                return null;
            }

            return $response;
        } catch (\Exception $e) {
            echo 'Lỗi Exception: ' . $e->getMessage();
            return null;
        }
    }

    public static function cancel($id)
    {
        $order = new Order();
        $data_order = $order->getOne($id);
        $cancel_reasons = [
            "Tôi không muốn mua nữa",
            "Tìm thấy giá tốt hơn ở nơi khác",
            "Thời gian giao hàng quá lâu",
            "Đặt nhầm sản phẩm",
            "Shop không phản hồi yêu cầu",
            "Lý do khác"
        ];
        $data = [
            'order' => $data_order,
            'cancel_reasons' => $cancel_reasons
        ];
        // var_dump($data);
        // header('location: /orders/history');
        Header::render();
        Cancel::render($data);
        Footer::render();
    }

    public function handleCancelOrder()
    {
        try {
            $order = new Order();

            if (!isset($_POST['order_id'], $_POST['order_code'])) {
                throw new Exception('Dữ liệu không hợp lệ');
            }

            $order_id = (int) $_POST['order_id'];
            $order_code = trim($_POST['order_code']);

            $result = $order->getOneOrderByIdAndStatus($order_id);
            if (!$result) {
                throw new Exception('Đơn hàng không hợp lệ hoặc không thể hủy');
            }

            $ghn = new GHNService();
            $ghn_response = $ghn->cancelOrderGHN($order_code);

            if (empty($ghn_response['success']) || !$ghn_response['success']) {
                throw new Exception('GHN từ chối hủy đơn: ' . ($ghn_response['message'] ?? 'Lỗi không xác định'));
            }

            if (!$order->updateStatus($order_id, 'Cancelled')) {
                throw new Exception('Không thể cập nhật trạng thái đơn hàng');
            }

            NotificationHelper::success('order', 'Đơn hàng đã được hủy thành công');
            header('Location: /orders/history');
            exit;
        } catch (Exception $e) {
            NotificationHelper::error('order', $e->getMessage());
            header('Location: /orders/history');
            exit;
        }
    }
}
