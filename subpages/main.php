    <section>
    <?php
    if (!isset($_SESSION['username'])) {
    echo "<div class='buttons'>";
    echo "<a class='buttons__link' href='signSite.php'>Zaloguj się</a>";
    echo "<a class='buttons__link' href='signup.php'>Zarejestruj się</a>";
    echo "</div>";
    }
    ?>
    <article class="welcome">
        <h1 class="welcome__title">BooLang</h1>
        <p class="welcome__description">Najlepsza strona do nauki technicznego języka obcego</p>
        <img class="welcome__job" src="./../icons/consulting.png" alt="it">
        <img class="welcome__job" src="./../icons/electrician.png" alt="electronic">
        <img class="welcome__job" src="./../icons/mechanic.png" alt="mechanic">
    </article>
    </section>