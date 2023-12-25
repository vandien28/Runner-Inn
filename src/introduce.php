<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu – Runner Inn</title>
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
                        <li><a href="#">Giới thiệu</a> </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="section-GT">
            <div class="button-topnav">
                <div class="left">
                    <div class="left-one">
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
                                        <span class="icon-plus-submenu" onclick="showMenubar()" style="top: 150px !important; ">
                                            <i class="iconMP fa-thin fa-plus"></i>
                                        </span>
                                        <ul class="submenu-links hide">
                                            <?php
                                            $cate = $db->prepare("SELECT * FROM loaigiay");
                                            $cate->execute();
                                            $cateName = $cate->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($cateName as $row) {

                                            ?>
                                                <li><a href="collection.php?type=<?php echo $row["tenloai"]; ?>"><?php echo $row["tenloai"]; ?></a></li>

                                            <?php } ?>
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
                    <div class="left-two">
                        <div class="blog-post-thumbnail">
                            <img src="../asset/img/page_banner.webp" alt="Cầu vợt">
                        </div>
                    </div>
                </div>

                <div class="right">
                    <h2 class="right-R">Giới thiệu</h2>

                    <p class="distance-right">Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ thể về việc kinh doanh, về cửa hàng, thông tin liên hệ. Điều này sẽ giúp khách hàng cảm thấy tin tưởng khi mua hàng trên website của bạn.</p>
                    <p class="distance-right">Một vài gợi ý cho nội dung trang Giới thiệu:</p>
                    <ul class="distance-right">
                        <li>+ Bạn là ai</li>
                        <li>+ Giá trị kinh doanh của bạn là gì</li>
                        <li>+ Địa chỉ cửa hàng</li>
                        <li>+ Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</li>
                        <li>+ Bạn kinh doanh ngành hàng online được bao lâu</li>
                        <li>+ Đội ngũ của bạn gồm những ai</li>
                        <li>+ Thông tin liên hệ</li>
                        <li>+ Liên kết đến các trang mạng xã hội (Twitter, Facebook)</li>
                    </ul>
                    <p class="distance-right">Bạn có thể chỉnh sửa hoặc xoá bài viết này tại
                        <a href="#"> <strong> đây</strong> </a>
                        hoặc thêm những bài viết mới trong phần quản lý
                        <a href="#"><strong>Trang nội dung</strong></a>
                        .
                    </p>
                </div>
            </div>
        </section>
        <?php include "gallery.php" ?>
    </main>
    <?php include "footer.php"  ?>
    <script type="text/javascript" src="../asset/js/ingerdient.js"></script>
</body>

</html>