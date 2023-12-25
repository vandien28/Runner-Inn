<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
$id = $_GET['id'];
$size = $_GET['size'];
$color = $_GET['color'];
$quantity = $_GET['quantity'];
$removeProduct = $db->prepare("DELETE from giohang WHERE masp = ? and makhachhang = ? and soluong = ? and kichthuoc = ? and mausac = ?");
$removeProduct->execute([(int)$id, (int)$_SESSION['userID'], (int)$quantity, (int)$size, $color]);

$renderProduct = $db->prepare("SELECT distinct tensp, urlmain,giohang.soluong,kichthuoc,mausac,makhachhang,sanpham.masp,giatien from sanpham,giohang,hinhanhsp where sanpham.masp = giohang.masp and sanpham.masp = hinhanhsp.masp");
$renderProduct->execute();
$addToCart = $renderProduct->fetchAll(PDO::FETCH_ASSOC);
foreach ($addToCart as $row) {
    if ($row["makhachhang"] == $_SESSION["userID"]) {
        echo '
        <div class="item line-item line-item-container">
        <div class="left">
            <div class="item-img">
                <a href="product.php?type=' . $row["masp"] . '">
                    <img src="' . $row["urlmain"] . '" alt="' . $row["tensp"] . '">
                </a>
            </div>
        </div>
        <div class="right">
            <div class="item-info">
                <a href="product.php?type=' . $row["masp"] . '" alt="' . $row["tensp"] . '">
                    <h3>' . $row["tensp"] . '</h3>
                    <div class="item-desc">
                        <span class="variant_title">' . $row["mausac"] . ' / ' . $row["kichthuoc"] . '</span>
                    </div>
                </a>
            </div>
            <div class="item-quan">
                <div class="qty quantity-partent qty-click clearfix">
                    <button type="button" class="qtyminus qty-btn">-</button>
                    <input type="text" size="4" name="updates[]" min="1" id="updates_1040409894" data-price="575000000" value="' . $row["soluong"] . '" class="tc line-item-qty item-quantity">
                    <button type="button" class="qtyplus qty-btn">+</button>
                </div>
            </div>
            <div class="item-price">
                <p>
                    <span>' . number_format($row["giatien"]) . '₫</span>
                </p>
            </div>
            <div class="item-total-price">
                <div class="price">
                    <span class="text">Thành tiền:</span>
                    <span class="line-item-total">' . number_format($row["giatien"]) . '₫</span>
                </div>
                <div class="remove" data-id="' . $row["masp"] . '" data-color="' . $row["mausac"] . '" data-size="' . $row["kichthuoc"] . '" data-quantity="' . $row["soluong"] . '" data-price="' . $row["giatien"] . '" onclick="removeProduct(this),removeProductToCart(this)">
                    <i class="fa-light fa-trash-can"></i>
                </div>
            </div>
        </div>
    </div>
        ';
    }
}
