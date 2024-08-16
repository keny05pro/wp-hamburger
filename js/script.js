const menuBtn = document.querySelector(".js-menu-btn");
const hamburgerBtn = document.querySelector(".js-hamburger-btn");
const target = document.querySelector(".js-hamburger");


menuBtn.addEventListener("click", () => {
  target.classList.add("active");
});

hamburgerBtn.addEventListener("click", () => {
  target.classList.remove("active");
});