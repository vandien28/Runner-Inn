const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

let flag = false;
let recover_panels = $(".recover_panels");
let login_panels = $(".login_panels");
let accounts = $(".scroll-account");
let carts = $(".scroll-cart");
let search = $(".scroll-search");
let restore = $(".restorepass");
let return_login = $(".returnlogin");

// * ẩn hiện popup đăng nhập

function box_account() {
  if (flag == false) {
    accounts.classList.remove("hide");
    flag = true;
  } else {
    accounts.classList.add("hide");
    flag = false;
  }
}

function box_accounts() {
  if (flag == false) {
    accounts.classList.remove("hide");
    flag = true;
  } else {
    accounts.classList.add("hide");
    flag = false;
  }
}

// * ẩn hiện giữa đăng nhập và khôi phục mật khẩu
restore.onclick = function () {
  recover_panels.classList.remove("hide");
  login_panels.classList.add("hide");
};

return_login.onclick = function () {
  recover_panels.classList.add("hide");
  login_panels.classList.remove("hide");
};

// * ẩn hiện popup tìm kiếm
function box_search() {
  if (flag == false) {
    search.classList.remove("hide");
    flag = true;
  } else {
    search.classList.add("hide");
    flag = false;
  }
}

// * ẩn hiện popup giỏ hàng
function box_carts() {
  if (flag == false) {
    carts.classList.remove("hide");
    flag = true;
  } else {
    carts.classList.add("hide");
    flag = false;
  }
}

// * scroll header
document.addEventListener("DOMContentLoaded", function () {
  let header = $(".header-scroll");
  window.addEventListener("scroll", function () {
    if (
      document.body.scrollTop > 200 ||
      document.documentElement.scrollTop > 200
    ) {
      header.classList.add("show_header");
    } else {
      header.classList.remove("show_header");
    }
  });
});

// * hiện danh sách kết quả tìm kiếm
function showSearchScroll() {
  if ($(".search-scroll-input").value == "") {
    $(".scroll-search-wrapper").classList.add("hide");
  } else {
    $(".scroll-search-wrapper").classList.remove("hide");
  }
}

// * tìm kiếm sản phẩm
function searchProductScroll(product) {
  // Tạo XMLHttpRequest object
  var xhr = new XMLHttpRequest();
  // Gửi request đến PHP script để kiểm tra tài khoản
  xhr.open(
    "GET",
    "/controller/search.php?productName=" + encodeURIComponent(product)
  );
  xhr.onload = function () {
    if (xhr.status === 200) {
      // Nhận kết quả trả về từ PHP script
      var response = xhr.responseText;
      // Hiển thị kết quả cho người dùng
      $(".searchResultScroll").innerHTML = response;
    }
  };
  xhr.send();
}

// * check username khi nhập
function checkUsername(username) {
  // Tạo XMLHttpRequest object
  var xhr = new XMLHttpRequest();
  // Gửi request đến PHP script để kiểm tra tài khoản
  xhr.open(
    "GET",
    "/controller/checkUserName.php?username=" + encodeURIComponent(username)
  );
  xhr.onload = function () {
    if (xhr.status === 200) {
      // Nhận kết quả trả về từ PHP script
      var response = xhr.responseText;
      // Hiển thị kết quả cho người dùng
      $(".notificationName").innerHTML = response;
    }
  };
  xhr.send();
}

// * check email khi nhập
function checkEmail(email) {
  // Tạo XMLHttpRequest object
  var xhr = new XMLHttpRequest();
  // Gửi request đến PHP script để kiểm tra tài khoản
  xhr.open(
    "GET",
    "/controller/checkEmail.php?email=" + encodeURIComponent(email)
  );
  xhr.onload = function () {
    if (xhr.status === 200) {
      // Nhận kết quả trả về từ PHP script
      var response = xhr.responseText;
      // Hiển thị kết quả cho người dùng
      $(".notificationEmail").innerHTML = response;
    }
  };
  xhr.send();
}

// * check password khi nhập
function checkPassword() {
  let password = $(".password");
  let enterPassword = $(".enterPassword");
  if (password.value != enterPassword.value) {
    $(".notificationPassword").innerText = "Mật khẩu không đúng.";
  } else {
    $(".notificationPassword").innerText = "";
  }
}

// * xoá sản phẩm
function removeProduct(element) {
  let pId = element.getAttribute("data-id");
  let pS = element.getAttribute("data-size");
  let pC = element.getAttribute("data-color");
  let pQ = element.getAttribute("data-quantity");
  let pP = element.getAttribute("data-price");
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      let result = xhr.responseText;
      $(".wrapper-product table tbody").innerHTML = result;
      if ($(".wrapper-product table tbody").innerHTML.trim().length === 0) {
        $(".wrapper-product").innerHTML = "";
        $(".wrapper-product").classList.add(
          "view_product",
          "wrapper-view-product"
        );
        $(".wrapper-product").innerHTML = `
          <i class="fa-light fa-cart-shopping"></i>
          <p>Hiện chưa có sản phẩm</p>
        `;
        $(".wrapper-product").classList.remove(
          "wrapper-product",
          "scroll-product"
        );
      }
    }
  };
  xhr.open(
    "GET",
    "/controller/removeCart.php?id=" +
      encodeURIComponent(pId) +
      "&size=" +
      encodeURIComponent(pS) +
      "&color=" +
      encodeURIComponent(pC) +
      "&quantity=" +
      encodeURIComponent(pQ),
    true
  );
  xhr.send();
  let price = parseInt($(".price").innerText.replace(/,/g, "")) - parseInt(pP);
  $(".price").innerText = price.toLocaleString("en-US");
  $(".count").innerText = parseInt($(".count").innerText) - 1;
}

// * show / ẩn ô nhập địa chỉ
function showInputAddress() {
  if (document.getElementById("wrapper").classList.contains("hide")) {
    document.getElementById("wrapper").classList.remove("hide");
  } else {
    document.getElementById("wrapper").classList.add("hide");
  }
}

// * show / ẩn ô chỉnh sửa địa chỉ
function showEditAddress() {
  if ($(".editAddress").classList.contains("hide")) {
    $(".editAddress").classList.remove("hide");
    $(".inforAddresss").classList.add("hide");
  } else {
    $(".editAddress").classList.add("hide");
    $(".inforAddresss").classList.remove("hide");
  }
}

// * thêm địa chỉ mới vào database
function addAddress() {
  let apartment = $(".apartment").value;
  let ward = $(".ward").value;
  let district = $(".district").value;
  let city =
    document.getElementById("city").options[
      document.getElementById("city").selectedIndex
    ].value;
  let country =
    document.getElementById("country_s").options[
      document.getElementById("country_s").selectedIndex
    ].value;
  let numberphone = $(".numberphone").value;
  let df = 0;
  if ($(".checkdefault").checked) {
    df = 1;
  }
  console.log(apartment, ward, district, city, country, numberphone, df);
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (xhr.responseText == "true") {
        alert("Thêm địa chỉ thành công")
        window.location.href = "../src/account.php";
      }
    }
  };
  xhr.open(
    "GET",
    "/controller/addAddress_s.php?apartment=" +
      encodeURIComponent(apartment) +
      "&ward=" +
      encodeURIComponent(ward) +
      "&district=" +
      encodeURIComponent(district) +
      "&city=" +
      encodeURIComponent(city) +
      "&country=" +
      encodeURIComponent(country) +
      "&default=" +
      encodeURIComponent(df) +
      "&numberphone=" +
      encodeURIComponent(numberphone),
    true
  );
  xhr.send();
}


// * update địa chỉ 
function updateAddress() {
  let apartment = $(".apartment2").value;
  let ward = $(".ward2").value;
  let district = $(".district2").value;
  let city =
    document.getElementById("city2").options[
      document.getElementById("city2").selectedIndex
    ].value;
  let country =
    document.getElementById("country2").options[
      document.getElementById("country2").selectedIndex
    ].value;
  let numberphone = $(".numberphone2").value;
  let df = 0;
  if ($(".checkdefault2").checked) {
    df = 1;
  }
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (xhr.responseText == "true") {
        alert("Cập nhật địa chỉ thành công");
        window.location.href = "../src/account.php";
      }
    }
  };
  xhr.open(
    "GET",
    "/controller/updateAddress.php?apartment=" +
      encodeURIComponent(apartment) +
      "&ward=" +
      encodeURIComponent(ward) +
      "&district=" +
      encodeURIComponent(district) +
      "&city=" +
      encodeURIComponent(city) +
      "&country=" +
      encodeURIComponent(country) +
      "&default=" +
      encodeURIComponent(df) +
      "&numberphone=" +
      encodeURIComponent(numberphone),
    true
  );
  xhr.send();
}