<!DOCTYPE html>
<html lang="en">
<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $productName = $db->prepare("SELECT  tensp,masp FROM sanpham");
    $productName->execute();
    $name = $productName->fetchAll(PDO::FETCH_ASSOC);
    foreach ($name as $row) {
        if (isset($_GET['type']) && $_GET['type'] == $row["masp"]) {
    ?>
            <title><?php echo $row["tensp"] ?></title>
    <?php  }
    } ?>
    <link rel="stylesheet" href="../asset/css/product.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include "header.php";
    $productNameID = $db->prepare("SELECT  tensp,masp FROM sanpham");
    $productNameID->execute();
    $nameID = $productNameID->fetchAll(PDO::FETCH_ASSOC);
    foreach ($nameID as $row) {
        if (isset($_GET['type']) && $_GET['type'] == $row["masp"]) {
    ?>
            <main id="main">
                <section class="section-title">
                    <div class="container">
                        <div class="row">
                            <ol>
                                <li class="li_line"><a href="/index.php">Trang chủ</a></li>
                                <li class="li_line"><a href="collection.php?type=bosuutap">Bộ sưu tập</a> </li>
                                <li><a href="product.php?type=<?php echo $row["masp"]; ?>" class="nameProduct"><?php echo $row["tensp"] ?></a></li>
                            </ol>
                        </div>
                    </div>
                </section>
        <?php  }
    } ?>
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="product-detail">
                        <div class="col-md-7">
                            <div class="product-gallery">
                                <div class="product-thumb">
                                    <?php
                                    $productImg = $db->prepare("SELECT url,masp FROM hinhanhsp");
                                    $productImg->execute();
                                    $img = $productImg->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($img as $row) {
                                        if (isset($_GET['type']) && $_GET['type'] == $row["masp"]) {
                                    ?>
                                            <div class="product-thumbs">
                                                <img src="<?php echo $row["url"] ?>" alt="" class="listImg">
                                            </div>
                                    <?php
                                        }
                                    } ?>
                                </div>
                                <?php
                                $productImgMain = $db->prepare("SELECT distinct urlmain,masp FROM hinhanhsp");
                                $productImgMain->execute();
                                $imgMain = $productImgMain->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($imgMain as $row) {
                                    if (isset($_GET['type']) && $_GET['type'] == $row["masp"]) {
                                ?>
                                        <div class="product-img">
                                            <img src="<?php echo $row["urlmain"] ?>" alt="">
                                        </div>
                                <?php
                                    }
                                } ?>
                            </div>

                            <div class="product-description">
                                <div class="title-bl">
                                    <h2>Mô tả</h2>
                                </div>
                                <div class="description-content">
                                    <div class="description-detail">
                                        <p>
                                            <span>Hiện đại và thời trang khi diện item mới của Nike. Màu sắc lạ mắt, chất liệu thoáng mát, nhẹ nhàng, phù hợp với những chàng trai yêu phong cách sports.</span>
                                            <br><br>
                                        </p>
                                        <ul>
                                            <li>Chất liệu cao cấp EVA, PU, Cushlon, Phylon.</li>
                                            <li>Bền, chống bám bẩn, dễ dàng lau chùi. Mũi giày đầy đặn, form dáng chuẩn.</li>
                                            <li>Bảo vệ đầu ngón chân khi hoạt động. Có lớp lót đệm bên trong.</li>
                                            <li>Êm, di chuyển nhiều không bị đau chân. Cổ giày thiết kế đơn giản, vừa vặn.</li>
                                            <li>Di chuyển dễ dàng, thoải mái.</li>
                                            <li>Đế bằng chất liệu cao su<br></li>
                                            <li>Êm ái, độ bám tốt, chống trơn trượt.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <?php
                            $productNameIDs = $db->prepare("SELECT tensp,masp,giatien FROM sanpham");
                            $productNameIDs->execute();
                            $nameIDs = $productNameIDs->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($nameIDs as $row) {
                                if (isset($_GET['type']) && $_GET['type'] == $row["masp"]) {
                            ?>
                                    <div class="product-title">
                                        <h1 class="pro-name"><?php echo $row["tensp"] ?></h1>
                                        <span class="pro_sku">SKU:&nbsp;&nbsp;<?php echo $row["masp"] ?></span>
                                    </div>
                                    <div class="product-price">
                                        <span class="pro-price"><?php echo number_format($row["giatien"]) ?>₫</span>
                                    </div>
                            <?php
                                }
                            } ?>
                            <div class="product-color ">
                                <div class="title-color">
                                    <span></span>
                                </div>
                                <div class="select-swap">
                                    <?php
                                    $productColor = $db->prepare("SELECT mausac,masp,mamau FROM mausacsp");
                                    $productColor->execute();
                                    $color = $productColor->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($color as $row) {
                                        if (isset($_GET['type']) && $_GET['type'] == $row["masp"]) {
                                    ?>
                                            <div data-value="<?php echo $row["mausac"] ?>" class="n-sd swatch-element color">
                                                <input id="swatch-0-<?php echo $row["mausac"] ?>" class="colorChecked" type="radio" name="option" value="<?php echo $row["mausac"] ?>">
                                                <label class="<?php echo $row["mausac"] ?> sd" for="swatch-0-<?php echo $row["mausac"] ?>">
                                                    <span style="background:<?php echo $row["mamau"] ?> " class="productColor"><?php echo $row["mausac"] ?></span>
                                                </label>
                                            </div>
                                    <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                            <div class="product-size">
                                <div class="layered-content filter-size s-filter">
                                    <ul class="check-box-list clearfix">
                                        <?php
                                        $productSize = $db->prepare("SELECT masp,kichthuoc FROM kichthuocsp");
                                        $productSize->execute();
                                        $size = $productSize->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($size as $row) {
                                            if (isset($_GET['type']) && $_GET['type'] == $row["masp"]) {
                                        ?>
                                                <li>
                                                    <input type="radio" id="data-size-<?php echo $row["kichthuoc"] ?>" value="<?php echo $row["kichthuoc"] ?>" name="size-filter" data-size="size=<?php echo $row["kichthuoc"] ?>" class="sizeChecked">
                                                    <label for="data-size-<?php echo $row["kichthuoc"] ?>"><?php echo $row["kichthuoc"] ?></label>
                                                </li>
                                        <?php
                                            }
                                        } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-quantity ">
                                <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                                <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
                                <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                            </div>
                            <div class="product-btn">
                                <?php
                                $productInfo = $db->prepare("SELECT distinct tensp,sanpham.masp,urlmain,giatien FROM sanpham,hinhanhsp where sanpham.masp = hinhanhsp.masp");
                                $productInfo->execute();
                                $info = $productInfo->fetchAll(PDO::FETCH_ASSOC);
                                if (isset($_SESSION['userID'])) {
                                    foreach ($info as $row) {
                                        if (isset($_GET['type']) && $_GET['type'] == $row["masp"]) {
                                ?>
                                            <button class="add-cart" data-userID="<?php echo $_SESSION['userID']; ?>" data-name="<?php echo $row["tensp"]; ?>" data-id="<?php echo $row["masp"]; ?>" data-price="<?php echo $row["giatien"]; ?>" data-size="" data-color="" data-quantity="" data-img="<?php echo $row["urlmain"]; ?>" onclick="renderDataProduct(),addToCart()" name="addToCart">
                                                <span>Thêm vào giỏ</span>
                                            </button>
                                    <?php }
                                    }
                                } else {
                                    ?><a href="login.php">
                                        <button class="add-cart" data-userID="" data-name="" data-id="" data-price="" data-size="" data-color="" data-quantity="" data-img="" name="addToCart">
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include "gallery.php"
        ?>
            </main>
            <?php
            include "footer.php"
            ?>
            <script type="text/javascript" src="../asset/js/product.js"></script>
</body>

</html>