<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runner Inn - Thanh toán đơn hàng</title>
    <link rel="stylesheet" href="/asset/css/payment.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
    session_start();
    ?>
    <div class="row">
        <div class="main">
            <div class="main-header">
                <a href="">
                    <h1>Runner Inn</h1>
                </a>
                <ul>
                    <li><a href="cart.php" class="current">Giỏ hàng</a><i class="fa-light fa-angle-right"></i></li>
                    <li>Thông tin giao hàng<i class="fa-light fa-angle-right"></i></li>
                    <li><a href="paymentmethod.php" class="current">Phương thức thanh toán</a></i></li>
                </ul>
            </div>
            <div class="main-content">
                <div class="section">
                    <div class="section-header">
                        <h2 class="section-title">Thông tin giao hàng</h2>
                    </div>
                    <div class="section-customer">
                        <div class="logo">
                            <div class="logo-customer">
                                <div class="avatar"></div>
                            </div>
                            <div class="customer-infomartion">
                                <?php
                                $user = $db->prepare("SELECT tentk,email from khachhang where makhachhang = :userID");
                                $user->bindParam(":userID", $_SESSION["userID"]);
                                $user->execute();
                                $infoUser = $user->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <p style="font-weight: 500;"><?php echo $infoUser["tentk"] ?>&nbsp;(<?php echo $infoUser["email"] ?>)</p>
                                <form action="/controller/logout.php" id="logout-form" method="POST">
                                    <button type="submit" name="logout" class="current">Đăng xuất</button>
                                </form>
                            </div>
                        </div>
                        <div class="fieldset">
                            <div class="field">
                                <div class="field-input-wrapper field-input-wrapper-select">
                                    <label class="field-label" for="">Thêm địa chỉ mới...</label>
                                    <select class="field-input" name="" id="address">
                                        <option value="0">Nhập địa chỉ mới</option>
                                        <?php
                                        $address = $db->prepare("SELECT * from diachi,khachhang where khachhang.makhachhang = diachi.makhachhang and khachhang.makhachhang = :userID");
                                        $address->bindParam(":userID", $_SESSION["userID"]);
                                        $address->execute();
                                        $listAddress = $address->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($listAddress as $row) {
                                            if ($row["macdinh"] == 1) {
                                        ?>
                                                <option value="1" <?php echo "selected" ?> data-properties='{"hoten": "<?php echo $row["tenkhachhang"] ?>","sdt": "<?php echo $row["sdt"] ?>","tenduong": "<?php echo $row["tenduong"] ?>","phuong": "<?php echo $row["phuong"] ?>","quan": "<?php echo $row["quan"] ?>","thanhpho": "<?php echo $row["thanhpho"] ?>","quocgia": "<?php echo $row["quocgia"] ?>"}'><?php echo $row["tenduong"] . ",&nbsp;" . $row["phuong"] . ",&nbsp;" . $row["quan"] . ",&nbsp;" . $row["thanhpho"] . ",&nbsp;" . $row["quocgia"] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="field-input-wrapper">
                                    <label class="field-label" for="">Họ và tên</label>
                                    <?php 
                                    $tenKH = $db->prepare("SELECT tenkhachhang from khachhang where makhachhang = :userID");
                                    $tenKH->bindParam(":userID", $_SESSION["userID"]);
                                    $tenKH->execute();
                                    $tkh = $tenKH->fetch(PDO::FETCH_ASSOC)
                                    ?>
                                    <input class="field-input name" type="text" value="<?php echo $tkh["tenkhachhang"] ?>">
                                </div>
                            </div>
                            <div class="field">
                                <div class="field-input-wrapper">
                                    <label class="field-label" for="">Số điện thoại</label>
                                    <input class="field-input phone" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="fieldset">
                            <div class="field">
                                <div class="field-input-wrapper">
                                    <label class="field-label" for="">Số nhà, tên đường / thôn, xóm</label>
                                    <input class="field-input apartment" type="text">
                                </div>
                            </div>
                            <div class="field field-half">
                                <div class="field-input-wrapper">
                                    <label class="field-label" for="">Phường / xã</label>
                                    <input class="field-input ward" type="text">
                                </div>
                            </div>
                            <div class="field field-half">
                                <div class="field-input-wrapper">
                                    <label class="field-label" for="">Quận / huyện</label>
                                    <input class="field-input district" type="text">
                                </div>
                            </div>
                            <div class="field field-half field-bottom">
                                <div class="field-input-wrapper field-input-wrapper-select">
                                    <label class="field-label" for="">Tỉnh / thành phố</label>
                                    <select class="field-input" name="" id="city">
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
                            </div>
                            <div class="field field-half field-bottom">
                                <div class="field-input-wrapper field-input-wrapper-select">
                                    <label class="field-label" for="">Quốc gia</label>
                                    <select class="field-input" name="" id="country">
                                        <option value="0" selected>Chọn quốc gia</option>
                                        <option value="Việt Nam">Việt Nam</option>
                                        <option value="Thái Lan">Thái Lan</option>
                                        <option value="Lào">Lào</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-footer">
                        <a href="cart.php" class="current">Giỏ hàng</a>
                        <form action="paymentmethod.php" id="nextPayment">
                            <button class="nextPayment" ">Tiếp tục đến phương thức thanh toán</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="sidebar-content">
                <div class="order-summary-section order-summary-section-product-list">
                    <table class="product-table">
                        <tbody>
                            <?php
                            $productCart = $db->prepare("SELECT distinct tensp, urlmain,giohang.soluong,kichthuoc,mausac,makhachhang,sanpham.masp,giatien from sanpham,giohang,hinhanhsp where sanpham.masp = giohang.masp and sanpham.masp = hinhanhsp.masp");
                            $productCart->execute();
                            $listProduct = $productCart->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($listProduct as $row) {
                                if ($row["makhachhang"] == $_SESSION["userID"]) {
                            ?>
                                    <tr class="product" data-product-id="<?php echo $row["masp"] ?>">
                                        <td class="product-image">
                                            <div class="product-thumbnail">
                                                <div class="product-thumbnail-wrapper">
                                                    <img class="product-thumbnail-image" alt="<?php echo $row["tensp"] ?>" src="<?php echo $row["urlmain"] ?>">
                                                </div>
                                                <span class="product-thumbnail-quantity" aria-hidden="true"><?php echo $row["soluong"] ?></span>
                                            </div>
                                        </td>
                                        <td class="product-description">
                                            <span class="product-description-name order-summary-emphasis"><?php echo $row["tensp"] ?></span>

                                            <span class="product-description-variant order-summary-small-text">
                                                <?php echo $row["mausac"] ?>&nbsp;/&nbsp;<?php echo $row["kichthuoc"] ?>
                                            </span>

                                        </td>
                                        <td class="product-price">
                                            <span class="order-summary-emphasis"><?php echo number_format($row["giatien"]) ?>₫</span>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="order-summary-section order-summary-section-discount">
                    <div class="fieldset">
                        <div class="field">
                            <div class="field-input-btn-wrapper">
                                <div class="field-input-wrapper">
                                    <input placeholder="" class="field-input" size="30" type="text" value="">
                                    <label for="" class="field-label" for="">Mã giảm giá</label>
                                </div>
                                <button type="submit" class="field-input-btn">Sử dụng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-summary-section order-summary-section-total-lines payment-lines">
                    <table class="total-line-table">
                        <tbody>
                            <?php
                            $total = $db->prepare("SELECT sum(giatien*giohang.soluong) from giohang,sanpham where sanpham.masp =giohang.masp and makhachhang = :userID");
                            $total->bindParam(':userID', $_SESSION['userID']);
                            $total->execute();
                            $totalCart = $total->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <tr class="total-line total-line-subtotal">
                                <td class="total-line-name">Tạm tính</td>
                                <td class="total-line-price">
                                    <span class="order-summary-emphasis" data-price-target="<?php echo number_format($totalCart["sum(giatien*giohang.soluong)"]) ?>">
                                        <?php echo number_format($totalCart["sum(giatien*giohang.soluong)"]) ?>₫
                                    </span>
                                </td>
                            </tr>
                            <tr class="total-line total-line-shipping">
                                <td class="total-line-name">Phí vận chuyển</td>
                                <td class="total-line-price">
                                    <span class="order-summary-emphasis">—</span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="total-line-table-footer">
                            <tr class="total-line">
                                <td class="total-line-name payment-due-label">
                                    <span class="payment-due-label-total">Tổng cộng</span>
                                </td>
                                <td class="total-line-name payment-due">
                                    <span class="payment-due-currency">VND</span>
                                    <span class="payment-due-price" data-payment-target="<?php echo number_format($totalCart["sum(giatien*giohang.soluong)"]) ?>">
                                        <?php echo number_format($totalCart["sum(giatien*giohang.soluong)"]) ?>₫
                                    </span>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        const $ = document.querySelector.bind(document);
        const $$ = document.querySelectorAll.bind(document);
        var selectElements = document.getElementById("address");
        let selectedOptions = selectElements.options[selectElements.selectedIndex];
        let dataPropertiess = selectedOptions.getAttribute("data-properties");
        let propertiesObjects = JSON.parse(dataPropertiess);
        if(selectedOptions.value == 0) {
                document.getElementById("country").addEventListener("change", function() {
                    let selectedOption = this.options[this.selectedIndex];
                    let objProperties = {
                        "sonha": $(".apartment").value,
                        "phuong": $(".ward").value,
                        "quan": $(".district").value,
                        "thanhpho": document.getElementById("city").value,
                        "quocgia": selectedOption.innerText
                    };
                    var stringProperties = JSON.stringify(objProperties);
                    $(".nextPayment").setAttribute("data-properties", stringProperties);
                    $(".nextPayment").addEventListener("click", function() {
                        let data = $(".nextPayment").getAttribute("data-properties")
                        let dataInfo = JSON.parse(data)
                        let xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                if (xhr.responseText == "true") {
                                    window.location.href = "/src/paymentmethod.php";
                                }
                            }
                        }
                        xhr.open("GET",
                            "/controller/addAddress.php?apartment=" +
                            encodeURIComponent(dataInfo.sonha) +
                            "&ward=" +
                            encodeURIComponent(dataInfo.phuong) +
                            "&district=" +
                            encodeURIComponent(dataInfo.quan) +
                            "&city=" +
                            encodeURIComponent(dataInfo.thanhpho) +
                            "&country=" +
                            encodeURIComponent(dataInfo.quocgia),
                            true);
                        xhr.send();
                    });
                });
        } else {
        $(".name").value = propertiesObjects.hoten;
        $(".phone").value = propertiesObjects.sdt;
        $(".apartment").value = propertiesObjects.tenduong;
        $(".ward").value = propertiesObjects.phuong;
        $(".district").value = propertiesObjects.quan;
        document.getElementById("city").value = propertiesObjects.thanhpho;
        document.getElementById("country").value = propertiesObjects.quocgia;
        $(".name").disabled = true
        $(".phone").disabled = true
        $(".apartment").disabled = true
        $(".ward").disabled = true
        $(".district").disabled = true
        document.getElementById("city").disabled = true
        document.getElementById("country").disabled = true
        var selectElement = document.getElementById("address");
        selectElement.addEventListener("change", function() {
            let selectedOption = selectElement.options[selectElement.selectedIndex];
            let value = selectedOption.value;
            if (value == 0) {
                $(".name").value = propertiesObjects.hoten;
                $(".phone").value = propertiesObjects.sdt;
                $(".apartment").value = "";
                $(".ward").value = "";
                $(".district").value = "";
                document.getElementById("city").value = "0";
                document.getElementById("country").value = "0";
                $(".name").disabled = false
                $(".phone").disabled = false
                $(".apartment").disabled = false
                $(".ward").disabled = false
                $(".district").disabled = false
                document.getElementById("city").disabled = false
                document.getElementById("country").disabled = false
                let xhttp = new XMLHttpRequest();
                xhttp.open("GET", "/controller/update_macdinh.php", true);
                xhttp.send();
                let apartmentN = ""
                $(".apartment").addEventListener("change", function() {
                    apartmentN = $(".apartment").value
                })
                let wardN = ""
                $(".ward").addEventListener("change", function() {
                    wardN = $(".ward").value
                })
                let districtN = ""
                $(".district").addEventListener("change", function() {
                    districtN = $(".district").value
                })
                var cityN = ""
                document.getElementById("city").addEventListener("change", function() {
                    let selectedOption = this.options[this.selectedIndex];
                    cityN = selectedOption.innerText;
                });
                let coutryN = ""
                document.getElementById("country").addEventListener("change", function() {
                    let selectedOption = this.options[this.selectedIndex];
                    coutryN = selectedOption.innerText;
                    let objProperties = {
                        "sonha": apartmentN,
                        "phuong": wardN,
                        "quan": districtN,
                        "thanhpho": cityN,
                        "quocgia": coutryN
                    };
                    var stringProperties = JSON.stringify(objProperties);
                    $(".nextPayment").setAttribute("data-properties", stringProperties);
                    $(".nextPayment").addEventListener("click", function() {
                        let data = $(".nextPayment").getAttribute("data-properties")
                        let dataInfo = JSON.parse(data)
                        let xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                if (xhr.responseText == "true") {
                                    window.location.href = "/src/paymentmethod.php";
                                }
                            }
                        }
                        xhr.open("GET",
                            "/controller/addAddress.php?apartment=" +
                            encodeURIComponent(dataInfo.sonha) +
                            "&ward=" +
                            encodeURIComponent(dataInfo.phuong) +
                            "&district=" +
                            encodeURIComponent(dataInfo.quan) +
                            "&city=" +
                            encodeURIComponent(dataInfo.thanhpho) +
                            "&country=" +
                            encodeURIComponent(dataInfo.quocgia),
                            true);
                        xhr.send();
                    });
                });
            } else {
                let dataProperties = selectedOption.getAttribute("data-properties");
                let propertiesObject = JSON.parse(dataProperties);
                $(".name").value = propertiesObject.hoten;
                $(".phone").value = propertiesObject.sdt;
                $(".apartment").value = propertiesObject.tenduong;
                $(".ward").value = propertiesObject.phuong;
                $(".district").value = propertiesObject.quan;
                document.getElementById("city").value = propertiesObjects.thanhpho;
                document.getElementById("country").value = propertiesObjects.quocgia;
                $(".name").disabled = true
                $(".phone").disabled = true
                $(".apartment").disabled = true
                $(".ward").disabled = true
                $(".district").disabled = true
                document.getElementById("city").disabled = true
                document.getElementById("country").disabled = true
            }
        })};
    </script>
</body>

</html>