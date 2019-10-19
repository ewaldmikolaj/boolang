const arrow = document.querySelector("#arrow");
const sidebar = document.querySelector("nav");
arrow.addEventListener("click", () => {
    sidebar.classList.toggle("hide");
    arrow.classList.toggle("rotate");
})