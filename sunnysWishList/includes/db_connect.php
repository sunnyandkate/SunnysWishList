<?php

//connect to database
$connection = mysqli_connect('localhost', '', '', 'sunnysWishList');


//check connection
if (!$connection) {

    echo 'connection error: ' . mysqli_connect_error();
}
