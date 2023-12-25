<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runner Inn - Đơn hàng</title>
    <link rel="stylesheet" href="/asset/css/payment.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
    session_start();
    ?>
    <div class="row">
        <div class="main">
            <div class="main-header">
                <a href="">
                    <h1>Runner Inn</h1>
                </a>
            </div>
            <div class="main-content">
                <div class="section">
                    <div class="section-header">
                        <div class="success">
                            <i class="fa-thin fa-circle-check"></i>
                        </div>
                        <div class="header-os">
                            <h2>Đặt hàng thành công</h2>
                            <span>Mã đơn hàng</span>
                            <span>Cảm ơn bạn đã mua hàng!</span>
                        </div>
                    </div>
                    <div class="section-info">
                        <div class="content-box">
                            <div class="content-box-title">
                                <h2>Thông tin đơn hàng</h2>
                            </div>
                            <div class="content-box-info">
                                <?php
                                $user = $db->prepare("SELECT * from khachhang,diachi where khachhang.makhachhang = diachi.makhachhang and diachi.makhachhang = :userID and diachi.macdinh = 1");
                                $user->bindParam(":userID", $_SESSION["userID"]);
                                $user->execute();
                                $infoUser = $user->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <h3>Thông tin giao hàng</h3>
                                <br>
                                <p class="name-customer"><?php echo $infoUser["tenkhachhang"] ?></p>
                                <p class="phone-customer"><?php echo $infoUser["sdt"] ?></p>
                                <p class="apartment-customer"><?php echo $infoUser["tenduong"] ?></p>
                                <p class="ward-customer"><?php echo $infoUser["phuong"] ?></p>
                                <p class="district-customer"><?php echo $infoUser["quan"] ?></p>
                                <p class="city-customer"><?php echo $infoUser["thanhpho"] ?></p>
                                <p class="country-customer"><?php echo $infoUser["quocgia"] ?></p>
                                <br>
                                <h3>Phương thức thanh toán</h3>
                                <br>
                                <p>Thanh toán khi giao hàng (COD)</p>
                            </div>
                        </div>
                    </div>
                    <div class="step-footer">
                        <div class="contact">
                            <i class="fa-sharp fa-regular fa-circle-question"></i>
                            <p>Cần hỗ trợ?</p>
                            <a href="mailto:runnerinn@gmail.com">Liên hệ chúng tôi</a>
                        </div>
                        <div class="return-collection">
                            <a href="/controller/deleteAllCart.php" class="linkCollection"><button class="purchase">Tiếp tục mua hàng</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="sidebar-content">
                <div class="order-summary-section order-summary-section-product-list">
                    <table class="product-table">
                        <tbody>
                            <?php
                            $productCart = $db->prepare("SELECT distinct tensp, urlmain,giohang.soluong,kichthuoc,mausac,makhachhang,sanpham.masp,giatien from sanpham,giohang,hinhanhsp where sanpham.masp = giohang.masp and sanpham.masp = hinhanhsp.masp");
                            $productCart->execute();
                            $listProduct = $productCart->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($listProduct as $row) {
                                if ($row["makhachhang"] == $_SESSION["userID"]) {
                            ?>
                                    <tr class="product" data-product-id="<?php echo $row["masp"] ?>">
                                        <td class="product-image">
                                            <div class="product-thumbnail">
                                                <div class="product-thumbnail-wrapper">
                                                    <img class="product-thumbnail-image" alt="<?php echo $row["tensp"] ?>" src="<?php echo $row["urlmain"] ?>">
                                                </div>
                                                <span class="product-thumbnail-quantity" aria-hidden="true"><?php echo $row["soluong"] ?></span>
                                            </div>
                                        </td>
                                        <td class="product-description">
                                            <span class="product-description-name order-summary-emphasis"><?php echo $row["tensp"] ?></span>

                                            <span class="product-description-variant order-summary-small-text">
                                                <?php echo $row["mausac"] ?>&nbsp;/&nbsp;<?php echo $row["kichthuoc"] ?>
                                            </span>

                                        </td>
                                        <td class="product-price">
                                            <span class="order-summary-emphasis"><?php echo number_format($row["giatien"]) ?>₫</span>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="order-summary-section order-summary-section-total-lines payment-lines">
                    <table class="total-line-table">
                        <tbody>
                            <?php
                            $total = $db->prepare("SELECT sum(giatien*giohang.soluong) from giohang,sanpham where sanpham.masp =giohang.masp and makhachhang = :userID");
                            $total->bindParam(':userID', $_SESSION['userID']);
                            $total->execute();
                            $totalCart = $total->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <tr class="total-line total-line-subtotal">
                                <td class="total-line-name">Tạm tính</td>
                                <td class="total-line-price">
                                    <span class="order-summary-emphasis" data-price-target="<?php echo number_format($totalCart["sum(giatien*giohang.soluong)"]) ?>">
                                        <?php echo number_format($totalCart["sum(giatien*giohang.soluong)"]) ?>₫
                                    </span>
                                </td>
                            </tr>
                            <tr class="total-line total-line-shipping">
                                <td class="total-line-name">Phí vận chuyển</td>
                                <td class="total-line-price">
                                    <span class="order-summary-emphasis">Miễn phí</span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="total-line-table-footer">
                            <tr class="total-line">
                                <td class="total-line-name payment-due-label">
                                    <span class="payment-due-label-total">Tổng cộng</span>
                                </td>
                                <td class="total-line-name payment-due">
                                    <span class="payment-due-currency">VND</span>
                                    <span class="payment-due-price" data-payment-target="<?php echo number_format($totalCart["sum(giatien*giohang.soluong)"]) ?>">
                                        <?php echo number_format($totalCart["sum(giatien*giohang.soluong)"]) ?>₫
                                    </span>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>