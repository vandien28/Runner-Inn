<?php
// Kết nối CSDL
$servername = "localhost";
$username = "sa";
$password = "123456";
$dbname = "runnerinn";

try {
    $conn = new PDO("sqlsrv:Server=$servername;Database=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (isset($_POST["submitLogin"])) {
    $email = $_POST["customer[email]"];
    $pass = $_POST["customer[password]"];

    $stmt = $conn->prepare("SELECT * FROM khachhang WHERE email = :email AND matkhau = :pass");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $pass);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // đăng nhập thành công
        header("Location: index.php"); // chuyển hướng đến trang chủ
        echo "đăng nhập thành công";
    } else {
        // đăng nhập thất bại
        echo "Đăng nhập không thành công";
    }
}
