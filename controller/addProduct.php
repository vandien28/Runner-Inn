<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
$name = $_POST["name"];
$id = $_POST["id"];
$avt = $_POST["avt"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$color = $_POST["color"];
$size = $_POST["size"];
$trademark = $_POST["trademark"];
$cate = $_POST["category"];
$type = $_POST["type"];
$img = $_POST["img"];
$addProduct = $db->prepare("INSERT INTO sanpham(masp,tensp,mota,giatien,mathuonghieu,maloai,madanhmuc,soluong,an) VALUES (?,?,?,?,?,?,?,?,?)");
$success = $addProduct->execute([$id, $name, NULL, $price, $trademark, $type, $cate, $quantity, 0]);
// * danh sách mã màu
$colorCodes = array(
    "Trắng" => "#FFFFFF",
    "Đen" => "#000000",
    "Đỏ" => "#E2262A",
    "Xanh lá" => "#00FF00",
    'Xanh' => '#6DAEF4',
    'Cam' => '#FB4727',
    'Tím' => '#3E3473',
    'Xám' => '#FDFAEF',
    'Hồng' => '#ee8aa1',
    'Kem' => '#fdfaef',
    'Xanh Ngọc' => '#75e2fb',
    'Rêu' => '#4a5250'

);
// * thêm màu vào database
if (strpos($color, ',') !== false) {
    $colors = explode(",", $color);
    foreach ($colors as $c) {
        $c = trim($c);
        if (array_key_exists($c, $colorCodes)) {
            $hexCode = $colorCodes[$c];
            $addColor = $db->prepare("INSERT INTO mausacsp (mausac, masp, mamau) VALUES (?, ?, ?)");
            $success1 = $addColor->execute([$c, $id, $hexCode]);
        }
    }
} else {
    $c = trim($color);
    if (array_key_exists($c, $colorCodes)) {
        $hexCode = $colorCodes[$c];
        $addColor = $db->prepare("INSERT INTO mausacsp (mausac, masp, mamau) VALUES (?, ?, ?)");
        $success1 = $addColor->execute([$c, $id, $hexCode]);
    }
};
// * thêm size vào database
if (strpos($size, ',') !== false) {
    $sizes = explode(",", $size);
    foreach ($sizes as $s) {
        $s = trim($s);
        $addSize = $db->prepare("INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (?, ?)");
        $success2 = $addSize->execute([$s, $id]);
    }
} else {
    $s = trim($size);
    $addSize = $db->prepare("INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (?, ?)");
    $success2 = $addSize->execute([$s, $id]);
}
// * thêm ảnh vào database 
if (strpos($img, ',') !== false) {
    $imgs = explode(",", $img);
    foreach ($imgs as $i) {
        $addImg = $db->prepare("INSERT INTO hinhanhsp (urlmain,url, masp) VALUES (?,?, ?)");
        $success3 = $addImg->execute([$avt, $i, $id]);
    }
} else {
    $addImg = $db->prepare("INSERT INTO hinhanhsp (urlmain,url, masp) VALUES (?,?, ?)");
    $success3 = $addImg->execute([$avt, $img, $id]);
}
if (($success && $addProduct->rowCount() > 0) && ($success1 && $addColor->rowCount() > 0) && ($success2 && $addSize->rowCount() > 0) && ($success3 && $addImg->rowCount() > 0)) {
    
    echo "success";
} else {
    echo "fail";
}
