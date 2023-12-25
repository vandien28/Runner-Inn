<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
$apartment = $_GET["apartment"];
$ward = $_GET["ward"];
$district = $_GET["district"];
$city = $_GET["city"];
$country = $_GET["country"];
$addAdress = $db->prepare("UPDATE diachi set tenduong = :apartment , phuong = :ward ,quan = :district,thanhpho = :city,quocgia=:country, macdinh = 1 where makhachhang = :userID");
$addAdress->bindParam(':apartment', $apartment);
$addAdress->bindParam(':ward', $ward);
$addAdress->bindParam(':district', $district);
$addAdress->bindParam(':city', $city);
$addAdress->bindParam(':country', $country);
$addAdress->bindParam(':userID', $_SESSION["userID"]);
$addAdress->execute();
echo "true";
