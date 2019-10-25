let i = 2;
const next = document.querySelector(".dalej");
let form = document.querySelectorAll(".one");
let form2 = document.querySelectorAll(".two");
next.addEventListener("click", (e) => {
    e.preventDefault();
    let div = document.querySelector(`#progress div:nth-child(${i})`);
    div.classList.add("active");
    if (i == 2) {
    form.forEach(element => {
        element.classList.add("display");
    });
    form2.forEach(element => {
        element.classList.remove("display");
    });
    }
    if (i < 5) {
        i++;
    }
});
const back = document.querySelector(".cofnij");
back.addEventListener("click", (e) => {
    e.preventDefault();
    let div = document.querySelector(`#progress div:nth-child(${i})`);
    div.classList.remove("active");
    if (i == 3) {
    form2.forEach(element => {
        element.classList.add("display");
    });
    form.forEach(element => {
        element.classList.remove("display");
    });   
    }
    if (i > 2) {
        i--;
    }
});