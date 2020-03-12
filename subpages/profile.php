<div class="profileSite">
    <div class="profileSite__userinfo">
        <span class="profileSite__username">
        <?php
        if (isset($_SESSION['username'])) {
            echo $_SESSION['username'];
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