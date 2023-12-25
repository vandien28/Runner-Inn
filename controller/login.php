<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
if (isset($_POST["submitLogin"])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $user = $db->prepare("SELECT tentk,makhachhang,khoa FROM khachhang WHERE email = :email AND matkhau = :pass");
    $user->bindParam(':email', $email);
    $user->bindParam(':pass', $pass);
    $user->execute();
    $checkUser = $user->fetch(PDO::FETCH_ASSOC);
    if ($checkUser) {
        $userName = $checkUser['tentk'];
        $userID = $checkUser['makhachhang'];
        $_SESSION['userName'] = $userName;
        $_SESSION['userID'] = $userID;
        header("Location: ../index.php");
        exit();
    } else {
        $_SESSION['errormessage'] = "Đăng nhập không thành công!";
        header("Location: /src/login.php");
        exit();
    }
}
