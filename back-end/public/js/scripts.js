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

const wishListButton = document.getElementById("wish");
const cart = document.querySelector(".cart");
const wish = document.querySelector(".wish");

const cartClose = document.querySelector(".closeCart");
const wishClose = document.querySelector(".closeWish");

const addtocart = document.querySelectorAll(".addToCart");

//open cart
cartButton.addEventListener("click", () => {
    cart.classList.add("opened");
});

//open wishlist
wishListButton.addEventListener("click", () => {
    wish.classList.add("opened");
});

//close cart
cartClose.addEventListener("click", () => {
    cart.classList.remove("opened");
});

//close wishlist
wishClose.addEventListener("click", () => {
    wish.classList.remove("opened");
});

//open cart and add item
addtocart.forEach((e) => {
    e.addEventListener("click", () => {
        cart.classList.add("opened");
    });
});

const box = document.getElementById("box");

//disappear the session
addtocart.forEach((e) => {
    e.addEventListener("click", () => {
        setTimeout(() => {
            box.style.display = "none";
        }, 3000);
    });
});

const addToWishList = document.querySelectorAll(".addToWishList");

//open wishlist and add item
addToWishList.forEach((e) => {
    e.addEventListener("click", () => {
        wish.classList.add("opened");
    });
});
addToWishList.forEach((e) => {
    e.addEventListener("click", () => {
        setTimeout(() => {
            box.style.display = "none";
        }, 3000);
    });
});

console.log(box);

function myFunction(e) {
    e.classList.toggle("fa-solid");
}
