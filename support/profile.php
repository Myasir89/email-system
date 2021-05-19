<?php
include 'connection.php';

if(isset($_POST['update'])){
                                                
    $fullName = $_POST['fullName'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $profile = $_FILES['profile']['name'];
    if($profile != ""){
        
         $fileinfo=PATHINFO($profile);
         $newFilename = $fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
         move_uploaded_file($_FILES["profile"]["tmp_name"],"assets/images/" . $newFilename);
         $sql = "UPDATE user SET `full_name`='$fullName', `phone`='$phone', `image`='$newFilename', `password`='$password' WHERE `email` = '$userEmail'";
         $result = mysqli_query($con, $sql);
         if ($result) {
           $location = "";
           echo  '<META HTTP-EQUIV="Refresh" Content="0; URL=' . $location . '">';
         } else {
         echo "Error in Updating record: ".mysqli_error($con);
         }
    }
    else{
    
        $sql = "UPDATE user SET `full_name`='$fullName', `phone`='$phone', `password`='$password' WHERE `email` = '$userEmail'";
        $result = mysqli_query($con, $sql);
        if ($result) {
          $location = "";
          echo  '<META HTTP-EQUIV="Refresh" Content="0; URL=' . $location . '">';
        } else {
        echo "Error in Updating record: ".mysqli_error($con);
        }
    }
 }

?>