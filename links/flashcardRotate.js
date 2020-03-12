let i = 0;

let wordPL = document.querySelector(".card__face--front");
let wordEng = document.querySelector(".card__face--back");
wordPL.innerHTML = tabPL[i];
wordEng.innerHTML = tabENG[i];

const next = document.querySelector(".learn__button--next");
const prev = document.querySelector(".learn__button--prev");
next.addEventListener("click", (e) => {
    e.preventDefault();
    if (i < 2) i++;
    wordPL.innerHTML = tabPL[i];
    wordEng.innerHTML = tabENG[i];
});

prev.addEventListener("click", (e) => {
    e.preventDefault();
    if (i > 0) i--;
    wordPL.innerHTML = tabPL[i];
    wordEng.innerHTML = tabENG[i];
});

var card = document.querySelector('.card');
card.addEventListener( 'click', function() {
  card.classList.toggle('is-flipped');
});





