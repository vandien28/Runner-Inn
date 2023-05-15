<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");

if (isset($_GET["orderId"]) && isset($_GET["status"])) {
    $orderId = $_GET["orderId"];
    $status = $_GET["status"];
    $update = $db->prepare("UPDATE donhang SET trangthaidonhang = :status WHERE madonhang = :orderId");
    $update->bindParam(':status', $status);
    $update->bindParam(':orderId', $orderId);
    $update->execute();
}
