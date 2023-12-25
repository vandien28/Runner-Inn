<?php 
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
$update = $db->prepare("UPDATE diachi SET macdinh = 0 where makhachhang = :userID");
$update->bindParam(':userID',$_SESSION["userID"]);
$update->execute();
?>