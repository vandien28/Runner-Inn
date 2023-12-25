<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
$apartment = $_GET["apartment"];
$ward = $_GET["ward"];
$district = $_GET["district"];
$city = $_GET["city"];
$country = $_GET["country"];
$df = $_GET["default"];
$numberphone = $_GET["numberphone"];
if ($df = 1) {
    $update = $db->prepare("UPDATE diachi SET macdinh = 0 where makhachhang = :userID");
    $update->bindParam(':userID', $_SESSION["userID"]);
    $update->execute();
}
$addAdress = $db->prepare("INSERT INTO diachi(makhachhang,tenduong,phuong,quan,thanhpho,quocgia,macdinh) values(?,?,?,?,?,?,?)");
$addAdress->execute([(int)$_SESSION['userID'], $apartment, $ward, $district, $city, $country, $df]);
$update_s = $db->prepare("UPDATE khachhang SET sdt = :sdt where makhachhang = :userID");
$update_s->bindParam(':userID', $_SESSION["userID"]);
$update_s->bindParam(':sdt', $numberphone);
$update_s->execute();
echo "true";
