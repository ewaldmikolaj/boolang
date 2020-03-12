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
<script type="text/javascript">
    var tabPL = <?php echo json_encode($_SESSION['tabPL']); ?>;
    var tabENG = <?php echo json_encode($_SESSION['tabENG']); ?>;
</script>
<script type="text/javascript" src="./../links/flashcardRotate.js"></script>
