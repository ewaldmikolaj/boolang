<nav class="menu menu--hide">
        <img src="./../icons/left-arrow.png" alt="arrow" class="menu__button menu__button--clicked">
        <div class="menu__avatar"></div>
        <ul class="menu__list">
            <li class="menu__component">
                <img class="menu__icon" src="./../icons/user (1).png" alt="user">
                <a href="./profileSite.php" class="menu__link">Mój profil</a>
            </li>
            <li class="menu__component">
                <img class="menu__icon" src="./../icons/mortarboard.png" alt="learn">
                <a href="./flashcardList.php" class="menu__link">Nauka</a>
            </li>
            <li class="menu__component">
                <img class="menu__icon" src="./../icons/seminar.png" alt="learn">
                <a href="./addFlashcardSet.php" class="menu__link">Dodaj zestaw</a>
            </li>
            <?php
            if (isset($_SESSION['username'])) {
            echo "<li class='menu__component'>";
                echo "<img class='menu__icon' src='./../icons/logout.png' alt='logout'>";
                echo "<a href='./../includes/signout.php' class='menu__link'>Wyloguj</a>";
            echo "</li>";
            }
            ?>
        </ul>
        <a href="index.php" id="indexLogo"><img class="menu__logo" src="./../icons/g3796.png" alt="logo"></a>
        <script src="./../links/script.js"></script>
    </nav>