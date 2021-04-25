<?php
session_destroy(); // Is Used To Destroy All Sessions
header('location: ../index.php');
//Or
if(isset($_SESSION['username']))
unset($_SESSION['username']);  //Is Used To Destroy Specified Session
?>