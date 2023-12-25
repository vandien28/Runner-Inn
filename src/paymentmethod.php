<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runner Inn - Thanh toán đơn hàng</title>
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
                <ul>
                    <li><a href="cart.php" class="current">Giỏ hàng</a><i class="fa-light fa-angle-right"></i></li>
                    <li><a href="shipdetails.php" class="current">Thông tin giao hàng</a><i class="fa-light fa-angle-right"></i></li>
                    <li>Phương thức thanh toán</li>
                </ul>
            </div>
            <div class="main-content">

                <?php
                $address = $db->prepare("SELECT * from diachi where makhachhang = :userID and macdinh = 1");
                $address->bindParam(":userID", $_SESSION["userID"]);
                $address->execute();
                $addressOrder = $address->fetch(PDO::FETCH_ASSOC);
                ?>
                <p class="addressOrder hide"><?php echo $addressOrder["tenduong"] . ",&nbsp;" . $addressOrder["phuong"] . ",&nbsp;" . $addressOrder["quan"] . ",&nbsp;" . $addressOrder["thanhpho"] . ",&nbsp;" . $addressOrder["quocgia"] ?></p>
                <div class="section">
                    <div class="section-shipping field-bottom">
                        <div class="section-header">
                            <h2 class="section-title">Phương thức vận chuyển</h2>
                        </div>
                        <div class="section-content">
                            <div class="content-box">
                                <div class="content-box-row">
                                    <div class="radio-wrapper">
                                        <label class="radio-label" for="">
                                            <div class="radio-input payment-method-checkbox">
                                                <input id="" class="input-radio" type="radio" checked>
                                                <label for="" class="circle"></label>
                                            </div>
                                            <span class="radio-label-primary">Giao hàng tận nơi</span>
                                            <span class="radio-accessory content-box-emphasis">0₫</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-payment field-bottom">
                        <div class="section-header">
                            <h2 class="section-title">Phương thức thanh toán</h2>
                        </div>
                        <div class="section-content">
                            <div class="content-box">
                                <div class="radio-wrapper content-box-row">
                                    <label class="two-page" for="payment_method_1">
                                        <div class="radio-input payment-method-checkbox">
                                            <input id="payment_method_1" class="input-radio" name="payment_method" type="radio" checked value="Thanh toán khi giao hàng (COD)">
                                            <label for="payment_method_1" class="circle"></label>
                                        </div>

                                        <div class="radio-content-input">
                                            <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=4">
                                            <div class="content-wrapper">
                                                <span class="radio-label-primary">Thanh toán khi giao hàng (COD)</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="radio-wrapper content-box-row">
                                    <label class="two-page" for="payment_method_2">
                                        <div class="radio-input payment-method-checkbox">
                                            <input id="payment_method_2" class="input-radio" name="payment_method" type="radio" value="Chuyển khoản qua ngân hàng">
                                            <label for="payment_method_2" class="circle"></label>
                                        </div>
                                        <div class="radio-content-input">
                                            <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/other.svg?v=4">
                                            <div class="content-wrapper">
                                                <span class="radio-label-primary">Chuyển khoản qua ngân hàng</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-footer">
                        <a href="cart.php" class="current">Giỏ hàng</a>
                        <form action="ordersuccess.php">
                            <button class="ordersuccess">Hoàn tất đơn hàng</button>
                        </form>
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
                <div class="order-summary-section order-summary-section-discount">
                    <div class="fieldset">
                        <div class="field">
                            <div class="field-input-btn-wrapper">
                                <div class="field-input-wrapper">
                                    <input placeholder="" class="field-input" size="30" type="text" value="">
                                    <label for="" class="field-label" for="">Mã giảm giá</label>
                                </div>
                                <button type="submit" class="field-input-btn">Sử dụng</button>
                            </div>
                        </div>
                    </div>
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
    <script>
        const $ = document.querySelector.bind(document);
        const $$ = document.querySelectorAll.bind(document);
        var methodPayment = "";
        $$('input[name="payment_method"]').forEach((input) => {
            if (input.checked) {
                methodPayment = input.value;
            }
            input.addEventListener('change', (event) => {
                methodPayment = event.target.value;
            });
        });
        var total = $(".payment-due-price").innerText
        var day = (new Date()).getDate().toString().padStart(2, '0') + "/" + ((new Date()).getMonth() + 1).toString().padStart(2, '0') + "/" + (new Date()).getFullYear();
        var address = $(".addressOrder").innerText
        $(".ordersuccess").addEventListener("click", function() {
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {}
            xhr.open("GET",
                "/controller/addOrder.php?&day=" +
                encodeURIComponent(day) +
                "&address=" +
                encodeURIComponent(address) +
                "&status=" +
                encodeURIComponent("đang xử lý") +
                "&total=" +
                encodeURIComponent(total) +
                "&method=" +
                encodeURIComponent(methodPayment),
                true);
            xhr.send();
        })
    </script>
</body>

</html>