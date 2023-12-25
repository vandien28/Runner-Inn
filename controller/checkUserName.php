<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
$username = $_GET['username'];
// Kiểm tra tài khoản trong database
$inputName = $db->prepare("SELECT tentk FROM khachhang WHERE tentk = :tentk");
$inputName->bindParam(":tentk", $username);
$inputName->execute();
$checkName = $inputName->fetch(PDO::FETCH_ASSOC);
// Trả về kết quả cho client
if (empty($_GET['username'])) {
    echo "<span style='color: red;'>Tên tài khoản không được để trống.</span>";
} else if ($checkName !== false) {
    echo "<span style='color: red;'>Tên tài khoản đã tồn tại.</span>";
} else {
    echo "<span style='color: green;'>Tên tài khoản có thể sử dụng.</span>";
}
