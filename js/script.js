const menuBtn = document.querySelector(".js-menu-btn");
const hamburgerBtn = document.querySelector(".js-hamburger-btn");
const targets = document.querySelectorAll(".js-hamburger");
const body = document.querySelector("body");

targets.forEach((target) => {
  menuBtn.addEventListener("click", () => {
    target.classList.add("active");
    body.classList.add("u-over-hidden");
  });
});

targets.forEach((target) => {
  hamburgerBtn.addEventListener("click", () => {
    target.classList.remove("active");
    body.classList.remove("u-over-hidden");
  });
});

targets.forEach((target) => {
  window.addEventListener("resize", () => {
    target.classList.remove("active");
    body.classList.remove("u-over-hidden");
  });
});

