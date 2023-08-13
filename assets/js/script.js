let menu_btn_close = document.querySelector(".menu-btn");
let main_inner = document.querySelector(".main-inner");

menu_btn_close.onclick = () => {
  if (main_inner.classList.contains("hide")) {
    main_inner.classList.remove("hide");
  } else {
    main_inner.classList.add("hide");
  }
};

// nav active deactive
let submenu_link = document.querySelectorAll(".submenu-link");

submenu_link.forEach((element) => {
  element.onclick = () => {
    element.classList.toggle("active");
  };
});

// dark and light mode
let body = document.body;
let modeBtn = document.querySelectorAll(".mode-btns");
let sun = `<i class="fa-regular fa-sun fs-2 text-light"></i>`;
let moon = `<i class="fa-regular fa-moon fs-2 text-light"></i>`;

let mode;

for (let i = 0; i < modeBtn.length; i++) {
  modeBtn[i].onclick = () => {
    if (body.classList.contains("dark-mode")) {
      // mode icon changing
      modeBtn[i].innerHTML = moon;

      //mode changing
      body.setAttribute("class", "light-mode");
      localStorage.setItem("mode", "light-mode");
    } else {
      // mode icon changing
      modeBtn[i].innerHTML = sun;

      //mode changing
      body.setAttribute("class", "dark-mode");
      localStorage.setItem("mode", "dark-mode");
    }
  };
}
mode = localStorage.getItem("mode");
if (mode == null) {
  mode = "light-mode";
}
body.setAttribute("class", mode);

for (let i = 0; i < modeBtn.length; i++) {
  if (body.classList.contains("dark-mode")) {
    modeBtn[i].innerHTML = sun;
  } else {
    modeBtn[i].innerHTML = moon;
  }
}

// header right menu
let header_dots = document.querySelector(".header-dots");
let header = document.querySelector(".header");

header_dots.onclick = () => {
  header.classList.toggle("active");
};

// toggle fullscreen
// toggle full screen
function toggleFullScreen() {
  var a = $(window).height() - 10;

  if (
    !document.fullscreenElement && // alternative standard method
    !document.mozFullScreenElement &&
    !document.webkitFullscreenElement
  ) {
    // current working methods
    if (document.documentElement.requestFullscreen) {
      document.documentElement.requestFullscreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen(
        Element.ALLOW_KEYBOARD_INPUT
      );
    }
  } else {
    if (document.cancelFullScreen) {
      document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
    }
  }
}

// jquary code
$(document).ready(function () {
  new DataTable(".model-list");
  new DataTable(".detail-list");
});
