let i = 1;
const form1 = document.querySelector(".one");
const form2 = document.querySelector(".two");
const form3 = document.querySelector(".three")
const next = document.querySelector(".dalej");
const back = document.querySelector(".cofnij");
const submit = document.querySelector(".send");
next.addEventListener("click", (e) => {
    e.preventDefault();
    if (i < 4) i++;
    let div1 = document.querySelector(`#progress div:nth-child(${i})`);
    let div2 = document.querySelector(`#progress div:nth-child(${i+1})`);
    div1.classList.add("active");
    div2.classList.add("active");
    if (i == 2) {
        form1.classList.add("display");
        form2.classList.remove("display");
    }
    if (i == 4) {
        form2.classList.add("display");
        form3.classList.remove("display");
        next.classList.add("display"); 
        submit.classList.remove("display");
    }
    if (i < 4) i++;
});

back.addEventListener("click", (e) => {
    e.preventDefault();
    if (i != 1) {
    if (i == 3) i--;
    let div1 = document.querySelector(`#progress div:nth-child(${i})`);
    let div2 = document.querySelector(`#progress div:nth-child(${i + 1})`);
    div1.classList.remove("active");
    div2.classList.remove("active");
    if (i == 2) {
        form2.classList.add("display");
        form1.classList.remove("display");
        i--;
    }
    if (i == 4) {
        form3.classList.add("display");
        form2.classList.remove("display");
        submit.classList.add("display");
        next.classList.remove("display");
    }
    if (i > 3) {
        i -= 2;
    }
    } else {

    }
});
