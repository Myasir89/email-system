<?php
include 'connection.php';
$id= $_GET['id'];
$select = "SELECT * FROM emails where id = $id";
$result = mysqli_query($con, $select);
$row = mysqli_fetch_assoc($result);
$senderEmail = $row['senderEmail'];
$emailSubject = $row['emailSubject'];  
$emailBody = $row['emailBody']; 
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

?>