<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tất cả sản phẩm – Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/product_list.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php $db = new PDO("sqlsrv:Server=localhost;Database=RunnerInn", "sa", "123456"); ?>

    <?php include "header.php" ?>
    <main id="main">
        <section class="section-banner">
            <div class="banner">
                <img src="../asset/img/collection_banner.webp" alt="">
            </div>
        </section>
        <section class="section-title">
            <div class="container">
                <div class="row">
                    <ol>
                        <li class="li_line"><a href="/index.php">Trang chủ</a></li>
                        <li class="li_line"><a>Danh mục</a> </li>
                        <li><a href="collection.php?type=bosuutap">Tất cả sản phẩm</a> </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="collection-body">
                        <div class="col-md-3">
                            <div class="wrap-filter">
                                <div class="box-sidebar">
                                    <div class="left-module">
                                        <div class="filter_xs">
                                            <div class="group-menu">
                                                <div class="layered-category">
                                                    <div class="layered-content">
                                                        <ul class="menuList">
                                                            <li><a href="/index.php">Trang chủ</a></li>
                                                            <li><a href="collection.php?type=bosuutap">Bộ sưu tập</a></li>
                                                            <li class="has-submenu level0">
                                                                <a>Sản phẩm</a>
                                                                <span class="icon-plus-submenu" onclick="showMenubar()">
                                                                    <i class="iconMP fa-thin fa-plus"></i>
                                                                </span>
                                                                <ul class="submenu-links hide">
                                                                    <li><a href="collection.php?type=Nike" title="">Nike</a></li>
                                                                    <li><a href="collection.php?type=Adidas" title="">Adidas</a></li>
                                                                    <li><a href="collection.php?type=Sản phẩm tặng" title="">Sản phẩm tặng</a></li>
                                                                </ul>
                                                                <script>
                                                                    let isCheck = true

                                                                    function showMenubar() {
                                                                        if (isCheck) {
                                                                            $('.submenu-links').classList.remove("hide");
                                                                            $('.iconMP').classList.remove("fa-plus");
                                                                            $('.iconMP').classList.add("fa-minus");
                                                                            isCheck = false
                                                                        } else {
                                                                            $('.submenu-links').classList.add("hide");
                                                                            $('.iconMP').classList.add("fa-plus");
                                                                            $('.iconMP').classList.remove("fa-minus");
                                                                            isCheck = true
                                                                        }

                                                                    }
                                                                </script>
                                                            </li>
                                                            <li><a href="introduce.php">Giới thiệu</a></li>
                                                            <li><a href="news.php">Blog</a></li>
                                                            <li><a href="contact.php">Liên hệ</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="layered">
                                                <div class="title-block">
                                                    <div class="group-filter">
                                                        <div class="layered_subtitle">
                                                            <span>Thương hiệu</span>
                                                            <span class="icon-control">
                                                                <i class="fa fa-minus"></i>
                                                            </span>
                                                        </div>
                                                        <div class="layered-content bl-filter filter-brand">
                                                            <ul class="check-box-list">
                                                                <li>
                                                                    <input type="checkbox" id="data-brand-p1" value="Khác" name="brand-filter" data-vendor="(vendor:product=Khác)">
                                                                    <label for="data-brand-p1">Khác</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="group-filter">
                                                        <div class="layered_subtitle">
                                                            <span>Giá sản phẩm</span>
                                                            <span class="icon-control">
                                                                <i class="fa fa-minus"></i>
                                                            </span>
                                                        </div>
                                                        <div class="layered-content bl-filter filter-price">
                                                            <ul class="check-box-list">
                                                                <li>
                                                                    <input type="checkbox" id="p1" name="cc" data-price="(price:product<=500000)">
                                                                    <label for="p1">
                                                                        <span>Dưới</span> 500,000₫
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="p2" name="cc" data-price="((price:product>500000)&amp;&amp;(price:product<=1000000))">
                                                                    <label for="p2">
                                                                        500,000₫ - 1,000,000₫
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="p3" name="cc" data-price="((price:product>1000000)&amp;&amp;(price:product<=1500000))">
                                                                    <label for="p3">
                                                                        1,000,000₫ - 1,500,000₫
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="p4" name="cc" data-price="((price:product>2000000)&amp;&amp;(price:product<=5000000))">
                                                                    <label for="p4">
                                                                        2,000,000₫ - 5,000,000₫
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="p5" name="cc" data-price="(price:product>=5000000)">
                                                                    <label for="p5">
                                                                        <span>Trên</span> 5,000,000₫
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="group-filter">
                                                        <div class="layered_subtitle">
                                                            <span>Màu sắc</span>
                                                            <span class="icon-control">
                                                                <i class="fa fa-minus"></i>
                                                            </span>
                                                        </div>
                                                        <div class="layered-content filter-color s-filter">
                                                            <ul class="check-box-list">
                                                                <li>
                                                                    <input type="checkbox" id="data-color-p1" value="Cam" name="color-filter" data-color="(variant:product**Cam)">
                                                                    <label for="data-color-p1" style="background-color: #fb4727"></label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-color-p2" value="Kem" name="color-filter" data-color="(variant:product**Kem)">
                                                                    <label for="data-color-p2" style="background-color: #fdfaef"></label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-color-p3" value="Tím" name="color-filter" data-color="(variant:product**Tím)">
                                                                    <label for="data-color-p3" style="background-color: #3e3473"></label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-color-p4" value="Trắng" name="color-filter" data-color="(variant:product**Trắng)">
                                                                    <label for="data-color-p4" style="background-color: #ffffff"></label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-color-p5" value="Xanh Ngọc" name="color-filter" data-color="(variant:product**Xanh Ngọc)">
                                                                    <label for="data-color-p5" style="background-color: #75e2fb"></label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-color-p6" value="Xám" name="color-filter" data-color="(variant:product**Xám)">
                                                                    <label for="data-color-p6" style="background-color: #cecec8"></label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-color-p7" value="Xanh" name="color-filter" data-color="(variant:product**Xanh)">
                                                                    <label for="data-color-p7" style="background-color: #6daef4"></label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-color-p8" value="Đen" name="color-filter" data-color="(variant:product**Đen)">
                                                                    <label for="data-color-p8" style="background-color: #000000"></label>
                                                                </li>

                                                                <li>
                                                                    <input type="checkbox" id="data-color-p9" value="Đỏ" name="color-filter" data-color="(variant:product**Đỏ)">
                                                                    <label for="data-color-p9" style="background-color: #e2262a"></label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-color-p10" value="Hồng" name="color-filter" data-color="(variant:product**Hồng)">
                                                                    <label for="data-color-p10" style="background-color: #ee8aa1"></label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-color-p11" value="Rêu" name="color-filter" data-color="(variant:product**Rêu)">
                                                                    <label for="data-color-p11" style="background-color: #4a5250"></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="group-filter">
                                                        <div class="layered_subtitle">
                                                            <span>Kích Thước</span>
                                                            <span class="icon-control">
                                                                <i class="fa fa-minus"></i>
                                                            </span>
                                                        </div>
                                                        <div class="layered-content filter-size s-filter">
                                                            <ul class="check-box-list clearfix">
                                                                <li>
                                                                    <input type="checkbox" id="data-size-p1" value="35" name="size-filter" data-size="(variant:product=35)">
                                                                    <label for="data-size-p1">35</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-size-p2" value="36" name="size-filter" data-size="(variant:product=36)">
                                                                    <label for="data-size-p2">36</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-size-p3" value="37" name="size-filter" data-size="(variant:product=37)">
                                                                    <label for="data-size-p3">37</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-size-p4" value="38" name="size-filter" data-size="(variant:product=38)">
                                                                    <label for="data-size-p4">38</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-size-p5" value="39" name="size-filter" data-size="(variant:product=39)">
                                                                    <label for="data-size-p5">39</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="data-size-p6" value="40" name="size-filter" data-size="(variant:product=40)">
                                                                    <label for="data-size-p6">40</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="wrap-title">
                                <div class="heading-collection">
                                    <div class="col-md-8">
                                        <h1 class="title">Tất cả sản phẩm</h1>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="custom-dropdown">
                                            <select class="sortProduct ">
                                                <option value="price-ascending" data-filter="&amp;sortby=(price:product=asc)">Giá: Tăng dần</option>
                                                <option value="price-descending" data-filter="&amp;sortby=(price:product=desc)">Giá: Giảm dần</option>
                                                <option value="title-ascending" data-filter="&amp;sortby=(title:product=asc)">Tên: A-Z</option>
                                                <option value="title-descending" data-filter="&amp;sortby=(price:product=desc)">Tên: Z-A</option>
                                                <option value="created-ascending" data-filter="&amp;sortby=(updated_at:product=desc)">Cũ nhất</option>
                                                <option value="created-descending" data-filter="&amp;sortby=(updated_at:product=asc)">Mới nhất</option>
                                                <option value="best-selling" data-filter="&amp;sortby=(sold_quantity:product=desc)">Bán chạy nhất</option>
                                                <option value="quantity-descending">Tồn kho: Giảm dần</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="product-list">
                                    <?php
                                    $productList = $db->prepare("SELECT distinct urlmain,tensp,giatien,tenloai,sanpham.masp FROM sanpham,hinhanhsp,loaigiay where sanpham.masp = hinhanhsp.masp and sanpham.maloai = loaigiay.maloai");
                                    $productList->execute();
                                    $product = $productList->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($product as $row) {
                                        if (isset($_GET['type']) && $_GET['type'] == 'bosuutap') {
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
                                        } else if (isset($_GET['type']) && $_GET['type'] == $row["tenloai"]) {
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
                                    }
                                    ?>
                                </div>
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