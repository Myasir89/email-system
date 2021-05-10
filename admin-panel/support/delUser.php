<?php

include('connection.php');

$id=$_GET['id'];
$sql = "DELETE FROM user WHERE id='$id'";
print_r($sql);
$res= mysqli_query($con, $sql);
if ($res) {
    echo "<script> 
    alert('Are you sure to Delete this');
    window.location.replace('../users.php');
</script>";
} else {
    echo "<script> 
    alert('something went wrong');
    window.location.replace('../users.php');
</script>";
}


?>