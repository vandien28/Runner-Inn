<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý - Runner Inn</title>
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
    <?php $db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
    session_start();
    ?>

    <div class="notification hide">
        <div class="ntfc-box">
            <div class="noti-box">
                <div class="noti-title">
                    <p>Bạn có muốn xoá sản phẩm?</p>
                </div>
                <div class="noti-btn">
                    <p class="btn-no">không</p>
                    <p class="btn-yes">Có</p>
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
                        <p>Quản lý</p>
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
                                            $listProduct = $db->prepare("SELECT distinct tensp,sanpham.masp,urlmain,giatien,tenthuonghieu,soluong,an from sanpham,hinhanhsp,thuonghieu where sanpham.masp = hinhanhsp.masp and sanpham.mathuonghieu = thuonghieu.mathuonghieu");
                                            $listProduct->execute();
                                            $product = $listProduct->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($product as $row) {
                                                if ($row["an"] == 0) {
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
                                                            <a href="editProduct.php?type=<?php echo $row["masp"] ?>"><button class="edit"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                                            <button class="remove" data-id="<?php echo $row["masp"] ?>" onclick="removeProduct(this)"><i class="fa-solid fa-xmark"></i></button>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="management-btn">
                                    <a href="addProduct.php">
                                        <button class="add">Thêm sản phẩm</i></button>
                                    </a>
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
                                    <table class="table table-bordered table-nowrap mb-0 table-user">
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
                                                    <td><?php if ($row["khoa"] == 0) {
                                                            echo '<i class="fa-solid fa-unlock">';
                                                        } else {
                                                            echo '<i class="fa-solid fa-lock">';
                                                        } ?></td>
                                                    <td>
                                                        <input type="checkbox" id="checkbox-<?php echo $row['makhachhang']; ?>" name="checkbo-<?php echo $row['makhachhang']; ?>" class="checkbox" data-id="<?php echo $row['makhachhang']; ?>">
                                                        <label class="checkboxs" for="checkbox-<?php echo $row['makhachhang']; ?>"></label>
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
                                <div class="field-input-wrapper field-input-wrapper-selects">
                                    <p>Lọc đơn hàng:</p>
                                    <select class="field-input" name="" id="city">
                                        <option value="" selected="">Chọn tỉnh / thành</option>
                                        <option value="0">Tất cả đơn hàng</option>
                                        <option data-code="HC" value="Hồ Chí Minh">Hồ Chí Minh</option>
                                        <option data-code="HI" value="Hà Nội">Hà Nội</option>
                                        <option data-code="DA" value="Đà Nẵng">Đà Nẵng</option>
                                        <option data-code="AG" value="An Giang">An Giang</option>
                                        <option data-code="BV" value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                        <option data-code="BI" value="Bình Dương">Bình Dương</option>
                                        <option data-code="BP" value="Bình Phước">Bình Phước</option>
                                        <option data-code="BU" value="Bình Thuận">Bình Thuận</option>
                                        <option data-code="BD" value="Bình Định">Bình Định</option>
                                        <option data-code="BL" value="Bạc Liêu">Bạc Liêu</option>
                                        <option data-code="BG" value="Bắc Giang">Bắc Giang</option>
                                        <option data-code="BK" value="Bắc Kạn">Bắc Kạn</option>
                                        <option data-code="BN" value="Bắc Ninh">Bắc Ninh</option>
                                        <option data-code="BT" value="Bến Tre">Bến Tre</option>
                                        <option data-code="CB" value="Cao Bằng">Cao Bằng</option>
                                        <option data-code="CM" value="Cà Mau">Cà Mau</option>
                                        <option data-code="CN" value="Cần Thơ">Cần Thơ</option>
                                        <option data-code="GL" value="Gia Lai">Gia Lai</option>
                                        <option data-code="HG" value="Hà Giang">Hà Giang</option>
                                        <option data-code="HM" value="Hà Nam">Hà Nam</option>
                                        <option data-code="HT" value="Hà Tĩnh">Hà Tĩnh</option>
                                        <option data-code="HO" value="Hòa Bình">Hòa Bình</option>
                                        <option data-code="HY" value="Hưng Yên">Hưng Yên</option>
                                        <option data-code="HD" value="Hải Dương">Hải Dương</option>
                                        <option data-code="HP" value="Hải Phòng">Hải Phòng</option>
                                        <option data-code="HU" value="Hậu Giang">Hậu Giang</option>
                                        <option data-code="KH" value="Khánh Hòa">Khánh Hòa</option>
                                        <option data-code="KG" value="Kiên Giang">Kiên Giang</option>
                                        <option data-code="KT" value="Kon Tum">Kon Tum</option>
                                        <option data-code="LI" value="Lai Châu">Lai Châu</option>
                                        <option data-code="LA" value="Long An">Long An</option>
                                        <option data-code="LO" value="Lào Cai">Lào Cai</option>
                                        <option data-code="LD" value="Lâm Đồng">Lâm Đồng</option>
                                        <option data-code="LS" value="Lạng Sơn">Lạng Sơn</option>
                                        <option data-code="ND" value="Nam Định">Nam Định</option>
                                        <option data-code="NA" value="Nghệ An">Nghệ An</option>
                                        <option data-code="NB" value="Ninh Bình">Ninh Bình</option>
                                        <option data-code="NT" value="Ninh Thuận">Ninh Thuận</option>
                                        <option data-code="PT" value="Phú Thọ">Phú Thọ</option>
                                        <option data-code="PY" value="Phú Yên">Phú Yên</option>
                                        <option data-code="QB" value="Quảng Bình">Quảng Bình</option>
                                        <option data-code="QM" value="Quảng Nam">Quảng Nam</option>
                                        <option data-code="QG" value="Quảng Ngãi">Quảng Ngãi</option>
                                        <option data-code="QN" value="Quảng Ninh">Quảng Ninh</option>
                                        <option data-code="QT" value="Quảng Trị">Quảng Trị</option>
                                        <option data-code="ST" value="Sóc Trăng">Sóc Trăng</option>
                                        <option data-code="SL" value="Sơn La">Sơn La</option>
                                        <option data-code="TH" value="Thanh Hóa">Thanh Hóa</option>
                                        <option data-code="TB" value="Thái Bình">Thái Bình</option>
                                        <option data-code="TY" value="Thái Nguyên">Thái Nguyên</option>
                                        <option data-code="TT" value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                        <option data-code="TG" value="Tiền Giang">Tiền Giang</option>
                                        <option data-code="TV" value="Trà Vinh">Trà Vinh</option>
                                        <option data-code="TQ" value="Tuyên Quang">Tuyên Quang</option>
                                        <option data-code="TN" value="Tây Ninh">Tây Ninh</option>
                                        <option data-code="VL" value="Vĩnh Long">Vĩnh Long</option>
                                        <option data-code="VT" value="Vĩnh Phúc">Vĩnh Phúc</option>
                                        <option data-code="YB" value="Yên Bái">Yên Bái</option>
                                        <option data-code="DB" value="Điện Biên">Điện Biên</option>
                                        <option data-code="DC" value="Đắk Lắk">Đắk Lắk</option>
                                        <option data-code="DO" value="Đắk Nông">Đắk Nông</option>
                                        <option data-code="DN" value="Đồng Nai">Đồng Nai</option>
                                        <option data-code="DT" value="Đồng Tháp">Đồng Tháp</option>
                                    </select>
                                    <input type="date" class="field-input date">
                                </div>
                                <div class="management-sidebar">
                                    <p style="width: calc(100%/6);">Mã đơn hàng</p>
                                    <p style="width: calc(100%/6);">Mã khách hàng</p>
                                    <p style="width: calc(100%/6);">Trạng thái đơn hàng</p>
                                    <p style="width: calc(100%/6);">Ngày đặt hàng</p>
                                    <p style="width: calc(100%/6);">Địa chỉ giao hàng</p>
                                    <p style="width: calc(100%/6);">Tổng tiền</p>
                                </div>
                                <div class="table-responsive" style="height: 200px;">
                                    <table class="table table-bordered table-nowrap mb-0">
                                        <tbody class="tableorder">
                                            <?php
                                            $order = $db->prepare("SELECT * from donhang");
                                            $order->execute();
                                            $orders = $order->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($orders as $o) {
                                            ?>
                                                <tr>
                                                    <td id="id" style="width: calc(100%/6); height: 50px; color:rgb(0 0 0/40%);"><?php echo $o["madonhang"] ?></td>
                                                    <td id="customer" style="width: calc(100%/6); height: 50px;"><?php echo $o["makhachhang"] ?></td>
                                                    <td id="status" style="width: calc(100%/6); height: 50px;" class="orderinfo">
                                                        <select name="selectStt-<?php echo $o["madonhang"] ?>" id="selectStt-<?php echo $o["madonhang"] ?>" class="selectStt" onchange='updateStatus(<?php echo $o["madonhang"] ?>, this.value)'>
                                                            <option value="">Chọn trạng thái</option>
                                                            <option value="Đang xử lý" <?php if ($o["trangthaidonhang"] == "Đang xử lý") echo "selected"; ?>>Đang xử lý</option>
                                                            <option value="Đã xử lý" <?php if ($o["trangthaidonhang"] == "Đã xử lý") echo "selected"; ?>>Đã xử lý</option>
                                                            <option value="Đã giao" <?php if ($o["trangthaidonhang"] == "Đã giao") echo "selected"; ?>>Đã giao</option>
                                                            <option value="Đã huỷ" <?php if ($o["trangthaidonhang"] == "Đã huỷ") echo "selected"; ?>>Đã huỷ</option>
                                                        </select>
                                                    </td>
                                                    <td id="date" style="width: calc(100%/6); height: 50px;"><?php echo $o["ngaydathang"] ?></td>
                                                    <td id="address" style="width: calc(100%/6); height: 50px;"><?php echo $o["diachi"] ?></td>
                                                    <td id="total" style="width: calc(100%/6); height: 50px;"><?php echo $o["tongtien"] ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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
        // * quản lý tình trạng đơn hàng
        function updateStatus(orderId, status) {
            // Tạo đối tượng XMLHTTPRequest để gửi yêu cầu đến server
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Nhận kết quả trả về từ server và cập nhật lại trạng thái trên bảng
                    document.getElementById("selectStt").value = status;
                }
            };
            // Gửi yêu cầu đến server để cập nhật trạng thái đơn hàng
            xhttp.open("GET", "/controller/updateStatus.php?orderId=" + orderId + "&status=" + status, true);
            xhttp.send();
        }
        // * khoá người dùng
        document.addEventListener("DOMContentLoaded", function() {
            var lockBtn = document.querySelector(".lock");
            var unlockBtn = document.querySelector(".unlock");

            lockBtn.addEventListener("click", function() {
                var selectedRows = getSelectedRows();
                if (selectedRows.length > 0) {
                    updateStatus(selectedRows, "lock");
                }
            });

            unlockBtn.addEventListener("click", function() {
                var selectedRows = getSelectedRows();
                if (selectedRows.length > 0) {
                    updateStatus(selectedRows, "unlock");
                }
            });

            function getSelectedRows() {
                var selectedRows = [];
                var checkboxes = document.querySelectorAll("input.checkbox:checked");
                for (var i = 0; i < checkboxes.length; i++) {
                    selectedRows.push(checkboxes[i].getAttribute("data-id"));
                }
                return selectedRows;
            }

            function updateStatus(ids, action) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        let result = xhttp.responseText;
                        document.querySelector(".table-user tbody").innerHTML = result;
                    }
                };
                xhttp.open("GET", "/controller/lock.php?action=" + action + "&ids=" + ids.join(","), true);
                xhttp.send();
            }
        });


        // *lên đầu trang
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

        // * lọc sản phẩm theo tỉnh thành
        document.getElementById("city").addEventListener("change", function() {
            let value = this.value; // Lấy giá trị của option đã chọn
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let response = xhttp.responseText;
                    document.querySelector(".tableorder").innerHTML = response;
                }
            };
            xhttp.open(
                "GET",
                "/controller/searchLocation.php?location=" +
                encodeURIComponent(value),
                true
            );
            xhttp.send();
        });
        // * lọc sản phẩm theo ngày
        document.querySelector(".date").addEventListener("change", function() {
            let value = ((new Date(this.value).getDate()) < 10 ? '0' : '') + (new Date(this.value).getDate()) + '/' + ((new Date(this.value).getMonth() + 1) < 10 ? '0' : '') + (new Date(this.value).getMonth() + 1) + '/' + (new Date(this.value).getFullYear());;
            let xhttp = new XMLHttpRequest();
            console.log(value);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let response = xhttp.responseText;
                    document.querySelector(".tableorder").innerHTML = response;
                }
            };
            xhttp.open(
                "GET",
                "/controller/searchDate.php?date=" +
                encodeURIComponent(value),
                true
            );
            xhttp.send();
        });
        // * xoá sản phẩm
        function removeProduct(element) {
            var id = element.getAttribute("data-id");
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let response = xhttp.responseText;
                    if (response == "success") {
                        alert("Đã ẩn sản phẩm trên web");
                        window.location.href = "management.php"

                    } else {
                        if (confirm("Bạn có muốn xoá sản phẩm không?")) {
                            let xhr = new XMLHttpRequest();
                            xhr.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    let result = xhr.responseText;
                                    if (result == "success") {
                                        alert("Xoá sản phẩm thành công");
                                        window.location.href = "management.php";
                                    } else {
                                        alert("Xoá sản phẩm không thành công");
                                    }
                                }
                            };
                            xhr.open(
                                "GET",
                                "/controller/deleteProduct.php?id=" + encodeURIComponent(id),
                                true
                            );
                            xhr.send();
                        }
                    }
                }
            };
            xhttp.open(
                "GET",
                "/controller/checkOrder.php?id=" +
                encodeURIComponent(id),
                true
            );
            xhttp.send();
        }
    </script>
    <?php if (isset($_SESSION['success'])) {
        echo 'document.addEventListener("DOMContentLoaded", function() {
            alert("Thêm sản phẩm thành công!");
          });';
    } ?>
</body>

</html>