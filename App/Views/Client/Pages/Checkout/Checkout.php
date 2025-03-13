<?php

namespace App\Views\Client\Pages\Checkout;

use App\Views\BaseView;

class Checkout extends BaseView
{
    public static function render($data = null)
    {
        $apiToken = $_ENV['ghn_api_token'];
        $ghn_shop_id = $_ENV['ghn_shop_id'];

?>
        <style>
            .css_select_div {
                text-align: center;
                display: flex;
                justify-content: space-between;
            }

            .css_select {
                width: 30%;
                padding: 5px;
                margin: 5px;
                border: solid 1px #686868;
                border-radius: 5px;
            }

            /* Form Styling */
            .form-label {
                color: #333;
            }

            .form-control,
            .form-select {
                border-radius: 5px;
                border: 1px solid #d1d1d1;
                padding: 10px;
            }

            .form-control:focus,
            .form-select:focus {
                border-color: #41403E;
                box-shadow: none !important;
            }

            td,
            th {
                white-space: nowrap;
            }

            .center {
                text-align: center;
            }

            .wrap {
                white-space: normal;
                word-wrap: break-word;
            }
        </style>

        <section id="billboard" class="position-relative d-flex flex-column align-items-center justify-content-center py-5 bg-light-gray"
            style="background-image: url(<?= APP_URL ?>/public/assets/client/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 300px;">

            <h1 class="text-center">Thanh toán</h1>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-black">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-underline">Trang chủ</a></li>
                    <li class="breadcrumb-item active text-black" aria-current="page">Thanh toán</li>
                </ol>
            </nav>

        </section>

        <?php
        // Lấy dữ liệu từ cookie
        $cart = isset($_COOKIE['cart_data']) ? json_decode($_COOKIE['cart_data'], true) : ['info' => ['number_order' => 0, 'total' => 0]];
        $user = isset($_COOKIE['user']) ? json_decode($_COOKIE['user'], true) : [];
        // echo "<pre>";
        // var_dump($cart);
        // exit;
        // Kiểm tra nếu có dữ liệu trong mảng 'buy'
        if (isset($cart) && !empty($cart)) {

        ?>

            <!-- Giao diện Thanh Toán -->
            <!-- <h1 class="text-center my-3" style="color: var(--primary-color)">Thanh toán</h1> -->
            <div class="container p-5 mb-5">
                <form action="/orders" method="POST" id="myForm">
                    <div class="row">
                        <!-- Thông tin người mua -->
                        <div class="col-md-6 left-panel">
                            <h3>Thông Tin Người Mua</h3>
                            <input type="hidden" name="method" id="" value="POST">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Họ và Tên</label>
                                <input type="hidden" class="form-control" name="user_id" value="<?= $user['id'] ?>">
                                <input type="text" class="form-control" id="fullName" value="<?= $user['name'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Số Điện Thoại</label>
                                <input type="tel" class="form-control" name="phone_number" id="phone">
                                <div id="phone-error" style="display: none; color: red">Số điện thoại chỉ 10 chữ số</div>
                            </div>
                            <h3>Địa Chỉ Giao Hàng</h3>
                            <div class="css_select_div mb-3">
                                <select class="css_select form-select" id="tinh" name="tinh" title="Chọn Tỉnh Thành">
                                    <option value="0">Tỉnh Thành</option>
                                </select>
                                <span id="tinh-error" style="color: red; display: none;"></span>

                                <select class="css_select form-select" id="quan" name="quan" title="Chọn Quận Huyện">
                                    <option value="0">Quận Huyện</option>
                                </select>
                                <span id="quan-error" style="color: red; display: none;"></span>

                                <select class="css_select form-select" id="phuong" name="phuong" title="Chọn Phường Xã">
                                    <option value="0">Phường Xã</option>
                                </select>
                                <span id="phuong-error" style="color: red; display: none;"></span>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control"  id="address">
                                <input type="hidden" name="address" id="hiddenAddress">
                                <span id="address-error" style="color: red; display: none;"></span>
                            </div>

                            <h3>Phương Thức Thanh Toán</h3>
                            <div class="mb-3">
                                <label class="form-label">Chọn Phương Thức Thanh Toán</label>
                                <select class="form-select" id="paymentMethod" name="payment_method">
                                    <option value="">Chọn phương thức</option>
                                    <option value="COD">Thanh toán khi nhận hàng</option>
                                    <!-- <option value="Online payment">Thanh toán MOMO</option> -->
                                    <option value="VNPAY">Thanh toán VNPAY</option>
                                </select>
                                <span id="payment-error" style="color: red; display: none;"></span>
                            </div>
                        </div>
                        <input type="hidden" name="status" value="Pending">
                        <input type="hidden" name="payment_status" value="Unpaid">




                        <!-- Tóm Tắt Đơn Hàng -->
                        <div class="col-md-6 right-panel">
                            <h3>Tóm Tắt Đơn Hàng</h3>
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="fw-bold">Sản Phẩm</th>
                                        <th class="fw-bold">Số Lượng</th>
                                        <th class="fw-bold">Đơn Giá</th>
                                        <th class="fw-bold">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php


                                    $totalPrice = 0; // Khởi tạo biến tổng giá trị

                                    // Lặp qua các sản phẩm trong mảng 'buy'
                                    // Kiểm tra nếu giỏ hàng có sản phẩm
                                    if (isset($cart['buy']) && is_array($cart['buy'])) {
                                        foreach ($cart['buy'] as $product) {
                                            $product_name = $product['name'];
                                            $category_id = $product['category_id'];
                                            $product_id = $product['id'];
                                            $qty = $product['qty'];
                                            $price_default = $product['price'] - $product['discount_price']; // Giá thực tế sau khi giảm giá
                                            $productTotal = $qty * $price_default; // Tổng giá trị sản phẩm

                                            $totalPrice += $productTotal; // Cộng vào tổng đơn hàng

                                            // Định dạng giá trị
                                            $formattedPrice = number_format($price_default, 0, ',', '.') . ' đ';
                                            $formattedTotal = number_format($productTotal, 0, ',', '.') . ' đ';

                                            echo    "<tr>
                                                        <td class='wrap'>$product_name</td>
                                                        <td class='center'>$qty</td>
                                                        <td>$formattedPrice</td>
                                                        <td>$formattedTotal</td>
                                                        <td><input type='hidden' name='product_id[]' value='$product_id'></td>
                                                        <td><input type='hidden' name='category_id[]' value='$category_id'></td>
                                                        <td><input type='hidden' name='qty[]' value='$qty'></td>
                                                        <td><input type='hidden' name='price[]' value='$price_default '></td>
                                                    </tr>";
                                        }
                                    }

                                    // Hiển thị tổng cộng

                                    $total_order = number_format($totalPrice, 0, ',', '.') . ' đ';
                                    $total_price_payment = number_format($totalPrice, 0, '', ''); // Không có dấu chấm phân cách

                                    echo "<input type='hidden' name='total_price_payment' id='total_price_payment' value='$total_price_payment'>";

                                    echo    "
                                                <tr>
                                                    <td class='text-start fw-bold'>Phí vận chuyển:</td>
                                                    <td colspan='3'><strong id='shipping_fee'>0 đ</strong></td>
                                                    <td colspan='3'><input type='hidden' id='shipping_fee_input' name='shipping_fee' value='0'/></td>
                                                </tr>
                                                <tr>
                                                    <td class='text-start fw-bold'>Tổng Cộng:</td>
                                                    <td colspan='3'><strong id='total_price'>$total_order</strong></td>
                                                    <td colspan='3'><input type='hidden' name='total' value='$total_order'/></td>
                                                    <td colspan='3'><input type='hidden' id='total_order_input' name='total_order' value='$total_order'/></td>
                                                </tr>";


                                    ?>
                                </tbody>
                            </table>

                            <button type="submit" class="btn btn-primary" name="redirect" id="redirect">Xác Nhận Thanh Toán</button>
                        </div>
                </form>

            </div>
            </div>


            <section id="instagram">
                <div class="container">
                    <div class="text-center mb-4">
                        <h3>Instagram</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item1.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item2.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item3.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item4.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item5.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-2">
                            <figure class="instagram-item position-relative rounded-3">
                                <a href="https://templatesjungle.com/" class="image-link position-relative">
                                    <div class="icon-overlay position-absolute d-flex justify-content-center">
                                        <svg class="instagram">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </div>
                                    <img src="<?= APP_URL ?>/public/assets/client/images/insta-item6.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <script src="https://esgoo.net/scripts/jquery.js"></script>




            <script>
                document.getElementById("myForm").addEventListener("submit", function(event) {
                    let isValid = true; // Biến kiểm tra tổng thể

                    // Kiểm tra số điện thoại (phải có đúng 10 chữ số)
                    let phone = document.getElementById("phone").value.trim();
                    let phoneError = document.getElementById("phone-error");

                    if (phone === "") {
                        phoneError.innerText = "Số điện thoại không được để trống!";
                        phoneError.style.display = "block";
                        isValid = false;
                    } else if (!/^\d{10}$/.test(phone)) {
                        phoneError.innerText = "Số điện thoại phải có đúng 10 chữ số!";
                        phoneError.style.display = "block";
                        isValid = false;
                    } else {
                        phoneError.style.display = "none";
                    }

                    // Kiểm tra tỉnh, quận, phường
                    let tinh = document.getElementById("tinh").value;
                    let tinhError = document.getElementById("tinh-error");
                    let quan = document.getElementById("quan").value;
                    let quanError = document.getElementById("quan-error");
                    let phuong = document.getElementById("phuong").value;
                    let phuongError = document.getElementById("phuong-error");

                    if (tinh === "0") {
                        tinhError.innerText = "Vui lòng chọn tỉnh thành!";
                        tinhError.style.display = "block";
                        isValid = false;
                    } else {
                        tinhError.style.display = "none";
                    }

                    if (quan === "0") {
                        quanError.innerText = "Vui lòng chọn quận huyện!";
                        quanError.style.display = "block";
                        isValid = false;
                    } else {
                        quanError.style.display = "none";
                    }

                    if (phuong === "0") {
                        phuongError.innerText = "Vui lòng chọn phường xã!";
                        phuongError.style.display = "block";
                        isValid = false;
                    } else {
                        phuongError.style.display = "none";
                    }


                    let address = document.getElementById("address").value.trim();
                    let addressError = document.getElementById("address-error");

                    if (address === "") {
                        addressError.innerText = "Địa chỉ không được để trống!";
                        addressError.style.display = "block";
                        isValid = false;
                    } else if (address.length < 5) {
                        addressError.innerText = "Địa chỉ phải có ít nhất 5 ký tự!";
                        addressError.style.display = "block";
                        isValid = false;
                    } else {
                        addressError.style.display = "none";
                    }

                    // Kiểm tra phương thức thanh toán
                    let paymentMethod = document.getElementById("paymentMethod").value;
                    let paymentError = document.getElementById("payment-error");

                    if (paymentMethod === "") {
                        paymentError.innerText = "Vui lòng chọn phương thức thanh toán!";
                        paymentError.style.display = "block";
                        isValid = false;
                    } else {
                        paymentError.style.display = "none";
                    }

                    // Nếu có lỗi, ngăn form submit
                    if (!isValid) {
                        event.preventDefault();
                    }
                });

                // Hàm cập nhật input ẩn với giá trị mới nhất của total_price
                function updateTotalOrder() {
                    let totalPriceElement = document.getElementById('total_price');
                    let totalOrderInput = document.getElementById('total_order_input');

                    let shippingFeeElement = document.getElementById('shipping_fee');
                    let shippingFeeInput = document.getElementById('shipping_fee_input');

                    if (totalPriceElement && totalOrderInput) {
                        totalOrderInput.value = totalPriceElement.innerText.replace(' đ', '').trim();
                    }

                    if (shippingFeeElement && shippingFeeInput) {
                        shippingFeeInput.value = shippingFeeElement.innerText.replace(' đ', '').trim();
                    }
                }


                // Gọi updateTotalOrder mỗi khi giá trị total_price thay đổi (ví dụ: sau khi tính phí ship)
                setInterval(updateTotalOrder, 500); // Cập nhật mỗi 0.5 giây (có thể tối ưu hơn tùy vào event)
                const apiToken = "<?php echo $apiToken; ?>";
                const ghn_shop_id = "<?php echo $ghn_shop_id; ?>";

                function getCookie(name) {
                    const value = `; ${document.cookie}`;
                    const parts = value.split(`; ${name}=`);
                    if (parts.length === 2) return decodeURIComponent(parts.pop().split(';').shift()); // Thêm decodeURIComponent
                    return null;
                }



                // console.log(cart_data);               

                // Gọi API danh sách tỉnh/thành
                async function getProvinces() {
                    const response = await fetch("https://online-gateway.ghn.vn/shiip/public-api/master-data/province", {
                        method: "GET",
                        headers: {
                            "Content-Type": "application/json",
                            "Token": apiToken
                        }
                    });

                    const data = await response.json();
                    return data.data; // Trả về danh sách tỉnh/thành
                }

                // Load danh sách tỉnh vào select
                async function loadProvinces() {
                    const provinces = await getProvinces();
                    let selectTinh = document.getElementById("tinh");

                    selectTinh.innerHTML = `<option value="0">Tỉnh Thành</option>`;
                    provinces.forEach(province => {
                        let option = document.createElement("option");
                        option.value = province.ProvinceID;
                        option.textContent = province.ProvinceName;
                        selectTinh.appendChild(option);
                    });
                }

                document.addEventListener("DOMContentLoaded", loadProvinces);

                async function getDistricts(provinceId) {
                    const response = await fetch("https://online-gateway.ghn.vn/shiip/public-api/master-data/district", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "Token": apiToken
                        },
                        body: JSON.stringify({
                            province_id: Number(provinceId) // 🔹 Đảm bảo là số
                        })
                    });

                    const data = await response.json();
                    if (data.code !== 200) {
                        console.error("Lỗi khi lấy danh sách quận/huyện:", data.message);
                        return [];
                    }
                    return data.data;
                }

                // Xử lý khi chọn tỉnh/thành
                document.getElementById("tinh").addEventListener("change", async function() {
                    let provinceId = this.value;
                    let selectDistrict = document.getElementById("quan");

                    if (provinceId == "0") {
                        selectDistrict.innerHTML = `<option value="0">Quận Huyện</option>`;
                        return;
                    }

                    const districts = await getDistricts(provinceId);
                    selectDistrict.innerHTML = `<option value="0">Quận Huyện</option>`;

                    districts.forEach(district => {
                        let option = document.createElement("option");
                        option.value = district.DistrictID;
                        option.textContent = district.DistrictName;
                        selectDistrict.appendChild(option);
                    });
                });

                async function getWards(districtId) {
                    const response = await fetch("https://online-gateway.ghn.vn/shiip/public-api/master-data/ward", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "Token": apiToken
                        },
                        body: JSON.stringify({
                            district_id: Number(districtId)
                        })
                    });

                    const data = await response.json();
                    return data.data;
                }

                // Xử lý khi chọn quận/huyện
                document.getElementById("quan").addEventListener("change", async function() {
                    let districtId = this.value;
                    let selectWard = document.getElementById("phuong");

                    if (districtId == "0") {
                        selectWard.innerHTML = `<option value="0">Phường Xã</option>`;
                        return;
                    }

                    const wards = await getWards(districtId);
                    selectWard.innerHTML = `<option value="0">Phường Xã</option>`;

                    wards.forEach(ward => {
                        let option = document.createElement("option");
                        option.value = ward.WardCode;
                        option.textContent = ward.WardName;
                        selectWard.appendChild(option);
                    });
                });
                async function calculateShipping(districtId, wardCode, weight = 200, serviceType = 2) {
                    let cartDataCookie = getCookie("cart_data");
                    let cart_data = {
                        buy: []
                    }; // Default empty cart

                    try {
                        if (cartDataCookie) {
                            cart_data = JSON.parse(cartDataCookie);
                            console.log("🛒 Dữ liệu giỏ hàng đã parse:", cart_data);
                        }
                    } catch (error) {
                        console.error("❌ Lỗi parse JSON:", error, cartDataCookie);
                        return "Không thể tính phí";
                    }

                    if (cart_data.buy && typeof cart_data.buy === "object") {
                        cart_data.buy = Object.values(cart_data.buy);
                    }

                    if (!Array.isArray(cart_data.buy) || cart_data.buy.length === 0) {
                        console.warn("⚠️ Giỏ hàng trống hoặc dữ liệu không hợp lệ!");
                        return "Không thể tính phí";
                    }

                    const items = cart_data.buy.map(cart => ({
                        name: cart.name,
                        code: String(cart.id),
                        quantity: Number(cart.qty),
                        price: Number(cart.price),
                        length: cart.length ? Number(cart.length) : 10,
                        width: cart.width ? Number(cart.width) : 10,
                        height: cart.height ? Number(cart.height) : 10,
                        weight: cart.weight ? Number(cart.weight) : 200
                    }));

                    // ✅ Calculate total weight
                    const totalWeight = items.reduce((sum, item) => sum + item.weight * item.quantity, 0);

                    console.log("📦 Đang tính phí vận chuyển cho:", {
                        districtId,
                        wardCode,
                        weight: totalWeight,
                        cart_total: cart_data?.info?.total || 0
                    });

                    try {
                        const response = await fetch("https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "Token": apiToken,
                                "ShopId": ghn_shop_id
                            },
                            body: JSON.stringify({
                                service_type_id: serviceType,
                                from_district_id: 1574,
                                from_ward_code: "550304",
                                to_district_id: Number(districtId),
                                to_ward_code: wardCode,
                                weight: totalWeight, // ✅ Use calculated weight
                                length: 10,
                                width: 10,
                                height: 10,
                                insurance_value: Math.min(cart_data?.info?.total || 0, 500000),
                                items: items
                            })
                        });

                        const data = await response.json();

                        if (data.code !== 200) {
                            console.error("❌ Lỗi GHN:", data.message);
                            return "Không thể tính phí";
                        }

                        return data.data.total;
                    } catch (error) {
                        console.error("❌ Lỗi khi gọi API GHN:", error);
                        return "Không thể tính phí";
                    }
                }




                // Xử lý khi chọn địa chỉ đầy đủ
                document.getElementById("phuong").addEventListener("change", async function() {
                    let districtId = document.getElementById("quan").value;
                    let wardCode = this.value;
                    let totalPrice = parseInt(document.getElementById("total_price_payment").value); // Lấy giá trị tổng ban đầu

                    if (districtId != "0" && wardCode != "0") {
                        const shippingFee = await calculateShipping(districtId, wardCode);
                        document.getElementById("shipping_fee").textContent = shippingFee.toLocaleString("vi-VN") + " đ";

                        let total = totalPrice + shippingFee; // Cộng phí vận chuyển vào tổng tiền
                        document.getElementById("total_price").textContent = total.toLocaleString("vi-VN") + " đ";
                    }
                });

                function updateHiddenAddress() {
                    // Lấy giá trị từ các trường
                    const addressDetail = $("#address").val(); // Địa chỉ chi tiết do người dùng nhập
                    const tinh = $("#tinh option:selected").text();
                    const quan = $("#quan option:selected").text();
                    const phuong = $("#phuong option:selected").text();

                    // Kiểm tra giá trị và ghép địa chỉ
                    const fullAddress = `${addressDetail} ${tinh !== "Tỉnh Thành" ? tinh : ""} ${quan !== "Quận Huyện" ? quan : ""} ${phuong !== "Phường Xã" ? phuong : ""}`;

                    // Cập nhật vào ô input ẩn
                    $("#hiddenAddress").val(fullAddress.trim());
                }

                // Gọi hàm này khi người dùng thay đổi hoặc nhập vào bất kỳ trường nào
                $("#tinh, #quan, #phuong, #address").on("change keyup", function() {
                    updateHiddenAddress();
                });


                document.getElementById("myForm").addEventListener("submit", function(event) {
                    const phoneInput = document.getElementById("phone");
                    const errorDiv = document.getElementById("phone-error");
                    const phonePattern = /^\d{10}$/;

                    // Kiểm tra số điện thoại
                    if (!phonePattern.test(phoneInput.value)) {
                        // Nếu số điện thoại không hợp lệ, hiển thị lỗi và ngừng gửi form
                        errorDiv.style.display = "block";
                        event.preventDefault(); // Ngừng hành động gửi form
                    } else {
                        // Nếu số điện thoại hợp lệ, ẩn thông báo lỗi (nếu có)
                        errorDiv.style.display = "none";
                    }
                });

                function updateHiddenAddress() {
                    // Lấy giá trị từ các trường
                    const addressDetail = $("#address").val(); // Địa chỉ chi tiết do người dùng nhập
                    const tinh = $("#tinh option:selected").text();
                    const quan = $("#quan option:selected").text();
                    const phuong = $("#phuong option:selected").text();

                    // Kiểm tra giá trị và ghép địa chỉ
                    const fullAddress = `${addressDetail} ${tinh !== "Tỉnh Thành" ? tinh : ""} ${quan !== "Quận Huyện" ? quan : ""} ${phuong !== "Phường Xã" ? phuong : ""}`;

                    // Cập nhật vào ô input ẩn
                    $("#hiddenAddress").val(fullAddress.trim());
                }

                // Gọi hàm này khi người dùng thay đổi hoặc nhập vào bất kỳ trường nào
                $("#tinh, #quan, #phuong, #address").on("change keyup", function() {
                    updateHiddenAddress();
                });
            </script>
<?php
        }
    }
}
