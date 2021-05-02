<?php
session_start();
$email = $_SESSION['email'];
if(!isset($_SESSION['email'])){
    echo "<script> 
    alert('$email');
</script>";
header('location: ./page-login.php');
exit(); }
?>