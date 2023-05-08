<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
$orderID = mt_rand(100000, 999999);
$sql = "INSERT INTO donhang(madonhang,ngaydathang,makhachhang,trangthaidonhang,phuongthucthanhtoan) values(?,?,?,?,?)";
$addOrder = $db->prepare($sql);
$addOrder->execute([$orderID, $_GET['day'], $_SESSION['userID'], $_GET['status'], $_GET['method']]);
$cart = $db->prepare("SELECT * from giohang,sanpham,donhang where sanpham.masp = giohang.masp and donhang.makhachhang = giohang.makhachhang and madonhang = :orderID and giohang.makhachhang = :userID");
$cart->bindParam(':orderID', $orderID);
$cart->bindParam(':userID', $_SESSION['userID']);
$cart->execute();
$listProduct = $cart->fetchAll(PDO::FETCH_ASSOC);
foreach ($listProduct as $row) {
    $sql = "INSERT INTO chitietdonhang(madonhang,masp,soluongsp,mausac,kichthuoc) values(?,?,?,?,?)";
    $detailOrder = $db->prepare($sql);
    $detailOrder->execute([$row['madonhang'], $row['masp'], $row['soluong'], $row['mausac'], $row['kichthuoc']]);
}

