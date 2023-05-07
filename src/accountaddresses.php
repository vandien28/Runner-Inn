<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AccountAddresses – Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/product_list.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php $db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
    ?>

    <?php include "header.php" ?>
    <main class="">
        <div class="layout-info-account account-order">
            <div class="title-infor-account text-center">
                <h1>Thông tin địa chỉ</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 sidebar-account">
                        <div class="AccountSidebar">
                            <h3 class="AccountTitle titleSidebar">Tài khoản</h3>
                            <div class="AccountContent">
                                <div class="AccountList">
                                    <ul class="list-unstyled">
                                        <li class="current">
                                            <a href="account.php">Thông tin tài khoản</a>
                                        </li>
                                        <li>
                                            <a href="accountaddresses.php">Danh sách địa chỉ</a>
                                        </li>
                                        <li class="last">
                                            <a href="/index.php">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <div class="row">
                            <div class="content-page">
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div id="address_tables">
                                        <div class="row">
                                            <div class="col-lg-12 col-xs-12 clearfix">
                                                <div class=" address_title ">
                                                    <h3>
                                                        <strong>sdfdsf sfsff</strong>
                                                        <span class="default_address note">(Địa chỉ mặc định)</span>
                                                    </h3>
                                                    <p class="address_actions text-right">
                                                        <span class="action_link action_edit">
                                                            <a href="#" onclick="Haravan.CustomerAddress.toggleForm(1123631692);return false">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            </a>
                                                        </span>
                                                        <span class="action_link action_delete">
                                                            <a href="#" onclick="Haravan.CustomerAddress.destroy(1123631692);return false">
                                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                            </a>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="address_table">
                                        <div id="view_address_1123631692" class="customer_address">
                                            <div class="view_address">
                                                <div class="col-md-6  col-sm-6 col-xs-6 row">
                                                    <p>
                                                        <strong>sdfdsf sfsff</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6"></div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-6 col-sm-6 col-xs-6 row">
                                                    <p>
                                                        <b>Công ty:</b>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6 ">
                                                    <p></p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-6 col-sm-6 col-xs-6  row">
                                                    <p>
                                                        <b>Địa chỉ:</b>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <p></p>
                                                    <p></p>
                                                    <p>, Vietnam </p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-6 col-sm-6 col-xs-6 row">
                                                    <p>
                                                        <b>Số điện thoại:</b>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6 ">
                                                    <p></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div id="edit_address_1123631692" class="customer_address edit_address" style="display:none;">
                                            <form accept-charset='UTF-8' action='/account/addresses/1123631692' id='address_form_1123631692' method='post'>
                                                <input name='form_type' type='hidden' value='customer_address'>
                                                <input name='utf8' type='hidden' value='✓'>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                    </span>
                                                    <td class="value">
                                                        <input type="text" id="address_last_name_1123631692" class="form-control textbox" name="address[last_name]" size="40" value="sdfdsf" placeholder="Họ">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                    </span>
                                                    <input type="text" id="address_first_name_1123631692" class="form-control textbox" name="address[first_name]" size="40" value="sfsff" placeholder="Tên">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                    </span>
                                                    <input type="text" for="address_company_1123631692" class="form-control textbox" name="address[company]" size="40" value="" placeholder="Công ty">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                    </span>
                                                    <input type="text" id="address_address1_1123631692" class="form-control textbox" name="address[address1]" size="40" value="" placeholder="Địa chỉ 1">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                    </span>
                                                    <input type="text" id="address_address2_1123631692" class="form-control textbox" name="address[address2]" size="40" value="" placeholder="Địa chỉ 2">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-map-marker"></i>
                                                    </span>
                                                    <select class="form-control" id="address_country_1123631692" name="address[country]" data-default="Vietnam">
                                                        <option value="" data-provinces="[]">- Please Select --</option>
                                                        <option value="Vietnam" data-provinces='["Hồ Chí Minh","Hà Nội","Đà Nẵng","An Giang","Bà Rịa - Vũng Tàu","Bình Dương","Bình Phước","Bình Thuận","Bình Định","Bạc Liêu","Bắc Giang","Bắc Kạn","Bắc Ninh","Bến Tre","Cao Bằng","Cà Mau","Cần Thơ","Gia Lai","Hà Giang","Hà Nam","Hà Tĩnh","Hòa Bình","Hưng Yên","Hải Dương","Hải Phòng","Hậu Giang","Khánh Hòa","Kiên Giang","Kon Tum","Lai Châu","Long An","Lào Cai","Lâm Đồng","Lạng Sơn","Nam Định","Nghệ An","Ninh Bình","Ninh Thuận","Phú Thọ","Phú Yên","Quảng Bình","Quảng Nam","Quảng Ngãi","Quảng Ninh","Quảng Trị","Sóc Trăng","Sơn La","Thanh Hóa","Thái Bình","Thái Nguyên","Thừa Thiên Huế","Tiền Giang","Trà Vinh","Tuyên Quang","Tây Ninh","Vĩnh Long","Vĩnh Phúc","Yên Bái","Điện Biên","Đắk Lắk","Đắk Nông","Đồng Nai","Đồng Tháp"]'>Vietnam</option>
                                                        <option value="United States" data-provinces='["Alabama","Alaska","American Samoa","Arizona","Arkansas","Armed Forces Americas","Armed Forces Europe","Armed Forces Pacific","California","Colorado","Connecticut","Delaware","District of Columbia","Federated States of Micronesia","Florida","Georgia","Guam","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Marshall Islands","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Northern Mariana Islands","Ohio","Oklahoma","Oregon","Palau","Pennsylvania","Puerto Rico","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virgin Islands","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>United States</option>
                                                        <option value="Thailand" data-provinces='["Amnat Charoen","Ang Thong","Bangkok","Bueng Kan","Buriram","Chachoengsao","Chai Nat","Chaiyaphum","Chanthaburi","Chiang Mai","Chiang Rai","Chon Buri","Chumphon","Kalasin","Kamphaeng Phet","Kanchanaburi","Khon Kaen","Krabi","Lampang","Lamphun","Loei","Lopburi","Mae Hong Son","Maha Sarakham","Mukdahan","Nakhon Nayok","Nakhon Pathom","Nakhon Phanom","Nakhon Ratchasima","Nakhon Sawan","Nakhon Si Thammarat","Nan","Narathiwat","Nong Bua Lam Phu","Nong Khai","Nonthaburi","Pathum Thani","Pattani","Pattaya","Phangnga","Phatthalung","Phayao","Phetchabun","Phetchaburi","Phichit","Phitsanulok","Phra Nakhon Si Ayutthaya","Phrae","Phuket","Prachin Buri","Prachuap Khiri Khan","Ranong","Ratchaburi","Rayong","Roi Et","Sa Kaeo","Sakon Nakhon","Samut Prakan","Samut Sakhon","Samut Songkhram","Saraburi","Satun","Sing Buri","Sisaket","Songkhla","Sukhothai","Suphan Buri","Surat Thani","Surin","Tak","Trang","Trat","Ubon Ratchathani","Udon Thani","Uthai Thani","Uttaradit","Yala","Yasothon"]'>Thailand</option>
                                                    </select>
                                                </div>
                                                <div class="input-group" id="address_province_container_1123631692" style="display:none">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-map-marker"></i>
                                                    </span>
                                                    <select id="address_province_1123631692" class="form-control" name="address[province]" data-default=""></select>
                                                </div>
                                                <div class="input-group" style="display:none">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-credit-card"></i>
                                                    </span>
                                                    <input type="text" id="address_zip_1123631692" class="form-control textbox" name="address[zip]" size="40" value="70000">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-phone-alt"></i>
                                                    </span>
                                                    <input type="text" id="address_phone_1123631692" class="form-control textbox" name="address[phone]" size="40" value="" placeholder="Số điện thoại">
                                                </div>
                                                <div class="input-group">
                                                    <input type="checkbox" id="address_default_address_1123631692" name="address[default]" value="1">Đặt làm địa chỉ mặc định.

                                                </div>
                                                <div class="action_bottom">
                                                    <input class="btn bt-primary" type="submit" value="Cập nhật" />
                                                    <span class="">
                                                        hoặc <a href="/" onclick="Haravan.CustomerAddress.toggleForm(1123631692); return false;">Hủy</a>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5 pt20">
                                <a href="#" onclick="Haravan.CustomerAddress.toggleNewForm(); return false;" class="add-new-address">Nhập địa chỉ mới</a>
                                <div id="add_address" class="customer_address edit_address" style="display:none;">
                                    <form accept-charset='UTF-8' action='/account/addresses' id='address_form_new' method='post'>
                                        <input name='form_type' type='hidden' value='customer_address'>
                                        <input name='utf8' type='hidden' value='✓'>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <td class="value">
                                                <input type="text" id="address_last_name_new" class="form-control textbox" name="address[last_name]" size="40" value="" placeholder="Họ" />
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <input type="text" id="address_first_name_new" class="form-control textbox" name="address[first_name]" size="40" value="" placeholder="Tên" />
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-home"></i>
                                            </span>
                                            <input type="text" for="address_company_new" class="form-control textbox" name="address[company]" size="40" value="" placeholder="Công ty" />
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-home"></i>
                                            </span>
                                            <input type="text" id="address_address1_new" class="form-control textbox" name="address[address1]" size="40" value="" placeholder="Địa chỉ 1" />
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-home"></i>
                                            </span>
                                            <input type="text" id="address_address2_new" class="form-control textbox" name="address[address2]" size="40" value="" placeholder="Địa chỉ 2" />
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-map-marker"></i>
                                            </span>
                                            <select class="form-control textbox" id="address_country_new" name="address[country]" data-default="">
                                                <option value="" data-provinces="[]">- Please Select --</option>
                                                <option value="Vietnam" data-provinces='["Hồ Chí Minh","Hà Nội","Đà Nẵng","An Giang","Bà Rịa - Vũng Tàu","Bình Dương","Bình Phước","Bình Thuận","Bình Định","Bạc Liêu","Bắc Giang","Bắc Kạn","Bắc Ninh","Bến Tre","Cao Bằng","Cà Mau","Cần Thơ","Gia Lai","Hà Giang","Hà Nam","Hà Tĩnh","Hòa Bình","Hưng Yên","Hải Dương","Hải Phòng","Hậu Giang","Khánh Hòa","Kiên Giang","Kon Tum","Lai Châu","Long An","Lào Cai","Lâm Đồng","Lạng Sơn","Nam Định","Nghệ An","Ninh Bình","Ninh Thuận","Phú Thọ","Phú Yên","Quảng Bình","Quảng Nam","Quảng Ngãi","Quảng Ninh","Quảng Trị","Sóc Trăng","Sơn La","Thanh Hóa","Thái Bình","Thái Nguyên","Thừa Thiên Huế","Tiền Giang","Trà Vinh","Tuyên Quang","Tây Ninh","Vĩnh Long","Vĩnh Phúc","Yên Bái","Điện Biên","Đắk Lắk","Đắk Nông","Đồng Nai","Đồng Tháp"]'>Vietnam</option>
                                                <option value="United States" data-provinces='["Alabama","Alaska","American Samoa","Arizona","Arkansas","Armed Forces Americas","Armed Forces Europe","Armed Forces Pacific","California","Colorado","Connecticut","Delaware","District of Columbia","Federated States of Micronesia","Florida","Georgia","Guam","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Marshall Islands","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Northern Mariana Islands","Ohio","Oklahoma","Oregon","Palau","Pennsylvania","Puerto Rico","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virgin Islands","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>United States</option>
                                                <option value="Thailand" data-provinces='["Amnat Charoen","Ang Thong","Bangkok","Bueng Kan","Buriram","Chachoengsao","Chai Nat","Chaiyaphum","Chanthaburi","Chiang Mai","Chiang Rai","Chon Buri","Chumphon","Kalasin","Kamphaeng Phet","Kanchanaburi","Khon Kaen","Krabi","Lampang","Lamphun","Loei","Lopburi","Mae Hong Son","Maha Sarakham","Mukdahan","Nakhon Nayok","Nakhon Pathom","Nakhon Phanom","Nakhon Ratchasima","Nakhon Sawan","Nakhon Si Thammarat","Nan","Narathiwat","Nong Bua Lam Phu","Nong Khai","Nonthaburi","Pathum Thani","Pattani","Pattaya","Phangnga","Phatthalung","Phayao","Phetchabun","Phetchaburi","Phichit","Phitsanulok","Phra Nakhon Si Ayutthaya","Phrae","Phuket","Prachin Buri","Prachuap Khiri Khan","Ranong","Ratchaburi","Rayong","Roi Et","Sa Kaeo","Sakon Nakhon","Samut Prakan","Samut Sakhon","Samut Songkhram","Saraburi","Satun","Sing Buri","Sisaket","Songkhla","Sukhothai","Suphan Buri","Surat Thani","Surin","Tak","Trang","Trat","Ubon Ratchathani","Udon Thani","Uthai Thani","Uttaradit","Yala","Yasothon"]'>Thailand</option>
                                            </select>
                                        </div>
                                        <div class="input-group" id="address_province_container_new" style="display:none">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-map-marker"></i>
                                            </span>
                                            <select id="address_province_new" class="form-control textbox" name="address[province]" data-default=""></select>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-phone-alt"></i>
                                            </span>
                                            <input type="text" id="address_phone_new" class="form-control textbox" name="address[phone]" size="40" value="" placeholder="Số điện thoại" />
                                        </div>
                                        <div class="input-group">
                                            <input type="checkbox" id="address_default_address_new" name="address[default]" value="1">Đặt làm địa chỉ mặc định.

                                        </div>
                                        <div class="action_bottom">
                                            <input class="btn btn-primary" type="submit" value="Thêm mới" />
                                            <span class="">
                                                hoặc <a href="#" onclick="Haravan.CustomerAddress.toggleNewForm(); return false;">Hủy</a>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "gallery.php" ?>
    </main>
    <?php
    include "footer.php"
    ?>
    <script type="text/javascript" src="../asset/js/product.js"></script>
</body>

</html>