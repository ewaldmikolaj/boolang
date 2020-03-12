<section class="sign">
    <form class="sign__form" action="./../includes/signup.php" method="post">
        <label class="sign__label" for="username">Nazwa użytkownika</label>
        <input class="sign__input" type="text" name="username" required placeholder="podaj nazwę użytkownika">
        <label class="sign__label" for="email">Email</label>
        <input class="sign__input" type="email" name="email" required placeholder="podaj e-mail">
        <label class="sign__label" for="password">Hasło</label>
        <input class="sign__input" type="password" name="password" required placeholder="wpisz hasło">
        <label class="sign__label" for="password2">Potwierdź hasło</label>
        <input class="sign__input" type="password" name="password2" required placeholder="potwierdź hasło">
        <input type="submit" name="signup-submit" class="sign__submit" value="Zarejestruj">
    </form>
</section>
