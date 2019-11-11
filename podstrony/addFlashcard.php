    <section id="createSet">
        <form action="">
            <h2>Stwórz nowy zestaw</h2>
            <input type="submit" value="Stwórz">
            <div>
                <p>Podaj nazwę zestawu</p>
                <input type="text" name="title" id="setTitle" placeholder="Nazwa zestawu">
            </div>
            <div>
                <select name="languageSet" id="languageSet">
                    <option value="" hidden disabled selected>Wybierz język</option>
                    <option value="angielski">angielski</option>
                    <option value="niemiecki">niemiecki</option>
                    <option value="francuski">francuski</option>
                </select>
                <select name="professionSet" id="professionSet">
                    <option value="" hidden disabled selected>Wybierz zawód</option>
                    <option value="informatyk">informatyk</option>
                    <option value="mechanik">mechanik</option>
                    <option value="elektronik">elektronik</option>
                </select>
                <select name="edition" id="edition">
                    <option value="" hidden disabled selected>Uprawnienia</option>
                    <option value="onlyMe">Tylko ja</option>
                    <option value="friends">Znajomi</option>
                </select>
            </div>
            <div id="overflowSet">
                <div class="flashcard">
                    <div class="position">1</div>
                    <div>
                        <input name="word" type="text">
                        <label for="word">Słówko</label>
                    </div>
                    <div>
                        <input name="definition" type="text">
                        <label for="definition">Definicja</label>
                    </div>
                </div>
                <div class="flashcard">
                    <div class="position">2</div>
                    <div>
                        <input name="word" type="text">
                        <label for="word">Słówko</label>
                    </div>
                    <div>
                        <input name="definition" type="text">
                        <label for="definition">Definicja</label>  
                    </div>
                </div>
            </div>
            <p id="addFlashcard">Dodaj fiszkę</p>
        </form>
    </section>
    <script src="../links/addFlashcard.js"></script>