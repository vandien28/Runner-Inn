<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng của bạn - Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/cart.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header id="header">
        <div class="navigation-header">
            <div class="promo-bar">
                <a href="">
                    <span>miễn phí vận chuyển với đơn hàng nội thành &gt; 300K - đổi trả trong 30 ngày - đảm bảo chất
                        lượng</span>
                </a>
            </div>
            <div class="header-scroll">
                <div class="container">
                    <div class="flexContainer-header-scroll">
                        <div class="scroll-logo">
                            <div class="wrap-logo">
                                <a href="../index.html" aria-label="logo">
                                    <img src="../asset/img/logo.png" alt="Runner Inn" class="header-logo">
                                </a>
                            </div>
                        </div>
                        <div class="scroll-menu">
                            <div class="container">
                                <div class="header-navbar-menu">
                                    <div class="main-header-menu">
                                        <nav class="desk-menu">
                                            <ul class="text-center">
                                                <li class="active"><a href="/index.html">trang chủ</a></li>
                                                <li class="active"><a href="/src/product1.html">bộ sưu
                                                        tập</a></li>
                                                <li class="active"><a class="active_3">sản phẩm&nbsp;<i
                                                            class="down fa-sharp fa-regular fa-chevron-down"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="/src/nike.html">Nike</a></li>
                                                        <li><a href="/src/adidas.html">Adidas</a></li>
                                                        <li><a href="/src/present.html">Sản phẩm tặng</a></li>
                                                    </ul>
                                                </li>
                                                <li class="active"><a href="">giới thiệu</a></li>
                                                <li class="active"><a href="">blog</a></li>
                                                <li class="active"><a href="">liên hệ</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scroll-icon">
                            <div class="header-wrap-icon">
                                <div class="header-action_search ">
                                    <a class="header-action-toggle" aria-label="Tài Khoản">
                                        <span class="box-action-icon"><i class="fa-light fa-magnifying-glass"
                                                onclick="box_search()"></i></span>
                                    </a>
                                    <div class="header_dropdown scroll-search hide">
                                        <span class="box-triangle">
                                            <svg viewBox="0 0 20 9">
                                                <path
                                                    d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                                    fill="#ffffffff"></path>
                                            </svg>
                                        </span>
                                        <div class="site-nav">
                                            <div class="site_panel">
                                                <div class="search_panel">
                                                    <i class="fa-light fa-xmark" onclick="box_search()"></i>
                                                    <div class="search-header">
                                                        <p>tìm kiếm</p>
                                                    </div>
                                                </div>
                                                <div class="search-scroll-box">
                                                    <form action="/search" class="search-scroll-form">
                                                        <div class="search-inner">
                                                            <input type="text" size="20"
                                                                placeholder="Tìm kiếm sản phẩm..."
                                                                class="search-scroll-input">
                                                        </div>
                                                        <button type="submit" class="btn-search-scroll"><i
                                                                class="fa-sharp fa-regular fa-magnifying-glass"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-action_account">
                                    <a class="header-action-toggle" aria-label="Tài Khoản">
                                        <span class="box-action-icon"><i class="fa-light fa-user"
                                                onclick="box_accounts()"></i></span>
                                    </a>
                                    <div class="header_dropdown scroll-account hide">
                                        <span class="box-triangle">
                                            <svg viewBox="0 0 20 9">
                                                <path
                                                    d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                                    fill="#ffffffff"></path>
                                            </svg>
                                        </span>
                                        <div class="site-nav">
                                            <div class="site_panel">
                                                <div class="login_panels">
                                                    <i class="fa-light fa-xmark" onclick="box_accounts()"></i>
                                                    <div class="account-header">
                                                        <h2 class="account_title">Đăng nhập tài khoản</h2>
                                                        <p class="account_legend">Nhập email và mật khẩu của bạn:</p>
                                                    </div>
                                                    <div class="account-list">
                                                        <form action="/account/login" accept-charset="UTF-8"
                                                            method="post" id="form_login">
                                                            <div
                                                                class="form__input-wrapper form__input-wrapper--labelled">
                                                                <input type="email" id="login-customer[email]"
                                                                    class="form__field form__field--text"
                                                                    name="customer[email]" required="required"
                                                                    autocomplete="email" placeholder=" ">
                                                                <label for="login-customer[email]"
                                                                    class="form__floating-label">Email</label>
                                                            </div>
                                                            <div
                                                                class="form__input-wrapper form__input-wrapper--labelled">
                                                                <input type="password" id="login-customer[password]"
                                                                    class="form__field form__field--text"
                                                                    name="customer[password]" required="required"
                                                                    autocomplete="current-password" placeholder=" ">
                                                                <label for="login-customer[password]"
                                                                    class="form__floating-label">Mật khẩu</label>
                                                                <div class="sitebox-recaptcha">
                                                                    This site is protected by reCAPTCHA and the Google
                                                                    <a href="https://policies.google.com/privacy"
                                                                        target="_blank" rel="noreferrer">Privacy
                                                                        Policy</a>
                                                                    and <a href="https://policies.google.com/terms"
                                                                        target="_blank" rel="noreferrer">Terms of
                                                                        Service</a> apply.
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="form__submit"
                                                                id="form_submit-login">Đăng nhập</button>
                                                        </form>
                                                        <div class="site_account_secondary-action">
                                                            <p>Khách hàng mới?
                                                                <a href="/account/register" class="link">Tạo tài
                                                                    khoản</a>
                                                            </p>
                                                            <p>Quên mật khẩu?
                                                                <button aria-controls="header-recover-panel"
                                                                    class="restorepass link">Khôi phục mật khẩu</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="recover_panels hide">
                                                    <i class="fa-light fa-xmark" onclick="box_accounts()"></i>
                                                    <div class="account-header">
                                                        <h2 class="account_title">Khôi phục mật khẩu</h2>
                                                        <p class="account_legend">Nhập email của bạn:</p>
                                                    </div>
                                                    <div class="account-list">
                                                        <form action="/account/login" accept-charset="UTF-8"
                                                            method="post" id="form_login">
                                                            <div
                                                                class="form__input-wrapper form__input-wrapper--labelled">
                                                                <input type="email" id="recover-customer[recover_email]"
                                                                    class="form__field form__field--text" name="email"
                                                                    required="required" autocomplete="email"
                                                                    placeholder=" ">
                                                                <label for="recover-customer[recover_email]"
                                                                    class="form__floating-label">Email</label>
                                                            </div>
                                                            <div class="sitebox-recaptcha">
                                                                This site is protected by reCAPTCHA and the Google
                                                                <a href="https://policies.google.com/privacy"
                                                                    target="_blank" rel="noreferrer">Privacy Policy</a>
                                                                and <a href="https://policies.google.com/terms"
                                                                    target="_blank" rel="noreferrer">Terms of
                                                                    Service</a> apply.
                                                            </div>
                                                            <button type="submit" class="form__submit"
                                                                id="form_submit-recover">Khôi phục</button>
                                                        </form>
                                                        <div class="site_account_secondary-action">
                                                            <p>Bạn đã nhớ mật khẩu?
                                                                <button aria-controls="header-login-panel"
                                                                    class="returnlogin link">Trở về đăng nhập</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="account-information hide">
                                                <div class="login_panel">
                                                    <i class="fa-light fa-xmark" onclick="box_account()"></i>
                                                    <div class="account-header">
                                                        <h2 class="account_title">Thông tin tài khoản</h2>
                                                    </div>
                                                    <div class="account-list">
                                                        <a href="">
                                                            <p class="account_name">runner in</p>
                                                        </a>
                                                        <a href="">
                                                            <p>Tài khoản của bạn</p>
                                                        </a>
                                                        <a href="">
                                                            <p>Danh sách địa chỉ</p>
                                                        </a>
                                                        <a href="">
                                                            <p>Đăng xuất</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-action_cart">
                                    <a class="header-action-toggle" aria-label="Giỏ Hàng" onclick="box_carts()">
                                        <span class="box-action-icon">
                                            <i class="fa-light fa-cart-shopping"></i>
                                            <span class="count-holder">
                                                <span class="count">0</span>
                                            </span>
                                        </span>
                                    </a>
                                    <div class="header_dropdown scroll-cart hide">
                                        <span class="box-triangle">
                                            <svg viewBox="0 0 20 9">
                                                <path
                                                    d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                                    fill="#ffffffff"></path>
                                            </svg>
                                        </span>
                                        <div class="site-nav">
                                            <div class="site-panel">
                                                <div class="cart_panel">
                                                    <i class="fa-light fa-xmark" onclick="box_carts()"></i>
                                                    <div class="cart-header">
                                                        <p>Giỏ hàng</p>
                                                    </div>
                                                </div>
                                                <div class="cart-view">
                                                    <div class="view_product hide">
                                                        <i class="fa-light fa-cart-shopping"></i>
                                                        <p>Hiện chưa có sản phẩm</p>
                                                    </div>
                                                    <div class="scroll-product">
                                                        <table class="productList">
                                                            <tbody>
                                                                <tr class="list-item">
                                                                    <td class="img">
                                                                        <a href=""><img src="/asset/img/AECA/AECA.webp" alt=""></a>
                                                                    </td>
                                                                    <td class="information">
                                                                        <a class="pro-title" href="/src/product.html">tên sản phẩm</a>
                                                                        <span class="variant">màu / size</span>
                                                                        <span class="pro-quantity">sl</span>
                                                                        <span class="pro-price-view">giá</span>
                                                                        <span class="remove-pro">
                                                                            <i class="fa-regular fa-rectangle-xmark"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="list-item">
                                                                    <td class="img">
                                                                        <a href=""><img src="/asset/img/AECA/AECA.webp" alt=""></a>
                                                                    </td>
                                                                    <td class="information">
                                                                        <a class="pro-title" href="/src/product.html">tên sản phẩm</a>
                                                                        <span class="variant">màu / size</span>
                                                                        <span class="pro-quantity">sl</span>
                                                                        <span class="pro-price-view">giá</span>
                                                                        <span class="remove-pro">
                                                                            <i class="fa-regular fa-rectangle-xmark"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="list-item">
                                                                    <td class="img">
                                                                        <a href=""><img src="/asset/img/AECA/AECA.webp" alt=""></a>
                                                                    </td>
                                                                    <td class="information">
                                                                        <a class="pro-title" href="/src/product.html">tên sản phẩm</a>
                                                                        <span class="variant">màu / size</span>
                                                                        <span class="pro-quantity">sl</span>
                                                                        <span class="pro-price-view">giá</span>
                                                                        <span class="remove-pro">
                                                                            <i class="fa-regular fa-rectangle-xmark"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="list-item">
                                                                    <td class="img">
                                                                        <a href=""><img src="/asset/img/AECA/AECA.webp" alt=""></a>
                                                                    </td>
                                                                    <td class="information">
                                                                        <a class="pro-title" href="/src/product.html">tên sản phẩm</a>
                                                                        <span class="variant">màu / size</span>
                                                                        <span class="pro-quantity">sl</span>
                                                                        <span class="pro-price-view">giá</span>
                                                                        <span class="remove-pro">
                                                                            <i class="fa-regular fa-rectangle-xmark"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="list-item">
                                                                    <td class="img">
                                                                        <a href=""><img src="/asset/img/AECA/AECA.webp" alt=""></a>
                                                                    </td>
                                                                    <td class="information">
                                                                        <a class="pro-title" href="/src/product.html">tên sản phẩm</a>
                                                                        <span class="variant">màu / size</span>
                                                                        <span class="pro-quantity">sl</span>
                                                                        <span class="pro-price-view">giá</span>
                                                                        <span class="remove-pro">
                                                                            <i class="fa-regular fa-rectangle-xmark"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <span class="line"></span>
                                                    <div class="payment">
                                                        <table class="table-total">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-left">Tổng tiền</td>
                                                                    <td class="text-right">
                                                                        <span class="price">0</span>
                                                                        <span class="unit">₫</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="">
                                                                            <button class="form__submit btn-view">Xem
                                                                                giỏ hàng</button>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">
                                                                            <button
                                                                                class="form__submit btn-payment">Thanh
                                                                                toán</button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main id="main">
        <section class="section-title">
            <div class="container">
                <div class="row">
                    <ol>
                        <li class="li_line"><a href="/index.html">Trang chủ</a></li>
                        <li ><a href="cart.html">Giỏ hàng</a> </li>
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
                                            <span><span class="number-product">4</span> sản phẩm</span> 
                                            trong giỏ hàng
										</h2>
                                        <div class="table-cart">
                                            <div class="item line-item line-item-container">
                                                <div class="left">
                                                    <div class="item-img">
                                                        <a href="product.html">
                                                            <img src="/asset/img/AECA/AECA.webp" alt="Adidas Nmd Xr1 W " pearl="" grey""="">
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
                                                            <button type="button" class="qtyminus qty-btn" >-</button>
                                                            <input type="text" size="4" name="updates[]" min="1" id="updates_1040409894" data-price="575000000" value="1" class="tc line-item-qty item-quantity">
                                                            <button type="button" class="qtyplus qty-btn" >+</button>
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
                                                            <img src="/asset/img/AECA/AECA.webp" alt="Adidas Nmd Xr1 W " pearl="" grey""="">
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
                                                            <button type="button" class="qtyminus qty-btn" >-</button>
                                                            <input type="text" size="4" name="updates[]" min="1" id="updates_1040409894" data-price="575000000" value="1" class="tc line-item-qty item-quantity">
                                                            <button type="button" class="qtyplus qty-btn" >+</button>
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
                                                            <img src="/asset/img/AECA/AECA.webp" alt="Adidas Nmd Xr1 W " pearl="" grey""="">
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
                                                            <button type="button" class="qtyminus qty-btn" >-</button>
                                                            <input type="text" size="4" name="updates[]" min="1" id="updates_1040409894" data-price="575000000" value="1" class="tc line-item-qty item-quantity">
                                                            <button type="button" class="qtyplus qty-btn" >+</button>
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
                                                            <img src="/asset/img/AECA/AECA.webp" alt="Adidas Nmd Xr1 W " pearl="" grey""="">
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
                                                            <button type="button" class="qtyminus qty-btn" >-</button>
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
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="wrap-site">
                        <div class="site-animation">
                            <h2>Khách hàng và Runner Inn</h2>
                        </div>
                    </div>
                    <div class="list-gallery">
                        <ul>
                            <li>
                                <div class="gallery-item">
                                    <img src="../asset/img/gallery_item_1.webp" alt="">
                                    <div class="glow-wrap">
                                        <i class="glow"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="gallery-item">
                                    <img src="../asset/img/gallery_item_2.webp" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="gallery-item">
                                    <img src="../asset/img/gallery_item_3.jpg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="gallery-item">
                                    <img src="../asset/img/gallery_item_4.webp" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="gallery-item">
                                    <img src="../asset/img/gallery_item_5.webp" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="gallery-item">
                                    <img src="../asset/img/gallery_item_6.jpg" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg col-md">
                        <div class="footer-col">
                            <h4 class="footer-title">Giới Thiệu</h4>
                            <div class="footer-content">
                                <p>Runner Inn trang mua sắm trực tuyến của thương hiệu giày, thời trang nam, nữ, phụ
                                    kiện, giúp bạn tiếp cận xu hướng thời trang mới nhất.</p>
                                <div class="logo-footer">
                                    <img src="../asset/img/logo-bct.webp" alt="Bộ công thương">
                                </div>
                                <div class="social-list">
                                    <a href="/">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="/">
                                        <i class="fa-brands fa-google"></i>
                                    </a>
                                    <a href="/">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="/">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                    <a href="/">
                                        <i class="fa-brands fa-skype"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-col footer-block">
                            <h4 class="footer-title">
                                PHÁP LÝ &amp; CÂU HỎI
                            </h4>
                            <div class="footer-content">
                                <ul>
                                    <li class="item">
                                        <a href="/search" title="Tìm kiếm">Tìm kiếm<a>
                                    </li>
                                    <li class="item">
                                        <a href="/pages/about-us" title="Giới thiệu">Giới thiệu</a>
                                    </li>
                                    <li class="item">
                                        <a href="/pages/chinh-sach-doi-tra" title="Chính sách đổi trả">Chính sách đổi
                                            trả</a>
                                    </li>
                                    <li class="item">
                                        <a href="/pages/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách bảo
                                            mật</a>
                                    </li>
                                    <li class="item">
                                        <a href="/pages/dieu-khoan-dich-vu" title="Điều khoản dịch vụ">Điều khoản dịch
                                            vụ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-col">
                            <h4 class="footer-title">
                                Thông tin liên hệ
                            </h4>
                            <div class="footer-content toggle-footer">
                                <ul>
                                    <li><span>Địa chỉ:</span> Đại học Sài Gòn, 273, An Dương Vương, phường 3, quận 5,
                                        Tp. Hồ Chí Minh.</li>
                                    <li><span>Điện thoại:</span> 1900.636.099</li>
                                    <li><span>Fax:</span> 1900.636.099</li>
                                    <li><span>Hộp thư:</span> hi@haravan.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-col footer-block">
                            <h4 class="footer-title">
                                FANPAGE
                            </h4>
                            <div class="footer-content">
                                <!-- Facebook widget -->
                                <div class="footer-static-content">
                                    <div class="fb-page fb_iframe_widget"
                                        data-href="https://www.facebook.com/haravan.official" data-height="300"
                                        data-small-header="false" data-adapt-container-width="true"
                                        data-hide-cover="false" data-show-facepile="true" data-show-posts="false"
                                        fb-xfbml-state="rendered"
                                        fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=363772567412181&amp;container_width=295&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fharavan.official&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false">
                                        <span style="vertical-align: bottom; width: 295px; height: 130px;"><iframe
                                                name="f201e4a59a7bd3" width="1000px" height="300px"
                                                data-testid="fb:page Facebook Social Plugin"
                                                title="fb:page Facebook Social Plugin" frameborder="0"
                                                allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                allow="encrypted-media"
                                                src="https://www.facebook.com/v12.0/plugins/page.php?adapt_container_width=true&amp;app_id=363772567412181&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df387d20f1816f6c%26domain%3Drunner-inn.myharavan.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Frunner-inn.myharavan.com%252Ff340d254cbc3a9c%26relation%3Dparent.parent&amp;container_width=295&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fharavan.official&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false"
                                                style="border: none; visibility: visible; width: 295px; height: 130px;"
                                                class=""></iframe></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-copyright">
            <div class="container">
                <div class="main-footer--border">
                    <p>Copyright © 2023 <a href="https://runner-inn.myharavan.com"> Runner Inn</a>.&nbsp;<a
                            target="_blank" href="https://www.haravan.com" rel="noreferrer">Powered by Haravan</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="../asset/js/cart.js"></script>
</body>
</html>