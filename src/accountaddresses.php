<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Địa chỉ – Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/accountaddress.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php $db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
    session_start();
    ?>

    <?php include "header.php" ?>
    <main id="main">
        <section class="one-one">
            <div class="wrap-site">
                <div class="site-animation">
                    <h5><b>Thông tin địa chỉ</b></h5>
                </div>
            </div>
        </section>
        <section class="two-one">
            <div class="two-left">
                <div class="two-left-one">
                    <h4 class="text-in-two">
                        Tài Khoản
                    </h4>
                    <div class="footer-contentt">
                        <ul>
                            <li class="item">
                                <a href="/src/account.php" title="Thông tin tài khoản">Thông tin tài khoản</a>
                            </li>
                            <li class="item">
                                <a href="/src/accountaddresses.php" title="Danh sách địa chỉ">Danh sách địa chỉ</a>
                            </li>
                            <li class="item">
                                <form action="/controller/logout.php" id="logout-form" method="POST">
                                    <button type="submit" name="logout" class="buttonLogout">Đăng xuất</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="two-right">
                <?php
                if (isset($_SESSION['userName'])) {
                    $userName = $_SESSION['userName'];
                    $user = $db->prepare("SELECT * FROM khachhang,diachi WHERE khachhang.makhachhang = diachi.makhachhang and tentk = :tentk and macdinh = 1");
                    $user->bindParam(":tentk", $userName);
                    $user->execute();
                    $userInformation = $user->fetch(PDO::FETCH_ASSOC);
                    if (empty($userInformation)) {
                ?>
                        <div class="address-title">
                            <?php
                            $u = $db->prepare("SELECT tenkhachhang,email from khachhang where tentk = :tentk");
                            $u->bindParam(":tentk", $userName);
                            $u->execute();
                            $ui = $u->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <p class="color-br">
                                <strong><?php echo $ui["tenkhachhang"] ?></strong>
                                <span class="default_address not e">(Địa chỉ mặc định)</span>
                                <a href="#" class="header_navbar-icon-link" onclick="showEditAddress()">
                                    <i class="fas fa-iconn"></i>
                                </a>
                            </p>
                        </div>
                        <div class="address_table">
                            <div class="inforAddresss">
                                <div class="table-add">
                                    <p class="">
                                        <strong><?php echo $ui["tenkhachhang"] ?></strong>
                                    </p>
                                </div>
                                <div class="table-add">
                                    <div class="table-add-one">
                                        <p>Công ty:</p>
                                    </div>
                                    <div class="table-add-two">
                                        <!-- <p>sssss</p> -->
                                    </div>
                                </div>
                                <div class="table-add">
                                    <div class="table-add-one">
                                        <p>Địa chỉ:</p>
                                    </div>
                                    <div class="table-add-two">
                                    </div>
                                </div>
                                <div class="table-add">
                                    <div class="table-add-one">
                                        <p>Số điện thoại:</p>
                                    </div>
                                    <div class="table-add-two">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="editAddress hide">
                                <form action="" id="form-login">
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-user"></i></span>
                                        <input type="text" class="form-input" placeholder="Họ và Tên" value="<?php echo $ui["tenkhachhang"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-house"></i></span>
                                        <input type="text" class="form-input apartment1" placeholder="Tên đường / Thôn, xóm" value="">
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-house"></i></span>
                                        <input type="text" class="form-input ward1" placeholder="Phường / Xã" value="">
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-house"></i></span>
                                        <input type="text" class="form-input district1" placeholder="Quận / Huyện" value="">
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-house"></i></span>
                                        <select name="" id="city1" class="form-input">
                                            <option value="0">Chọn tỉnh / thành phố</option>
                                            <?php
                                            $cities = array("An Giang", "Bà Rịa-Vũng Tàu", "Bắc Giang", "Bắc Kạn", "Bạc Liêu", "Bắc Ninh", "Bến Tre", "Bình Định", "Bình Dương", "Bình Phước", "Bình Thuận", "Cà Mau", "Cần Thơ", "Cao Bằng", "Đà Nẵng", "Đắk Lắk", "Đắk Nông", "Điện Biên", "Đồng Nai", "Đồng Tháp", "Gia Lai", "Hà Giang", "Hà Nam", "Hà Nội", "Hà Tĩnh", "Hải Dương", "Hải Phòng", "Hậu Giang", "Hòa Bình", "Hưng Yên", "Khánh Hòa", "Kiên Giang", "Kon Tum", "Lai Châu", "Lâm Đồng", "Lạng Sơn", "Lào Cai", "Long An", "Nam Định", "Nghệ An", "Ninh Bình", "Ninh Thuận", "Phú Thọ", "Phú Yên", "Quảng Bình", "Quảng Nam", "Quảng Ngãi", "Quảng Ninh", "Quảng Trị", "Sóc Trăng", "Sơn La", "Tây Ninh", "Thái Bình", "Thái Nguyên", "Thanh Hóa", "Thừa Thiên Huế", "Tiền Giang", "Hồ Chí Minh", "Trà Vinh", "Tuyên Quang", "Vĩnh Long", "Vĩnh Phúc", "Yên Bái");
                                            foreach ($cities as $city) {
                                                if ($city == $userInformation["thanhpho"]) {
                                                    echo "<option value='$city' selected>$city</option>";
                                                } else {
                                                    echo "<option value='$city'>$city</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                        <select class="form-input" name="" id="country1">
                                            <option value="0" selected>Chọn quốc gia</option>
                                            <option value="Việt Nam">Việt Nam</option>
                                            <option value="Thái Lan">Thái Lan</option>
                                            <option value="Lào">Lào</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-phone"></i></span>
                                        <input type="text" class="form-input numberphone1" placeholder="Điện Thoại" value="">
                                    </div>

                                    <div>
                                        <input type="checkbox" name="" value="" class="checkdefault1"> Đặt làm địa chỉ mặc định
                                    </div>
                                    <div class="add-text">
                                        <a href="#" class="add-onee" onclick="updateAddress()">Cập nhật</a>
                                        <span class="kind-add" onclick="showEditAddress()">
                                            Hoặc
                                            <a href="#"> Hủy</a>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        <?php
                    } else {
                        ?>
                            <div class="address-title">
                                <p class="color-br">
                                    <strong><?php echo $userInformation["tenkhachhang"] ?></strong>
                                    <span class="default_address not e">(Địa chỉ mặc định)</span>
                                    <a href="#" class="header_navbar-icon-link" onclick="showEditAddress()">
                                        <i class="fas fa-iconn"></i>
                                    </a>
                                </p>
                            </div>
                            <div class="address_table">
                                <div class="inforAddresss">
                                    <div class="table-add">
                                        <p class="">
                                            <strong><?php echo $userInformation["tenkhachhang"] ?></strong>
                                        </p>
                                    </div>
                                    <div class="table-add">
                                        <div class="table-add-one">
                                            <p>Công ty:</p>
                                        </div>
                                        <div class="table-add-two">
                                            <!-- <p>sssss</p> -->
                                        </div>
                                    </div>
                                    <div class="table-add">
                                        <div class="table-add-one">
                                            <p>Địa chỉ:</p>
                                        </div>
                                        <div class="table-add-two">
                                            <p><?php echo $userInformation["tenduong"] ?></p>
                                            <p><?php echo $userInformation["phuong"] ?>, <?php echo $userInformation["quan"] ?></p>
                                            <p><?php echo $userInformation["thanhpho"] ?>, <?php echo $userInformation["quocgia"] ?></p>
                                        </div>
                                    </div>
                                    <div class="table-add">
                                        <div class="table-add-one">
                                            <p>Số điện thoại:</p>
                                        </div>
                                        <div class="table-add-two">
                                            <p><?php echo $userInformation["sdt"] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="editAddress hide">
                                    <form action="" id="form-login">
                                        <div class="form-group">
                                            <span><i class="fa-solid fa-user"></i></span>
                                            <input type="text" class="form-input" placeholder="Họ và Tên" value="<?php echo $userInformation["tenkhachhang"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <span><i class="fa-solid fa-house"></i></span>
                                            <input type="text" class="form-input apartment2" placeholder="Tên đường / Thôn, xóm" value="<?php echo $userInformation["tenduong"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <span><i class="fa-solid fa-house"></i></span>
                                            <input type="text" class="form-input ward2" placeholder="Phường / Xã" value="<?php echo $userInformation["phuong"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <span><i class="fa-solid fa-house"></i></span>
                                            <input type="text" class="form-input district2" placeholder="Quận / Huyện" value="<?php echo $userInformation["quan"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <span><i class="fa-solid fa-house"></i></span>
                                            <select name="" id="city2" class="form-input">
                                                <option value="0">Chọn tỉnh / thành phố</option>
                                                <?php
                                                $cities = array("An Giang", "Bà Rịa-Vũng Tàu", "Bắc Giang", "Bắc Kạn", "Bạc Liêu", "Bắc Ninh", "Bến Tre", "Bình Định", "Bình Dương", "Bình Phước", "Bình Thuận", "Cà Mau", "Cần Thơ", "Cao Bằng", "Đà Nẵng", "Đắk Lắk", "Đắk Nông", "Điện Biên", "Đồng Nai", "Đồng Tháp", "Gia Lai", "Hà Giang", "Hà Nam", "Hà Nội", "Hà Tĩnh", "Hải Dương", "Hải Phòng", "Hậu Giang", "Hòa Bình", "Hưng Yên", "Khánh Hòa", "Kiên Giang", "Kon Tum", "Lai Châu", "Lâm Đồng", "Lạng Sơn", "Lào Cai", "Long An", "Nam Định", "Nghệ An", "Ninh Bình", "Ninh Thuận", "Phú Thọ", "Phú Yên", "Quảng Bình", "Quảng Nam", "Quảng Ngãi", "Quảng Ninh", "Quảng Trị", "Sóc Trăng", "Sơn La", "Tây Ninh", "Thái Bình", "Thái Nguyên", "Thanh Hóa", "Thừa Thiên Huế", "Tiền Giang", "Hồ Chí Minh", "Trà Vinh", "Tuyên Quang", "Vĩnh Long", "Vĩnh Phúc", "Yên Bái");
                                                foreach ($cities as $city) {
                                                    if ($city == $userInformation["thanhpho"]) {
                                                        echo "<option value='$city' selected>$city</option>";
                                                    } else {
                                                        echo "<option value='$city'>$city</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                            <select class="form-input" name="" id="country2">
                                                <option value="0" selected>Chọn quốc gia</option>
                                                <option value="Việt Nam" <?php echo ($userInformation["quocgia"] == "Việt Nam") ? 'selected' : ''; ?>>Việt Nam</option>
                                                <option value="Thái Lan" <?php echo ($userInformation["quocgia"] == "Thái Lan") ? 'selected' : ''; ?>>Thái Lan</option>
                                                <option value="Lào" <?php echo ($userInformation["quocgia"] == "Lào") ? 'selected' : ''; ?>>Lào</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <span><i class="fa-solid fa-phone"></i></span>
                                            <input type="text" class="form-input numberphone2" placeholder="Điện Thoại" value="<?php echo $userInformation["sdt"] ?>">
                                        </div>

                                        <div>
                                            <input type="checkbox" name="" value="" class="checkdefault2"> Đặt làm địa chỉ mặc định
                                        </div>
                                        <div class="add-text">
                                            <a href="#" class="add-onee" onclick="updateAddress()">Cập nhật</a>
                                            <span class="kind-add" onclick="showEditAddress()">
                                                Hoặc
                                                <a href="#"> Hủy</a>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                        <?php
                    }
                }
                        ?>
                            </div>
                        </div>
                        <div class="two-right-right">
                            <a href="#" class="add-one" onclick="showInputAddress()">Nhập địa chỉ mới</a>
                            <div id="wrapper" class="hide">
                                <?php
                                $u_s = $db->prepare("SELECT tenkhachhang,email from khachhang where tentk = :tentk");
                                $u_s->bindParam(":tentk", $userName);
                                $u_s->execute();
                                $ui_s = $u_s->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <form action="" id="form-login">
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-user"></i></span>
                                        <input type="text" class="form-input" placeholder="Họ và Tên" value="<?php echo $ui_s["tenkhachhang"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-house"></i></span>
                                        <input type="text" class="form-input apartment" placeholder="Tên đường / Thôn, xóm">
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-house"></i></span>
                                        <input type="text" class="form-input ward" placeholder="Phường / Xã">
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-house"></i></span>
                                        <input type="text" class="form-input district" placeholder="Quận / Huyện">
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-house"></i></span>
                                        <select name="" id="city" class="form-input">
                                            <option value="0" selected="">Chọn tỉnh / thành phố</option>
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
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                        <select class="form-input" name="" id="country_s">
                                            <option value="0" selected>Chọn quốc gia</option>
                                            <option value="Việt Nam">Việt Nam</option>
                                            <option value="Thái Lan">Thái Lan</option>
                                            <option value="Lào">Lào</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-phone"></i></span>
                                        <input type="text" class="form-input numberphone" placeholder="Điện Thoại">
                                    </div>

                                    <div>
                                        <input type="checkbox" name="" value="" class="checkdefault"> Đặt làm địa chỉ mặc định
                                    </div>
                                    <div class="add-text">
                                        <a href="#" class="add-onee" onclick="addAddress()">Thêm mới</a>
                                        <span class="kind-add" onclick="showInputAddress()">
                                            Hoặc
                                            <a href="#"> Hủy</a>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
        </section>

        <?php include "gallery.php" ?>

    </main>
    <?php
    include "footer.php"
    ?>
    <script type="text/javascript" src="../asset/js/account.js"></script>

</body>

</html>