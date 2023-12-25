<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
$checkProduct = $db->prepare("SELECT * from chitietdonhang where  masp = :productID");
$checkProduct->bindParam(':productID', $_GET['id'], PDO::PARAM_INT);
$checkProduct->execute();
if ($checkProduct->rowCount() > 0) {
    $updateProduct = $db->prepare("UPDATE sanpham SET an = 1 WHERE masp = :productID");
    $updateProduct->bindParam(':productID', $_GET['id'], PDO::PARAM_INT);
    $updateProduct->execute();
    echo "success";
} else {
    echo "fail";
}
