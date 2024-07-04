import "./bootstrap";
import Alpine from "alpinejs";
window.Alpine = Alpine;

Alpine.start();

const navbar = document.querySelector("nav");
const fixedNav = navbar.offsetTop;

window.onscroll = function () {
    if (window.scrollY > fixedNav) {
        navbar.classList.add("navbar-fixed");
    } else {
        navbar.classList.remove("navbar-fixed");
    }
};

// const hamburger = document.querySelector("#hamburger");
// const navbarMenu = document.querySelector("#navbar-menu");

// hamburger.addEventListener("click", function () {
//     navbar.classList.add("navbar-fixed")
//     hamburger.classList.toggle("hamburger-active");
//     navbarMenu.classList.toggle("hidden");
// });
