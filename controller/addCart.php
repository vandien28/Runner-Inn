<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
$id = $_GET['id'];
$size = $_GET['size'];
$color = $_GET['color'];
$quantity = $_GET['quantity'];
$sql = "INSERT INTO giohang (masp, makhachhang, soluong, kichthuoc, mausac) VALUES (?, ?, ?, ?, ?)";
$addProduct = $db->prepare($sql);
$addProduct->execute([(int)$id, (int)$_SESSION['userID'], (int)$quantity, (int)$size, $color]);

$renderProduct = $db->prepare("SELECT distinct tensp, urlmain,giohang.soluong,kichthuoc,mausac,makhachhang,sanpham.masp,giatien from sanpham,giohang,hinhanhsp where sanpham.masp = giohang.masp and sanpham.masp = hinhanhsp.masp");
$renderProduct->execute();
$addToCart = $renderProduct->fetchAll(PDO::FETCH_ASSOC);
foreach ($addToCart as $row) {
    if ($row["makhachhang"] == $_SESSION["userID"]) {
        echo '
        <tr class="list-item">
            <td class="img">
                <a href="/src/product.php?type=' . $row["masp"] . '"><img src="' . $row["urlmain"] . '" alt=""></a>
            </td>
            <td class="information">
                <a class="pro-title" href="/src/product.php?type=' . $row["masp"] . '">' . $row["tensp"] . '</a>
                <span class="variant">' . $row["mausac"] . ' /' . $row["kichthuoc"] . ' </span>
                <span class="pro-quantity">' . $row["soluong"] . '</span>
                <span class="pro-price-view">' . number_format($row["giatien"]) . '₫</span>
                <span class="remove-pro" data-id="' . $row["masp"] . '" data-size="' . $row["kichthuoc"] . '" data-color="' . $row["mausac"] . '" data-quantity="' . $row["soluong"] . '" data-price="' . $row["giatien"] . '" onclick="removeProduct(this)"> 
                    <i class="fa-regular fa-rectangle-xmark"></i>
                </span>
            </td>                                                          
        </tr>
        ';
    }
}
