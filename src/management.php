<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management - Runner Inn</title>
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
    <div class="notification hide">
        <div class="ntfc-box">
            <div class="noti-box">
                <div class="noti-title">
                    <p>Remove product?</p>
                </div>
                <div class="noti-btn">
                    <p class="btn-no">no</p>
                    <p class="btn-yes">yes</p>
                </div>
            </div>
        </div>
    </div>
    <div class="notifications hide">
        <div class="ntfc-boxs">
            <div class="noti-btns">
                <i class="btn-ok fa-solid fa-xmark"></i>
            </div>
            <div class="noti-boxs">
                <div class="noti-titles">
                    <p>You have not entered product information!</p>
                </div>
            </div>
        </div>
    </div>
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
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="profile.php" class="nav-link">
                            <i class="fa-solid fa-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="management.php" class="nav-link">
                            <i class="fa-solid fa-bars-progress"></i>
                            <p>Management</p>
                        </a>
                    </li>
                    <li>
                        <a href="" class="nav-link">
                            <i class="fa-solid fa-chart-pie"></i>
                            <p>Statistics</p>
                        </a>
                    </li>
                    <li>
                        <a href="" class="nav-link">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <p>Map</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <header class="header">
                <div class="expand">
                    <div class="expand-left">
                        <p>Dashboard</p>
                        <i class="fa-solid fa-palette"></i>
                        <i class="fa-solid fa-earth-americas"></i>
                        <a><i class="fa-solid fa-magnifying-glass"></i>Search</a>
                    </div>
                    <div class="expand-right">
                        <a href=""><img src="/asset/img/sidebar.jpg" alt=""></a>
                        <p><a href="admin.php">Log out</a></p>
                        <i class="fa-solid fa-gear"></i>
                        <i class="fa-solid fa-bell"></i>
                    </div>
                </div>
            </header>
            <main class="content-page">
                <div class="content">
                    <div class="row-lg">
                        <div class="col-lg">
                            <a href="#management-product">
                                <div class="card-box">
                                    <h4>Quản lý sản phẩm</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg">
                            <a href="#management-user">
                                <div class="card-box">
                                    <h4>Quản lý khách hàng</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg">
                            <a href="#management-order">
                                <div class="card-box">
                                    <h4>Quản lý đơn hàng</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 30px;" id="management-product">
                        <div class="col">
                            <div class="management-box">
                                <h4>Quản lý sản phẩm</h4>
                                <div class="management-sidebar">
                                    <p style="width: calc(100%/9);">Ảnh</p>
                                    <p style="width: calc(100%/9);">Tên sản phẩm</p>
                                    <p style="width: calc(100%/9);">Mã sản phẩm</p>
                                    <p style="width: calc(100%/9);">Giá tiền</p>
                                    <p style="width: calc(100%/9);">Thương hiệu</p>
                                    <p style="width: calc(100%/9);">Màu sắc</p>
                                    <p style="width: calc(100%/9);">Kích thước</p>
                                    <p style="width: calc(100%/9);">Số lượng</p>
                                    <p class="tool" style="width: calc(100%/9);">Hành động</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-nowrap mb-0">
                                        <tbody class="tableproduct">
                                            <?php
                                            $listProduct = $db->prepare("SELECT distinct tensp,sanpham.masp,urlmain,giatien,tenthuonghieu,soluong from sanpham,hinhanhsp,thuonghieu where sanpham.masp = hinhanhsp.masp and sanpham.mathuonghieu = thuonghieu.mathuonghieu");
                                            $listProduct->execute();
                                            $product = $listProduct->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($product as $row) {
                                            ?>
                                                <tr>
                                                    <th class="img" style="width: calc(100%/9);"><img src="<?php echo $row["urlmain"] ?>" alt=""></th>
                                                    <td class="name" style="width: calc(100%/9);"><?php echo $row["tensp"] ?></td>
                                                    <td class="id" style="width: calc(100%/9);"><?php echo $row["masp"] ?></td>
                                                    <td class="price" style="width: calc(100%/9);"><?php echo number_format($row["giatien"]) ?>₫</td>
                                                    <td class="trademark" style="width: calc(100%/9);"><?php echo $row["tenthuonghieu"] ?></td>
                                                    <td class="color" style="width: calc(100%/9);">
                                                        <?php
                                                        $color = $db->prepare("SELECT mausac from mausacsp where masp = :productID");
                                                        $color->bindParam(":productID", $row["masp"]);
                                                        $color->execute();
                                                        $colors = $color->fetchAll(PDO::FETCH_ASSOC);
                                                        $lastIndex = count($colors) - 1;
                                                        foreach ($colors as $index => $c) {
                                                        ?>
                                                            <?php echo $c["mausac"] ?><?php if ($index < $lastIndex) echo ', ' ?>
                                                        <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="size" style="width: calc(100%/9);">
                                                        <?php
                                                        $size = $db->prepare("SELECT kichthuoc from kichthuocsp where masp = :productID");
                                                        $size->bindParam(":productID", $row["masp"]);
                                                        $size->execute();
                                                        $sizes = $size->fetchAll(PDO::FETCH_ASSOC);
                                                        $lastIndex = count($sizes) - 1;
                                                        foreach ($sizes as $index => $s) {
                                                        ?>
                                                            <?php echo $s["kichthuoc"] ?><?php if ($index < $lastIndex) echo ', ' ?>
                                                        <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="quantity" style="width: calc(100%/9);"><?php echo $row["soluong"] ?></td>
                                                    <td style="width: calc(100%/9);">
                                                        <button class="edit"><i class="fa-solid fa-pen-to-square"></i></button>
                                                        <button class="remove"><i class="fa-solid fa-xmark"></i></button>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="management-btn">
                                    <button class="add"><i class="fa-solid fa-plus" style="margin-right: 7px;"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 70px;" id="management-user">
                        <div class="col">
                            <div class="management-box">
                                <h4>Quản lý khách hàng</h4>
                                <div class="management-sidebar">
                                    <p style="width: calc(100%/6.4);">Mã khách hàng</p>
                                    <p style="width: calc(100%/6.4);">Tên khách hàng</p>
                                    <p style="width: calc(100%/6.4);">Email</p>
                                    <p style="width: calc(100%/6.4);">Tên tài khoản</p>
                                    <p style="width: calc(100%/6.4);">Mật khẩu</p>
                                    <p style="width: calc(100%/6.4);">Số điện thoại</p>
                                    <p>Hành động</p>
                                </div>
                                <div class="table-responsive" style="height: 200px;">
                                    <table class="table table-bordered table-nowrap mb-0">
                                        <tbody>
                                            <?php
                                            $user = $db->prepare("SELECT * from khachhang");
                                            $user->execute();
                                            $users = $user->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($users as $row) {
                                            ?>
                                                <tr>
                                                    <th style="width: calc(100%/6.41);"><?php echo $row["makhachhang"] ?></th>
                                                    <td style="width: calc(100%/6.41);"><?php echo $row["tenkhachhang"] ?></td>
                                                    <td style="width: calc(100%/6.41);"><?php echo $row["email"] ?></td>
                                                    <td style="width: calc(100%/6.41);"><?php echo $row["tentk"] ?></td>
                                                    <td style="width: calc(100%/6.41);"><?php echo $row["matkhau"] ?></td>
                                                    <td style="width: calc(100%/6.41);"><?php echo $row["sdt"] ?></td>
                                                    <td><i class="fa-solid fa-unlock"></i></td>
                                                    <td>
                                                        <input type="checkbox" id="checkbox1" name="checkbox1" class="checkbox">
                                                        <label class="checkboxs" for="checkbox1"></label>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="management-btns">
                                    <button class="unlock"><i class="fa-solid fa-unlock"></i></button>
                                    <button class="lock"><i class="fa-solid fa-lock"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding: 70px 0 30px;" id="management-order">
                        <div class="col">
                            <div class="management-box management-order">
                                <h4>Quản lý đơn hàng</h4>
                                <div class="management-sidebar">
                                    <p style="width: calc(100%/6);">Mã đơn hàng</p>
                                    <p style="width: calc(100%/6);">Mã khách hàng</p>
                                    <p style="width: calc(100%/6);">Trạng thái đơn hàng</p>
                                    <p style="width: calc(100%/6);">Ngày đặt hàng</p>
                                    <p style="width: calc(100%/6);">Tổng tiền</p>
                                    <p class="tool" style="width: calc(100%/6);">Chi tiết</p>
                                </div>
                                <div class="table-responsive" style="height: 200px;">
                                    <table class="table table-bordered table-nowrap mb-0">
                                        <tbody class="tableorder">
<?php
$order = $db->prepare("SELECT * from donhang");

?>
                                        </tbody>
                                    </table>
                                </div>
                                <div style="width:100%; height: 30px;"></div>
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
</body>

</html>