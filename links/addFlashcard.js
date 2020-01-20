const button = document.querySelector("#addFlashcard");
let i = 3;
button.addEventListener("click", () => {
    const flashcardSet = document.querySelector("#overflowSet");
    const flashcardSetNew = document.createElement("div");
    flashcardSetNew.classList.add("flashcard");
    flashcardSetNew.innerHTML = 
    `<div class="position">${i}</div>
    <div>
        <input name="word" required type="text">
        <label for="word">Słówko</label>
    </div>
    <div>
        <input name="definition" required type="text">
        <label for="definition">Definicja</label>  
    </div>`;
    flashcardSet.appendChild(flashcardSetNew);
    i++;
    flashcardSetNew.scrollIntoView();
});