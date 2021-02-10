<?php

$dbServer = "localhost";
$dbUser = "root";
$dbPass = "";
$dbDatabase = "card.algozini";

$con = mysqli_connect($dbServer, $dbUser, $dbPass, $dbDatabase);
if (!$con) {
    echo "No connection " . mysqli_connect_error($con);
}
