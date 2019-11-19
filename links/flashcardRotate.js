const flashcard = document.querySelectorAll(".card");
var i = 2;
var j = 1;
flashcard[i].addEventListener("click", () => {
    flashcard[i].classList.toggle("rotate");
});

const flashcard2 = document.querySelectorAll(".mainCard");
const progress = document.querySelector("#learn p");
const button = document.querySelector("#learn img");
button.addEventListener("click", () => {
    if (i > 0) {
        flashcard2[i].classList.add("ghostClass");
        j++;
    }
    setTimeout( function() {
        if (i > 0) {
        flashcard2[i].remove();
        --i;
        flashcard2[i].classList.remove("divHide");
        }
    }, 500);
    progress.innerHTML = `Postęp: ${j}/3`;
});




