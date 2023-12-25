<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
// $update = $db->prepare("UPDATE diachi SET macdinh = 0 where makhachhang = :userID");
// $update->bindParam(':userID', $_SESSION["userID"]);
// $update->execute();
$apartment = $_GET["apartment"];
$ward = $_GET["ward"];
$district = $_GET["district"];
$city = $_GET["city"];
$country = $_GET["country"];
$sql = "INSERT INTO diachi(makhachhang,tenduong,phuong,quan,thanhpho,quocgia,macdinh) values(?,?,?,?,?,?,?)";
$addAdress = $db->prepare($sql);
$addAdress->execute([(int)$_SESSION['userID'], $apartment, $ward, $district, $city, $country, 1]);
echo "true";
