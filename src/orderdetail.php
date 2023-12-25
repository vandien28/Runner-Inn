<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng – Runner Inn</title>
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
                <h1>Chi tiết đơn hàng</h1>
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
                            <div class="row1">
                                <div class="col-xs-12" id="customer_sidebar">

                                    <h2 class="title-detail" style="text-transform:none;">ĐƠN HÀNG: <?php echo $_GET['type'] ?> </h2>
                                    <div class="address">
                                        <a id="view_address" href="account.php">Quay lại trang tài khoản</a>
                                    </div>

                                </div>
                                <div class="col-xs-12" id="customer_orders">

                                    <div class="customer-table-wrap">
                                        <div class="customer_order customer-table-bg">
                                            <p class="title-detail">Chi tiết đơn hàng</p>
                                            <div class="table-responsive" style="overflow:hidden">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:calc(100%/7); justify-content: left;" class="order_number"></th>
                                                            <th style="width:calc(100%/3); justify-content: left;" class="order_number">Sản phẩm</th>
                                                            <th style="width:calc(100%/7); justify-content: left;" class="date">Mã sản phẩm</th>
                                                            <th style="width:calc(100%/7); justify-content: center;" class="payment_status">Đơn giá</th>
                                                            <th style="width:calc(100%/7); justify-content: center;" class="fulfillment_status">Số lượng</th>
                                                            <th style="width:calc(100%/7); justify-content: center;" class="fulfillment_status">Thành tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $orderdetail = $db->prepare("SELECT distinct mausac,kichthuoc,madonhang,urlmain,tensp,sanpham.masp,soluongsp,giatien from chitietdonhang,sanpham,hinhanhsp where chitietdonhang.masp = sanpham.masp and hinhanhsp.masp = sanpham.masp");
                                                        $orderdetail->execute();
                                                        $detail = $orderdetail->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach ($detail as $dt) {
                                                            if (isset($_GET['type']) && $_GET['type'] == $dt["madonhang"]) {

                                                        ?>
                                                                <tr class="odd" style="height: 100px">
                                                                    <td style="width:calc(100%/7); height:100%;display:flex;align-items:center;">
                                                                        <img style="width:100%;height: 100%;" src="<?php echo $dt["urlmain"] ?>" alt="">
                                                                    </td>
                                                                    <td style="width:calc(100%/3); height:100%">
                                                                        <p style="width:100%; margin-top: 20px;"><?php echo $dt["tensp"] ?></p>
                                                                        <p style="width:100%; margin-top: 15px;"><?php echo $dt["mausac"] ?> / <?php echo $dt["kichthuoc"] ?></p>
                                                                    </td>
                                                                    <td style="width:calc(100%/7); height:100%;display:flex;align-items:center;justify-content: center;"><?php echo $dt["masp"] ?></td>
                                                                    <td style="width:calc(100%/7); height:100%;display:flex;align-items:center;justify-content: center;"><?php echo number_format($dt["giatien"]) ?>₫</td>
                                                                    <td style="width:calc(100%/7); height:100%;display:flex;align-items:center;justify-content: center;"><?php echo $dt["soluongsp"] ?></td>
                                                                    <td style="width:calc(100%/7); height:100%;display:flex;align-items:center;justify-content: center;"><?php echo number_format($dt["soluongsp"] * $dt["giatien"]) ?>₫</td>
                                                                </tr>
                                                        <?php }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
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