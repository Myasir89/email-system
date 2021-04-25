<?php
session_start();
include ('config/config.php');
if (isset($_POST['regestration'])) {
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

if (!empty($username) && !empty($email) && !empty($password) && !empty($phone)) {
    $sql = "SELECT * FROM user WHERE email ='$email' and username = '$username'";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<SCRIPT> 
        alert('Email already exist')
        window.location.replace('../signup.php');
    </SCRIPT>";
    } else {
        $query = "INSERT into user (username, password, email, phone) VALUES ('$username', '$password', '$email', '$phone')";
    
        $res = mysqli_query($conn,$query);
        
        if ($res) {
            $_SESSION['username'] = $username;
            header('location:../userpanel/index.php');
        } else {
            echo "<SCRIPT> 
            alert('something went wrong try again');
            window.location.replace('../signup.php');
        </SCRIPT>";
        } 
    }

}
}


?>