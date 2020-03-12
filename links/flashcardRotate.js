// let tabPL = ["stolik", "krzesło", "komputer"];
// let tabENG = ["table", "chair", "computer"];
// let i = 0;

// let wordPL = document.querySelector(".word");
// wordPL.innerHTML = tabPL[i];
// const button = document.querySelector(".flashLearn > form button");
// button.addEventListener("click", (e) => {
//     e.preventDefault();
//     let value = document.querySelector(".wordValue").value;
//     if (i < 2) i++;
//     wordPL.innerHTML = tabPL[i];

// })

var card = document.querySelector('.card');
card.addEventListener( 'click', function() {
  card.classList.toggle('is-flipped');
});





