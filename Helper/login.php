<?php

include ('config/config.php');
if (isset($_POST['submit'])) {

$email = $_POST['email'];

$password = $_POST['password'];

if (!empty($username) && !empty($password)) {

    $query = "SELECT username = '$username' and password = '$password' FROM user";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);
    
    if ($row > 1) {
        $_SESSION['username'] = $username;
        header('location:../userpanel/index.php');
    } else {
        echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='login.php'>Login</a></div>";
    }
}
}


?>