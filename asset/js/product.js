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
    if (element.checked) {
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
let addCart = $(".add-cart");
let productSize = addCart.getAttribute("data-size");
const productSizeChecked = $$(".sizeChecked");
productSizeChecked.forEach(function (element) {
  element.addEventListener("change", function (item) {
    if (element.checked) {
      productSize = element.value;
    } else {
      productSize = "";
    }
  });
});
let productColor = addCart.getAttribute("data-color");
const productColorChecked = $$(".colorChecked");
productColorChecked.forEach(function (element, index) {
  if (index == 0) {
    if (element.checked) {
      productColor = element.value;
    } else {
      productColor = "";
    }
  } else {
    element.addEventListener("change", function (item) {
      if (element.checked) {
        productColor = element.value;
      } else {
        productColor = "";
      }
    });
  }
});
let productQuantity = addCart.getAttribute("data-quantity");
function renderDataProduct() {
  let updateProductQuantity = $(".quantity-selector");
  productQuantity = updateProductQuantity.value;
}

// * thêm sản phẩm vào table giỏ hàng trong database
let productId = addCart.getAttribute("data-id");
function addToCart() {
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      let result = xhr.responseText;
      if ($(".wrapper-product table tbody")) {
        $(".wrapper-product table tbody").innerHTML = result;
      } else {
        let table = document.createElement("table");
        let tbody = document.createElement("tbody");
        $(".view_product").classList.add("scroll-product", "wrapper-product");
        $(".view_product").classList.remove(
          "view_product",
          "wrapper-view-product"
        );
        $(".wrapper-product").innerHTML = "";
        $(".wrapper-product").appendChild(table).appendChild(tbody);
        $(".wrapper-product table tbody").innerHTML = result;
      }
    }
  };
  xhr.open(
    "GET",
    "/controller/addCart.php?id=" +
      encodeURIComponent(productId) +
      "&size=" +
      encodeURIComponent(productSize) +
      "&color=" +
      encodeURIComponent(productColor) +
      "&quantity=" +
      encodeURIComponent(productQuantity),
    true
  );
  xhr.send();
  let price =
    parseInt($(".price").innerText.replace(/,/g, "")) +
    parseInt(addCart.getAttribute("data-price"));
  $(".price").innerText = price.toLocaleString("en-US");
  $(".count").innerText = parseInt($(".count").innerText) + 1;
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
