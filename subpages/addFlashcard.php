    <section id="createSet">
        <form action="./../includes/addset.php" method="post">
            <h2>Stwórz nowy zestaw</h2>
            <input type="submit" name="addset-submit" value="Stwórz">
            <div>
                <p>Podaj nazwę zestawu</p>
                <input type="text" name="title" required id="setTitle" placeholder="Nazwa zestawu">
            </div>
            <div>
                <div class="customSelect">
                    <select name="languageSet" required id="languageSet">
                        <option value="" hidden disabled selected>Wybierz język</option>
                    <?php
                        require './../includes/dbh.php';

                        $sql = "SELECT * FROM jezyk;";
                        $result = mysqli_query($conn, $sql);    
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='".$row['Jezyk']."'>".$row['Jezyk']."</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="customSelect">
                    <select name="professionSet" required id="professionSet">
                        <option value="" hidden disabled selected>Wybierz zawód</option>
                    <?php
                        $sql = "SELECT * FROM zawod;";
                        $result = mysqli_query($conn, $sql);    
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='".$row['Zawod']."'>".$row['Zawod']."</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="customSelect">
                    <select name="edition" required id="edition">
                        <option value="" hidden disabled selected>Uprawnienia</option>
                    <?php
                        $sql = "SELECT * FROM uprawnienia;";
                        $result = mysqli_query($conn, $sql);    
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='".$row['Uprawnienie']."'>".$row['Uprawnienie']."</option>";
                        }
                    ?>    
                    </select>
                </div>
            </div>
            <div id="overflowSet">
                <div class="flashcard">
                    <div class="position">1</div>
                    <div>
                        <input name="word" required type="text">
                        <label for="word">Słówko</label>
                    </div>
                    <div>
                        <input name="definition" required type="text">
                        <label for="definition">Definicja</label>
                    </div>
                </div>
                <div class="flashcard">
                    <div class="position">2</div>
                    <div>
                        <input name="word" required type="text">
                        <label for="word">Słówko</label>
                    </div>
                    <div>
                        <input name="definition" required type="text">
                        <label for="definition">Definicja</label>  
                    </div>
                </div>
            </div>
            <p id="addFlashcard">Dodaj fiszkę</p>
        </form>
    </section>