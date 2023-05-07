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
                                <p>ácxzxc</p>
                                <form action="/controller/logout.php" id="logout-form" method="POST">
                                    <button type="submit" name="logout" class="current">Đăng xuất</button>
                                </form>
                            </div>
                        </div>
                        <div class="fieldset">
                            <div class="field">
                                <div class="field-input-wrapper field-input-wrapper-select">
                                    <label class="field-label" for="">Thêm địa chỉ mới...</label>
                                    <select class="field-input" name="" id="">
                                        <option value="0">Địa chỉ đã lưu trữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="field-input-wrapper">
                                    <label class="field-label" for="">Họ và tên</label>
                                    <input class="field-input" type="text">
                                </div>
                            </div>
                            <div class="field">
                                <div class="field-input-wrapper">
                                    <label class="field-label" for="">Số điện thoại</label>
                                    <input class="field-input" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="fieldset">
                            <div class="field">
                                <div class="field-input-wrapper">
                                    <label class="field-label" for="">Số nhà, tên đường</label>
                                    <input class="field-input" type="text">
                                </div>
                            </div>
                            <div class="field field-half">
                                <div class="field-input-wrapper">
                                    <label class="field-label" for="">Phường / xã</label>
                                    <input class="field-input" type="text">
                                </div>
                            </div>
                            <div class="field field-half">
                                <div class="field-input-wrapper">
                                    <label class="field-label" for="">Quận / huyện</label>
                                    <input class="field-input" type="text">
                                </div>
                            </div>
                            <div class="field field-half field-bottom">
                                <div class="field-input-wrapper field-input-wrapper-select">
                                    <label class="field-label" for="">Tỉnh / thành</label>
                                    <select class="field-input" name="" id="">
                                        <option value="0">Chọn tỉnh / thành</option>
                                        <option data-code="HC" value="50" selected="">Hồ Chí Minh</option>
                                        <option data-code="HI" value="1">Hà Nội</option>
                                        <option data-code="DA" value="32">Đà Nẵng</option>
                                        <option data-code="AG" value="57">An Giang</option>
                                        <option data-code="BV" value="49">Bà Rịa - Vũng Tàu</option>
                                        <option data-code="BI" value="47">Bình Dương</option>
                                        <option data-code="BP" value="45">Bình Phước</option>
                                        <option data-code="BU" value="39">Bình Thuận</option>
                                        <option data-code="BD" value="35">Bình Định</option>
                                        <option data-code="BL" value="62">Bạc Liêu</option>
                                        <option data-code="BG" value="15">Bắc Giang</option>
                                        <option data-code="BK" value="4">Bắc Kạn</option>
                                        <option data-code="BN" value="18">Bắc Ninh</option>
                                        <option data-code="BT" value="53">Bến Tre</option>
                                        <option data-code="CB" value="3">Cao Bằng</option>
                                        <option data-code="CM" value="63">Cà Mau</option>
                                        <option data-code="CN" value="59">Cần Thơ</option>
                                        <option data-code="GL" value="41">Gia Lai</option>
                                        <option data-code="HG" value="2">Hà Giang</option>
                                        <option data-code="HM" value="23">Hà Nam</option>
                                        <option data-code="HT" value="28">Hà Tĩnh</option>
                                        <option data-code="HO" value="11">Hòa Bình</option>
                                        <option data-code="HY" value="21">Hưng Yên</option>
                                        <option data-code="HD" value="19">Hải Dương</option>
                                        <option data-code="HP" value="20">Hải Phòng</option>
                                        <option data-code="HU" value="60">Hậu Giang</option>
                                        <option data-code="KH" value="37">Khánh Hòa</option>
                                        <option data-code="KG" value="58">Kiên Giang</option>
                                        <option data-code="KT" value="40">Kon Tum</option>
                                        <option data-code="LI" value="8">Lai Châu</option>
                                        <option data-code="LA" value="51">Long An</option>
                                        <option data-code="LO" value="6">Lào Cai</option>
                                        <option data-code="LD" value="44">Lâm Đồng</option>
                                        <option data-code="LS" value="13">Lạng Sơn</option>
                                        <option data-code="ND" value="24">Nam Định</option>
                                        <option data-code="NA" value="27">Nghệ An</option>
                                        <option data-code="NB" value="25">Ninh Bình</option>
                                        <option data-code="NT" value="38">Ninh Thuận</option>
                                        <option data-code="PT" value="16">Phú Thọ</option>
                                        <option data-code="PY" value="36">Phú Yên</option>
                                        <option data-code="QB" value="29">Quảng Bình</option>
                                        <option data-code="QM" value="33">Quảng Nam</option>
                                        <option data-code="QG" value="34">Quảng Ngãi</option>
                                        <option data-code="QN" value="14">Quảng Ninh</option>
                                        <option data-code="QT" value="30">Quảng Trị</option>
                                        <option data-code="ST" value="61">Sóc Trăng</option>
                                        <option data-code="SL" value="9">Sơn La</option>
                                        <option data-code="TH" value="26">Thanh Hóa</option>
                                        <option data-code="TB" value="22">Thái Bình</option>
                                        <option data-code="TY" value="12">Thái Nguyên</option>
                                        <option data-code="TT" value="31">Thừa Thiên Huế</option>
                                        <option data-code="TG" value="52">Tiền Giang</option>
                                        <option data-code="TV" value="54">Trà Vinh</option>
                                        <option data-code="TQ" value="5">Tuyên Quang</option>
                                        <option data-code="TN" value="46">Tây Ninh</option>
                                        <option data-code="VL" value="55">Vĩnh Long</option>
                                        <option data-code="VT" value="17">Vĩnh Phúc</option>
                                        <option data-code="YB" value="10">Yên Bái</option>
                                        <option data-code="DB" value="7">Điện Biên</option>
                                        <option data-code="DC" value="42">Đắk Lắk</option>
                                        <option data-code="DO" value="43">Đắk Nông</option>
                                        <option data-code="DN" value="48">Đồng Nai</option>
                                        <option data-code="DT" value="56">Đồng Tháp</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field field-half field-bottom">
                                <div class="field-input-wrapper field-input-wrapper-select">
                                    <label class="field-label" for="">Quốc gia</label>
                                    <select class="field-input" name="" id="">
                                        <option value="0">Chọn quốc gia</option>
                                        <option value="1" selected>Việt Nam</option>
                                        <option value="1">Thái Lan</option>
                                        <option value="1">Lào</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-footer">
                        <a href="cart.php" class="current">Giỏ hàng</a>
                        <form action="paymentmethod.php">
                            <button>Tiếp tục đến phương thức thanh toán</button>
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
                            <tr class="product" data-product-id="1020297433" data-variant-id="1040409894">
                                <td class="product-image">
                                    <div class="product-thumbnail">
                                        <div class="product-thumbnail-wrapper">
                                            <img class="product-thumbnail-image" alt="Adidas Nmd Xr1 W " pearl=""
                                                grey""=""
                                                src="//product.hstatic.net/1000375638/product/801270_1_c42c68dac62843d8b2d3835de4afb829_small.jpg">
                                        </div>
                                        <span class="product-thumbnail-quantity" aria-hidden="true">1</span>
                                    </div>
                                </td>
                                <td class="product-description">
                                    <span class="product-description-name order-summary-emphasis">Adidas Nmd Xr1 W
                                        "Pearl Grey"</span>

                                    <span class="product-description-variant order-summary-small-text">
                                        Xám / 35
                                    </span>

                                </td>
                                <td class="product-price">
                                    <span class="order-summary-emphasis">5,750,000₫</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="order-summary-section order-summary-section-discount">
                    <div class="fieldset">
                        <div class="field">
                            <div class="field-input-btn-wrapper">
                                <div class="field-input-wrapper">
                                    <input placeholder="" class="field-input"  size="30" type="text" value="">
                                    <label for=""  class="field-label" for="">Mã giảm giá</label>
                                </div>
                                <button type="submit" class="field-input-btn">Sử dụng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-summary-section order-summary-section-total-lines payment-lines">
                    <table class="total-line-table">
                        <tbody>
                            <tr class="total-line total-line-subtotal">
                                <td class="total-line-name">Tạm tính</td>
                                <td class="total-line-price">
                                    <span class="order-summary-emphasis"
                                        data-checkout-subtotal-price-target="575000000">
                                        5,750,000₫
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
                                    <span class="payment-due-price" data-checkout-payment-due-target="575000000">
                                        5,750,000₫
                                    </span>
                                    <span class="checkout_version" display:none="" data_checkout_version="123">
                                    </span>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>