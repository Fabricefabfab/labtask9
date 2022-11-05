<?php

require "config/constants.php";

$servername = "us-cdbr-east-06.cleardb.net";
$username = "b4ba033e2687bd";
$password = "d64bd0f7";
$db = "heroku_93d4a2c015a74a0";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
