<section id="right">
    <form action="./../includes/signup.php" method="post">
        <div>
            <label for="username">Nazwa użytkownika</label>
            <input type="text" name="username" required placeholder="podaj nazwę użytkownika">
            <label for="email">Email</label>
            <input type="email" name="email" required placeholder="podaj e-mail">
            <label for="password" >Hasło</label>
            <input type="password" name="password" required placeholder="wpisz hasło">
            <label for="password2" class="one">Potwierdź hasło</label>
            <input type="password" name="password2" required placeholder="potwierdź hasło">
        </div>
        <input type="submit" name="signup-submit" class="przycisk send" value="Zarejestruj">
    </form>
</section>
