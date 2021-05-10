<?php
include 'session.php';
include 'connection.php';


$id = $_GET['id'];
$action = $_GET['action'];
$status = $_GET['status'];



if($action == 'add'){
    if($status == 'inbox'){
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
        $sql = "INSERT INTO `starred` (`userEmail`, `senderID`, `senderEmail`, `emailSubject`, `emailBody`, `receiverID`, `receiverEmail`, `date`, `time`, `status`) 
        VALUES ('$userEmail', '$senderID', '$senderEmail', '$emailSubject', '$emailBody', '$receiverID', '$receiverEmail', '$date', '$time', '$status')";
         if (mysqli_query($con, $sql)) {
            header('location: ../starredEmail.php');
        }
        
    }
    else if($status == 'draft'){
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
    else if($status == 'sent'){
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
    }


}

?>