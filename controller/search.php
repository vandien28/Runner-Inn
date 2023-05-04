<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
$productInput = $_GET['productName'];
$inputNameProduct = $db->prepare("SELECT distinct sanpham.masp,tensp,giatien,urlmain FROM sanpham,hinhanhsp WHERE sanpham.masp = hinhanhsp.masp and tensp LIKE :nameProduct");
$inputNameProduct->bindValue(":nameProduct", '%' . $productInput . '%', PDO::PARAM_STR);
$inputNameProduct->execute();
$checkNameProduct = $inputNameProduct->fetchAll(PDO::FETCH_ASSOC);

if (empty($productInput)) {
} else if (count($checkNameProduct) == 0) {
    echo '<p style="text-align: center;
    margin-top: 30px;
    font-size: 16px;
    color: #272727;">Không có sản phẩm nào</p>';
} else {
    foreach ($checkNameProduct as $product) {
        echo '<div class="item-ult">
            <div class="thumbs">
                <a href="/src/product.php?type=' . $product["masp"] . '" title="' . $product['tensp'] . '">
                    <img alt="' . $product['tensp'] . '" src="' . $product['urlmain'] . '">
                </a>
            </div>
            <div class="title">
                 <a title="' . $product['tensp'] . '" href="/src/product.php?type=' . $product["masp"] . '">' . $product['tensp'] . '</a>
                    <p class="f-initial">' . number_format($product['giatien']) . '₫</p>
             </div>
        </div>';
    }
}
