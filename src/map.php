<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bản đồ - Runner Inn</title>
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
                    <li>
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
                    <li class="nav-item">
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
                        <p>Bản đồ</p>
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
                <div class="map-container">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6697269378988!2d106.68006961488499!3d10.759917092332762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b7c3ed289%3A0xa06651894598e488!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBTw6BpIEfDsm4!5e0!3m2!1svi!2s!4v1668075434323!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
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
    <script>
        var offset = 500;
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