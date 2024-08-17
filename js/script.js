const menuBtn = document.querySelector(".js-menu-btn");
const hamburgerBtn = document.querySelector(".js-hamburger-btn");
const targets = document.querySelectorAll(".js-hamburger");

targets.forEach((target) => {
  menuBtn.addEventListener("click", () => {
    target.classList.add("active");
  });
});

targets.forEach((target) => {
  hamburgerBtn.addEventListener("click", () => {
    target.classList.remove("active");
  });
});