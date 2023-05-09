<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng điều khiển - Runner Inn</title>
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css" integrity="sha512-fXnjLwoVZ01NUqS/7G5kAnhXNXat6v7e3M9PhoMHOTARUMCaf5qNO84r5x9AFf5HDzm3rEZD8sb/n6dZ19SzFA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="/asset/css/admin.css">
    <link rel="icon" href="../img/cropped-fav-32x32.png">

</head>

<body>
    <div class="wrapper">
        <div class="left">
            <div class="sidebar">
                <div class="logo">
                    <h1>Runner Inn</h1>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link">
                            <i class="fa-solid fa-gauge"></i>
                            <p>Bảng điều khiển</p>
                        </a>
                    </li>
                    <li>
                        <a href="profile.php" class="nav-link">
                            <i class="fa-solid fa-user"></i>
                            <p>hồ sơ</p>
                        </a>
                    </li>
                    <li>
                        <a href="management.php" class="nav-link">
                            <i class="fa-solid fa-bars-progress"></i>
                            <p>quản lý</p>
                        </a>
                    </li>
                    <li>
                        <a href="map.php" class="nav-link">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <p>bản đồ</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <header class="header">
                <div class="expand">
                    <div class="expand-left">
                        <p>Bảng điều khiển</p>
                        <i class="fa-solid fa-palette"></i>
                        <i class="fa-solid fa-earth-americas"></i>
                        <a><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</a>
                    </div>
                    <div class="expand-right">
                        <a href=""><img src="/asset/img/sidebar.jpg" alt=""></a>
                        <p><a href="admin.php">Đăng xuất</a></p>
                        <i class="fa-solid fa-gear"></i>
                        <i class="fa-solid fa-bell"></i>
                    </div>
                </div>
            </header>
            <main class="content-page">
                <div class="content">
                    <div class="row">
                        <div class="col" style="padding-left: 0;">
                            <div class="card-box">
                                <i class="fa-solid fa-layer-group"></i>
                                <h6>đơn hàng</h6>
                                <h3><span id="counter1">1,587</span></h3>
                                <span class="badge">+11%</span>
                                <span class="muted">So với quý trước</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-box">
                                <i class="fa-brands fa-cc-paypal"></i>
                                <h6>doanh thu</h6>
                                <h3><span id="counter2">55,550,000</span>₫</h3>
                                <span class="badge" style="background-color: rgb(255 93 72);">-23%</span>
                                <span class="muted">So với quý trước</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-box">
                                <i class="fa-solid fa-chart-simple"></i>
                                <h6>giá trung bình</h6>
                                <h3><span id="counter3">7,000,000</span>₫</h3>
                                <span class="badge" style="background-color: rgb(255 122 163);">0%</span>
                                <span class="muted">So với quý trước</span>
                            </div>
                        </div>
                        <div class="col" style="padding-right: 0;">
                            <div class="card-box">
                                <i class="fa-solid fa-rocket"></i>
                                <h6>sản phẩm đã bán</h6>
                                <h3 id="counter4">2,354</h3>
                                <span class="badge" style="background-color: rgb(241 181 61)">+30%</span>
                                <span class="muted">So với năm ngoái</span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="justify-content: space-between;">
                        <div class="col-md" style="width: calc(100%/1.55);">
                            <div class="card-box">
                                <h4>Thống kê bán hàng</h4>
                                <div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg" style=" width: calc(100%/3);">
                            <div class="card-box">
                                <h4>Xu hướng hàng tháng</h4>
                                <div>
                                    <canvas id="myCharts"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="width: 30%; padding-left: 0;">
                            <div class="card-box">
                                <h4>Hộp thư đến</h4>
                                <div class="inbox">
                                    <div class="inbox-item">
                                        <img src="/asset/img/sidebar.jpg" alt="">
                                    </div>
                                    <p class="inbox-name">user4</p>
                                    <p class="inbox-text">Nice too meet you</p>
                                    <p class="inbox-date">13:20 PM</p>
                                </div>
                                <div class="inbox">
                                    <div class="inbox-item">
                                        <img src="/asset/img/sidebar.jpg" alt="">
                                    </div>
                                    <p class="inbox-name">user2</p>
                                    <p class="inbox-text">This theme is awesome!</p>
                                    <p class="inbox-date">14:00 PM</p>
                                </div>
                                <div class="inbox">
                                    <div class="inbox-item">
                                        <img src="/asset/img/sidebar.jpg" alt="">
                                    </div>
                                    <p class="inbox-name">user3</p>
                                    <p class="inbox-text">Hey! there I'm available...</p>
                                    <p class="inbox-date">15:40 PM</p>
                                </div>
                                <div class="inbox">
                                    <div class="inbox-item">
                                        <img src="/asset/img/sidebar.jpg" alt="">
                                    </div>
                                    <p class="inbox-name">user1</p>
                                    <p class="inbox-text">I've finished it! See you so...</p>
                                    <p class="inbox-date">16:50 PM</p>
                                </div>
                                <div class="inbox">
                                    <div class="inbox-item">
                                        <img src="/asset/img/sidebar.jpg" alt="">
                                    </div>
                                    <p class="inbox-name">user5</p>
                                    <p class="inbox-text">Hey! there I'm available...</p>
                                    <p class="inbox-date">17:20 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="width: 30%;">
                            <div class="card-box" style=" margin-bottom: 42px;">
                                <h4>Thống kê bán hàng</h4>
                                <p class="text">
                                    Sản phẩm đã bán
                                    <span>78%</span>
                                </p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                </div>
                            </div>
                            <div class="card-box" style="  margin-bottom: 42px;">
                                <h4>Tháng giảm giá</h4>
                                <p class="text">
                                    Sản phẩm đã bán
                                    <span style="color: rgb(27 185 154);">25%</span>
                                </p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 25%; background-color:rgb(27 185 154) !important;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                                </div>
                            </div>
                            <div class="card-box">
                                <h4>Doanh số hàng ngày</h4>
                                <p class="text">
                                    Sản phẩm đã bán
                                    <span style="color: rgb(241 181 61);">75%</span>
                                </p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 75%; background-color: rgb(241 181 61) !important;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="width: 40%; padding-right: 0;">
                            <div class="card-box">
                                <h4>Liên hệ hàng đầu</h4>
                                <div class="table-responsive" id="style-1">
                                    <table class="table table-bordered table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Công ty</th>
                                                <th>Ngày bắt đầu</th>
                                                <th>Ngày kết thúc</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-muted">Apple Technology</th>
                                                <td>20/02/2014</td>
                                                <td>19/02/2020</td>
                                                <td><span class="badge badge-success">Đã thanh toán</span></td>
                                            </tr>
                                            <tr>
                                                <th class="text-muted">Envato Pty Ltd.</th>
                                                <td>20/02/2014</td>
                                                <td>19/02/2020</td>
                                                <td><span class="badge badge-danger">Chưa thanh toán</span></td>
                                            </tr>
                                            <tr>
                                                <th class="text-muted">Dribbble LLC.</th>
                                                <td>20/02/2014</td>
                                                <td>19/02/2020</td>
                                                <td><span class="badge badge-success">Đã thanh toán</span></td>
                                            </tr>
                                            <tr>
                                                <th class="text-muted">Adobe Family</th>
                                                <td>20/02/2014</td>
                                                <td>19/02/2020</td>
                                                <td><span class="badge badge-success">Đã thanh toán</span></td>
                                            </tr>
                                            <tr>
                                                <th class="text-muted">Apple Technology</th>
                                                <td>20/02/2014</td>
                                                <td>19/02/2020</td>
                                                <td><span class="badge badge-danger">Chưa thanh toán</span></td>
                                            </tr>
                                            <tr>
                                                <th class="text-muted">Envato Pty Ltd.</th>
                                                <td>20/02/2014</td>
                                                <td>19/02/2020</td>
                                                <td><span class="badge badge-success">Đã thanh toán</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="end">
                    Copyright 2023 © Designed by
                    <a href="" class="end-link">RunnerInn.com</a>
                </div>
                <div title="Về đầu trang" class="top-up">
                    <i class="icon-top fa-solid fa-angle-up"></i>
                </div>
            </footer>
        </div>
    </div>
    <script>
        const chart = document.getElementById('myChart');
        const data = {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
            datasets: [{
                label: 'Doanh thu trong tháng',
                data: [59, 65, 52, 78, 63, 85, 92, 66, 83, 91, 96, 101],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 205, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(33, 123, 207, 0.6)',
                    'rgba(27, 185, 154, 0.6)',
                    'rgba(53, 185, 28, 0.6)',
                    'rgba(225, 98, 128, 0.6)',
                    'rgba(198, 12, 128, 0.6)',
                    'rgba(78, 225, 210, 0.6)',
                ],
            }]
        };

        const mixedCharts = new Chart(chart, {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        });
    
        const charts = document.getElementById('myCharts');
        const datas = {
            labels: [
                'Hôm nay',
                'Tuần này',
                'Tuần trước'
            ],
            datasets: [{
                label: ' Số sản phẩm',
                data: [35, 40, 25],
                backgroundColor: [
                    'rgb(27,185,154)',
                    'rgb(61,185,220)',
                    'rgb(210,239,242)',
                ],
                hoverBorderWidth: 2,
                hoverOffset: 2
            }]
        };


        const mixedChart = new Chart(charts, {
            type: 'doughnut',
            data: datas,
        });
    
        function animateNumber(finalNumber, duration = 5000, startNumber = 0, callback) {
            let currentNumber = startNumber
            const interval = window.setInterval(updateNumber, 17)

            function updateNumber() {
                if (currentNumber >= finalNumber) {
                    clearInterval(interval)
                } else {
                    let inc = Math.ceil(finalNumber / (duration / 17))
                    if (currentNumber + inc > finalNumber) {
                        currentNumber = finalNumber
                        clearInterval(interval)
                    } else {
                        currentNumber += inc
                    }
                    callback(currentNumber)
                }
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            animateNumber(1587, 1000, 0, function(number) {
                const formattedNumber = number.toLocaleString('en-US')
                document.getElementById('counter1').innerText = formattedNumber
            })

            animateNumber(55000000, 1000, 0, function(number) {
                const formattedNumber = number.toLocaleString('en-US')
                document.getElementById('counter2').innerText = formattedNumber
            })

            animateNumber(7000000, 1000, 0, function(number) {
                const formattedNumber = number.toLocaleString('en-US')
                document.getElementById('counter3').innerText = formattedNumber
            })
            animateNumber(2354, 1000, 0, function(number) {
                const formattedNumber = number.toLocaleString('en-US')
                document.getElementById('counter4').innerText = formattedNumber
            })
        })

        var offset = 400;
        var duration = 1;
        var right = document.querySelector('.right');
        var topUp = document.querySelector('.top-up');
        right.addEventListener('scroll', function() {
            if (right.scrollTop > offset) {
                topUp.style.display = 'block';
            } else {
                topUp.style.display = 'none';
            }
        });
        topUp.addEventListener('click', function() {
            right.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>