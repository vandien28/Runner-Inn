<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
$checkProduct = $db->prepare("DELETE from sanpham where  masp = :productID");
$checkProduct->bindParam(':productID', $_GET['id'], PDO::PARAM_INT);
$checkProduct->execute();
if ($checkProduct->rowCount() > 0) {
    echo "success";
} else {
    echo "fail";
}
