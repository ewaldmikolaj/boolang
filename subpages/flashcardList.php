<div class="flashcardList">
    <div class="flashcardList__box">
        <p class="flashcardList__header">Wszystkie fiszki</p>
        <?php
        require './../includes/dbh.php';
        $id = $_SESSION['userId'];

        $sql = "SELECT DISTINCT zestaw.IDzestawu as `id`, zestaw.Nazwa as `nazwa`, jezyk.Jezyk as `jezyk` FROM zestaw JOIN jezyk on zestaw.IDjezyka=jezyk.IDjezyka JOIN uzytkownik on zestaw.IDklasy=uzytkownik.IDklasy WHERE uzytkownik.IDuzytkownika='$id'";
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