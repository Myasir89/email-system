<?php
include 'connection.php';
session_start();
	

if (isset($_POST['sign_up_btn'])) {
$name = $_POST['name'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];
$username = $_POST['username'];
$email = $_POST['username']."@mail.com";
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$sql_e = "SELECT * FROM user WHERE username='$username'";
$res_e = mysqli_query($con, $sql_e);	

  if(mysqli_num_rows($res_e) > 0){
    $error = "Username already taken";     
  }
  else{
    $sql = "INSERT INTO `user`(`username`, `email`, `full_name`, `phone`, `password`) 
    VALUES ('$username', '$email', '$name', '$phone', '$password')";
    if (mysqli_query($con, $sql)) {
      $success = "Account created successfully";   
    }
    else{
         echo mysqli_error($con);
    }       
  }

}
?>