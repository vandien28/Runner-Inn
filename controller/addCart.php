<?php

use function PHPSTORM_META\type;

session_start();
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
$id = $_POST['id'];
$size = $_POST['size'];
$color = $_POST['color'];
$quantity = $_POST['quantity'];
$sql = "INSERT INTO giohang (masp, makhachhang, soluong, kichthuoc, mausac) VALUES (?, ?, ?, ?, ?)";
$stmt = $db->prepare($sql);
$stmt->execute([(int)$id, (int)$_SESSION['userID'], (int)$quantity, (int)$size, $color]);
