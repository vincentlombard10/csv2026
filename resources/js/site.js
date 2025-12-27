const btn = document.getElementById("menu-btn");
const menu = document.getElementById("menu-mobile");

btn.addEventListener("click", () => {
    menu.classList.toggle("max-h-0");
    menu.classList.toggle("max-h-screen");
    menu.classList.toggle("opacity-0");
    menu.classList.toggle("opacity-100");
});// This is all you.
