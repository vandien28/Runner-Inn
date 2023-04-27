<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
$sizeRanges = json_decode($_GET['size-filter']);
$query = "SELECT distinct urlmain,tensp,giatien,tenloai,sanpham.masp,kichthuoc FROM sanpham,hinhanhsp,loaigiay,kichthuocsp where sanpham.masp = hinhanhsp.masp and sanpham.maloai = loaigiay.maloai and sanpham.masp = kichthuocsp.masp";
if (!empty($sizeRanges)) {
    $query .= " AND (";
    $first = true;
    foreach ($sizeRanges as $size) {
        if (!$first) {
            $query .= " OR ";
        }
        switch ($size) {
            case 'size=35':
                $query .= "kichthuoc = 35";
                break;
            case 'size=36':
                $query .= "kichthuoc = 36";
                break;
            case 'size=37':
                $query .= "kichthuoc = 37";
                break;
            case 'size=38':
                $query .= "kichthuoc = 38";
                break;
            case 'size=39':
                $query .= "kichthuoc = 39";
                break;
            case 'size=40':
                $query .= "kichthuoc = 40";
                break;
            default:
                break;
        }
        $first = false;
    }
    $query .= ")";
}
$productList = $db->prepare($query);
$productList->execute();
$product = $productList->fetchAll(PDO::FETCH_ASSOC);
if ($product) {
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
} else {
    echo ' <p class="noProduct" >Không tìm thấy sản phẩm phù hợp!</p> ';
}
