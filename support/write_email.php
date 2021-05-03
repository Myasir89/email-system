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
  

  if (isset($_POST['draft'])) {    
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
        $sql = "INSERT INTO `drafts`(`senderID`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`) VALUES
         ('$senderID', '$senderEmail', '$emailSubject', '$emailBody', '', '', '$date', '$time')";
        if (mysqli_query($con, $sql)) 
            $success = "Email Saved";         
        else
            echo mysqli_error($con);        
      }
      else{      
        $row = mysqli_fetch_assoc($res_e);    
        $receiverID = $row['id'];
        $sql = "INSERT INTO `drafts`(`senderID`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`) VALUES
         ('$senderID', '$senderEmail', '$emailSubject', '$emailBody', '$receiverID', '$receiverEmail', '$date', '$time')";
        if (mysqli_query($con, $sql)) 
            $success = "Email Saved";           
        else
            echo mysqli_error($con);
              
      }
        
  }
  

  if (isset($_GET['status'])) {

      $status = $_GET['status'];
      $id = $_GET['id'];
      $select_ = "SELECT * FROM emails where id = $id";
      $result_ = mysqli_query($con, $select_);
      $row = mysqli_fetch_assoc($result_);
      $senderEmail = $row['senderEmail'];
      $emailSubject = $row['emailSubject'];  
      $emailBody = $row['emailBody']; 
      $read_status = $row['read_status']; 
      $favorite = $row['favorite']; 
      $date = $row['date']; 
      $time = $row['time']; 

      $sql_ = "SELECT `full_name` FROM `user` WHERE email = '$senderEmail'";
      $res_ = mysqli_query($con, $sql_);
      $r = mysqli_fetch_assoc($res_); 
      $senderName = $r['full_name'];
  }

?>