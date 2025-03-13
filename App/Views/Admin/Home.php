<?php

namespace App\Views\Admin;

use App\Views\BaseView;

class Home extends BaseView
{
    public static function render($data = null)
    {

?>

        <div class="container">
            <div class="page-inner">
                <div
                    class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    <div>
                        <h3 class="fw-bold mb-3">Dashboard</h3>
                    </div>
                    <div class="ms-md-auto py-2 py-md-0">
                        <!-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                        <a href="#" class="btn btn-primary btn-round">Add Customer</a> -->
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center py-3 rounded">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i> <?= $data['total_user'] ?></h1>
                                <h6 class="text-white">Người dùng</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center py-3 rounded">
                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i> <?= $data['total_category'] ?></h1>
                                <h6 class="text-white">Loại sản phẩm</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center py-3 rounded">
                                <h1 class="font-light text-white"><i class="fa-brands fa-product-hunt"></i> <?= $data['total_product'] ?></h1>
                                <h6 class="text-white">Sản phẩm</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center py-3 rounded">
                                <h1 class="font-light text-white"><i class="mdi mdi-comment-processing"></i> <?= $data['total_comment'] ?></h1>
                                <h6 class="text-white">Bình luận</h6>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card p-5">
                            <div class="card-body">
                                <h4 class="card-title">Thống kê sản phẩm theo loại</h4>
                            </div>
                            <canvas id="product_by_category"></canvas>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card p-5">
                            <div class="card-body ">
                                <h4 class="card-title">Thống kê 5 sản phẩm được bình luận nhiều nhất</h4>
                            </div>
                            <canvas id="comment_by_product"></canvas>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card p-5">
                        <div class="card-body">
                            <h4 class="card-title">Thông kê doanh thu theo tháng</h4>
                        </div>
                        <canvas id="revenue_by_month"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <script>
                function productByCategoryChart() {
                    var php_data = <?= json_encode($data['product_by_category']) ?>;
                    console.log(php_data);
                    var labels = [];
                    var data = [];

                    for (let i of php_data) {
                        console.log(i);
                        labels.push(i.category_name);
                        data.push(i.count);
                    }

                    console.log(labels);
                    console.log(data);

                    const ctx = document.getElementById('product_by_category');

                    new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Số lượng sản phẩm',
                                data: data,
                                borderWidth: 1
                            }]
                        },
                    });
                }

                function commentByProductChart() {
                    var php_data = <?= json_encode($data['comment_by_product']) ?>;
                    console.log(php_data);
                    var labels = [];
                    var data = [];

                    for (let i of php_data) {
                        console.log(i);
                        labels.push(i.product_name);
                        data.push(i.count);
                    }

                    console.log(labels);
                    console.log(data);

                    const ctx = document.getElementById('comment_by_product');

                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Số lượng bình luận',
                                data: data,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 205, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(201, 203, 207, 0.2)'
                                ],
                                borderColor: [
                                    'rgb(255, 99, 132)',
                                    'rgb(255, 159, 64)',
                                    'rgb(255, 205, 86)',
                                    'rgb(75, 192, 192)',
                                    'rgb(54, 162, 235)',
                                    'rgb(153, 102, 255)',
                                    'rgb(201, 203, 207)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }

                function revenueByMonthChart() {
                    var php_data = <?= json_encode($data['revenue_by_month']) ?>;

                    console.log("Dữ liệu từ PHP:", php_data);
                    var labels = [];
                    var data = [];

                    for (let i of php_data) {
                        labels.push("Tháng " + i.month);
                        data.push(i.revenue);
                    }

                    console.log("Labels:", labels);
                    console.log("Data:", data);

                    const ctx = document.getElementById('revenue_by_month');

                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Doanh thu (VND)',
                                data: data,
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 2,
                                fill: true
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'top',
                                }
                            },
                            scales: {
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Tháng'
                                    }
                                },
                                y: {
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Doanh thu (VND)'
                                    }
                                }
                            }
                        }
                    });
                }

                productByCategoryChart();
                commentByProductChart();
                revenueByMonthChart()
            </script>
<?php

    }
}

?>