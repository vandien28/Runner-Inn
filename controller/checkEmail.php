<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
$email = $_GET['email'];
// Kiểm tra tài khoản trong database
$inputEmail = $db->prepare("SELECT email FROM khachhang WHERE email = :email");
$inputEmail->bindParam(":email", $email);
$inputEmail->execute();
$checkEmail = $inputEmail->fetch(PDO::FETCH_ASSOC);
// Trả về kết quả cho client
if (empty($_GET['email'])) {
    echo "<span style='color: red;'>Email không được để trống.</span>";
} else if ($checkEmail !== false) {
    echo "<span style='color: red;'>Email đã tồn tại.</span>";
} else {
    echo "<span style='color: green;'>Email có thể sử dụng.</span>";
}
