<?php

$hostname = "localhost";
$username = "root";
$pass = "";
$database = "email_system";

$con = mysqli_connect($hostname,$username,$pass,$database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>