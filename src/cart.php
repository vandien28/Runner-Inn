<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng của bạn - Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/cart.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
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
                        <li class="li_line"><a href="/index.php">Trang chủ</a></li>
                        <li><a href="cart.php">Giỏ hàng&nbsp;(<span class="productNumber" ></span>)</a></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="layout-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="col-md-9">
                            <div class="heading">
                                <h1>Giỏ hàng của bạn</h1>
                            </div>
                            <div class="list-pageform-cart">
                                <form action="" method="post" id="cartformpage">
                                    <div class="cart-row">
                                        <h2 class="title-number-cart count-cart">
                                            Bạn đang có
                                            <span><span class="number-product">4</span>&nbsp;sản phẩm</span>
                                            trong giỏ hàng
                                        </h2>
                                        <div class="table-cart">
                                            <div class="item line-item line-item-container">
                                                <div class="left">
                                                    <div class="item-img">
                                                        <a href="product.html">
                                                            <img src="/asset/img/AECA/AECA.webp" alt='Adidas Nmd Xr1 W "Pearl Grey"'>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <div class="item-info">
                                                        <a href="product.html">
                                                            <h3>Adidas Nmd Xr1 W "Pearl Grey"</h3>
                                                            <div class="item-desc">
                                                                <span class="variant_title">Xám / 35</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="item-quan">
                                                        <div class="qty quantity-partent qty-click clearfix">
                                                            <button type="button" class="qtyminus qty-btn">-</button>
                                                            <input type="text" size="4" name="updates[]" min="1" id="updates_1040409894" data-price="575000000" value="1" class="tc line-item-qty item-quantity">
                                                            <button type="button" class="qtyplus qty-btn">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <p>
                                                            <span>5,750,000₫</span>
                                                        </p>
                                                    </div>
                                                    <div class="item-total-price">
                                                        <div class="price">
                                                            <span class="text">Thành tiền:</span>
                                                            <span class="line-item-total">5,750,000₫</span>
                                                        </div>
                                                        <div class="remove">
                                                            <i class="fa-light fa-trash-can"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item line-item line-item-container">
                                                <div class="left">
                                                    <div class="item-img">
                                                        <a href="product.html">
                                                            <img src="/asset/img/AECA/AECA.webp" alt='Adidas Nmd Xr1 W "Pearl Grey"'>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <div class="item-info">
                                                        <a href="product.html">
                                                            <h3>Adidas Nmd Xr1 W "Pearl Grey"</h3>
                                                            <div class="item-desc">
                                                                <span class="variant_title">Xám / 35</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="item-quan">
                                                        <div class="qty quantity-partent qty-click clearfix">
                                                            <button type="button" class="qtyminus qty-btn">-</button>
                                                            <input type="text" size="4" name="updates[]" min="1" id="updates_1040409894" data-price="575000000" value="1" class="tc line-item-qty item-quantity">
                                                            <button type="button" class="qtyplus qty-btn">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <p>
                                                            <span>5,750,000₫</span>
                                                        </p>
                                                    </div>
                                                    <div class="item-total-price">
                                                        <div class="price">
                                                            <span class="text">Thành tiền:</span>
                                                            <span class="line-item-total">5,750,000₫</span>
                                                        </div>
                                                        <div class="remove">
                                                            <i class="fa-light fa-trash-can"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item line-item line-item-container">
                                                <div class="left">
                                                    <div class="item-img">
                                                        <a href="product.html">
                                                            <img src="/asset/img/AECA/AECA.webp" alt='Adidas Nmd Xr1 W "Pearl Grey"'>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <div class="item-info">
                                                        <a href="product.html">
                                                            <h3>Adidas Nmd Xr1 W "Pearl Grey"</h3>
                                                            <div class="item-desc">
                                                                <span class="variant_title">Xám / 35</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="item-quan">
                                                        <div class="qty quantity-partent qty-click clearfix">
                                                            <button type="button" class="qtyminus qty-btn">-</button>
                                                            <input type="text" size="4" name="updates[]" min="1" id="updates_1040409894" data-price="575000000" value="1" class="tc line-item-qty item-quantity">
                                                            <button type="button" class="qtyplus qty-btn">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <p>
                                                            <span>5,750,000₫</span>
                                                        </p>
                                                    </div>
                                                    <div class="item-total-price">
                                                        <div class="price">
                                                            <span class="text">Thành tiền:</span>
                                                            <span class="line-item-total">5,750,000₫</span>
                                                        </div>
                                                        <div class="remove">
                                                            <i class="fa-light fa-trash-can"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item line-item line-item-container">
                                                <div class="left">
                                                    <div class="item-img">
                                                        <a href="product.html">
                                                            <img src="/asset/img/AECA/AECA.webp" alt='Adidas Nmd Xr1 W "Pearl Grey"'>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <div class="item-info">
                                                        <a href="product.html">
                                                            <h3>Adidas Nmd Xr1 W "Pearl Grey"</h3>
                                                            <div class="item-desc">
                                                                <span class="variant_title">Xám / 35</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="item-quan">
                                                        <div class="qty quantity-partent qty-click clearfix">
                                                            <button type="button" class="qtyminus qty-btn">-</button>
                                                            <input type="text" size="4" name="updates[]" min="1" id="updates_1040409894" data-price="575000000" value="1" class="tc line-item-qty item-quantity">
                                                            <button type="button" class="qtyplus qty-btn">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <p>
                                                            <span>5,750,000₫</span>
                                                        </p>
                                                    </div>
                                                    <div class="item-total-price">
                                                        <div class="price">
                                                            <span class="text">Thành tiền:</span>
                                                            <span class="line-item-total">5,750,000₫</span>
                                                        </div>
                                                        <div class="remove">
                                                            <i class="fa-light fa-trash-can"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-row" style="padding-bottom: 30px;">
                                        <div class="row note-book">
                                            <div class="cart-left-book">
                                                <div class="checkout">
                                                    <label for="note" class="note-label">Ghi chú đơn hàng</label>
                                                    <textarea class="form-note" id="note" name="note" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="cart-right-book">
                                                <div class="policy_return">
                                                    <h4>Chính sách Đổi/Trả</h4>
                                                    <ul>
                                                        <li>Sản phẩm được đổi 1 lần duy nhất, không hỗ trợ trả.</li>
                                                        <li>Sản phẩm còn đủ tem mác, chưa qua sử dụng.</li>
                                                        <li>Sản phẩm nguyên giá được đổi trong 30 ngày trên toàn hệ thống.</li>
                                                        <li>Sản phẩm sale chỉ hỗ trợ đổi size (nếu cửa hàng còn) trong 7 ngày trên toàn hệ thống.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 sidebar-cart">
                            <a href="collection.php?type=bosuutap"  class="continue" >Tiếp tục mua hàng&nbsp;<i class="fa-sharp fa-light fa-arrow-right"></i></a>
                            <div class="order-summary-block">
                                <h2 class="order-summary-title">Thông tin đơn hàng</h2>
                                <div class="summary-subtotal hidden">
                                    <div class="summary-total">
                                        <p>Tổng tiền: <span></span>
                                        </p>
                                    </div>
                                    <div class="summary-action">
                                        <p>Bạn có thể nhập mã giảm giá ở trang thanh toán</p>
                                        <a class="checkout-btn" href="#">THANH TOÁN</a>
                                    </div>
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
    <script type="text/javascript" src="../asset/js/cart.js"></script>
</body>

</html>