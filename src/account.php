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
                    <div class="sidebar-account">
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
                                        <a href="/src/accountaddresses.php" title="Danh sách địa chỉ">Danh sách địa chỉ</a>
                                    </li>
                                    <li class="item">
                                        <form action="/controller/logout.php" id="logout-form" method="POST">
                                            <button type="submit" name="logout" class="buttonLogout">Đăng xuất</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="two-right">
                            <?php
                            if (isset($_SESSION['userName'])) {
                                $userName = $_SESSION['userName'];
                                $user = $db->prepare("SELECT * FROM khachhang,diachi WHERE khachhang.makhachhang = diachi.makhachhang  and tentk = :tentk");
                                $user->bindParam(":tentk", $userName);
                                $user->execute();
                                $userInformation = $user->fetch(PDO::FETCH_ASSOC);
                                if (empty($userInformation)) {
                            ?>
                                    <div class="row1">
                                        <div class="col-xs-12" id="customer_sidebar">
                                            <?php
                                            $u = $db->prepare("SELECT tenkhachhang,email from khachhang where tentk = :tentk");
                                            $u->bindParam(":tentk", $userName);
                                            $u->execute();
                                            $ui = $u->fetch(PDO::FETCH_ASSOC);
                                            ?>
                                            <h2 class="title-detail">Thông tin tài khoản</h2>
                                            <p class="name_account"><?php echo $ui["tenkhachhang"] ?></p>
                                            <p class="email"><?php echo $ui["email"] ?></p>
                                            <div class="address">
                                                <p></p>
                                                <p></p>
                                                <p></p>
                                                <p></p>
                                                <a id="view_address" href="accountaddresses.php">Xem địa chỉ</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12" id="customer_orders">

                                            <?php
                                            $order = $db->prepare("SELECT * from donhang where makhachhang = :userID");
                                            $order->bindParam(":userID", $_SESSION["userID"]);
                                            $order->execute();
                                            $orders = $order->fetchAll(PDO::FETCH_ASSOC);
                                            if (empty($orders)) {
                                            ?>
                                                <p style="text-align:center">Bạn chưa có đơn hàng!</p>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="customer-table-wrap">
                                                    <div class="customer_order customer-table-bg">
                                                        <p class="title-detail">Danh sách đơn hàng</p>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width:calc(100%/5)" class="order_number">Mã đơn hàng</th>
                                                                        <th style="width:calc(100%/5)" class="date">Ngày đặt</th>
                                                                        <th style="width:calc(100%/5)" class="total">Thành tiền</th>
                                                                        <th style="width:calc(100%/5)" class="payment_status">Trạng thái thanh toán</th>
                                                                        <th style="width:calc(100%/5)" class="fulfillment_status">Phương thức thanh toán</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($orders as $o) {
                                                                    ?>
                                                                        <tr class="odd">
                                                                            <td style="width:calc(100%/5)"><?php echo $o["madonhang"] ?></td>
                                                                            <td style="width:calc(100%/5)"><?php echo $o["ngaydathang"] ?></td>
                                                                            <td style="width:calc(100%/5)"><?php echo $o["tongtien"] ?></td>
                                                                            <td style="width:calc(100%/5)"><?php echo $o["trangthaidonhang"] ?></td>
                                                                            <td style="width:calc(100%/5)"><?php echo $o["phuongthucthanhtoan"] ?></td>
                                                                        </tr>
                                                                    <?php }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                <?php
                                            }
                                        } else {
                                ?>
                                <div class="row1">
                                    <div class="col-xs-12" id="customer_sidebar">
                                        <h2 class="title-detail">Thông tin tài khoản</h2>
                                        <p class="name_account"><?php echo $userInformation["tenkhachhang"] ?></p>
                                        <p class="email"><?php echo $userInformation["email"] ?></p>
                                        <div class="address">
                                            <p><?php echo $userInformation["tenduong"] ?></p>
                                            <p><?php echo $userInformation["phuong"] ?>, <?php echo $userInformation["quan"] ?>, <?php echo $userInformation["thanhpho"] ?></p>
                                            <p><?php echo $userInformation["quocgia"] ?></p>
                                            <p><?php echo $userInformation["sdt"] ?></p>

                                            <a id="view_address" href="accountaddresses.php">Xem địa chỉ</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12" id="customer_orders">

                                        <?php
                                            $order = $db->prepare("SELECT * from donhang where makhachhang = :userID");
                                            $order->bindParam(":userID", $_SESSION["userID"]);
                                            $order->execute();
                                            $orders = $order->fetchAll(PDO::FETCH_ASSOC);
                                            if (empty($orders)) {
                                        ?>
                                            <p style="text-align:center">Bạn chưa có đơn hàng!</p>
                                        <?php
                                            } else {
                                        ?>
                                            <div class="customer-table-wrap">
                                                <div class="customer_order customer-table-bg">
                                                    <p class="title-detail">Danh sách đơn hàng</p>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width:calc(100%/5)" class="order_number">Mã đơn hàng</th>
                                                                    <th style="width:calc(100%/5)" class="date">Ngày đặt</th>
                                                                    <th style="width:calc(100%/5)" class="total">Thành tiền</th>
                                                                    <th style="width:calc(100%/5)" class="payment_status">Trạng thái thanh toán</th>
                                                                    <th style="width:calc(100%/5)" class="fulfillment_status">Phương thức thanh toán</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                foreach ($orders as $o) {
                                                                ?>
                                                                    <tr class="odd">
                                                                        <td style="width:calc(100%/5)">
                                                                            <a href="orderdetail.php?type=<?php echo $o["madonhang"] ?>"> <?php echo $o["madonhang"] ?></a>
                                                                        </td>
                                                                        <td style="width:calc(100%/5)"><?php echo $o["ngaydathang"] ?></td>
                                                                        <td style="width:calc(100%/5)"><?php echo $o["tongtien"] ?></td>
                                                                        <td style="width:calc(100%/5)"><?php echo $o["trangthaidonhang"] ?></td>
                                                                        <td style="width:calc(100%/5)"><?php echo $o["phuongthucthanhtoan"] ?></td>
                                                                    </tr>
                                                                <?php }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                    <?php
                                            }
                                        }
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