<section action="settings.php" id="settings">
        <form action="./../includes/settings.php" method="post" id="formSettings">
            <h2>Ustawienia</h2>
            <label for="nick">Nick</label>
            <input type="text" name="username" placeholder="podaj nick">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="podaj email">
            <label for="opis">Opis</label>
            <textarea name="description" maxlength="250" cols="30" rows="10"></textarea>
            <input type="submit" name="stngs-submit" value="Zapisz">
        </form>
</section>
