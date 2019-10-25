let i = 2;
const form1 = document.querySelector(".one");
const form2 = document.querySelector(".two");
const next = document.querySelector(".dalej");
const back = document.querySelector(".cofnij");

next.addEventListener("click", (e) => {
    e.preventDefault();
    let div = document.querySelector(`#progress div:nth-child(${i})`);
    div.classList.add("active");
    if (i == 2) {
        form1.classList.add("display");
        form2.classList.remove("display");
    }
    if (i < 5) i++;
});

back.addEventListener("click", (e) => {
    e.preventDefault();
    let div = document.querySelector(`#progress div:nth-child(${i})`);
    div.classList.remove("active");
    if (i == 3) {
        form2.classList.add("display");
        form1.classList.remove("display");
    }
    if (i > 2) {
        i--;
    }
})
