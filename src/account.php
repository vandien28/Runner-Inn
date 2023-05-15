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
                                $user = $db->prepare("SELECT * FROM khachhang,diachi WHERE khachhang.makhachhang = diachi.makhachhang and tentk = :tentk");
                                $user->bindParam(":tentk", $userName);
                                $user->execute();
                                $userInformation = $user->fetch(PDO::FETCH_ASSOC);
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
                                        <div class="customer-table-wrap">
                                            <div class="customer_order customer-table-bg">
                                                <p class="title-detail">Danh sách đơn hàng mới nhất</p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="order_number text-center">Mã đơn hàng</th>
                                                                <th class="date text-center">Ngày đặt</th>
                                                                <th class="total text-right">Thành tiền</th>
                                                                <th class="payment_status text-center">Trạng thái thanh toán</th>
                                                                <th class="fulfillment_status text-center">Vận chuyển</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd ">
                                                                <td class="text-center">
                                                                    <a href="/account/orders/ad0c22f106114f31983a5f3206adf3aa" title="">#100057</a>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span>07/05/2023</span>
                                                                </td>
                                                                <td class="text-right">
                                                                    <span class="total money">5,750,000₫</span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="status_pending">Chờ xử lý</span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="status_not fulfilled">Chưa giao hàng</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
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