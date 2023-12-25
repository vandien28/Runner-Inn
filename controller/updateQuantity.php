<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
$quantity = $_GET["quantity"];
$id = $_GET["id"];
$size = $_GET["size"];
$color = $_GET["color"];
$userID = $_SESSION["userID"];
$update = $db->prepare("UPDATE giohang SET soluong = :quantity WHERE masp = :id and kichthuoc = :size and mausac = :color and makhachhang = :userID");
$update->bindParam(":size", $size);
$update->bindParam(":color", $color);
$update->bindParam(":id", $id);
$update->bindParam(":userID", $userID);
$update->bindParam(":quantity", $quantity);
$update->execute();
