<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
$priceRanges = json_decode($_GET['price_range']);
$query = "SELECT distinct urlmain,tensp,giatien,tenloai,sanpham.masp FROM sanpham,hinhanhsp,loaigiay where sanpham.masp = hinhanhsp.masp and sanpham.maloai = loaigiay.maloai";
if (!empty($priceRanges)) {
    $query .= " AND (";
    $first = true;
    foreach ($priceRanges as $price) {
        if (!$first) {
            $query .= " OR ";
        }
        switch ($price) {
            case 'price<=500000':
                $query .= "giatien <= 500000";
                break;
            case '500000<price<=1000000':
                $query .= "giatien > 500000 AND giatien <= 1000000";
                break;
            case '1000000<price<=1500000':
                $query .= "giatien > 1000000 AND giatien <= 1500000";
                break;
            case '2000000<price<=5000000':
                $query .= "giatien > 2000000 AND giatien <= 5000000";
                break;
            case 'price>=5000000':
                $query .= "giatien>=5000000";
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
if($product) {
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

