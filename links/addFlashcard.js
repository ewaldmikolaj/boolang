$('#addFlashcard').click(function() {
    $('#overflowSet').append( 
    `<div class="flashcard"> 
        <div class="position"></div>
        <div>
            <input name="word" type="text">
            <label for="word">Słówko</label>
        </div>
        <div>
            <input name="definition" type="text">
            <label for="definition">Definicja</label>  
        </div>
    </div>`);
});