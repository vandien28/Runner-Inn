<?php
session_start();
$servername = "localhost";
$username = "sa";
$password = "123456";
$dbname = "runnerinn";

try {
    $db = new PDO("sqlsrv:Server=$servername;Database=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
if (isset($_POST["submitLogin"])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $user = $db->prepare("SELECT tentk FROM khachhang WHERE email = :email AND matkhau = :pass");
    $user->bindParam(':email', $email);
    $user->bindParam(':pass', $pass);
    $user->execute();
    $checkUser = $user->fetch(PDO::FETCH_ASSOC);
    if ($checkUser !== false) {
        $userName = $checkUser['tentk'];
        $_SESSION['userName'] = $userName;
        header("Location: ../index.php");
        exit();
    } else {
        echo "Đăng nhập không thành công";
    }
}
