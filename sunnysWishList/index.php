<?php $title = "Sunnys Birthday"; ?>
<?php include "includes/db_connect.php"; ?>
<?php include "includes/header.php"; ?>

<div class="login-container">
    <img class="move" src="images/pumpkin4.png">
    <img class="move2" src="images/pumpkin4.png">
    <img class="move3" src="images/pumpkin4.png">
    <img class="move4" src="images/pumpkin4.png">
    <img class="move5" src="images/pumpkin4.png">

    <div class="login">
        <h2>Sunnys Birthday</h2>
        <form action="includes/login.php" method="post" class="login-form">
            <input type="text" name="username" placeholder="Enter Username">
            <input type="password" name="password" placeholder="Enter Password">
            <button class="login-btn" type="submit" name="login">Login</button>

        </form>
    </div>


    <?php include "includes/footer.php"; ?>