<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng – Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/account.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php $db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
    session_start();
    ?>

    <?php include "header.php" ?>
    <main>
        <section class="layout-info-account">
            <div class="title-infor-account">
                <h1>Tài khoản của bạn </h1>
            </div>
            <div class="container">
            <div class="row1">
    <div class="col-xs-12 col-sm-3 sidebar-account">
    <div class="two-left-one">
                    <h4 class="text-in-two">
                        Tài Khoản
                    </h4>
                    <div class="footer-contentt">
                        <ul>
                            <li class="item">
                                <a href="/src/account.php" title="Thông tin tài khoản">Thông tin tài khoản</a>
                            </li>
                            <li class="item">
                                <a href="/src/accountaddress.php" title="Danh sách địa chỉ">Danh sách địa chỉ</a>
                            </li>
                            <li class="item">
                                <form action="/controller/logout.php" id="logout-form" method="POST">
                                    <button type="submit" name="logout">Đăng xuất</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
    </div>
    <div class="col-xs-12 col-sm-9">
        <?php
        if (isset($_SESSION['userName'])) {
            $userName = $_SESSION['userName'];
            $user = $db->prepare("SELECT * FROM khachhang,diachi WHERE khachhang.makhachhang = diachi.makhachhang and tentk = :tentk");
            $user->bindParam(":tentk", $userName);
            $user->execute();
            $userInformation = $user->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="row1">
            <div class="col-xs-12" id="customer_sidebar">
                <h4 class="name-order">
                    ĐƠN HÀNG: #100057,
                    <span class="order_date">Đặt lúc — 07/05/2023, 03:56CH</span>
                </h4>
                
                <div class="account">
                    
                    <a  href="account.php">Quay lại trang tài khoản</a>
                </div>
            </div>
            
        </div>
        <?php
        }
        ?>
    </div>
</div>

            </div>
        </section>
        <?php include "gallery.php" ?>
    </main>
    <?php
    include "footer.php"
    ?>
    <script type="text/javascript" src="../asset/js/account.js"></script>
</body>

</html>