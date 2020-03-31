<div class="profileSite">
    <div class="profileSite__userinfo">
        <span class="profileSite__username">
        <?php
        if (isset($_SESSION['username'])) {
            echo $_SESSION['username'];
        }
        require './../includes/dbh.php';
        $sql = "SELECT klasa.NazwaKlasy as `klasa` FROM uzytkownik JOIN klasa on uzytkownik.IDklasy=klasa.IDklasy WHERE uzytkownik.IDuzytkownika='$_SESSION[userId]'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo " $row[klasa]";
        }
        ?>
        </span>
    </div>
    <div class="profileSite__sets">
        <p class="profileSite__header">Zestawy użytkownika</p>
        <div class="profileSite__sets">
        <?php
        require './../includes/dbh.php';
        $id = $_SESSION['userId'];

        $sql = "SELECT DISTINCT zestaw.IDzestawu as `id`, zestaw.Nazwa as `nazwa`, jezyk.Jezyk as `jezyk` FROM zestaw JOIN jezyk on zestaw.IDjezyka=jezyk.IDjezyka WHERE zestaw.Autor='$id'";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            switch ($row['jezyk']) {
                case 'Angielski':
                    $img = 'eng.png';
                    break;
                case 'Niemiecki':
                    $img = 'ger.png';
                    break;
                case 'Francuski':
                    $img = 'french.png';
                    break;
                default:
                    $img = 'eng.png';
                    break;
            }
            echo <<<SET
            <a class="flashcardList__element" href="./../includes/getSet.php?set_id=$row[id]">
                <img class="flashcardList__img" src="./../photos/$img" alt="">
                <p class="flashcardList__title">$row[nazwa]</p>
            </a>
SET;
        }
        ?>
        </div>
    </div>
</div>