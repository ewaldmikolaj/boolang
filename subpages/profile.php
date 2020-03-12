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
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>