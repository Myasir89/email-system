<?php
include 'connection.php';
$select = "SELECT * FROM `trash` where `userEmail` = '$userEmail' ORDER BY `date` DESC, `time` DESC";
$result = mysqli_query($con, $select);

?>