<?php
// * kết nối sqlserver trong máy
// try {
//     $conn = new PDO("sqlsrv:server=localhost;database=runnerinn", "sa", "123456");
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

// * kết nối mysql trên xampp

try {
    $conn = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
} catch(PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}
