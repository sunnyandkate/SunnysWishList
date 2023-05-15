<?php

//connect to database
$connection = mysqli_connect('localhost', 'root', '', 'sunnysWishList');

//$connection = mysqli_connect('sdb-g.hosting.stackcp.net', 'sunnyswishlist-313835125b', 'montezuma*', 'sunnyswishlist-313835125b');


//check connection
if (!$connection) {

    echo 'connection error: ' . mysqli_connect_error();
}
