<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
$colorRanges = json_decode($_GET['color-filter']);
$query = "SELECT distinct urlmain,tensp,giatien,tenloai,sanpham.masp,mausac FROM sanpham,hinhanhsp,loaigiay,mausacsp where sanpham.masp = hinhanhsp.masp and sanpham.maloai = loaigiay.maloai and sanpham.masp = mausacsp.masp";
if (!empty($colorRanges)) {
    $query .= " AND (";
    $first = true;
    foreach ($colorRanges as $color) {
        if (!$first) {
            $query .= " OR ";
        }
        switch ($color) {
            case 'color=Cam':
                $query .= "mausac = 'Cam'";
                break;
            case 'color=Kem':
                $query .= "mausac = 'Kem'";
                break;
            case 'color=Tím':
                $query .= "mausac = 'Tím'";
                break;
            case 'color=Trắng':
                $query .= "mausac = 'Trắng'";
                break;
            case 'color=Xanh Ngọc':
                $query .= "mausac = 'Xanh Ngọc'";
                break;
            case 'color=Xám':
                $query .= "mausac = 'Xám'";
                break;
            case 'color=Xanh':
                $query .= "mausac = 'Xanh'";
                break;
            case 'color=Đen':
                $query .= "mausac = 'Đen'";
                break;
            case 'color=Đỏ':
                $query .= "mausac = 'Đỏ'";
                break;
            case 'color=Hồng':
                $query .= "mausac = 'Hồng'";
                break;
            case 'color=Rêu':
                $query .= "mausac = 'Rêu'";
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
