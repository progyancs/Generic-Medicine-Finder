<?php

//Params to connect to a database
$dbHost = "localhost:3307";
$dbUser = "root";
$dbPass = "";
$dbName = "gmf";

//Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed!");
}
else{
    //echo "Database connection succesfull" ;
}
?>
