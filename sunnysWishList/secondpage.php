<?php $title = "Sunnys Birthday"; ?>
<?php include "includes/db_connect.php"; ?>
<?php include "includes/header_admin.php"; ?>

<div class="frontpage-container">

    <div class="frontside-card">
        <div class="card-inside-container">
            <div id="left-side" class="left-side-closed">
                <div class="main-container">

                    <h3 class="card-text">Einladung fuer</h3>
                    <h3 class="askName"></h3>

                </div>
            </div>
            <div id="right-side" class="right-side-closed">
                <div class="card-toggle no-card">

                    <p>am 31.10.2022</p>
                    <p>um 11 Uhr</p>
                    <p>in Solituede am Strand</p>
                    <p>wenn du moechtest kannst du dich auch verkleiden</p>
                    <p>wenn du wissen moechtest was ich mir wuensche klicke <a href="wishlistOpa.php">hier</a> oder ueberrasche mich einfach </p>

                </div>
            </div>
            <button class="openCard-btn">hier oeffnen</button>
        </div>

    </div>






    <script type="text/javascript" src="script.js"></script>
    <?php include "includes/footer.php"; ?>