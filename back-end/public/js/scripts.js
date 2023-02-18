const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".navMenu");
const links = document.querySelectorAll(".navMenu > li");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  links.forEach((link) => {
    link.classList.toggle("fade");
  });

  hamburger.classList.toggle("toggle");
});

const isStuck = document.querySelector(".logo-mark");

window.onscroll = function () {
  if (window.scrollY >= 130) {
    isStuck.classList.add("is-stuck");
  } else {
    isStuck.classList.remove("is-stuck");
  }
};
const knowinng = document.querySelector(".he");

console.log(knowinng.getBoundingClientRect().height);
