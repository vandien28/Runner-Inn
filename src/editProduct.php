<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa sản phẩm - Runner Inn</title>
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
    <?php $db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", ""); session_start();?>
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
                        <p>Chỉnh sửa sản phẩm</p>
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
                                <?php
                                $product = $db->prepare("SELECT * from sanpham where masp = :productID");
                                $product->bindParam(":productID", $_GET["type"]);
                                $product->execute();
                                $products = $product->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <p class="entername">Ảnh đại diện</p>

                                <div style="display:flex;">
                                    <div class="upload" style="display:flex; flex-flow:row wrap; padding-bottom: 0 !important; ">
                                        <?php
                                        $imgMain = $db->prepare("SELECT distinct urlmain from hinhanhsp where masp = :productID");
                                        $imgMain->bindParam(":productID", $_GET["type"]);
                                        $imgMain->execute();
                                        $imgMains = $imgMain->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <div class="uploadimgs" style="margin-left: 10px; margin-bottom: 10px;">
                                            <div class="uploadimgss">
                                                <img src="<?php echo $imgMains["urlmain"] ?>" id="img-previews" class="editimg img avt">
                                                <div class="editImg boxIcon" onclick="editImgs()" style="left:38% !important;">
                                                    <i class="iconEdit fa-regular fa-pen-to-square">
                                                        <input class="input-file" id="myavt" type="file" style="padding:0;">
                                                    </i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fieldset">
                                        <div class="field">
                                            <div class="field-input-wrapper">
                                                <label class="field-label" for="">Tên sản phẩm</label>
                                                <input class="field-input name" type="text" value='<?php echo $products["tensp"] ?>'>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="field-input-wrapper">
                                                <label class="field-label" for="">Mã sản phẩm</label>
                                                <input class="field-input productID" type="text" disabled value="<?php echo $products["masp"] ?>" style="cursor: no-allowed;background-color: rgb(245 245 245);">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="field-input-wrapper">
                                                <label class="field-label" for="">Giá tiền</label>
                                                <input class="field-input price" type="text" value="<?php echo $products["giatien"] ?>">
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
                                                    <option value="123" <?php echo ($products["madanhmuc"] == 123) ? 'selected' : ''; ?>>Sản Phẩm Thường</option>
                                                    <option value="456" <?php echo ($products["madanhmuc"] == 456) ? 'selected' : ''; ?>>Sản Phẩm Mới</option>
                                                    <option value="567" <?php echo ($products["madanhmuc"] == 567) ? 'selected' : ''; ?>>Sản Phẩm Bán Chạy</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="field-input-wrapper field-input-wrapper-select">
                                                <label class="field-label" for="">Loại giày</label>
                                                <select class="field-input" name="" id="type">
                                                    <option value="0">Chọn loại giày</option>
                                                    <option value="123" <?php echo ($products["maloai"] == 123) ? 'selected' : ''; ?>>Giày Thể Thao</option>
                                                    <option value="456" <?php echo ($products["maloai"] == 456) ? 'selected' : ''; ?>>Giày Sneaker</option>
                                                    <option value="456" <?php echo ($products["maloai"] == 789) ? 'selected' : ''; ?>>Giày Chạy Bộ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="field-input-wrapper">
                                                <label class="field-label" for="">Số lượng</label>
                                                <input class="field-input quantity" type="text" value="<?php echo $products["soluong"] ?>">
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
                                                <input class="field-input color" type="text" value="<?php foreach ($colors as $index => $c) {
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
                                                <input class="field-input size" type="text" value="<?php foreach ($sizes as $index => $s) {
                                                                                                        echo $s["kichthuoc"];
                                                                                                        if ($index < $lastIndex) echo ', ';
                                                                                                    } ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <p class="entername">Hình ảnh sản phẩm</p>
                                <div class="upload listImg" style="display:flex; flex-flow:row wrap;">
                                    <?php
                                    $img = $db->prepare("SELECT * from hinhanhsp where masp = :productID");
                                    $img->bindParam(":productID", $_GET["type"]);
                                    $img->execute();
                                    $imgs = $img->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($imgs as $i) {
                                    ?>
                                        <div class="uploadimgs" style="margin-left: 10px; margin-bottom: 10px;">
                                            <div class="uploadimgss">
                                                <img src="<?php echo $i["url"] ?>" id="img-previews" class="editimg img editimgs">
                                                <div class="editImg boxIcon" onclick="editImg()">
                                                    <i class="iconEdit fa-regular fa-pen-to-square">
                                                        <input class="input-file" id="myImg" type="file" style="padding:0;">
                                                    </i>
                                                </div>
                                                <div class="deleteImg boxIcon" onclick="deleteImg(this)">
                                                    <i class="iconDelete fa-regular fa-rectangle-xmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div id="image-container"></div>
                                <div class="input-file-container" onchange="addImage()">
                                    <input class="input-file" id="my-file" type="file">
                                    <label tabindex="0" for="my-file" class="input-file-trigger">Thêm ảnh</label>
                                </div>
                                <div class="btn-management" style="margin-top: 20px; margin-left:10px;">

                                    <button type="submit" class="save" style="margin-right:15px;" onclick="addProduct()"><i class="fa-solid fa-floppy-disk"></i>
                                    </button>

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
        const $ = document.querySelector.bind(document);
        const $$ = document.querySelectorAll.bind(document);
        // * lên đầu trang
        var offset = 400;
        var duration = 1;
        var right = $('.right');
        var topUp = $('.top-up');
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
        // * xoá ảnh sản phẩm
        function deleteImg() {
            event.target.closest(".uploadimgs").remove();
            $$(".uploadimgs").forEach((upload, index) => {
                if (index > 0) {
                    upload.style.marginLeft = "10px";

                } else {
                    upload.style.marginLeft = "0";
                }
            });
        }

        // * thay đổi ảnh sản phẩm
        var avtImg;

        function editImgs() {
            const input = document.getElementById('myavt');
            const imgPreview = document.querySelector('.avt');

            input.addEventListener('change', function(event) {
                const files = event.target.files[0];
                const readers = new FileReader();

                readers.onload = function(e) {
                    // Tạo FormData object để lưu ảnh lên server
                    const formData = new FormData();
                    formData.append('file', files);

                    // Gửi Ajax request đến server
                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', '/controller/uploadavt.php', true);
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            // Lấy đường dẫn tới ảnh trên server và hiển thị ảnh đó
                            const imgUrl = '/asset/upload/avt/' + xhr.responseText;
                            imgPreview.src = imgUrl;
                            avtImg = imgUrl;
                        } else {
                            alert('Đã có lỗi xảy ra khi tải lên ảnh!');
                        }
                    };
                    xhr.send(formData);
                };

                readers.readAsDataURL(files);
            });
        }


        function editImg() {
            $$(".input-file").forEach(inputFile => {
                inputFile.addEventListener("change", function() {
                    let parent = this.closest(".uploadimgss");
                    let img = parent.querySelector(".editimgs");
                    let file = this.files[0];
                    let reader = new FileReader();
                    reader.addEventListener("load", function() {
                        // Lưu ảnh vào thư mục /asset/upload/img
                        let xhr = new XMLHttpRequest();
                        let formData = new FormData();
                        formData.append("image", file);
                        xhr.onreadystatechange = function() {
                            if (this.readyState === 4 && this.status === 200) {
                                // Load lại ảnh
                                img.src = "../asset/upload/img/" + file.name;
                            }
                        }
                        xhr.open("POST", "/controller/uploadimg.php");
                        xhr.send(formData);
                    });
                    reader.readAsDataURL(file);
                });
            });
        }



        // * thêm ảnh sản phẩm
        var srcImgList = "" // * lưu tất cả link ảnh thành 1 chuỗi
        function addImage() {
            var imageUrl = "";
            var xhr = new XMLHttpRequest();
            var formData = new FormData();
            formData.append("image", event.target.files[0]);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        imageUrl = '/asset/upload/img/' + xhr.responseText;
                        // create the new image container and its child elements here
                        var newImageContainer = document.createElement('div');
                        newImageContainer.className = 'uploadimgs';
                        newImageContainer.style = 'margin-left: 10px; margin-bottom: 10px;';

                        var newImageDiv = document.createElement('div');
                        newImageDiv.className = 'uploadimgss';

                        var newImage = document.createElement('img');
                        newImage.src = imageUrl;
                        newImage.className = 'editimg img editimgs';

                        var newEditImgDiv = document.createElement('div');
                        newEditImgDiv.className = 'editImg boxIcon';
                        newEditImgDiv.setAttribute("onclick", "editImg()");

                        var newEditImgIcon = document.createElement('i');
                        newEditImgIcon.className = 'iconEdit fa-regular fa-pen-to-square';

                        var newInputFile = document.createElement('input');
                        newInputFile.className = 'input-file';
                        newInputFile.type = 'file';
                        newInputFile.style = 'padding:0;';

                        var newDeleteImgDiv = document.createElement('div');
                        newDeleteImgDiv.className = 'deleteImg boxIcon';
                        newDeleteImgDiv.setAttribute("onclick", "deleteImg()");

                        var newDeleteImgIcon = document.createElement('i');
                        newDeleteImgIcon.className = 'iconDelete fa-regular fa-rectangle-xmark';

                        // Thêm các element mới vào container
                        newEditImgIcon.appendChild(newInputFile);
                        newEditImgDiv.appendChild(newEditImgIcon);
                        newDeleteImgDiv.appendChild(newDeleteImgIcon);
                        newImageDiv.appendChild(newImage);
                        newImageDiv.appendChild(newEditImgDiv);
                        newImageDiv.appendChild(newDeleteImgDiv);
                        newImageContainer.appendChild(newImageDiv);
                        $(".listImg").appendChild(newImageContainer);
                        // * lấy danh sách đường link ảnh
                        srcImgList = Array.from(document.querySelectorAll(".editimgs")).map(item => item.src).join(",");
                    } else {
                        console.error(xhr.status);
                    }
                }
            };
            xhr.open("POST", "/controller/uploadimg.php");
            xhr.send(formData);

        }

        function addProduct() {
            let name = $(".name").value;
            let id = $(".productID").value;
            let price = $(".price").value;
            let quantity = $(".quantity").value;
            let color = $(".color").value;
            let size = $(".size").value;
            let type = document.getElementById("type").value
            let trademark = document.getElementById("trademark").value
            let cate = document.getElementById("category").value
            let img = Array.from(document.querySelectorAll(".editimgs")).map(item => item.src).join(",");
            let avt = document.querySelector(".avt").src
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let response = xhttp.responseText;
                    if (response == "success") {
                        alert("Chỉnh sửa thành công!")
                        window.location.href = "management.php";
                    } else {
                        alert("Chỉnh sửa không thành công!")
                    }
                }
            };
            xhttp.open("POST", "/controller/editProduct.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(
                "id=" + encodeURIComponent(id) +
                "&name=" + encodeURIComponent(name) +
                "&avt=" + encodeURIComponent(avt) +
                "&price=" + encodeURIComponent(price) +
                "&quantity=" + encodeURIComponent(quantity) +
                "&color=" + encodeURIComponent(color) +
                "&size=" + encodeURIComponent(size) +
                "&trademark=" + encodeURIComponent(trademark) +
                "&category=" + encodeURIComponent(cate) +
                "&type=" + encodeURIComponent(type) +
                "&img=" + encodeURIComponent(img)
            );
        }
    </script>
</body>

</html>