<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
$delete = $db->prepare("DELETE from giohang where makhachhang = :userID");
$delete->bindParam(':userID', $_SESSION["userID"]);
$delete->execute();
header("Location: /src/collection.php?type=bosuutap");
