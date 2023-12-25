<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact – Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/contact.css">
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
                        <li class="li_line"><a href="/index.php">Trang chủ</a></li>
                        <li class=""><a href="contact.php">Liên hệ</a></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="map">
            <div class="container" style="height: 100% !important;">
                <div class="row">
                    <div class="contact">
                        <div class="left">
                            <div class="box-map" style="height:100%;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.615593436863!2d106.65415201477133!3d10.76408024232994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eec7752c743%3A0xd832d71bd12b6a15!2zRmxlbWluZ3RvbiBUb3dlciwgMTgyIEzDqiDEkOG6oWkgSMOgbmgsIHBoxrDhu51uZyAxNSwgUXXhuq1uIDExLCBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1521530731757" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="right">
                            <div class="header-page-contact clearfix">
                                <h1>Liên hệ</h1>
                            </div>
                            <div class="box-info-contact">
                                <ul class="list-info">
                                    <li>
                                        <p class="info">Địa chỉ chúng tôi</p>
                                        <p>
                                            <strong>
                                                Tầng 4, tòa nhà Flemington, số 182, đường Lê Đại Hành, phường 15, quận 11, Tp. Hồ Chí Minh.
                                            </strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info">Email chúng tôi</p>
                                        <p>
                                            <strong>nguyenphuthienhoang@gmail.com</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info">Điện thoại</p>
                                        <p>
                                            <strong>1234567890</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info">Thời gian làm việc</p>
                                        <p>
                                            <strong>Thứ 2 đến Thứ 6 từ 8h đến 18h; Thứ 7 và Chủ nhật từ 8h đến 17h</strong>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-send-contact">
                                <h2>
                                    Gửi thắc mắc cho chúng tôi
                                </h2>
                                <div id="col-left contactFormWrapper">
                                    <form accept-charset="UTF-8" action="/src/contact.html" class="contact-form" method="post">
                                        <input name="form-type" type="hidden" value="contact">
                                        <input name="utf8" type="hidden" value="">
                                        <div class="contact-form">
                                            <div class="row">

                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="input-group">
                                                        <input required type="text" name="contact[name]" class="form-control" placeholder="Tên của bạn" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12" style=" padding-right: 15px;">
                                                    <div class="input-group">
                                                        <input required type="text" name="contact[email]" class="form-control" placeholder="Email của bạn" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12" style=" padding-left: 15px;">
                                                    <div class="input-group">
                                                        <input pattern="[0-9]{10,12}" required type="text" name="contact[phone]" class="form-control" placeholder="Số điện thoại của bạn" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="input-group textcontact">
                                                        <textarea required name="contact[body]" placeholder="Nội dung"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="input-group">
                                                        <div class="sitebox-recaptcha" style="font-size: 13px; color: #9e9e9e;">
                                                            This site is protected by reCAPTCHA and the Google
                                                            <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a>
                                                            and
                                                            <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a>
                                                            apply.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <button class="button">
                                                        Gửi cho chúng tôi
                                                    </button>
                                                </div>

                                            </div>

                                        </div>
                                    </form>
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