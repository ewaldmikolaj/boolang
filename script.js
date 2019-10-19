const arrow = document.querySelector("#arrow");
const sidebar = document.querySelector("nav");
arrow.addEventListener("click", () => {
    sidebar.classList.add("hide");
    arrow.classList.add("rotate");
})