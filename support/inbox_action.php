<?php
include 'connection.php';
$select = "SELECT * FROM `emails` where `receiverEmail` = '$userEmail' && `spam` = '0' ORDER BY `date` DESC, `time` DESC";
$result = mysqli_query($con, $select);

?>