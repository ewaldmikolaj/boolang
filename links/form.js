let i = 0;
var form1 = document.querySelector(".one");
var form2 = document.querySelector(".two");
var form3 = document.querySelector(".three")
const next = document.querySelector(".dalej");
const back = document.querySelector(".cofnij");
const submit = document.querySelector(".send");
next.addEventListener("click", (e) => {
    e.preventDefault();
    if (form2.classList == "two") {
        let div1 = document.querySelector(`#progress div:nth-child(4)`);
        let div2 = document.querySelector(`#progress div:nth-child(5)`);
        div1.classList.add("active");
        div2.classList.add("active");
        form2.classList.add("display");
        form3.classList.remove("display");
        next.classList.add("display");
        submit.classList.remove("display");
        i = 0;
    }
    if (form1.classList != "one display") {
        let div1 = document.querySelector(`#progress div:nth-child(2)`);
        let div2 = document.querySelector(`#progress div:nth-child(3)`);
        div1.classList.add("active");
        div2.classList.add("active");
        form1.classList.add("display");
        form2.classList.remove("display");
    }
});

back.addEventListener("click", (e) => {
    e.preventDefault();
    if (form2.classList == "two display" && i == 0) {
        let div1 = document.querySelector(`#progress div:nth-child(4)`);
        let div2 = document.querySelector(`#progress div:nth-child(5)`);
        div1.classList.remove("active");
        div2.classList.remove("active");
        form3.classList.add("display");
        form2.classList.remove("display");
        submit.classList.add("display");    
        next.classList.remove("display"); 
    } else if (form1.classList == "one display") {
        let div1 = document.querySelector(`#progress div:nth-child(2)`);
        let div2 = document.querySelector(`#progress div:nth-child(3)`);
        div1.classList.remove("active");
        div2.classList.remove("active");
        form2.classList.add("display");
        form1.classList.remove("display");
        i++;
    }
});
