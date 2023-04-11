<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="asset/img/favicon.png">
    <link rel="stylesheet" href="asset/font/awesome-6-pro/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Runner Inn</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
    include "header-index.php"
    ?>
    <main id="main">
        <section class="section-slider">
            <div class="home-slider">
                <div class="slider-owl">
                    <div class="owl-stage-outer">
                        <div class="owl-stage ">
                            <img src="asset/img/slideshow_1.jpg" alt="" class="stage">
                        </div>
                        <div class="owl-stage ">
                            <img src="asset/img/slideshow_2.jpg" alt="" class="stage">
                        </div>
                        <div class="owl-stage ">
                            <img src="asset/img/slideshow_3.jpg" alt="" class="stage">
                        </div>
                    </div>
                    <div class="owl-control">
                        <div class="owl-nav">
                            <div class="owl-prev" onclick="plusSlides(1)"><i class="fa-light fa-angle-left"></i></div>
                            <div class="owl-next" onclick="plusSlides(-1)"><i class="fa-light fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-collection">
            <div class="wrap-collection_1">
                <div class="container">
                    <div class="wrap-heading">
                        <h2><a href="">Sản phẩm mới</a></h2>
                        <div class="wrap-all">
                            <a href="">Xem thêm</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="product-list">
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/src/product.html"><img src="asset/img/NAM1A/NAM1A.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">Nike Air Max 1 Anniversary</a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">4,200,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/src/product.html"><img src="asset/img/NAM1Se/NAM1Se.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">Nike Air Max 1 Se "Just Do It"
                                                </a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">4,900,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/src/product.html"><img src="asset/img/T10NAP/T10NAP.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">The 10: Nike Air Presto "Off White"
                                                </a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">8,800,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href=""><img src="asset/img/NWAH/NWAH.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">Nike Wmns Air Huarache City Move
                                                </a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">5,200,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/src/product.html"><img src="asset/img/NAM9E/NAM9E.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">Nike Air Max 90 Essential "Grape"
                                                </a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">4,800,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/src/product.html"><img src="asset/img/NAM97P/NAM97P.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">Nike Air Max 97 Premium</a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">8,000,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/src/product.html"><img src="asset/img/ANX1W/ANX1W.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">Adidas Nmd Xr1 W "Pearl Grey"
                                                </a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">5,750,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/src/product.html"><img src="asset/img/NAHR/NAHR.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">Nike W's Air Huarache Run "Triple White"</a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">7,300,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-banner">
            <div class="container-fluid">
                <div class="row row_flex">
                    <div class="col-xs">
                        <div class="wrap-banner">
                            <div class="block-banner-category">
                                <div class="category-image ">
                                    <img src="asset/img/block_home_category1_large.jpg" alt="">
                                </div>
                                <figcaption class="caption_banner">
                                    <p>Bộ sưu tập</p>
                                    <h2>Đại sứ thương hiệu</h2>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs">
                        <div class="wrap-banner">
                            <div class="block-banner-category">
                                <div class="category-image ">
                                    <img src="asset/img/block_home_category2_large.webp" alt="">
                                </div>
                                <figcaption class="caption_banner">
                                    <p>Bộ sưu tập</p>
                                    <h2>Thương hiệu</h2>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs">
                        <div class="wrap-banner">
                            <div class="block-banner-category">
                                <div class="category-image ">
                                    <img src="asset/img/block_home_category3_large.webp" alt="">
                                </div>
                                <figcaption class="caption_banner">
                                    <h2>blog</h2>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-collection">
            <div class="wrap-collection_1">
                <div class="container">
                    <div class="wrap-heading">
                        <h2><a href="">Sản phẩm mới</a></h2>
                        <div class="wrap-all">
                            <a href="">Xem thêm</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="product-list ">
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/src/product.html"><img src="asset/img/AECA/AECA.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">Adidas EQT Cushion ADV "North America"
                                                </a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">7,000,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/src/product.html"><img src="asset/img/ANR1/ANR1.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">Adidas Nmd R1 "Villa Exclusive"
                                                </a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">7,000,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/src/product.html"><img src="asset/img/APSHU/APSHU.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">Adidas PW Solar HU NMD "Inspiration Pack"
                                                </a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">6,000,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pro-loop">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/src/product.html"><img src="asset/img/AUW/AUW.webp" alt=""></a>
                                    </div>
                                    <div class="product-detail">
                                        <div class="box-pro-detail">
                                            <h3 class="pro-name">
                                                <a href="/src/product.html">Adidas Ultraboost W</a>
                                            </h3>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">5,300,000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper-home-ins">
            <div class="container">
                <div class="wrap-heading">
                    <h2><a href="">Bài viết mới nhất</a></h2>
                </div>
                <div class="post-list">
                    <div class="col-sm">
                        <div class="post-item">
                            <div class="post-featured">
                                <div class="post-thumb">
                                    <a href="">
                                        <img src="asset/img/ins1.webp" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post_content">
                                <div class="post_info">
                                    <span class="post_info_item">
                                        Thứ Ba 11,06,2019
                                    </span>
                                </div>
                                <h3 class="post_title">
                                    <a href="">Adidas Falcon nổi bật mùa Hè với phối màu color block</a>
                                </h3>
                                <div class="post_descr">
                                    <p>Cuối tháng 5, adidas Falcon đã cho ra mắt nhiều phối màu đón chào mùa Hè khiến
                                        giới trẻ yêu thích không thôi. Tưởng chừng thương hiệu sẽ tiếp tục...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="post-item">
                            <div class="post-featured">
                                <div class="post-thumb">
                                    <a href="">
                                        <img src="asset/img/ins2.webp" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post_content">
                                <div class="post_info">
                                    <span class="post_info_item">
                                        Thứ Ba 11,06,2019
                                    </span>
                                </div>
                                <h3 class="post_title">
                                    <a href="">Saucony hồi sinh mẫu giày chạy bộ cổ điển của mình – Aya Runner</a>
                                </h3>
                                <div class="post_descr">
                                    <p>Là một trong những đôi giày chạy bộ tốt nhất vào những năm 1994, 1995, Saucony
                                        Aya Runner vừa có màn trở lại vô cùng ấn tượngCó vẻ như 2019 là...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="post-item">
                            <div class="post-featured">
                                <div class="post-thumb">
                                    <a href="">
                                        <img src="asset/img/ins3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post_content">
                                <div class="post_info">
                                    <span class="post_info_item">
                                        Thứ Ba 11,06,2019
                                    </span>
                                </div>
                                <h3 class="post_title">
                                    <a href="">Nike Vapormax Plus trở lại với sắc tím mộng mơ và thiết kế chuyển màu đẹp
                                        mắt</a>
                                </h3>
                                <div class="post_descr">
                                    <p>Là một trong những mẫu giày retro có nhiều phối màu gradient đẹp nhất từ trước
                                        đến này, Nike Vapormax Plus vừa có màn trở lại bá đạo dành cho các...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper-home-newsletter">
            <div class="container-fluid">
                <div class="content-newsletter">
                    <h2>Đăng ký</h2>
                    <p>Đăng ký nhận bản tin của Runner Inn để cập nhật những sản phẩm mới, nhận thông tin ưu đãi đặc
                        biệt và thông tin giảm giá khác.</p>
                    <div class="form-newsletter">
                        <form action="/account/contact" class="contact-form">
                            <div class="form-group">
                                <input required="" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                    value="" placeholder="Nhập email của bạn" name="contact[email]"
                                    aria-label="Email Address" class="inputNew form-control grey newsletter-input">
                            </div>
                            <button type="submit" class="button submitNewsletter"><span>Gửi</span></button>
                        </form>
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
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        function showSlides(n) {
            let i;
            let slides = document.querySelectorAll(".owl-stage");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.add("hide");
            }
            slides[slideIndex - 1].classList.remove("hide");
        }
    </script>
    <script type="text/javascript" src="asset/js/main.js"></script>
    <script type="text/javascript" src="asset/js/validator.js"></script>
</body>
</html> 


