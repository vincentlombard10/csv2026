import Splide from '@splidejs/splide';
import 'remixicon/fonts/remixicon.css'

const btn = document.getElementById("menu-btn");
const menu = document.getElementById("menu-mobile");

btn.addEventListener("click", () => {
    menu.classList.toggle("max-h-0");
    menu.classList.toggle("max-h-screen");
    menu.classList.toggle("opacity-0");
    menu.classList.toggle("opacity-100");
});// This is all you.

document.addEventListener('DOMContentLoaded', function () {
    new Splide('#splide', {
        type: 'loop',
        perPage: 1,
        gap: '1rem',
        padding: '12rem',
        breakpoints: {
            640: {
                padding: '6rem'
            }
        }
    }).mount();
});
