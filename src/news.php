<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức – Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/product_list.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php $db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", ""); 
    session_start();
    ?>

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
                        <li class="li_line"><a href="../index.html">Trang chủ</a></li>
                        <li><a href="#">Tin tức</a> </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="section-down">

            <div class="button-topnav">
                <div class="left">
                    <div class="left-one">
                        <div class="news-latest">
                            <div class="text">
                                <h7>Bài viết mới nhất</h7>
                            </div>
                            <div class="picture-text">
                                <div class="pic-text">
                                    <div class="picture">
                                        <a href="#">
                                            <img src="../asset/img/ins1.webp" alt="Adidas Falcon nổi bật mùa Hè với phối màu color block">
                                        </a>
                                    </div>
                                    <div class="textt">
                                        <h8>
                                            <a href="#">Adidas Falcon nổi bật mùa Hè với phối màu color block
                                            </a>
                                        </h8>
                                        <div class="author">
                                            <a href="#">Be Nguyen</a>
                                            <span class="date">
                                                11.06.2019
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pic-text">
                                    <div class="picture">
                                        <a href="#">
                                            <img src="../asset/img/ins2.webp" alt="Saucony hồi sinh mẫu giày chạy bộ cổ điển của mình – Aya Runner">
                                        </a>
                                    </div>
                                    <div class="textt">
                                        <h8>
                                            <a href="#">Saucony hồi sinh mẫu giày chạy bộ cổ điển của mình – Aya Runner
                                            </a>
                                        </h8>
                                        <div class="author">
                                            <a href="#">Be Nguyen</a>
                                            <span class="date">
                                                11.06.2019
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pic-text">
                                    <div class="picture">
                                        <a href="#">
                                            <img src="../asset/img/ins3.jpg" alt="Nike Vapormax Plus trở lại với sắc tím mộng mơ và thiết kế chuyển màu đẹp mắt">
                                        </a>
                                    </div>
                                    <div class="textt">
                                        <h8>
                                            <a href="#">Nike Vapormax Plus trở lại với sắc tím mộng mơ và thiết kế chuyển màu đẹp mắt
                                            </a>
                                        </h8>
                                        <div class="author">
                                            <a href="#">Runner Inn</a>
                                            <span class="date">
                                                11.06.2019
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pic-text-ect">
                                    <div class="picture">
                                        <a href="#">
                                            <img src="../asset/img/blog_no_image.webp" alt="Bài viết mẫu">
                                        </a>
                                    </div>
                                    <div class="textt">
                                        <h8>
                                            <a href="#">Bài viết mẫu
                                            </a>
                                        </h8>
                                        <div class="author">
                                            <a href="#">Runner Inn</a>
                                            <span class="date">
                                                10.06.2019
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left-two">
                        <div class="blog-menu">
                            <div class="text">
                                <h7>DANH MỤC BLOG</h7>
                            </div>
                            <div class="layered-content">
                                <ul class="menuList">
                                    <li><a href="../index.html">Trang chủ</a></li>
                                    <li><a href="../src/product1.html">Bộ sưu tập</a></li>
                                    <li class="has-submenu level0">
                                        <a>Sản phẩm
                                        </a>
                                        <span class="icon-plus-submenu" style="top:150px !important;" onclick="showMenubar()">
                                            <i class="iconMP fa-thin fa-plus"></i>
                                        </span>
                                        <ul class="submenu-links hide">
                                            <li><a href="#" title="">Nike</a></li>
                                            <li><a href="#" title="">Adidas</a></li>
                                            <li><a href="#" title="">Sản phẩm tặng</a></li>
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
                                    <li><a href="">Giới thiệu</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2 class="right-R">Tin tức</h2>
                    <div class="blog-content">
                        <div class=" list-article-content blog-posts">
                            <div class="distance">
                                <div class="blog-distance">
                                    <div class="col-md-4 col-xs-12 col-sm-4">
                                        <a href="#" class="blog-post-thumbnail" title="Adidas Falcon nổi bật mùa Hè với phối màu color block">
                                            <img src="../asset/img/ins1.webp" alt="Adidas Falcon nổi bật mùa Hè với phối màu color block">
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-8">
                                        <h8 class="blog-post-title">
                                            <a href="#" title="Adidas Falcon nổi bật mùa Hè với phối màu color block">Adidas Falcon nổi bật mùa Hè với phối màu color block</a>
                                        </h8>
                                        <div class="blog-post-meta">
                                            <span class="author-one">Người viết: Be Nguyen</span>
                                            <span class="dayy">/ 11.06.2019</span>
                                        </div>
                                        <p class="entry-contentt">
                                            Cuối tháng 5, adidas Falcon đã cho ra mắt nhiều phối màu đón chào mùa Hè khiến giới trẻ yêu thích không thôi. Tưởng chừng...
                                        </p>
                                    </div>
                                </div>
                                <div class="blog-distance">
                                    <div class="col-md-4 col-xs-12 col-sm-4">
                                        <a href="#" class="blog-post-thumbnail" title="Adidas Falcon nổi bật mùa Hè với phối màu color block">
                                            <img src="../asset/img/ins2.webp" alt="Adidas Falcon nổi bật mùa Hè với phối màu color block">
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-8">
                                        <h8 class="blog-post-title">
                                            <a href="#" title="Saucony hồi sinh mẫu giày chạy bộ cổ điển của mình – Aya Runner">Saucony hồi sinh mẫu giày chạy bộ cổ điển của mình – Aya Runner</a>
                                        </h8>
                                        <div class="blog-post-meta">
                                            <span class="author-one">Người viết: Be Nguyen</span>
                                            <span class="dayy">/ 11.06.2019</span>
                                        </div>
                                        <p class="entry-contentt">
                                            Là một trong những đôi giày chạy bộ tốt nhất vào những năm 1994, 1995, Saucony Aya Runner vừa có màn trở lại vô cùng ấn...
                                        </p>
                                    </div>
                                </div>
                                <div class="blog-distance">
                                    <div class="col-md-4 col-xs-12 col-sm-4">
                                        <a href="#" class="blog-post-thumbnail" title="Adidas Falcon nổi bật mùa Hè với phối màu color block">
                                            <img src="../asset/img/ins3.jpg" alt="Adidas Falcon nổi bật mùa Hè với phối màu color block">
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-8">
                                        <h8 class="blog-post-title">
                                            <a href="#" title="Nike Vapormax Plus trở lại với sắc tím mộng mơ và thiết kế chuyển màu đẹp mắt">Nike Vapormax Plus trở lại với sắc tím mộng mơ và thiết kế chuyển màu đẹp mắt</a>
                                        </h8>
                                        <div class="blog-post-meta">
                                            <span class="author-one">Người viết: Runner Inn</span>
                                            <span class="dayy">/ 11.06.2019</span>
                                        </div>
                                        <p class="entry-contentt">
                                            Là một trong những mẫu giày retro có nhiều phối màu gradient đẹp nhất từ trước đến này, Nike Vapormax Plus vừa có màn trở lại...
                                        </p>
                                    </div>
                                </div>
                                <div class="blog-distance">
                                    <div class="col-md-4 col-xs-12 col-sm-4">
                                        <a href="#" class="blog-post-thumbnail" title="Adidas Falcon nổi bật mùa Hè với phối màu color block">
                                            <img src="../asset/img/blog_no_image.webp" alt="Adidas Falcon nổi bật mùa Hè với phối màu color block">
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-8">
                                        <h8 class="blog-post-title">
                                            <a href="#" title="Bài viết mẫu">Bài viết mẫu</a>
                                        </h8>
                                        <div class="blog-post-meta">
                                            <span class="author-one">Người viết: Runner Inn</span>
                                            <span class="dayy">/ 11.06.2019</span>
                                        </div>
                                        <p class="entry-contentt">
                                            Đây là trang blog của cửa hàng. Bạn có thể dùng blog để quảng bá sản phẩm mới, chia sẻ trải nghiệm của khách hàng,...
                                        </p>
                                    </div>
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
    <script type="text/javascript" src="../asset/js/ingerdient.js"></script>
</body>

</html>