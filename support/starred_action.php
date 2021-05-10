<?php
include 'connection.php';
$select = "SELECT * FROM `starred` where `userEmail` = '$userEmail' ORDER BY `date` DESC, `time` DESC";
$result = mysqli_query($con, $select);

?>