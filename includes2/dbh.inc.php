<?php

$dbServername = "localhost";
$dbUsername = "root"; //This is the same username as phpMyAdmin
$dbPassword = "root"; //This is the same password as phpMyAdmin
$dbName = "blog-cms-1";

//Create connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>