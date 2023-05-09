<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm - Runner Inn</title>
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css" integrity="sha512-fXnjLwoVZ01NUqS/7G5kAnhXNXat6v7e3M9PhoMHOTARUMCaf5qNO84r5x9AFf5HDzm3rEZD8sb/n6dZ19SzFA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="/asset/css/management.css">
    <link rel="icon" href="../img/cropped-fav-32x32.png">
</head>

<body>
    <?php $db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", ""); ?>
    <div class="wrapper">
        <div class="left">
            <div class="sidebar">
                <div class="logo">
                    <h1>Runner Inn</h1>
                </div>
                <ul class="nav">
                    <li>
                        <a href="dashboard.php" class="nav-link">
                            <i class="fa-solid fa-gauge"></i>
                            <p>Bảng điều khiển</p>
                        </a>
                    </li>
                    <li>
                        <a href="profile.php" class="nav-link">
                            <i class="fa-solid fa-user"></i>
                            <p>hồ sơ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="management.php" class="nav-link">
                            <i class="fa-solid fa-bars-progress"></i>
                            <p>quản lý</p>
                        </a>
                    </li>

                    <li>
                        <a href="map.php" class="nav-link">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <p>bản đồ</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <header class="header">
                <div class="expand">
                    <div class="expand-left">
                        <p>Thông tin sản phẩm</p>
                        <i class="fa-solid fa-palette"></i>
                        <i class="fa-solid fa-earth-americas"></i>
                        <a><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</a>
                    </div>
                    <div class="expand-right">
                        <a href=""><img src="/asset/img/sidebar.jpg" alt=""></a>
                        <p><a href="admin.php">Đăng xuất</a></p>
                        <i class="fa-solid fa-gear"></i>
                        <i class="fa-solid fa-bell"></i>
                    </div>
                </div>
            </header>
            <main class="content-page">
                <div class="content">
                    <div class="row">
                        <div class="col">
                            <div class="management-box">
                                <h4>Thông tin sản phẩm</h4>
                                <?php
                                $product = $db->prepare("SELECT * from sanpham where masp = :productID");
                                $product->bindParam(":productID", $_GET["type"]);
                                $product->execute();
                                $products = $product->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="fieldset">
                                    <div class="field">
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="">Tên sản phẩm</label>
                                            <input class="field-input name" type="text" value="<?php echo $products["tensp"] ?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="">Mã sản phẩm</label>
                                            <input class="field-input name" type="text" disabled value="<?php echo $products["masp"] ?>" style="cursor: no-allowed;background-color: rgb(245 245 245);">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="">Giá tiền</label>
                                            <input class="field-input name" type="text" value="<?php echo $products["giatien"] ?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field-input-wrapper field-input-wrapper-select">
                                            <label class="field-label" for="">Thương hiệu</label>
                                            <select class="field-input" name="" id="trademark">
                                                <option value="0">Chọn thương hiệu</option>
                                                <option value="123" <?php echo ($products["mathuonghieu"] == 123) ? 'selected' : ''; ?>>Nike</option>
                                                <option value="456" <?php echo ($products["mathuonghieu"] == 456) ? 'selected' : ''; ?>>Adidas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field-input-wrapper field-input-wrapper-select">
                                            <label class="field-label" for="">Danh mục</label>
                                            <select class="field-input" name="" id="category">
                                                <option value="0">Chọn danh mục</option>
                                                <option value="123" <?php echo ($products["madanhmuc"] == 123) ? 'selected' : ''; ?>>Nike</option>
                                                <option value="234" <?php echo ($products["madanhmuc"] == 234) ? 'selected' : ''; ?>>Adidas</option>
                                                <option value="345" <?php echo ($products["madanhmuc"] == 345) ? 'selected' : ''; ?>>Sản phẩm tặng</option>
                                                <option value="456" <?php echo ($products["madanhmuc"] == 456) ? 'selected' : ''; ?>>Sản phẩm mới</option>
                                                <option value="567" <?php echo ($products["madanhmuc"] == 567) ? 'selected' : ''; ?>>Sản phẩm bán chạy</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field-input-wrapper field-input-wrapper-select">
                                            <label class="field-label" for="">Loại giày</label>
                                            <select class="field-input" name="" id="type">
                                                <option value="0">Chọn loại giày</option>
                                                <option value="123" <?php echo ($products["maloai"] == 123) ? 'selected' : ''; ?>>Sản phẩm bán</option>
                                                <option value="456" <?php echo ($products["maloai"] == 456) ? 'selected' : ''; ?>>Sản phẩm tặng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="">Số lượng</label>
                                            <input class="field-input name" type="text" value="<?php echo $products["soluong"] ?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <?php
                                        $color = $db->prepare("SELECT * from mausacsp where masp = :productID");
                                        $color->bindParam(":productID", $_GET["type"]);
                                        $color->execute();
                                        $colors = $color->fetchAll(PDO::FETCH_ASSOC);
                                        $lastIndex = count($colors) - 1;
                                        ?>
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="">Màu sắc</label>
                                            <input class="field-input name" type="text" value="<?php foreach ($colors as $index => $c) {
                                                                                                    echo $c["mausac"];
                                                                                                    if ($index < $lastIndex) echo ', ';
                                                                                                } ?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <?php
                                        $size = $db->prepare("SELECT * from kichthuocsp where masp = :productID");
                                        $size->bindParam(":productID", $_GET["type"]);
                                        $size->execute();
                                        $sizes = $size->fetchAll(PDO::FETCH_ASSOC);
                                        $lastIndex = count($sizes) - 1;
                                        ?>
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="">Kích thước</label>
                                            <input class="field-input name" type="text" value="<?php foreach ($sizes as $index => $s) {
                                                                                                    echo $s["kichthuoc"];
                                                                                                    if ($index < $lastIndex) echo ', ';
                                                                                                } ?>">
                                        </div>
                                    </div>
                                    
                                </div>
                                <p class="entername">Hình ảnh sản phẩm</p>
                                    <div class="upload" style="display:flex; flex-flow:row wrap;">
                                        <?php
                                        $img = $db->prepare("SELECT * from hinhanhsp where masp = :productID");
                                        $img->bindParam(":productID", $_GET["type"]);
                                        $img->execute();
                                        $imgs = $img->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($imgs as $i) {
                                        ?>
                                            <div class="uploadimgs" style="margin-left: 10px; margin-bottom: 10px;">
                                                <div class="uploadimgss">
                                                    <img src="<?php echo $i["url"] ?>" id="img-previews" class="editimg img">
                                                    
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                <div class="btn-management" style="margin-top: 20px;">
                                    <a href="management.php">
                                        <button type="submit" class="save" style="margin-right:15px;"><i class="fa-solid fa-floppy-disk"></i>
                                        </button>
                                    </a>
                                    <a href="management.php">
                                        <button type="submit" class="close"><i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="end">
                    Copyright 2022 © Designed by
                    <a href="" class="end-link">GoodWineShop.com</a>
                </div>
                <div title="Về đầu trang" class="top-up">
                    <i class="icon-top fa-solid fa-angle-up"></i>
                </div>
            </footer>
        </div>
    </div>
    <script>
        var offset = 400;
        var duration = 1;
        var right = document.querySelector('.right');
        var topUp = document.querySelector('.top-up');
        right.addEventListener('scroll', function() {
            if (right.scrollTop > offset) {
                topUp.style.display = 'block';
            } else {
                topUp.style.display = 'none';
            }
        });
        topUp.addEventListener('click', function() {
            right.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>