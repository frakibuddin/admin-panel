try {
  let menu_btn_close = document.querySelector(".menu-btn");
  let main_inner = document.querySelector(".main-inner");
  menu_btn_close.onclick = () => {
    if (main_inner.classList.contains("hide")) {
      main_inner.classList.remove("hide");
    } else {
      main_inner.classList.add("hide");
    }
  };
} catch (error) {
  console.warn("error in header right menu");
} finally {
  // sidebar sun nav menu active deactive
  let submenu_link = document.querySelectorAll(".submenu-link");
  submenu_link.forEach((element) => {
    element.onclick = () => {
      element.classList.toggle("active");
    };
  });
}

// dark and light mode
try {
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
} catch (error) {
  console.warn("error in light dark mode");
}

// header right menu
try {
  let header_dots = document.querySelector(".header-dots");
  let header = document.querySelector(".header");

  header_dots.onclick = () => {
    header.classList.toggle("active");
  };
} catch (error) {
  console.warn("error in header right menu");
}

// toggle full screen
try {
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
} catch (error) {
  console.warn("error in fullscreen window button");
}

// jquary code
try {
  new DataTable(".model-list");
  new DataTable(".detail-list");
} catch (error) {
  console.warn("Error in data table");
}

try {
  // captcha
  // Selecting necessary DOM elements
  const captchaTextBox = document.querySelector(".captch_box");
  const refreshButton = document.querySelector(".refresh_button");
  const captchaInputBox = document.querySelector(".captch_input");
  const message = document.querySelector(".message");
  const submitButton = document.querySelector(".login-btn");

  // Variable to store generated captcha
  let captchaText = null;

  // Function to generate captcha
  const generateCaptcha = () => {
    const randomString = Math.random().toString(36).substring(2, 7);
    const randomStringArray = randomString.split("");
    const changeString = randomStringArray.map((char) =>
      Math.random() > 0.5 ? char.toUpperCase() : char
    );
    captchaText = changeString.join("   ");
    captchaTextBox.value = captchaText;
  };

  const refreshBtnClick = () => {
    generateCaptcha();
    captchaInputBox.value = "";
    captchaKeyUpValidate();
  };

  const captchaKeyUpValidate = () => {
    //Toggle submit button disable class based on captcha input field.
    submitButton.classList.toggle("disabled", !captchaInputBox.value);

    if (!captchaInputBox.value) message.classList.remove("active");
  };

  // Function to validate the entered captcha
  const submitBtnClick = (e) => {
    e.preventDefault();
    captchaText = captchaText
      .split("")
      .filter((char) => char !== " ")
      .join("");
    message.classList.add("show");
    // Check if the entered captcha text is correct or not
    if (captchaInputBox.value !== "") {
      if (captchaInputBox.value === captchaText) {
        message.innerText = "Entered captcha  correct";
        document.querySelector("#login-form").submit();
      } else {
        message.innerText = "Entered captcha is not correct";
      }
    } else {
      message.innerText = "Please fill the captcha";
    }
  };

  // Add event listeners for the refresh button, captchaInputBox, submit button
  refreshButton.addEventListener("click", refreshBtnClick);
  captchaInputBox.addEventListener("keyup", captchaKeyUpValidate);
  submitButton.addEventListener("click", submitBtnClick);

  // Generate a captcha when the page loads
  generateCaptcha();
} catch (error) {
  console.warn("error in captcha");
}
