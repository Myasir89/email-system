<?php
    include('support/session.php');
    include('support/message_action.php');
?>
<!DOCTYPE html> 

<html lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <meta name="description" content="Neon Admin Panel" /> 
        <meta name="author" content="Laborator.co" />
        <link rel="icon" href="assets/images/favicon.ico"> 
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141030632-1"></script> 
        <script>
            window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-141030632-1', {"groups":"laborator_analytics","link_attribution":true,"linker":{"accept_incoming":true,"domains":["laborator.co","kaliumtheme.com","oxygentheme.com","neontheme.com","themeforest.net","laborator.ticksy.com"]}});
        </script> 
        <title>View Message</title> 
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
                        <a href="compose.php" class="btn btn-success btn-icon btn-block">Compose Mail<i class="entypo-pencil"></i> </a> 
                    </div> 
                    <!-- Mail Body -->
                    <div class="mail-body"> 
                        <div class="mail-header"> 
                            <!-- title --> 
                            <div class="mail-title">
                                <?php 
                                    if($emailSubject != null){
                                        echo $emailSubject;
                                    }else{
                                        echo 'Email';
                                    } 
                                ?>                            
                            </div> 
                            <!-- links --> 
                            <div class="mail-links"> 
                                <a href="#" class="btn btn-default"> <i class="entypo-print"></i> </a> 
                                <a href="#" class="btn btn-default"> <i class="entypo-trash"></i> </a> <a href="compose.php?id=<?php echo $id; ?>&status=<?php echo 'reply';?>" class="btn btn-primary btn-icon">Reply<i class="entypo-reply"></i> </a> 
                            </div> 
                        </div> 

                        <div class="mail-info"> 
                            <div class="mail-sender dropdown"> 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                    <img src="assets/images/thumb-1.png" class="img-circle" width="30" /> 
                                    <span><?php echo $senderName; ?> </span> <?php echo $senderEmail; ?>    to <span>me</span> 
                                </a> 
                                <ul class="dropdown-menu dropdown-red">                                  
                                    <li> <a href="#"> <i class="entypo-star"></i>Star this message</a> </li> 
                                    <li> <a href="compose.php?id=<?php echo $id; ?>&status=<?php echo 'reply';?>"> <i class="entypo-reply"></i>Reply</a> </li> 
                                    <li> <a href="compose.php?id=<?php echo $id; ?>&status=<?php echo 'forward';?>"> <i class="entypo-right"></i>Forward</a> </li> 
                                </ul> 
                            </div> 
                            <div class="mail-date"><?php echo $time; ?> - <?php echo $date; ?></div> 
                        </div> 
                        <div class="mail-text"> 
                            <p><?php echo $emailBody; ?></p>                           
                        </div> 
                        <!-- <div class="mail-attachments"> 
                            <h4> <i class="entypo-attach"></i> Attachments <span>(2)</span> </h4> 
                            <ul> 
                                <li> 
                                    <a href="#" class="thumb"> <img src="assets/images/attach-1.png" class="img-rounded" /> </a> 
                                    <a href="#" class="name">IMG_007.jpg<span>14KB</span> </a> 
                                    <div class="links"> <a href="#">View</a> - <a href="#">Download</a> </div> 
                                </li> 
                                <li> 
                                    <a href="#" class="thumb download"> <img src="assets/images/attach-2.png" class="img-rounded" /> </a> 
                                    <a href="#" class="name">IMG_008.jpg<span>12KB</span> </a> 
                                    <div class="links"> <a href="#">View</a> - <a href="#">Download</a> </div> 
                                </li> 
                                <li> 
                                    <a href="#" class="thumb"> <img src="assets/images/attach-1.png" class="img-rounded" /> </a> 
                                    <a href="#" class="name">IMG_007.jpg<span>14KB</span> </a> 
                                    <div class="links"> <a href="#">View</a> - <a href="#">Download</a> </div>
                                </li> 
                                <li> 
                                    <a href="#" class="thumb download"> <img src="assets/images/attach-2.png" class="img-rounded" /> </a> 
                                    <a href="#" class="name">IMG_008.jpg<span>12KB</span> </a> 
                                    <div class="links"> <a href="#">View</a> - <a href="#">Download</a> </div> 
                                </li> 
                                <li> 
                                    <a href="#" class="thumb"> <img src="assets/images/attach-1.png" class="img-rounded" /> </a> 
                                    <a href="#" class="name">IMG_007.jpg<span>14KB</span> </a> 
                                    <div class="links"> <a href="#">View</a> - <a href="#">Download</a> </div> 
                                </li> 
                                <li> 
                                    <a href="#" class="thumb download"> <img src="assets/images/attach-2.png" class="img-rounded" /> </a> 
                                    <a href="#" class="name">IMG_008.jpg<span>12KB</span> </a> 
                                    <div class="links"> <a href="#">View</a> - <a href="#">Download</a> </div> 
                                </li> 
                            </ul> 
                        </div>  -->
                        <div class="mail-reply"> 
                            <div class="fake-form"> 
                                <div> <a href="compose.php?id=<?php echo $id; ?>&status=<?php echo 'reply';?>">Reply</a> or <a href="compose.php?id=<?php echo $id; ?>&status=<?php echo 'forward';?>">Forward</a> this message...</div> 
                            </div> 
                        </div> 
                    </div> 
                    <!-- Sidebar -->  
                    <?php include ('sidebar.php') ?>
                </div>
            </div> 
            <hr /> 
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