<nav id="sidebar" class="hide">
        <img src="./../icons/left-arrow.png" alt="arrow" id="arrow" class="rotate">
        <div id="avatar"></div>
        <ul>
            <li class="menu">
                <img class="icon" src="./../icons/user (1).png" alt="user">
                <a href="profileSite.php">Mój profil</a>
            </li>
            <li class="menu">
                <img class="icon" src="./../icons/mortarboard.png" alt="learn">
                <a href="flashcardList.php">Nauka</a>
            </li>
            <li class="menu">
                <img class="icon" src="./../icons/friends (1).png" alt="friends">
                <a href="friendsList.php">Znajomi</a>
            </li>
            <li class="menu">
                <img class="icon" src="./../icons/seminar.png" alt="classes">
                <a href="groupSite.php">Klasy</a>
            </li>
            <li class="menu">
                <img class="icon" src="./../icons/ranking.png" alt="ranking">
                <a href="ranking.php">Ranking</a>
            </li>
            <li class="menu">
                <img class="icon" src="./../icons/settings.png" alt="settings">
                <a href="settingsmain.php">Ustawienia</a>
            </li>
            <?php
            if (isset($_SESSION['username'])) {
            echo "<li class='menu'>";
                echo "<img class='icon' src='./../icons/logout.png' alt='logout'>";
                echo "<a href='./../includes/signout.php'>Wyloguj</a>";
            echo "</li>";
            }
            ?>
        </ul>
        <a href="index.php" id="indexLogo"><img id="logo" src="./../icons/g3796.png" alt="logo"></a>
        <script src="./../links/script.js"></script>
    </nav>