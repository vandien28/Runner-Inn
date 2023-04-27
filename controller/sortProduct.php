<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
$sort = $_GET['sort'];
$query = "SELECT distinct urlmain,tensp,giatien,tenloai,sanpham.masp FROM sanpham,hinhanhsp,loaigiay where sanpham.masp = hinhanhsp.masp and sanpham.maloai = loaigiay.maloai";

switch ($sort) {
    case 'price-ascending':
        $query .= " ORDER BY giatien ASC";
        break;
    case 'price-descending':
        $query .= " ORDER BY giatien DESC";
        break;
    case 'title-ascending':
        $query .= " ORDER BY tensp ASC";
        break;
    case 'title-descending':
        $query .= " ORDER BY tensp DESC";
        break;
    default:
        break;
}

$productList = $db->prepare($query);
$productList->execute();
$product = $productList->fetchAll(PDO::FETCH_ASSOC);
foreach ($product as $row) {
    if (isset($_GET['type']) && $_GET['type'] == 'bosuutap') {
        echo '
    <div class="col-sm-6 product-item">
    <div class="product-block">
        <div class="product-img">
            <a href="product.php?type=' . $row["masp"] . '">
                <img src="' . $row["urlmain"] . '" alt="" title="' . $row["tensp"] . '">
            </a>
        </div>
        <div class="product-detail">
            <div class="box-pro-detail">
                <h3 class="pro-name">
                    <a href="product.php?type=' . $row["masp"] . '" title="' . $row["tensp"] . '"">' . $row["tensp"] . '</a>
                </h3>
                <div class="box-pro-detail">
                    <p class="pro-price">' . number_format($row["giatien"]) . '₫</p>
                </div>
            </div>
        </div>
    </div>
</div>
    ';
    } else if (isset($_GET['type']) && $_GET['type'] == $row["tenloai"]) {
        echo '
        <div class="col-sm-6 product-item">
        <div class="product-block">
            <div class="product-img">
                <a href="product.php?type=' . $row["masp"] . '">
                    <img src="' . $row["urlmain"] . '" alt="" title="' . $row["tensp"] . '">
                </a>
            </div>
            <div class="product-detail">
                <div class="box-pro-detail">
                    <h3 class="pro-name">
                        <a href="product.php?type=' . $row["masp"] . '" title="' . $row["tensp"] . '"">' . $row["tensp"] . '</a>
                    </h3>
                    <div class="box-pro-detail">
                        <p class="pro-price">' . number_format($row["giatien"]) . '₫</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        ';
    }
}
