<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng của bạn - Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/cart.css">
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
    <?php
    include "header.php"
    ?>

    <main id="main">
        <?php
        $count = $db->prepare("SELECT count(makhachhang) FROM `giohang` where makhachhang = :userID;");
        $count->bindParam(':userID', $_SESSION['userID']);
        $count->execute();
        $countProduct = $count->fetch(PDO::FETCH_ASSOC);
        ?>
        <section class="section-title">
            <div class="container">
                <div class="row">
                    <ol>
                        <li class="li_line"><a href="/index.php">Trang chủ</a></li>
                        <li><a href="cart.php">Giỏ hàng&nbsp;(<span class="productNumber"><?php echo $countProduct["count(makhachhang)"] ?></span>)</a></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="layout-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="col-md-9">
                            <div class="heading">
                                <h1>Giỏ hàng của bạn</h1>
                            </div>
                            <?php
                            $counts = $db->prepare("SELECT count(makhachhang) FROM `giohang` where makhachhang = :userID;");
                            $counts->bindParam(':userID', $_SESSION['userID']);
                            $counts->execute();
                            $checkUser1 = $counts->fetchColumn();
                            if ($checkUser1 > 0) {
                            ?>
                                <div class="list-pageform-cart">
                                    <div class="cart-row">
                                        <h2 class="title-number-cart count-cart">
                                            Bạn đang có
                                            <span class="counts"><?php echo $countProduct["count(makhachhang)"] ?></span>&nbsp;sản phẩm
                                            trong giỏ hàng
                                        </h2>
                                        <div class="table-cart">
                                            <?php
                                            $productCart = $db->prepare("SELECT distinct tensp, urlmain,giohang.soluong,kichthuoc,mausac,makhachhang,sanpham.masp,giatien from sanpham,giohang,hinhanhsp where sanpham.masp = giohang.masp and sanpham.masp = hinhanhsp.masp");
                                            $productCart->execute();
                                            $listProduct = $productCart->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($listProduct as $row) {
                                                if ($row["makhachhang"] == $_SESSION["userID"]) {
                                            ?>
                                                    <div class="item line-item line-item-container">
                                                        <div class="left">
                                                            <div class="item-img">
                                                                <a href="product.php?type=<?php echo $row["masp"] ?>">
                                                                    <img src="<?php echo $row["urlmain"] ?>" alt="<?php echo $row["tensp"] ?>">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="item-info">
                                                                <a href="product.php?type=<?php echo $row["masp"] ?>" alt="<?php echo $row["tensp"] ?>">
                                                                    <h3><?php echo $row["tensp"] ?></h3>
                                                                    <div class="item-desc">
                                                                        <span class="variant_title"><?php echo $row["mausac"] ?> / <?php echo $row["kichthuoc"] ?></span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="item-quan">
                                                                <div class="qty quantity-partent qty-click clearfix">
                                                                    <button type="button" class="qtyminus qty-btn">-</button>
                                                                    <input type="text" size="4" name="updates[]" min="1" id="updates_1040409894" data-id="<?php echo $row["masp"] ?>" data-color="<?php echo $row["mausac"] ?>" data-size="<?php echo $row["kichthuoc"] ?>" value="<?php echo $row["soluong"] ?>" class="tc line-item-qty item-quantity">
                                                                    <button type="button" class="qtyplus qty-btn">+</button>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                <p>
                                                                    <span class="PRICE"><?php echo number_format($row["giatien"]) ?></span>
                                                                    <span>₫</span>
                                                                </p>
                                                            </div>
                                                            <div class="item-total-price">
                                                                <div class="price">
                                                                    <span class="text">Thành tiền:</span>
                                                                    <span class="line-item-total"><?php echo number_format($row["giatien"] * $row["soluong"]) ?>₫</span>
                                                                </div>
                                                                <div class="remove" data-id="<?php echo $row["masp"] ?>" data-color="<?php echo $row["mausac"] ?>" data-size="<?php echo $row["kichthuoc"] ?>" data-quantity="<?php echo $row["soluong"] ?>" data-price="<?php echo $row["giatien"] ?>" onclick="removeProduct(this),removeProductToCart(this)">
                                                                    <i class="fa-light fa-trash-can"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php }
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-row cart-note" style="padding-bottom: 30px;">
                                    <div class="row note-book">
                                        <div class="cart-left-book">
                                            <div class="checkout">
                                                <label for="note" class="note-label">Ghi chú đơn hàng</label>
                                                <textarea class="form-note" id="note" name="note" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="cart-right-book">
                                            <div class="policy_return">
                                                <h4>Chính sách Đổi/Trả</h4>
                                                <ul>
                                                    <li>Sản phẩm được đổi 1 lần duy nhất, không hỗ trợ trả.</li>
                                                    <li>Sản phẩm còn đủ tem mác, chưa qua sử dụng.</li>
                                                    <li>Sản phẩm nguyên giá được đổi trong 30 ngày trên toàn hệ thống.</li>
                                                    <li>Sản phẩm sale chỉ hỗ trợ đổi size (nếu cửa hàng còn) trong 7 ngày trên toàn hệ thống.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="expanded-message">
                                    <p>Giỏ hàng của bạn đang trống</p>
                                    <a href="collection.php?type=bosuutap">
                                        <button><i class="fa fa-reply"></i>Tiếp tục mua hàng</button>
                                    </a>
                                </div>
                            <?php
                            } ?>
                        </div>
                        <div class="col-md-3 sidebar-cart">
                            <a href="collection.php?type=bosuutap" class="continue">Tiếp tục mua hàng&nbsp;<i class="fa-sharp fa-light fa-arrow-right"></i></a>
                            <?php
                            $total = $db->prepare("SELECT sum(giatien*giohang.soluong) from giohang,sanpham where sanpham.masp =giohang.masp and makhachhang = :userID");
                            $total->bindParam(':userID', $_SESSION['userID']);
                            $total->execute();
                            $totalCart = $total->fetch(PDO::FETCH_ASSOC); ?>
                            <div class="order-summary-block">
                                <h2 class="order-summary-title">Thông tin đơn hàng</h2>
                                <div class="summary-subtotal hidden">
                                    <div class="summary-total">
                                        <p>Tổng tiền: <span><?php echo number_format(($totalCart["sum(giatien*giohang.soluong)"])) ?>₫</span></p>
                                    </div>
                                    <div class="summary-action">
                                        <p>Bạn có thể nhập mã giảm giá ở trang thanh toán</p>
                                        <?php $user = $db->prepare("SELECT * from khachhang where makhachhang = :userID");
                                        $user->bindParam(":userID", $_SESSION["userID"]);
                                        $user->execute();
                                        $users = $user->fetch(PDO::FETCH_ASSOC); ?>
                                        <a class="checkout-btn" href="<?php if ($users["khoa"] == 1) {
                                                                            echo '#';
                                                                        } else {
                                                                            echo 'shipdetails.php';
                                                                        } ?>" <?php if ($users["khoa"] == 1) {
                                                                                    echo 'disabled';
                                                                                } ?> style="<?php if ($users["khoa"] == 1) {
                                                                                                echo 'cursor:no-drop;';
                                                                                            } else {
                                                                                                echo 'cursor: pointer;';
                                                                                            } ?>">THANH TOÁN
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include "gallery.php"
        ?>
    </main>
    <?php
    include "footer.php"
    ?>
    <script type="text/javascript" src="../asset/js/cart.js"></script>
</body>

</html>