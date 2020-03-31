<section class="learn">
    <h2>
    <?php

    if (!isset($_GET['set_id'])) {
        header('location: ./flashcardList.php');
    } else {
        require('./../includes/dbh.php');
        $id = $_GET['set_id'];
        $sql = "SELECT Nazwa FROM zestaw WHERE IDzestawu=$id;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Nazwa'];
        }
    }
    ?>
    </h2>
    <div class="scene scene--card">
        <div class="card">
            <div class="card__face card__face--front"></div>
            <div class="card__face card__face--back"></div>
        </div>
    </div>
    <div class="learn__buttons">
        <button class="learn__button learn__button--prev">Poprzednia</button>
        <button class="learn__button learn__button--next">Następna</button>
    </div>
</section>
<script type="text/javascript">
    var tabPL = <?php echo json_encode($_SESSION['tabPL']); ?>;
    var tabENG = <?php echo json_encode($_SESSION['tabENG']); ?>;
</script>
<script type="text/javascript" src="./../links/flashcardRotate.js"></script>
