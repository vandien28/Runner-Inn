const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

let flag = false;
let account = $(".account");
let recover = $(".js-link1");
let login = $(".js-link2");
let recover_panel = $(".recover_panel");
let login_panel = $(".login_panel");
let recover_panels = $(".recover_panels");
let login_panels = $(".login_panels");
let icon_down = $(".icon_down");
let cart = $(".cart");
let accounts = $(".scroll-account");
let carts = $(".scroll-cart");
let search = $(".scroll-search");
let restore = $(".restorepass");
let returnlogin = $(".returnlogin");


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
  
  returnlogin.onclick = function () {
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
      if(document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        header.classList.remove("hide")
      } else {
        header.classList.add("hide")
      }
    });
  });
  