<?php
include 'connection.php';
$select = "SELECT * FROM `drafts` where `senderEmail` = '$userEmail' ORDER BY `date` DESC, `time` DESC";
$result = mysqli_query($con, $select);

if (isset($_GET['stat'])) {
  $id = $_GET['id'];
  $select_ = "SELECT * FROM trash where id = $id";
  $result_ = mysqli_query($con, $select_);
  $row = mysqli_fetch_assoc($result_);
  $receiverEmail = $row['receiverEmail'];
  $emailSubject = $row['emailSubject'];  
  $emailBody = $row['emailBody']; 
  $date = $row['date']; 
  $time = $row['time']; 

  if($receiverEmail != ''){
      $sql_ = "SELECT `full_name` FROM `user` WHERE email = '$receiverEmail'";
      $res_ = mysqli_query($con, $sql_);
      $r = mysqli_fetch_assoc($res_); 
     echo $receiverName = $r['full_name'];
  }else{
      $receiverName = '' ;
  }

}

if (isset($_GET['status'])) {
    $id = $_GET['id'];
    $select_ = "SELECT * FROM drafts where id = $id";
    $result_ = mysqli_query($con, $select_);
    $row = mysqli_fetch_assoc($result_);
    $receiverEmail = $row['receiverEmail'];
    $emailSubject = $row['emailSubject'];  
    $emailBody = $row['emailBody']; 
    $date = $row['date']; 
    $time = $row['time']; 

    if($receiverEmail != ''){
        $sql_ = "SELECT `full_name` FROM `user` WHERE email = '$receiverEmail'";
        $res_ = mysqli_query($con, $sql_);
        $r = mysqli_fetch_assoc($res_); 
        $receiverName = $r['full_name'];
    }else{
        $receiverName = '' ;
    }

}


if (isset($_POST['delete'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM `trash` WHERE id = '$id'";
  if (mysqli_query($con, $sql)) {
    header('location: trashEmails.php');      
  }
  else{
    echo mysqli_error($con);
  }
}


if (isset($_POST['trash'])) {
    $id = $_GET['id'];
    $select_1 = "SELECT * FROM drafts where id = $id";
    $result_1 = mysqli_query($con, $select_1);
    $row = mysqli_fetch_assoc($result_1);
    $senderEmail = $row['senderEmail'];
    $senderID = $row['senderID'];
    $emailSubject = $row['emailSubject'] == '' ? "(no subject)" : $row['emailSubject'];  
    $emailBody = $row['emailBody'];
    $receiverEmail = $row['receiverEmail'];
    $receiverID = $row['receiverID']; 
    $date = $row['date']; 
    $time = $row['time']; 
    $sql = "INSERT INTO `trash`(`senderID`, `userEmail`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`, `status`) VALUES
          ('$senderID', '$userEmail', '$senderEmail', '$emailSubject', '$emailBody', '$receiverID', '$receiverEmail', '$date', '$time', 'draft')";
    if (mysqli_query($con, $sql)) {
        $sql_d = "DELETE FROM `drafts` WHERE id = '$id'";
        if (mysqli_query($con, $sql_d)) {
          header('location: drafts.php');
        }       
    }
    else{
          echo mysqli_error($con);
    }


}

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
            $sql_d = "DELETE FROM `drafts` WHERE id = '$id'";
            if (mysqli_query($con, $sql_d)) {
                header('location: drafts.php');
            }
              
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