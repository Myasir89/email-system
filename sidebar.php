<!-- Sidebar --> 
<?php include('support/support.php'); ?>

<div class="mail-sidebar" > 
<?php if(isset($e)){ ?>                            
    <div class="alert alert-danger"><?php echo $e; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php } ?> 
<?php if(isset($s)){ ?>
    <div class="alert alert-success"><?php echo $s; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php } ?>
    <!-- compose new email button --> 
    <div class="mail-sidebar-row hidden-xs"> 
        <a href="compose.php" class="btn btn-success btn-icon btn-block">Compose Mail<i class="entypo-pencil"></i> </a> 
    </div> 
    <!-- menu --> 
    <ul class="mail-menu"> 
        <li class="active"> <a href="inbox.php"> Inbox</a> </li> 
        <li> <a href="sendEmail.php"> Sent</a> </li> 
        <li> <a href="drafts.php">Drafts</a> </li> 
        <li> <a href="starredEmail.php"> Starred</a> </li> 
        <li> <a href="spam.php">Spam</a> </li> 
        <li> <a href="trashEmails.php">Trash</a> </li> 
    </ul> 
    <div class="mail-distancer"></div> 
    <div class="mail-distancer"></div> 
    <!-- menu --> 
    <ul class="mail-menu"> 
        <li> <a href="javascript:;" onclick="jQuery('#modal-1').modal('show');"><i class="entypo-user-add" style="font-size:20px">  </i>Add Contact</a> </li> 
        <?php 
            if(mysqli_num_rows($data) > 0){
                while($row = $data->fetch_assoc()){ 
                $contact_id =  $row['contact_id'];                                      
                $contact_name = $row['contact_name'];
                $contact_email = $row['contact_email'];
                $contact_image = $row['contact_image']; 
        ?>
            <li> <a href="compose.php?contact=<?php echo $contact_email; ?>"><img src="<?php if($contact_image != ""){ echo 'assets/images/'.$contact_image;  }else{ echo 'assets/images/user.png';  }?>"  alt="" class="img-circle" width="30" /> &nbsp;&nbsp;&nbsp; <?php echo $contact_name; ?></a></li> 
        <?php } } ?>

    </ul>  
</div> 

<div class="modal fade" id="modal-1"> 
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <form method="post" action="" role="form">
                <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
                    <h4 class="modal-title">Add Email Address</h4> 
                </div> 
                <div class="modal-body">               
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-3" class="control-label">Email</label> 
                                <input data-mask="email" type="text" name="email" class="form-control" id="field-3" placeholder="Enter Email Address"> 
                            </div> 
                        </div> 
                    </div>               
                </div> 
                <div class="modal-footer"> 
                    <button type="submit" name="add_contact" class="btn btn-info">Add Contact</button> 
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                </div> 
            </form>
        </div> 
    </div> 
</div> 