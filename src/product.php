<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../asset/css/product.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
</head>
<body onload="renderProduct()">
    <?php
    $db = new PDO("sqlsrv:Server=localhost;Database=RunnerInn", "sa", "123456");
    ?>

    <?php
    include "header.php"
    ?>
    <main id="main">
        <section class="section-title">
            <div class="container">
                <div class="row">
                    <ol>
                        <li class="li_line"><a href="/index.html">Trang chủ</a></li>
                        <li class="li_line"><a href="product1.html">Bộ sưu tập</a> </li>
                        <li><a href="product.html">Tên sản phẩm</a> </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="product-detail">
                        <div class="col-md-7">
                            <div class="product-gallery">
                                <div class="product-thumb">
                                    <div class="product-thumbs active">
                                        <img src="" alt="">
                                    </div>
                                </div>
                                <div class="product-img">
                                    <img src="" alt="">
                                </div>
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
                            <div class="product-title">
                                <h1></h1>
                                <span class="pro_sku">SKU:</span>
                            </div>
                            <div class="product-price">
                                <span class="pro-price"></span>
                            </div>
                           <div class="product-color ">
                                <div class="title-color">
                                    <span>Xanh</span>
                                </div>
                                <div class="select-swap">  
                                    <div data-value="Xanh" class="n-sd swatch-element color xanh ">
                                        <input class="variant-0" id="swatch-0-xanh" type="radio" name="option1" value="Xanh" data-vhandle="xanh" checked="">
                                        <label class="xanh sd" for="swatch-0-xanh">
                                            <span>Xanh</span>
                                        </label>
                                    </div>
                                </div>
                           </div>
                           <div class="product-size">
                            <div class="layered-content filter-size s-filter">
                                <ul class="check-box-list clearfix">
                                    <li>
                                        <input type="checkbox" id="data-size-p2" value="36" name="size-filter" data-size="(variant:product=36)" checked>
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
                                    <li>
                                        <input type="checkbox" id="data-size-p7" value="41" name="size-filter" data-size="(variant:product=41)">
                                        <label for="data-size-p7">41</label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="data-size-p8" value="42" name="size-filter" data-size="(variant:product=42)">
                                        <label for="data-size-p8">42</label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="data-size-p9" value="43" name="size-filter" data-size="(variant:product=43)">
                                        <label for="data-size-p9">43</label>   
                                    </li>
                                </ul>
                            </div>
                           </div>
                           <div class="product-quantity ">
                                <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                                <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
                                <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                           </div>
                           <div class="product-btn">
                                <button class="add-cart">
                                    <span >Thêm vào giỏ</span>
                                </button>
                                <button class="purchase">
                                    <span >Mua ngay</span>
                                </button>
                           </div>
                        </div>
                    </div>
                    <div class="product-related">

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