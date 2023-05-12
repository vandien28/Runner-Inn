<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ sơ - Runner Inn</title>
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
                    <li class="nav-item">
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
                        <p>Hồ sơ</p>
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
            <main class="content-page" style="padding-bottom: 30px;">
                <div class="content">
                    <div class="row" style="justify-content: space-between;">
                        <div class="col-md" style="width: 67%;">
                            <div class="card-box">
                                <h4 style="font-size:22px;">Chỉnh sửa hồ sơ</h4>
                                <div class="card-info">
                                    <div class="row-lg">
                                        <form>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Công ty</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Runner Inn">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Tên tài khoản</label>
                                                    <input type="text" class="form-control" placeholder="Username" value="admin1">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Địa chỉ email</label>
                                                    <input type="email" class="form-control" value="admin1@gmail.com" style="width: 100%;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row-lg lg">
                                        <form>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Họ</label>
                                                    <input type="text" class="form-control" value="Lê Văn">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Tên</label>
                                                    <input type="text" class="form-control" value="Diễn" style="width: 100%;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row-lg lg">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <input type="text" class="form-control" value="9 Nguyễn Văn Cừ, phường 1, quận 5" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-lg lg">
                                        <form>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Thành phố</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="Hồ Chí Minh">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Quốc gia</label>
                                                    <input type="text" class="form-control" placeholder="Username" value="Việt Nam">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">mã bưu điện</label>
                                                    <input type="number" class="form-control" placeholder="Mã bưu chính" style="width: 100%;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row-lg lg">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>giới thiệu</label>
                                                <input type="text" class="form-control" value="" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-submit">Cập nhật hồ sơ</button>
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
    <script>
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