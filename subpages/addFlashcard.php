<section class="create-set">
    <form action="./../includes/addset.php" method="post" class="create-set__form">
        <h2>Stwórz nowy zestaw</h2>
        <input type="submit" name="addset-submit" value="Stwórz" class="create-set__submit">
        <div class="create-set__set-name">
            <p>Podaj nazwę zestawu</p>
            <input type="text" name="title" required class="create-set__set-title" placeholder="Nazwa zestawu">
        </div>
        <select name="languageSet" required class="create-set__language">
            <option value="" hidden disabled selected>Wybierz język</option>
        <?php
            require './../includes/dbh.php';

            $sql = "SELECT * FROM jezyk;";
            $result = mysqli_query($conn, $sql);    
            while($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['IDjezyka']."'>".$row['Jezyk']."</option>";
            }
        ?>
        </select>
        <div class="create-set__flashcards">
            <div class="flashcard">
                <div class="flashcard__position">1</div>
                <div class="flashcard__input-wrapper">
                    <label class="flashcard__description" for="word[]">Słówko: </label>
                    <input class="flashcard__input" name="word[]" required type="text">
                </div>
                <div class="flashcard__input-wrapper">
                    <label class="flashcard__description" for="definition[]">Definicja: </label>
                    <input class="flashcard__input" name="definition[]" required type="text">
                </div>
            </div>
            <div class="flashcard">
                <div class="flashcard__position">2</div>
                <div class="flashcard__input-wrapper">
                    <label class="flashcard__description" for="word[]">Słówko: </label>
                    <input class="flashcard__input" name="word[]" required type="text">
                </div>
                <div class="flashcard__input-wrapper">
                    <label class="flashcard__description" for="definition[]">Definicja: </label>
                    <input class="flashcard__input" name="definition[]" required type="text">
                </div>
            </div>
        </div>
        <p class="addFlashcard">Dodaj fiszkę</p>
    </form>
</section>