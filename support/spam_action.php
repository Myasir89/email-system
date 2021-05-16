<?php
include 'connection.php';
$select = "SELECT * FROM `emails` where `receiverEmail` = '$userEmail' && `spam` = '1' ORDER BY `date` DESC, `time` DESC";
$result = mysqli_query($con, $select);

?>