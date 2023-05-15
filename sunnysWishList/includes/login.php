<?php $title = "Sunnys Birthday"; ?>
<?php include "db_connect.php"; ?>
<?php include "header.php"; ?>

<?php session_start(); ?>

<?php

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);

    if (!$select_user_query) {
        die('query failed ' . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_array($select_user_query)) {
        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_user_password = $row['user_password'];
    }

    if ($username === $db_username && $password === $db_user_password) {
        $_SESSION['username'] = $db_username;

        if ($username === "wolf") {
            header("Location: ../secondpage.php");
        } else {
            header("Location: ../cardCover.php");
        }
    } else {

        header("Location: ../index.php");
    }
}

?>


<?php include "footer.php"; ?>