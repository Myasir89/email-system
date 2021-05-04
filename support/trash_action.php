<?php
include 'connection.php';
$select = "SELECT * FROM `trash` where `senderEmail` = '$userEmail' OR `receiverEmail` = '$userEmail' ORDER BY `date` DESC, `time` DESC";
$result = mysqli_query($con, $select);

?>