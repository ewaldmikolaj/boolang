<section action="settings.php" id="settings">
        <form method="post" id="formSettings">
            <h2>Ustawienia</h2>
            <label for="nick">Nick</label>
            <input type="text" name="nick" placeholder="podaj nick">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="podaj email">
            <label for="opis">Opis</label>
            <textarea name="opis" maxlength="250" cols="30" rows="10"></textarea>
            <div id="settAvatar">
                <img src="" alt="">
                <div>
                    <input type="file">
                </div>
            </div>
            <input type="submit" value="Zapisz">
        </form>
</section>
