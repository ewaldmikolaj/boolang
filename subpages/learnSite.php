<section class="learn">
    <h2>Nazwa zestawu fiszek</h2>
    <p>Postęp: 1/3</p>
    <div class="scene scene--card">
        <div class="card">
            <div class="card__face card__face--front">front</div>
            <div class="card__face card__face--back">back</div>
        </div>
    </div>
    <div class="learn__buttons">
        <button class="learn__button learn__button--prev">Poprzednia</button>
        <button class="learn__button learn__button--next">Następna</button>
    </div>
</section>
<?php

require './../includes/dbh.php';

if (isset($_GET['set_id'])) {
    $id = $_GET['set_id'];
}

$wordPL = [];
$wordEng = [];

$sql = "SELECT * FROM fiszka WHERE IDzestawu='$id'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    array_push($wordPL, $row['Definicja']);
    array_push($wordEng, $row['Slowko']);
}

?>
<script type="text/javascript" src="./../links/flashcardRotate.js"></script>
