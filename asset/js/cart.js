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
      document.body.scrollTop > 400 ||
      document.documentElement.scrollTop > 400
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

// * giảm số lượng sản phẩm
const minus = $$(".qtyminus");
minus.forEach(function (minus, index) {
  minus.addEventListener("click", function (event) {
    let minus1 = event.target.parentElement.querySelector(".item-quantity");
    let color = minus1.getAttribute("data-color");
    let size = minus1.getAttribute("data-size");
    let id = minus1.getAttribute("data-id");
    let minus2 = parseInt(minus1.value);
    if (minus1.value == 1) {
      // * thêm code xoá sản phẩm vào
    } else {
      minus1.value = minus2 - 1;
      event.target.parentElement.parentElement.parentElement.querySelector(
        ".line-item-total"
      ).innerText =
        (
          parseInt(
            event.target.parentElement.parentElement.parentElement
              .querySelector(".item-price .PRICE")
              .innerText.replace(/,/g, "")
          ) * parseInt(minus1.value)
        ).toLocaleString("en-US") + "₫";
      totalCart();
      let xhr = new XMLHttpRequest();
      xhr.open(
        "GET",
        "/controller/updateQuantity.php?id=" +
          encodeURIComponent(id) +
          "&size=" +
          encodeURIComponent(size) +
          "&color=" +
          encodeURIComponent(color) +
          "&quantity=" +
          encodeURIComponent(minus1.value),
        true
      );
      xhr.send();
    }
  });
});

// * tăng số lượng sản phẩm
const plus = $$(".qtyplus");
plus.forEach(function (plus, index) {
  plus.addEventListener("click", function (event) {
    let plus1 = event.target.parentElement.querySelector(".item-quantity");
    let color = plus1.getAttribute("data-color");
    let size = plus1.getAttribute("data-size");
    let id = plus1.getAttribute("data-id");
    let plus2 = parseInt(plus1.value);
    plus1.value = plus2 + 1;
    event.target.parentElement.parentElement.parentElement.querySelector(
      ".line-item-total"
    ).innerText =
      (
        parseInt(
          event.target.parentElement.parentElement.parentElement
            .querySelector(".item-price .PRICE")
            .innerText.replace(/,/g, "")
        ) * parseInt(plus1.value)
      ).toLocaleString("en-US") + "₫";
    totalCart();
    let xhr = new XMLHttpRequest();
    xhr.open(
      "GET",
      "/controller/updateQuantity.php?id=" +
        encodeURIComponent(id) +
        "&size=" +
        encodeURIComponent(size) +
        "&color=" +
        encodeURIComponent(color) +
        "&quantity=" +
        encodeURIComponent(plus1.value),
      true
    );
    xhr.send();
  });
});

// * Tính tổng tiền các sản phẩm trong giỏ hàng
function totalCart() {
  let total = 0;
  $$(".line-item-total").forEach((item) => {
    total += parseInt(item.innerText.replace(/,/g, ""));
  });
  $(".summary-total span").innerText = total.toLocaleString("en-US") + "₫";
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

// * xoá sản phẩm ở trang giỏ hàng
function removeProductToCart(element) {
  let pId = element.getAttribute("data-id");
  let pS = element.getAttribute("data-size");
  let pC = element.getAttribute("data-color");
  let pQ = element.getAttribute("data-quantity");
  let pP = element.getAttribute("data-price");
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      let result = xhr.responseText;
      $(".table-cart").innerHTML = result;
      if ($(".table-cart").innerHTML.trim().length === 0) {
        $(".col-md-9").removeChild($(".list-pageform-cart"));
        $(".col-md-9").removeChild($(".cart-note"));
        let div = document.createElement("div");
        div.classList.add("expanded-message");
        $(".col-md-9").appendChild(div);
        $(".expanded-message").innerHTML = `
        <p>Giỏ hàng của bạn đang trống</p>
        <a href="collection.php?type=bosuutap">
          <button><i class="fa fa-reply"></i>Tiếp tục mua hàng</button>
        </a>`;
      }
    }
  };
  xhr.open(
    "GET",
    "/controller/removeToCart.php?id=" +
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
  let price =
    parseInt($(".summary-total p span").innerText.replace(/,/g, "")) -
    parseInt(pP);
  $(".summary-total p span").innerText = price.toLocaleString("en-US");
  $(".count-cart .counts").innerText =
    parseInt($(".count-cart .counts").innerText) - 1;
  $(".productNumber").innerText = parseInt($(".productNumber").innerText) - 1;
}
