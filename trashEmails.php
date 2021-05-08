<?php
include('support/connection.php');
include('support/session.php');
include('support/trash_action.php');
?>

<!DOCTYPE html> 

<html lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <meta name="description" content="Neon Admin Panel" /> <meta name="author" content="Laborator.co" />
        <link rel="icon" href="assets/images/favicon.ico"> 
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141030632-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-141030632-1', {"groups":"laborator_analytics","link_attribution":true,"linker":{"accept_incoming":true,"domains":["laborator.co","kaliumtheme.com","oxygentheme.com","neontheme.com","themeforest.net","laborator.ticksy.com"]}});
        </script> 
        <title>Mailbox | Trash</title> 
        <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1"> 
        <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2"> 
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3"> 
        <link rel="stylesheet" href="assets/css/bootstrap.css" id="style-resource-4"> 
        <link rel="stylesheet" href="assets/css/neon-core.css" id="style-resource-5"> 
        <link rel="stylesheet" href="assets/css/neon-theme.css" id="style-resource-6"> 
        <link rel="stylesheet" href="assets/css/neon-forms.css" id="style-resource-7"> 
        <link rel="stylesheet" href="assets/css/custom.css" id="style-resource-8"> 
        <script src="assets/js/jquery-1.11.3.min.js"></script> 
    </head> 
    <body class="page-body" data-url="https://demo.neontheme.com"> 
        <div class="page-container">
            <div class="main-content" style="background-color: #303641" > 
                <!-- Topbar -->
                <?php include ('topbar.php') ?> 

                <div class="mail-env" style="background-color: white"> 
                    <!-- compose new email button -->
                    <div class="mail-sidebar-row visible-xs"> 
                        <a href="compose_draft.php" class="btn btn-success btn-icon btn-block">Compose Mail<i class="entypo-pencil"></i> </a> 
                    </div> 
                    <!-- Mail Body --> 
                    <div class="mail-body"> <div class="mail-header"> 
                        <!-- title <span class="count">(6)</span>--> 
                        <h3 class="mail-title">Draft </h3> 

                        <!-- search --> 
                        <form method="get" role="form" class="mail-search"> 
                            <div class="input-group"> <input type="text" class="form-control" name="s" placeholder="Search for mail..." /> 
                                <div class="input-group-addon"> <i class="entypo-search"></i> </div> 
                            </div> 
                        </form> 
                    </div> 
                    <!-- mail table --> 
                    <table class="table mail-table"> 
                        
                        <!-- mail table header --> 
                        <thead> 
                            <tr> 
                                <th width="5%"> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </th> 
                                <th colspan="4"> 
                                    <div class="mail-select-options">Mark as Read</div> 
                                    <div class="mail-pagination" colspan="2"> 
                                        <strong>1-30</strong> <span>of 789</span> 
                                        <div class="btn-group"> 
                                            <a href="#" class="btn btn-sm btn-white"><i class="entypo-left-open"></i></a> 
                                            <a href="#" class="btn btn-sm btn-white"><i class="entypo-right-open"></i></a> 
                                        </div> 
                                    </div> 
                                </th> 
                            </tr> 
                        </thead>
                        <!-- email list --> 
                        <tbody> 
                            <?php
                                if(mysqli_num_rows($result) > 0){
                                 while($row = $result->fetch_assoc()){ 
                                    $id =  $row['id'];                                      
                                    $date = $row['date'];
                                    $time = $row['time'];  
                                    $status = $row['status'];  
                                    $emailBody = $row['emailBody']; 
                                    $emailSubject = $row['emailSubject']; 
                                    $receiverEmail = $row['receiverEmail'];                                                                        
                                    $timezone = new DateTime("now", new DateTimeZone('Asia/Karachi') );
                                    $current_date =  $timezone->format('M d');
                                    if($current_date == $date) {
                                        $datetime = $time;
                                    }else{
                                        $datetime = $date;
                                    }  
                                    if($receiverEmail != ''){
                                        $sql_ = "SELECT `full_name` FROM `user` WHERE email = '$receiverEmail'";
                                        $result_ = mysqli_query($con, $sql_);
                                        $r = mysqli_fetch_assoc($result_); 
                                        $name = $r['full_name']; 
                                    }else{                                
                                        $name = '';
                                    }                                                                    
                            ?>
                                <tr>
                                    <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                    <td class="col-name">                                         
                                        <a href="#" class="star"> <i class="entypo-star"></i> </a> 
                                        <a <?php if($status == 'sent' || $status == 'inbox'){ ?>
                                                href="message.php?id=<?php echo $id; ?>&stat=<?php echo 'trashEmail'?>" 
                                            <?php }else if($status == 'draft'){ ?> 
                                                href="compose_draft.php?id=<?php echo $id; ?>&stat=<?php echo 'trashEmail'?>" 
                                            <?php } ?>
                                                class="col-name" style="color:<?php if($name==''){ ?> red; <?php }else{ ?> black; <?php } ?>">
                                            <?php if($name==''){ echo 'draft'; }
                                            else{  
                                                if($status == 'sent'){
                                                    echo 'me';
                                                }else if($status == 'inbox'){
                                                    echo $name;                                                    
                                                }
                                            } ?>

                                            &nbsp;                                           
                                        </a> 
                                    </td>                             
                                    <td class="col-subject"> 
                                        <a <?php if($status == 'sent' || $status == 'inbox'){ ?>
                                            href="message.php?id=<?php echo $id; ?>&stat=<?php echo 'trashEmail'?>" 
                                        <?php }else if($status == 'draft'){ ?> 
                                            href="compose_draft.php?id=<?php echo $id; ?>&stat=<?php echo 'trashEmail'?>" 
                                        <?php } ?>>
                                            <?php if($emailSubject==''){ echo '(no subject)'; }else{ echo $emailSubject; } ?> 
                                        </a> 
                                    </td> 
                                    <td class="col-time"><?php echo $datetime; ?></td> 
                                </tr>                           
                            
                            <?php } }else{ ?>
                                <tr>
                                    <td><td>
                                    <td><div style="text-align:center">No conversations in Draft.</div><td>
                                </tr>
                            <?php } ?>
                        </tbody> 
                        <tfoot> 
                            <tr> 
                                <th width="5%"> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </th> 
                                <th colspan="4"> 
                                    <div class="mail-pagination" colspan="2"> 
                                        <strong>1-30</strong> <span>of 789</span> 
                                        <div class="btn-group"> 
                                            <a href="#" class="btn btn-sm btn-white"><i class="entypo-left-open"></i></a> 
                                            <a href="#" class="btn btn-sm btn-white"><i class="entypo-right-open"></i></a> 
                                        </div> 
                                    </div> 
                                </th> 
                            </tr> 
                        </tfoot> 
                    </table> 
                </div> 

                <!-- Sidebar --> 
                <?php include ('sidebar.php') ?>
            </div> 
            <hr/>
        </div>   

        <script src="assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script> 
        <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script> 
        <script src="assets/js/bootstrap.js" id="script-resource-3"></script> 
        <script src="assets/js/joinable.js" id="script-resource-4"></script> 
        <script src="assets/js/resizeable.js" id="script-resource-5"></script> 
        <script src="assets/js/neon-api.js" id="script-resource-6"></script> 
        <script src="assets/js/cookies.min.js" id="script-resource-7"></script> 
        <script src="assets/js/neon-mail.js" id="script-resource-8"></script> 
        <script src="assets/js/neon-chat.js" id="script-resource-9"></script> 
        <!-- JavaScripts initializations and stuff --> 
        <script src="assets/js/neon-custom.js" id="script-resource-10"></script> 
        <!-- Demo Settings --> 
        <script src="assets/js/neon-demo.js" id="script-resource-11"></script> 
        <script src="assets/js/neon-skins.js" id="script-resource-12"></script> 
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-28991003-7']);
            _gaq.push(['_setDomainName', 'demo.neontheme.com']);
            _gaq.push(['_trackPageview']);
            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script> 
    </body> 
</html>