<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản – Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/account.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php $db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
    ?>

    <?php include "header.php" ?>
    <main>
        <section class="layout-info-account">
            <div class="title-infor-account">
                <h1>Tài khoản của bạn </h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 sidebar-account">
                        <div class="AccountSidebar">
                            <h3 class="AccountTitle titleSidebar">Tài khoản</h3>
                            <div class="AccountContent">
                                <div class="AccountList">
                                    <ul class="list-unstyled">
                                        <li class="current">
                                            <a href="/src/account.php">Thông tin tài khoản</a>
                                        </li>
                                        <li>
                                            <a href="/src/accountaddresses.php">Danh sách địa chỉ</a>
                                        </li>
                                        <li class="last">
                                            <a href="">
                                                <form action="/controller/logout.php" id="logout-form" method="POST">
                                                    <button type="submit" name="logout">Đăng xuất</button>
                                                </form>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <?php
                        if (isset($_SESSION['userName'])) {
                            $userName = $_SESSION['userName'];
                            $user = $db->prepare("SELECT email,tenkhachhang,diachi,tentk FROM khachhang WHERE tentk = :tentk");
                            $user->bindParam(":tentk", $userName);
                            $user->execute();
                            $userInformation = $user->fetch(PDO::FETCH_ASSOC);
                        ?>
                            <div class="row">
                                <div class="col-xs-12" id="customer_sidebar">
                                    <p class="title-detail">Thông tin tài khoản</p>
                                    <h2 class="name_account"><?php echo $userInformation["tentk"] ?></h2>
                                    <p class="email"><?php echo $userInformation["email"] ?></p>
                                    <div class="address ">
                                        <p><?php echo $userInformation["diachi"] ?></p>
                                        <a id="view_address" href="accountaddresses.php">Xem địa chỉ</a>
                                    </div>
                                </div>

                            <?php
                        }
                            ?>
                            <div class="col-xs-12" id="customer_orders">
                                <div class="customer-table-wrap">
                                    <div class="customer_order customer-table-bg">
                                        <p>Bạn chưa đặt mua sản phẩm.</p>
                                    </div>
                                </div>
                            </div>
                            </div>
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