<?php
include 'connection.php';
if (isset($_POST['login'])) {

$email = $_POST['email'];

$password = $_POST['password'];
    $query = "SELECT * FROM admin WHERE email ='$email' and password ='$password'";

    $result = mysqli_query($con, $query);

    $row = mysqli_num_rows($result);
    
    if ($row >= 1) {
        $_SESSION['email'] = $email;
        echo "<script> 
        alert('$email');
        window.location.replace('../index.php');
    </script>";
    } else {
        echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='login.php'>Login</a></div>";
    }
}


?>