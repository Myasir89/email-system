<?php
include 'connection.php';
$query_ = "SELECT * FROM `contact` where `userEmail` = '$userEmail'";
$data = mysqli_query($con, $query_);


if (isset($_POST['add_contact'])) {
    $email = $_POST['email'];
    $sql_e = "SELECT * FROM user WHERE email='$email'";
    $res_e = mysqli_query($con, $sql_e);
    $r = mysqli_num_rows($res_e);
      if(mysqli_num_rows($res_e) <= 0){
        $e = "Email Address not exist"; 
        // echo("<meta http-equiv='refresh' content='1'>");
      }
      else{      
        $row = mysqli_fetch_assoc($res_e);    
        $contactID = $row['id'];
        $contactName = $row['full_name'];
        $sql_c = "SELECT * FROM contact WHERE contact_email='$email'";
        $res_c = mysqli_query($con, $sql_c);
        $r = mysqli_num_rows($res_c);
          if(mysqli_num_rows($res_c) > 0){
            $e = "Contact Already Added"; 
          }else{
              $sql = "INSERT INTO `contact`( `userEmail`, `contact_id`, `contact_email`, `contact_name`, `contact_image`) VALUES 
              ('$userEmail', '$contactID', '$email', '$contactName', '')";
            if (mysqli_query($con, $sql)) {
                echo("<meta http-equiv='refresh' content='1'>");
            }
            else{
                  echo mysqli_error($con);
            } 
          }


            
      }
}

?>