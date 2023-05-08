<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập – Runner Inn</title>
    <link rel="stylesheet" href="../asset/css/signup.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <main id="main">
        <section class="layout-account" style="display: flex;height: 100vh;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="col-md">
                            <div class="header-page">
                                <h1>Đăng nhập</h1>
                            </div>
                        </div>
                        <div class="col-xs">
                            <div class="userbox">
                                <form accept-charset="UTF-8" action="" id="create_customer" method="post">
                                    <div id="email" class="clearfix large_form">
                                        <input required="" type="email" value="" placeholder="Email" name="email" id="email" class="text user" size="30">
                                    </div>
                                    <div id="password" class="clearfix large_form">
                                        <input required="" type="password" value="" placeholder="Mật khẩu" name="password" id="password" class="password text" size="30">
                                    </div>

                                    <div class="clearfix action_account_custommer">
                                        <div class="action_bottom button dark">
                                            <button class="btn" type="submit" name="submitLogin">Đăng nhập</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        const $ = document.querySelector.bind(document);
        const $$ = document.querySelectorAll.bind(document);
        const data = [{
            user: "admin1@gmail.com",
            pass: "1234567890"
        }, {
            user: "admin2@gmail.com",
            pass: "1234567890"
        }, {
            user: "admin3@gmail.com",
            pass: "1234567890"
        }]
        $(".btn").addEventListener("click", function() {
            const username = $('.user').value;
            const password = $('.password').value;
            const user = data.find(u => u.user === username && u.pass === password);
            if (user) {
                document.getElementById("create_customer").action = "dashboard.php"
            } else {
                alert('Đăng nhập thất bại, vui lòng kiểm tra lại thông tin đăng nhập!');
            }
        })
    </script>
</body>

</html>