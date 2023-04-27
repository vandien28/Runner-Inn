<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tìm kiếm – Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/product_list.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php $db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
    ?>

    <?php include "header.php" ?>
    <main id="main">
        <section class="product">
            <div class="container">
                <div class="row">
                    <?php
                    if (isset($_POST['searchProduct'])) {
                    }
                    $nameInput = $_POST['productName'];
                    $product = $db->prepare("SELECT distinct sanpham.masp,tensp,giatien,urlmain FROM sanpham,hinhanhsp WHERE sanpham.masp = hinhanhsp.masp and tensp LIKE :nameProduct");
                    $product->bindValue(":nameProduct", '%' . $nameInput . '%', PDO::PARAM_STR);
                    $product->execute();
                    $checkName = $product->fetchAll(PDO::FETCH_ASSOC);
                    ?>
                    <div class="search-product">
                        <div class="search-heading">
                            <h1>Tìm kiếm</h1>
                            <p class="subtxt">Có <span class="numberProduct"><?php echo count($checkName) ?></span> sản phẩm cho tìm kiếm</p>
                        </div>
                        <div class="row">
                            <p class="subtext-result"> Kết quả tìm kiếm cho <span class="searchName">" <span class="resultName"><?php echo $nameInput ?></span> "</span>.</p>
                            <div class="product-list">

                                <?php
                                foreach ($checkName as $row) {
                                ?>
                                    <div class="col-sm-6">
                                        <div class="product-block">
                                            <div class="product-img">
                                                <a href="product.php?type=<?php echo $row["masp"]; ?>">
                                                    <img src="<?php echo $row["urlmain"] ?>" alt="" title="<?php echo $row["tensp"] ?>">
                                                </a>
                                            </div>
                                            <div class="product-detail">
                                                <div class="box-pro-detail">
                                                    <h3 class="pro-name">
                                                        <a href="product.php?type=<?php echo $row["masp"]; ?>" title="<?php echo $row["tensp"] ?>"><?php echo $row["tensp"] ?></a>
                                                    </h3>
                                                    <div class="box-pro-detail">
                                                        <p class="pro-price "><?php echo number_format($row["giatien"]) ?>₫</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include "gallery.php" ?>
    </main>
    <?php include "footer.php"  ?>
    <script type="text/javascript" src="../asset/js/product.js"></script>
</body>

</html>