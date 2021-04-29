<?php
include 'connection.php';
session_start(); 
if (isset($_POST['login'])) {
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT email, password from user where email='$email' AND password='$password' LIMIT 1";
        $result_can = mysqli_query($con, $query);
        if($result_can){
                $row = mysqli_fetch_assoc($result_can);
                $check_email = $row['email'];       
                $check_password = $row['password'];
                
                if ($email == $check_email && $password == $check_password) {                                 
                        $_SESSION['login_user'] = $email;            
                        header("location: inbox.php");                       
                } 
                else{
                        $error = "Invalid email or password";                
                }
        }
        
    
mysqli_close($con); 
}
?>