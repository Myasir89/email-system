<?php
include 'connection.php';
$id= $_GET['id'];
$action = isset($_GET['action']);
$select = "SELECT * FROM emails where id = $id";
$result = mysqli_query($con, $select);
$row = mysqli_fetch_assoc($result);
$senderEmail = $row['senderEmail'];
$senderID = $row['senderID'];
$emailSubject = $row['emailSubject'];  
$emailBody = $row['emailBody'];
$receiverEmail = $row['receiverEmail'];
$receiverID = $row['receiverID']; 
$read_status = $row['read_status'];  
$date = $row['date']; 
$time = $row['time']; 

$sql_ = "SELECT `full_name` FROM `user` WHERE email = '$senderEmail'";
$result_ = mysqli_query($con, $sql_);
$r = mysqli_fetch_assoc($result_); 
$senderName = $r['full_name'];

$query = "UPDATE `emails` SET `read_status`= '1' WHERE id = $id";
if (mysqli_query($con, $query)) {}

if (isset($_POST['trash'])) {    
        if($action == 'sentEmail'){
            $stat = 'sent';
        }else{
            $stat = 'inbox';
        }
        $sql = "INSERT INTO `trash`(`senderID`, `usesrEmail`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`, `status`) VALUES
         ('$senderID', '$userEmail', '$senderEmail', '$emailSubject', '$emailBody', '$receiverID', '$receiverEmail', '$date', '$time', '$stat')";
        if (mysqli_query($con, $sql)) {
            $sql_d = "DELETE FROM `emails` WHERE id = '$id'";
            if (mysqli_query($con, $sql_d)) {
                if($action == 'sentEmail'){
                    header('location: sendEmail.php');
                }else{                    
                    header('location: inbox.php');
                }
            }
              
        }
        else{
             echo mysqli_error($con);
        }       
         
  }

  if (isset($_GET['stat'])) {
    $id = $_GET['id'];
    $select_1 = "SELECT * FROM trash where id = $id";
    $result_1 = mysqli_query($con, $select_1);
    $row = mysqli_fetch_assoc($result_1);
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

?>