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

function box_accounts() {
  if (flag == false) {
    accounts.classList.remove("hide");
    flag = true;
  } else {
    accounts.classList.add("hide");
    flag = false;
  }
}

function box_search() {
  if (flag == false) {
    search.classList.remove("hide");
    flag = true;
  } else {
    search.classList.add("hide");
    flag = false;
  }
}

restore.onclick = function () {
  recover_panels.classList.remove("hide");
  login_panels.classList.add("hide");
};

return_login.onclick = function () {
  recover_panels.classList.add("hide");
  login_panels.classList.remove("hide");
};

function box_carts() {
  if (flag == false) {
    carts.classList.remove("hide");
    flag = true;
  } else {
    carts.classList.add("hide");
    flag = false;
  }
}

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
//* -------------------------------------------->

var product = localStorage.getItem("product")
  ? JSON.parse(localStorage.getItem("product"))
  : [];

const products = $$(".pro-name");

products.forEach(function (element, index) {
  element.addEventListener("click", function (event) {
    let p =
      event.target.parentElement.parentElement.parentElement.parentElement
        .parentElement;
    let p1 = p.querySelector(".pro-name").innerText;
    let p2 = p.querySelector(".pro-price").innerText;
    product = {
      name: p1,
      price: p2,
    };
    localStorage.setItem("product", JSON.stringify(product));
  });
});

function renderProduct() {
  let title = $("title");
  let nameProduct = $(".product-title h1");
  let priceProduct = $(".pro-price");
  priceProduct.innerText = product.price;
  nameProduct.innerText = product.name;
  title.innerText = product.name;
}

var quantity = $(".quantity-selector");

function minusQuantity() {
  let minusValue = parseInt(quantity.value);
  if (minusValue < 1) {
    quantity.value = 1;
  } else {
    quantity.value = minusValue - 1;
  }
}

function plusQuantity() {
  let plusValue = parseInt(quantity.value);
  quantity.value = plusValue + 1;
}
