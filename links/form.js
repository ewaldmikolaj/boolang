let i = 1;
const next = document.querySelector(".dalej");
next.addEventListener("click", () => {
    let div = document.querySelector(`#progress div:nth-child(${i})`);
    div.classList.add("active");
    i++;
});