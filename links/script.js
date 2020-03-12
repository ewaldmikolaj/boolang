const arrow = document.querySelector(".menu__button");
const sidebar = document.querySelector(".menu");
arrow.addEventListener("click", () => {
    sidebar.classList.toggle("menu--hide");
    arrow.classList.toggle("menu__button--clicked");
});
