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
function box_accounts() {
  if (flag == false) {
    accounts.classList.remove("hide");
    flag = true;
  } else {
    accounts.classList.add("hide");
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
//* -------------------------------------------->
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
//* -------------------------------------------->
// * giảm số lượng sản phẩm
const minus = $$(".qtyminus");
minus.forEach(function(minus,index) {
  minus.addEventListener("click",function(event) {
      let minus1 = event.target.parentElement.querySelector(".item-quantity")
      let minus2 = parseInt(minus1.value)
      if(minus1.value  == 1) {
        // * thêm code xoá sản phẩm vào
      } else {
        minus1.value = minus2 - 1;
      }
  })
})

// * tăng số lượng sản phẩm
const plus = $$(".qtyplus");
plus.forEach(function(plus,index) {
  plus.addEventListener("click",function(event) {
      let plus1 = event.target.parentElement.querySelector(".item-quantity")
      let plus2 = parseInt(plus1.value)
      plus1.value = plus2 + 1;
  })
})
//* -------------------------------------------->
