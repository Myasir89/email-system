<?php
include 'connection.php';
session_start();
$error_email = '';

$sql = "SELECT * FROM packages";
$result = mysqli_query($con, $sql);	

if (isset($_POST['sign_up_btn'])) {
$name = $_POST['name'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];
$username = $_POST['username'];
$email = $_POST['username']."@mail.com";
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$sql_e = "SELECT * FROM signup WHERE username='$username'";
$res_e = mysqli_query($con, $sql_e);	

  if(mysqli_num_rows($res_e) > 0){
    $error_email = "Sorry... username already taken";     
  }
  else{

    $sql = "INSERT INTO `user`(`username`, `email`, `full_name`, `phone`, `password`) 
    VALUES ('$username', '$email', '$email', '$name', '$phone', '$password')";
    if (mysqli_query($con, $sql)) {
         
    }
    else{
         echo mysqli_error($con);
    } 
    
    
}



}
?>