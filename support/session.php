<?php
include 'connection.php';
session_start();
if(isset($_SESSION['login_user'])){
    $login_user= $_SESSION['login_user'];
    $query = "SELECT  * from user where email = '$login_user'" ;
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $userId = $row['id'];
    $userName = $row['username'];
    $userEmail = $row['email'];
    $fullName = $row['full_name'];
    $phone = $row['phone'];
    $image = $row['image'];
    $password = $row['password'];
    
}else{
    header('Location: index.php');       

}

?>