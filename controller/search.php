<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
$searchInput = $_GET['searchInput'];
$inputNameProduct = $db->prepare("SELECT distinct sanpham.masp tensp,giatien,urlmain FROM sanpham,hinhanhsp WHERE sanpham.masp = hinhanhsp.masp and sanpham.tensp LIKE :nameProduct");
$inputNameProduct->bindValue(':nameProduct', '%' . $searchInput . '%', PDO::PARAM_STR);
$inputNameProduct->execute();
$checkNameProduct = $inputNameProduct->fetch(PDO::FETCH_ASSOC);
if ($checkNameProduct) {
    foreach ($checkNameProduct as $product) {
        echo '
        <div class="item-ult">
            <div class="thumbs">
                <a href="" title="">
                    <img alt="" src="' . $product["urlmain"] . '">
                </a>
            </div>
            <div class="title">
                 <a title="" href="">' . $product["tensp"] . '</a>
                    <p class="f-initial">' . number_format($product["giatien"]) . '₫</p>
             </div>
        </div>                        
        ';
    }
} else {
    echo "<p>Sản phẩm không tồn tại</p>";
}
