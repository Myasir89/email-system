<?php
include 'connection.php';
if (isset($_POST['send'])) {
    if($_POST['to'] != "" && $_POST['to'] != $userEmail){      
    $timezone = new DateTime("now", new DateTimeZone('Asia/Karachi') );
    $time =  $timezone->format('h:i:s A');
    $date =  $timezone->format('M d');
    $senderID = $userId;
    $senderEmail = $userEmail;
    $emailSubject = $_POST['email_subject'];
    $emailBody = $_POST['email_body'];
    $receiverEmail = $_POST['to'];  
    $sql_e = "SELECT * FROM user WHERE email='$receiverEmail'";
    $res_e = mysqli_query($con, $sql_e);
    $r = mysqli_num_rows($res_e);
      if(mysqli_num_rows($res_e) <= 0){
        $error = "Email Address not exist"; 
      }
      else{      
        $row = mysqli_fetch_assoc($res_e);    
        $receiverID = $row['id'];
        $sql = "INSERT INTO `emails`(`senderID`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`) VALUES
         ('$senderID', '$senderEmail', '$emailSubject', '$emailBody', '$receiverID', '$receiverEmail', '$date', '$time')";
        if (mysqli_query($con, $sql)) {
            $success = "Email Send Successfully";   
        }
        else{
             echo mysqli_error($con);
        }       
      }
    }else{
      $error = 'Enter the valid email address';
    }    
  }


?>