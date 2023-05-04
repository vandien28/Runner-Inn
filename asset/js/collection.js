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

// * sắp xếp sản phẩm khi chọn giá trị trong thẻ select
const sortProduct = $(".sortProduct");
sortProduct.addEventListener("change", function () {
  let urlParams = new URLSearchParams(window.location.search);
  let type = urlParams.get("type");
  let value = this.value; // Lấy giá trị của option đã chọn
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let response = xhttp.responseText;
      $(".product-list").innerHTML = response;
    }
  };
  xhttp.open(
    "GET",
    "/controller/sortProduct.php?sort=" +
      value +
      "&type=" +
      encodeURIComponent(type),
    true
  ); // Gửi yêu cầu GET với giá trị của option đã chọn và biến type
  xhttp.send();
});

// * sắp xếp sản phẩm khi chọn giá tiền
const sortPrice = $$('.filter-price input[type="checkbox"]');
let selectedPrices = []; // keep track of selected prices

sortPrice.forEach(function (item) {
  item.addEventListener("change", function () {
    if (item.checked) {
      selectedPrices.push(item.getAttribute("data-price"));
    } else {
      selectedPrices = selectedPrices.filter(
        (price) => price !== item.getAttribute("data-price")
      );
    }

    let urlParams = new URLSearchParams(window.location.search);
    let type = urlParams.get("type");
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        let response = xhttp.responseText;
        $(".product-list").innerHTML = response;
      }
    };
    xhttp.open(
      "GET",
      "/controller/sortPrice.php?price_range=" +
        encodeURIComponent(JSON.stringify(selectedPrices)) +
        "&type=" +
        encodeURIComponent(type),
      true
    );
    xhttp.send();
  });
});

// * sắp xếp sản phẩm khi chọn size
const sortSize = $$('.filter-size input[type="checkbox"]');
let selectedSize = [];

sortSize.forEach(function (item) {
  item.addEventListener("change", function () {
    if (item.checked) {
      selectedSize.push(item.getAttribute("data-size"));
    } else {
      selectedSize = selectedSize.filter(
        (size) => size !== item.getAttribute("data-size")
      );
    }

    let urlParams = new URLSearchParams(window.location.search);
    let type = urlParams.get("type");
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        let response = xhttp.responseText;
        $(".product-list").innerHTML = response;
      }
    };
    xhttp.open(
      "GET",
      "/controller/sortSize.php?size-filter=" +
        encodeURIComponent(JSON.stringify(selectedSize)) +
        "&type=" +
        encodeURIComponent(type),
      true
    );
    xhttp.send();
  });
});

// * sắp xếp sản phẩm khi chọn color
const sortColor = $$('.filter-color input[type="checkbox"]');
let selectedColor = [];

sortColor.forEach(function (item) {
  item.addEventListener("change", function () {
    if (item.checked) {
      selectedColor.push(item.getAttribute("data-color"));
      console.log(item);
    } else {
      selectedColor = selectedColor.filter(
        (color) => color !== item.getAttribute("data-color")
      );
    }

    let urlParams = new URLSearchParams(window.location.search);
    let type = urlParams.get("type");
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        let response = xhttp.responseText;
        $(".product-list").innerHTML = response;
      }
    };
    xhttp.open(
      "GET",
      "/controller/sortColor.php?color-filter=" +
        encodeURIComponent(JSON.stringify(selectedColor)) +
        "&type=" +
        encodeURIComponent(type),
      true
    );
    xhttp.send();
  });
});

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