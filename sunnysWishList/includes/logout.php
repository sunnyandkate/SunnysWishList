<?php $title = "Sunnys Birthday"; ?>
<?php include "db_connect.php"; ?>
<?php include "header.php"; ?>


<?php session_start(); ?>

<?php

$_SESSION['username'] = null;

header("Location: ../index.php");

?>

<?php include "footer.php"; ?>