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

// * hiện viền khi click vào chọn ảnh
const productImg = $$(".product-thumbs");

productImg.forEach(function (element) {
  let pI = element.querySelector(".listImg").src;
  let pM = $(".product-img img").src;
  if (pI == pM) {
    element.classList.add("active");
  } else {
    element.classList.remove("active");
  }
});

//* chuyển ảnh của sản phẩm
const gallery = $$(".product-thumbs");

gallery.forEach(function (item, index) {
  let productImg = $(".product-img img");
  item.addEventListener("click", function (event) {
    item.classList.add("active");
    let i = event.target.parentElement;
    let srcImg = i.querySelector(".product-thumbs img").src;
    productImg.src = srcImg;
    Array.from(gallery)
      .filter((it, i) => i !== index)
      .map(function (value) {
        value.classList.remove("active");
      });
  });
});

// * hiện tên màu khi checked
const colorChecked = $$(".colorChecked");

colorChecked.forEach(function (element, index) {
  if (index == 0) {
    element.checked = true;
    $(".title-color span").innerText = element.value;
  } else {
    element.checked = false;
  }
  element.addEventListener("change", function (event) {
    if (element.checked == true) {
      $(".title-color span").innerText = element.value;
    }
  });
});

// * tăng(plusQuantity),giảm(minusQuantity) số lượng sản phẩm
var quantity = $(".quantity-selector");

function minusQuantity() {
  let minusValue = parseInt(quantity.value);
  if (minusValue == 1) {
    quantity.value = 1;
  } else {
    quantity.value = minusValue - 1;
  }
}

function plusQuantity() {
  let plusValue = parseInt(quantity.value);
  quantity.value = plusValue + 1;
}


// * lấy thông tin sản phẩm add vào data- của button
// * kiểm tra checked  để lấy size , color và kiểm tra value input để lấy quantity
let addCart = $(".add-cart")
let productName = addCart.getAttribute('data-name');

