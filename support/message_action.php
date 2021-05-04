<?php
include 'connection.php';
$id= $_GET['id'];
$action = $_GET['action'];
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
$favorite = $row['favorite']; 
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
        $sql = "INSERT INTO `trash`(`senderID`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`, `status`) VALUES
         ('$senderID', '$senderEmail', '$emailSubject', '$emailBody', '$receiverID', '$receiverEmail', '$date', '$time', '$stat')";
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

?>