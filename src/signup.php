<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo tài khoản – Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/signup.css">
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
    <?php include "header.php" ?>
    <main id="main">
        <section class="layout-account">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="col-md">
                            <div class="header-page">
                                <h1>Tạo tài khoản</h1>
                            </div>
                        </div>
                        <div class="col-xs">
                            <div class="userbox">
                                <form accept-charset="UTF-8" action="/controller/signup.php" id="create_customer" method="post">
                                    <div id="username" class="clearfix large_form">
                                        <input required="" type="text" value="" name="username" placeholder="Tên tài khoản" id="username" class="text" size="30" oninput="checkUsername(this.value)">
                                        <p class="notificationName notification"></p>
                                    </div>
                                    <div id="last_name" class="clearfix large_form">
                                        <input required="" type="text" value="" name="last_name" placeholder="Họ" id="last_name" class="text" size="30">
                                    </div>
                                    <div id="first_name" class="clearfix large_form">
                                        <input required="" type="text" value="" name="first_name" placeholder="Tên" id="first_name" class="text" size="30">
                                    </div>
                                    <div id="gender" class="clearfix large_form">
                                        <input id="radio1" type="radio" value="0" name="customer[gender]">
                                        <label for="radio1">Nữ</label>
                                        <input id="radio2" type="radio" value="1" name="customer[gender]">
                                        <label for="radio2">Nam</label>
                                    </div>
                                    <div id="birthday" class="clearfix large_form">
                                        <input type="text" value="" placeholder="mm/dd/yyyy" name="customer[birthday]" id="birthday" class="text" size="30">
                                    </div>
                                    <div id="email" class="clearfix large_form">
                                        <input required="" type="email" value="" placeholder="Email" name="email" id="email" class="text" size="30" oninput="checkEmail(this.value)">
                                        <p class="notificationEmail notification"></p>
                                    </div>
                                    <div id="password" class="clearfix large_form">
                                        <input required="" type="password" value="" placeholder="Mật khẩu" name="password" id="password" class="password text" size="30">
                                    </div>

                                    <div id="enterPassword" class="clearfix large_form">
                                        <input required="" type="password" value="" placeholder="Nhập lại mật khẩu" name="enterPassword" id="enterPassword" class="enterPassword text" size="30" oninput="checkPassword()">
                                        <p class="notificationPassword notification" style="color: red;"></p>
                                    </div>
                                    <div class="sitebox-recaptcha large_form">
                                        This site is protected by reCAPTCHA and the Google
                                        <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a>
                                        and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
                                    </div>
                                    <div class="clearfix action_account_custommer">
                                        <div class="action_bottom button dark">
                                            <button class="btn" type="submit" name="submitSignup">Đăng ký</button>
                                        </div>
                                    </div>
                                    <div class="clearfix req_pass">
                                        <a class="come-back" href="../index.php"><i class="fa fa-long-arrow-left"></i> Quay lại trang chủ</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include "gallery.php" ?>
    </main>
    <?php include "footer.php"  ?>
    <script type="text/javascript" src="../asset/js/account.js"></script>
</body>

</html>