<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
if (isset($_POST["submitSignup"])) {
    $firstName = $_POST['last_name'];
    $lastName = $_POST['first_name'];
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $enterPassword = $_POST['enterPassword'];
    $userID = mt_rand(100000, 999999);
    $email = $_POST['email'];
    $newUser = $db->prepare("SELECT tentk,email FROM khachhang WHERE tentk='$userName' or email='$email'");
    $newUser->execute();
    $checkUser = $newUser->fetchAll(PDO::FETCH_ASSOC);
    if (count($checkUser) > 0) {
        echo "Đăng ký không thành công";
    } else {
        $sql = "INSERT INTO khachhang (makhachhang, tenkhachhang, sdt, email, tentk, matkhau,khoa) VALUES (?, ?, null, ?, ?, ?,?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$userID, "$firstName $lastName", $email, $userName, $enterPassword, 0]);
        $_SESSION['userName'] = $userName;
        $_SESSION['userID'] = $userID;

        header("Location: ../index.php");
        exit();
    }
}
