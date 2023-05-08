<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile admin - Runner Inn</title>
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
                    <li >
                        <a href="dashboard.php" class="nav-link">
                            <i class="fa-solid fa-gauge"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="profile.php" class="nav-link">
                            <i class="fa-solid fa-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="management.php" class="nav-link">
                            <i class="fa-solid fa-bars-progress"></i>
                            <p>Management</p>
                        </a>
                    </li>
                    <li>
                        <a href="" class="nav-link">
                            <i class="fa-solid fa-chart-pie"></i>
                            <p>Statistics</p>
                        </a>
                    </li>
                    <li>
                        <a href="" class="nav-link">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <p>Map</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <header class="header">
                <div class="expand">
                    <div class="expand-left">
                        <p>Dashboard</p>
                        <i class="fa-solid fa-palette"></i>
                        <i class="fa-solid fa-earth-americas"></i>
                        <a><i class="fa-solid fa-magnifying-glass"></i>Search</a>
                    </div>
                    <div class="expand-right">
                        <a href=""><img src="/asset/img/sidebar.jpg" alt=""></a>
                        <p><a href="admin.php">Log out </a></p>
                        <i class="fa-solid fa-gear"></i>
                        <i class="fa-solid fa-bell"></i>
                    </div>
                </div>
            </header>
            <main class="content-page" style="padding-bottom: 30px;">
                <div class="content">
                    <div class="row" style="justify-content: space-between;">
                        <div class="col-md" style="width: 67%;">
                            <div class="card-box">
                                <h4 style="font-size:22px;">Edit Profile</h4>
                                <div class="card-info">
                                    <div class="row-lg">
                                        <form>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Company (disabled)</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Runner Inn">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" value="admin1">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" value="admin1@gmail.com" style="width: 100%;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row-lg lg">
                                        <form>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>first name</label>
                                                    <input type="text" class="form-control" value="Lê Văn">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>last name</label>
                                                    <input type="text" class="form-control" value="Diễn" style="width: 100%;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row-lg lg">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>first name</label>
                                                <input type="text" class="form-control" value="9 Nguyễn Văn Cừ, Ward 1, District 5" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-lg lg">
                                        <form>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="Hồ Chí Minh">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" placeholder="Username" value="Việt Nam">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">postal code</label>
                                                    <input type="number" class="form-control" placeholder="ZIP CODE" style="width: 100%;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row-lg lg">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>about me</label>
                                                <input type="text" class="form-control" value="" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-submit">Update Profile</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg" style="height: 500px;">
                            <div class="card-user">
                                <div class="card-image">
                                    <img src="/asset/img/abc.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <img src="/asset/img/sidebar.jpg" alt="">
                                        <h5>Lê Văn Diễn</h5>
                                        <h5>admin1</h5>
                                        <h5>admin1@gmail.com</h5>
                                        <br>
                                    </div>
                                </div>
                                <div class="card-icon">
                                    <i class="fa-brands fa-facebook"></i><i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="end">
                    Copyright 2022 © Designed by
                    <a href="" class="end-link">GoodWineShop.com</a>
                </div>
                <div title="Về đầu trang" class="top-up">
                    <i class="icon-top fa-solid fa-angle-up"></i>
                </div>
            </footer>
        </div>
    </div>
    <script src="../font/jquery/jquery-3.6.1.js"></script>
    <script>
        var offset = 500;
        var duration = 1;
        $(function() {
            $('.right').scroll(function() {
                if ($(this).scrollTop() > offset) {
                    $('.top-up').fadeIn(duration);
                } else {
                    $('.top-up').fadeOut(duration);
                }
            });
            $('.top-up').click(function() {
                $('.right').animate({
                    scrollTop: 0
                }, duration);
            });
        });
    </script>
    <script>
        const chart = document.getElementById('myChart');
        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Total revenue for the year',
                data: [65, 59, 27, 33, 95, 90, 44, 27, 53, 73, 81, 44],
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
    </script>
    <script>
        const charts = document.getElementById('myCharts');
        const datas = {
            labels: [
                'Today',
                'This week',
                'Last week'
            ],
            datasets: [{
                label: 'My First Dataset',
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
    </script>
    <script>
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
                const formattedNumber = number.toLocaleString('de-DE')
                document.getElementById('counter1').innerText = formattedNumber
            })

            animateNumber(550000, 1000, 0, function(number) {
                const formattedNumber = number.toLocaleString('de-DE')
                document.getElementById('counter2').innerText = formattedNumber
            })

            animateNumber(7000, 1000, 0, function(number) {
                const formattedNumber = number.toLocaleString('de-DE')
                document.getElementById('counter3').innerText = formattedNumber
            })
            animateNumber(2354, 1000, 0, function(number) {
                const formattedNumber = number.toLocaleString('de-DE')
                document.getElementById('counter4').innerText = formattedNumber
            })
        })
    </script>
    <script>
        function logout() {
            window.location.href = "../Html/Login.html"
            localStorage.removeItem("admin")
        }
    </script>
</body>

</html>