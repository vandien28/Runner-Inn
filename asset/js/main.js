const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
// * --------------------------------------------------------->
// * header
let flag = false;
let account = $(".account");
let recover = $(".js-link1");
let login = $(".js-link2");
let recover_panel = $(".recover_panel");
let login_panel = $(".login_signup");
let recover_panels = $(".recover_panels");
let login_panels = $(".login_panels");
let icon_down = $(".icon_down");
let cart = $(".cart");
let accounts = $(".scroll-account");
let carts = $(".scroll-cart");
let search = $(".scroll-search");
let restore = $(".restorepass");
let return_login = $(".returnlogin");

// * ẩn hiện popup đăng nhập
function box_account() {
  if (flag == false) {
    account.classList.remove("hide");
    icon_down.classList.add("rotate");
    icon_down.classList.remove("rotate_2");
    flag = true;
  } else {
    account.classList.add("hide");
    icon_down.classList.add("rotate_2");
    icon_down.classList.remove("rotate");
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
recover.onclick = function () {
  recover_panel.classList.remove("hide");
  login_panel.classList.add("hide");
};

login.onclick = function () {
  recover_panel.classList.add("hide");
  login_panel.classList.remove("hide");
};

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
function box_cart() {
  if (flag == false) {
    cart.classList.remove("hide");
    flag = true;
  } else {
    cart.classList.add("hide");
    flag = false;
  }
}

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
      document.body.scrollTop > 400 ||
      document.documentElement.scrollTop > 400
    ) {
      header.classList.remove("hide");
    } else {
      header.classList.add("hide");
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

function showSearch() {
  if ($(".searchInput").value == "") {
    $(".search-wrapper").classList.add("hide");
  } else {
    $(".search-wrapper").classList.remove("hide");
  }
}

// * tìm kiếm sản phẩm
function searchProduct(product) {
  // Tạo XMLHttpRequest object
  var xhr = new XMLHttpRequest();
  // Gửi request đến PHP script để kiểm tra tài khoản
  xhr.open(
    "GET",
    "controller/search.php?productName=" + encodeURIComponent(product)
  );
  xhr.onload = function () {
    if (xhr.status === 200) {
      // Nhận kết quả trả về từ PHP script
      var response = xhr.responseText;
      // Hiển thị kết quả cho người dùng
      $(".searchResult").innerHTML = response;
    }
  };
  xhr.send();
}

function searchProductScroll(product) {
  // Tạo XMLHttpRequest object
  var xhr = new XMLHttpRequest();
  // Gửi request đến PHP script để kiểm tra tài khoản
  xhr.open(
    "GET",
    "controller/search.php?productName=" + encodeURIComponent(product)
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
      $(".scroll-listProduct table tbody").innerHTML = result;
      $(".wrapper-listProduct table tbody").innerHTML = result;
      if (
        $(".scroll-listProduct table tbody").innerHTML.trim().length === 0 &&
        $(".wrapper-listProduct table tbody").innerHTML.trim().length === 0
      ) {
        $(".scroll-listProduct").innerHTML = "";
        $(".scroll-listProduct").classList.add(
          "view_product",
          "wrapper-view-product"
        );
        $(".scroll-listProduct").innerHTML = `
          <i class="fa-light fa-cart-shopping"></i>
          <p>Hiện chưa có sản phẩm</p>
        `;
        $(".scroll-listProduct").classList.remove(
          "scroll-listProduct",
          "scroll-product"
        );
        $(".wrapper-listProduct").innerHTML = "";
        $(".wrapper-listProduct").classList.add(
          "view_product",
          "wrapper-view-product"
        );
        $(".wrapper-listProduct").innerHTML = `
          <i class="fa-light fa-cart-shopping"></i>
          <p>Hiện chưa có sản phẩm</p>
        `;
        $(".wrapper-listProduct").classList.remove(
          "wrapper-listProduct",
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
  let prices = parseInt($(".prices").innerText.replace(/,/g, "")) - parseInt(pP);
  $(".prices").innerText = price.toLocaleString("en-US");
  $(".counts").innerText = parseInt($(".counts").innerText) - 1;
}
