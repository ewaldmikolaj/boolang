const button = document.querySelector(".addFlashcard");
let i = 3;
button.addEventListener("click", () => {
    const flashcardSet = document.querySelector(".create-set__flashcards");
    const flashcardSetNew = document.createElement("div");
    flashcardSetNew.classList.add("flashcard");
    flashcardSetNew.innerHTML = 
    `
    <div class="flashcard">
    <div class="flashcard__position">${i}</div>
    <div class="flashcard__input-wrapper">
        <label class="flashcard__description" for="word[]">Słówko: </label>
        <input class="flashcard__input" name="word[]" required type="text">
    </div>
    <div class="flashcard__input-wrapper">
        <label class="flashcard__description" for="definition[]">Definicja: </label>
        <input class="flashcard__input" name="definition[]" required type="text">
    </div>
    </div>
    `;
    flashcardSet.appendChild(flashcardSetNew);
    i++;
    flashcardSetNew.scrollIntoView();
});