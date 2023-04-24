<?php
session_start();
$db = new PDO("sqlsrv:Server=localhost;Database=RunnerInn", "sa", "123456");
if (isset($_POST["submitLogin"])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $user = $db->prepare("SELECT tentk,makhachhang FROM khachhang WHERE email = :email AND matkhau = :pass");
    $user->bindParam(':email', $email);
    $user->bindParam(':pass', $pass);
    $user->execute();
    $checkUser = $user->fetch(PDO::FETCH_ASSOC);
    if ($checkUser !== false) {
        $userName = $checkUser['tentk'];
        $userID = $checkUser['makhachhang'];
        $_SESSION['userName'] = $userName;
        $_SESSION['userID'] = $userID;
        header("Location: ../index.php");
        exit();
    } else {
        echo "Đăng nhập không thành công";
    }
}
