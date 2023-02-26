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
// const button = document.querySelector(".buton");
window.onscroll = function () {
    if (window.scrollY >= 130) {
        isStuck.classList.add("is-stuck");
        // button.classList.add("stuck");
    } else {
        isStuck.classList.remove("is-stuck");
        // button.classList.remove("stuck");
    }
};
// button.onclick = () => {
//   scrollTo({ top: 0, behavior: "smooth" });
// };

const knowinng = document.querySelector(".he");

// console.log(knowinng.getBoundingClientRect().height);

const cartButton = document.getElementById("cart");

const cart = document.querySelector(".cart");

const cartClose = document.querySelector(".closeCart");

const addtocart = document.querySelectorAll(".addToCart");

cartButton.addEventListener("click", () => {
    cart.classList.add("opened");
});

cartClose.addEventListener("click", () => {
    cart.classList.remove("opened");
});

addtocart.forEach((e) => {
    e.addEventListener("click", () => {
        cart.classList.add("opened");
    });
});
const addToWishList = document.querySelectorAll(".addToWishList");

addtocart.forEach((e) => {
    e.addEventListener("click", () => {
        setTimeout(() => {
            const box = document.getElementById("box");

            // 👇️ removes element from DOM
            box.style.display = "none";

            // 👇️ hides element (still takes up space on page)
            // box.style.visibility = 'hidden';
        }, 3000);
    });
});
addToWishList.forEach((e) => {
    e.addEventListener("click", () => {
        setTimeout(() => {
            const box = document.getElementById("box");

            // 👇️ removes element from DOM
            box.style.display = "none";

            // 👇️ hides element (still takes up space on page)
            // box.style.visibility = 'hidden';
        }, 3000);
    });
});

console.log(box);

function myFunction(e) {
    e.classList.toggle("fa-solid");
}
