<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");

if (isset($_SESSION['userName'])) {
    echo "<script>
    const userObject = {name:'{$_SESSION['userName']}',id:{$_SESSION['userID']}}
    const userObjectString = JSON.stringify(userObject);
    localStorage.setItem('khachhang', userObjectString);
    </script>";
} else {
    echo "<script>localStorage.removeItem('khachhang')</script>";
}
?>

<header id="header">
    <div class="navigation-header">
        <div class="promo-bar">
            <a href="">
                <span>miễn phí vận chuyển với đơn hàng nội thành &gt; 300K - đổi trả trong 30 ngày - đảm bảo chất lượng</span>
            </a>
        </div>
        <div class="header-scroll">
            <div class="container">
                <div class="flexContainer-header-scroll">
                    <div class="scroll-logo">
                        <div class="wrap-logo">
                            <a href="../index.php" aria-label="logo">
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
                                            <li class="active"><a href="/index.php">trang chủ</a></li>
                                            <li class="active"><a href="/src/collection.php?type=bosuutap">bộ sưu tập</a></li>
                                            <li class="active"><a class="active_3">sản phẩm&nbsp;<i class="down fa-sharp fa-regular fa-chevron-down"></i></a>
                                                <ul class="sub-menu">
                                                    <?php
                                                    $cate = $db->prepare("SELECT * FROM loaigiay");
                                                    $cate->execute();
                                                    $cateName = $cate->fetchAll(PDO::FETCH_ASSOC);
                                                    foreach ($cateName as $row) {
                                                    ?>
                                                        <li><a href="collection.php?type=<?php echo $row["tenloai"]; ?>"><?php echo $row["tenloai"]; ?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                            <li class="active"><a href="introduce.php">giới thiệu</a></li>
                                            <li class="active"><a href="news.php">blog</a></li>
                                            <li class="active"><a href="contact.php">liên hệ</a></li>
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
                                    <span class="box-action-icon"><i class="fa-light fa-magnifying-glass" onclick="box_search()"></i></span>
                                </a>
                                <div class="header_dropdown scroll-search hide">
                                    <span class="box-triangle">
                                        <svg viewBox="0 0 20 9">
                                            <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffffff"></path>
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
                                                <form action="search.php" class="search-scroll-form" method="get">
                                                    <div class="search-inner">
                                                        <input type="text" size="20" placeholder="Tìm kiếm sản phẩm..." name="productName" class="search-scroll-input" oninput="showSearchScroll(),searchProductScroll(this.value)">
                                                    </div>
                                                    <button type="submit" class="btn-search-scroll"><i class="fa-sharp fa-regular fa-magnifying-glass"></i></button>
                                                </form>
                                                <div class="scroll-search-wrapper hide">
                                                    <div class="resultContent searchResultScroll" id="styleScroll">


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action_account">
                                <a class="header-action-toggle" aria-label="Tài Khoản">
                                    <span class="box-action-icon"><i class="fa-light fa-user" onclick="box_accounts()"></i></span>
                                </a>
                                <div class="header_dropdown scroll-account hide">
                                    <span class="box-triangle">
                                        <svg viewBox="0 0 20 9">
                                            <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffffff"></path>
                                        </svg>
                                    </span>
                                    <div class="site-nav">
                                        <div class="site_panel login_site">
                                            <div class="login_panels">
                                                <i class="fa-light fa-xmark" onclick="box_accounts()"></i>
                                                <div class="account-header">
                                                    <h2 class="account_title">Đăng nhập tài khoản</h2>
                                                    <p class="account_legend">Nhập email và mật khẩu của bạn:</p>
                                                </div>
                                                <div class="account-list">
                                                    <form action="/controller/login.php" accept-charset="UTF-8" method="post" id="form_login">
                                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                                            <input type="email" id="login-customer[email]" class="form__field form__field--text" name="email" required="required" autocomplete="email" placeholder=" ">
                                                            <label for="login-customer[email]" class="form__floating-label">Email</label>
                                                        </div>
                                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                                            <input type="password" id="login-customer[password]" class="form__field form__field--text" name="password" required="required" autocomplete="current-password" placeholder=" ">
                                                            <label for="login-customer[password]" class="form__floating-label">Mật khẩu</label>
                                                            <div class="sitebox-recaptcha">
                                                                This site is protected by reCAPTCHA and the Google
                                                                <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a>
                                                                and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="form__submit" id="form_submit-login" name="submitLogin">Đăng nhập</button>
                                                    </form>
                                                    <div class="site_account_secondary-action">
                                                        <p>Khách hàng mới?
                                                            <a href="signup.php" class="link">Tạo tài khoản</a>
                                                        </p>
                                                        <p>Quên mật khẩu?
                                                            <button aria-controls="header-recover-panel" class="restorepass link">Khôi phục mật khẩu</button>
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
                                                    <form action="/account/login" accept-charset="UTF-8" method="post" id="form_login">
                                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                                            <input type="email" id="recover-customer[recover_email]" class="form__field form__field--text" name="email" required="required" autocomplete="email" placeholder=" ">
                                                            <label for="recover-customer[recover_email]" class="form__floating-label">Email</label>
                                                        </div>
                                                        <div class="sitebox-recaptcha">
                                                            This site is protected by reCAPTCHA and the Google
                                                            <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a>
                                                            and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
                                                        </div>
                                                        <button type="submit" class="form__submit" id="form_submit-recover">Khôi phục</button>
                                                    </form>
                                                    <div class="site_account_secondary-action">
                                                        <p>Bạn đã nhớ mật khẩu?
                                                            <button aria-controls="header-login-panel" class="returnlogin link">Trở về đăng nhập</button>
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
                                                        <p class="account_name"><?php echo $_SESSION['userName'] ?></p>
                                                    </a>
                                                    <a href="account.php">
                                                        <p>Tài khoản của bạn</p>
                                                    </a>
                                                    <a href="/src/accountaddresses.php">
                                                        <p>Danh sách địa chỉ</p>
                                                    </a>
                                                    <a href="">
                                                        <form action="/controller/logout.php" id="logout-form" method="POST">
                                                            <button type="submit" name="logout">Đăng xuất</button>
                                                        </form>
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
                                        <?php
                                        $count = $db->prepare("SELECT count(makhachhang) FROM `giohang` where makhachhang = :userID;");
                                        $count->bindParam(':userID', $_SESSION['userID']);
                                        $count->execute();
                                        $countProduct = $count->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <span class="count-holder">
                                            <span class="count"><?php echo $countProduct["count(makhachhang)"] ?></span>
                                        </span>
                                    </span>
                                </a>
                                <div class="header_dropdown scroll-cart hide">
                                    <span class="box-triangle">
                                        <svg viewBox="0 0 20 9">
                                            <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffffff"></path>
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
                                                <?php if (isset($_SESSION["userID"])) {
                                                ?>
                                                    <?php
                                                    $counts = $db->prepare("SELECT count(makhachhang) FROM `giohang` where makhachhang = :userID;");
                                                    $counts->bindParam(':userID', $_SESSION['userID']);
                                                    $counts->execute();
                                                    $checkUser1 = $counts->fetchColumn();
                                                    if ($checkUser1 > 0) {
                                                    ?>
                                                        <div class="scroll-product wrapper-product">
                                                            <table class="productList">
                                                                <tbody>
                                                                    <?php
                                                                    $productCart = $db->prepare("SELECT distinct tensp, urlmain,giohang.soluong,kichthuoc,mausac,makhachhang,sanpham.masp,giatien from sanpham,giohang,hinhanhsp where sanpham.masp = giohang.masp and sanpham.masp = hinhanhsp.masp");
                                                                    $productCart->execute();
                                                                    $listProduct = $productCart->fetchAll(PDO::FETCH_ASSOC);
                                                                    foreach ($listProduct as $row) {
                                                                        if ($row["makhachhang"] == $_SESSION["userID"]) {
                                                                    ?>
                                                                            <tr class="list-item">
                                                                                <td class="img">
                                                                                    <a href="/src/product.php?type=<?php echo $row["masp"] ?>"><img src="<?php echo $row["urlmain"] ?>" alt=""></a>
                                                                                </td>
                                                                                <td class="information">
                                                                                    <a class="pro-title" href="/src/product.php?type=<?php echo $row["masp"] ?>"><?php echo $row["tensp"] ?></a>
                                                                                    <span class="variant"><?php echo $row["mausac"] ?> &nbsp;/&nbsp; <?php echo $row["kichthuoc"] ?></span>
                                                                                    <span class="pro-quantity"><?php echo $row["soluong"] ?></span>
                                                                                    <span class="pro-price-view"><?php echo number_format($row["giatien"]) ?>₫</span>
                                                                                    <span class="remove-pro" data-id="<?php echo $row["masp"] ?>" data-color="<?php echo $row["mausac"] ?>" data-size="<?php echo $row["kichthuoc"] ?>" data-quantity="<?php echo $row["soluong"] ?>" data-price="<?php echo $row["giatien"] ?>" onclick="removeProduct(this)">
                                                                                        <i class="fa-regular fa-rectangle-xmark"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                    <?php }
                                                                    } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <div class="view_product wrapper-view-product">
                                                            <i class="fa-light fa-cart-shopping"></i>
                                                            <p>Hiện chưa có sản phẩm</p>
                                                        </div>
                                                    <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <div class="view_product wrapper-view-product">
                                                        <i class="fa-light fa-cart-shopping"></i>
                                                        <p>Hiện chưa có sản phẩm</p>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <span class="line"></span>
                                                <div class="payment">
                                                    <table class="table-total">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">Tổng tiền</td>
                                                                <?php
                                                                $total = $db->prepare("SELECT sum(giatien*giohang.soluong) from giohang,sanpham where sanpham.masp =giohang.masp and makhachhang = :userID");
                                                                $total->bindParam(':userID', $_SESSION['userID']);
                                                                $total->execute();
                                                                $totalCart = $total->fetch(PDO::FETCH_ASSOC);
                                                                ?>
                                                                <td class="text-right">
                                                                    <span class="price"><?php echo number_format($totalCart["sum(giatien*giohang.soluong)"]) ?></span>
                                                                    <span>₫</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="cart.php">
                                                                        <button class="form__submit btn-view">Xem giỏ hàng</button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <?php $user = $db->prepare("SELECT * from khachhang where makhachhang = :userID");
                                                                    $user->bindParam(":userID", $_SESSION["userID"]);
                                                                    $user->execute();
                                                                    $users = $user->fetch(PDO::FETCH_ASSOC); ?>
                                                                    <a href="<?php if ($users["khoa"] == 1) {
                                                                                    echo '#';
                                                                                } else {
                                                                                    echo 'shipdetails.php';
                                                                                } ?>"">
                                                                        <button class=" form__submit btn-payment" style="<?php if ($users["khoa"] == 1) {
                                                                                                                                echo 'cursor:no-drop;';
                                                                                                                            } else {
                                                                                                                                echo 'cursor: pointer;';
                                                                                                                            } ?>">Thanh toán</button>
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

<script>
    if (localStorage.getItem("khachhang") != null) {
        document.querySelector(".login_site").classList.add("hide");
        document.querySelector(".account-information").classList.remove("hide");
    } else {
        document.querySelector(".site-panel").classList.remove("hide");
        document.querySelector(".account-information").classList.add("hide");
    }
</script>