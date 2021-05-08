<?php
    include('support/session.php');
    include('support/draft_action.php');
?>
<!DOCTYPE html> 

<html lang="en"> 
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <meta name="description" content="Neon Admin Panel" /> 
        <meta name="author" content="Laborator.co" /> 
        <link rel="icon" href="assets/images/favicon.ico"> 
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141030632-1"></script> 
        <script>
            window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-141030632-1', {"groups":"laborator_analytics","link_attribution":true,"linker":{"accept_incoming":true,"domains":["laborator.co","kaliumtheme.com","oxygentheme.com","neontheme.com","themeforest.net","laborator.ticksy.com"]}});</script> 
        <title>Compose Message</title> 
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
            <div class="main-content" style="background-color: #303641"> 
                 <!-- Topbar -->
                 <?php include ('topbar.php') ?>
                <div class="mail-env" style="background-color: white"> 
                    <!-- compose new email button --> 
                    <div class="mail-sidebar-row visible-xs"> 
                        <a href="#" class="btn btn-success btn-icon btn-block">Compose Mail<i class="entypo-pencil"></i> </a> 
                    </div> 
                    <!-- Mail Box --> 
                    <div class="mail-body"> 
                        <?php if(isset($error)){ ?>
                            <div class="alert alert-danger"><?php echo $error; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php } ?> 
                        <?php if(isset($success)){ ?>
                            <div class="alert alert-success"><?php echo $success; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php } ?>                                               
                        <form method="post" action="" role="form" name="compose_mail" onSubmit="return validateForm()"> 
                            <div class="mail-header"> 
                                <div class="mail-title">Compose Mail <i class="entypo-pencil"></i> </div> 
                                <div class="mail-links"> 
                                    <?php if(isset($_GET['stat'])) { ?>
                                        <button type="submit" name="delete" class="btn btn-danger btn-icon">Delete Forever<i class="entypo-trash"></i> </button>
                                    <?php }else{ ?>
                                        <button type="submit" name="trash" class="btn btn-danger btn-icon">Trash<i class="entypo-trash"></i> </button>
                                    <?php } ?>
                                    <?php if(!isset($_GET['stat'])){ ?>
                                        <button type="submit" name="send" id="send" <?php if($receiverEmail == ''){  ?>  disabled  <?php } ?>    class="btn btn-success btn-icon">Send<i class="entypo-mail"></i> </button>                             
                                    <?php } ?>
                                </div> 
                            </div>                            
                            <div class="mail-compose"> 
                                <!--Email Field-->                            
                                <?php if($receiverEmail != ''){ ?>                                                           
                                    <div class="form-group"> 
                                        <label for="to">To:</label> 
                                        <input type="text" data-mask="email" class="form-control" id="to" name="to" tabindex="1" value="<?php echo $receiverEmail; ?>"  />                                 
                                    </div>                                     
                                <?php }else { ?>
                                    <div class="form-group"> 
                                        <label for="to">To:</label> 
                                        <input type="text" data-mask="email" class="form-control" id="to" name="to" tabindex="1" onchange="onChangedFunction()"  />                                 
                                    </div> 
                                <?php } ?>  

                                <!--Email Subject-->                                                                                        
                                <div class="form-group"> 
                                    <label for="subject">Subject:</label> 
                                    <input type="text" class="form-control" id="subject" name="email_subject" value="<?php echo $emailSubject; ?>" tabindex="1" /> 
                                </div>                                                                   

                                <!--Email Body-->                                                                                         
                                <div class="compose-message-editor"> 
                                    <textarea class="form-control wysihtml5" data-stylesheet-url="https://demo.neontheme.com/assets/css/wysihtml5-color.css" name="email_body" id="email_body">                                            
                                        <?php echo $emailBody;?>
                                    </textarea> 
                                </div>                                                                                                                                                                                   
                            </div> 
                        </form> 
                    </div> 
                    <!-- Sidebar --> 
                    <?php include ('sidebar.php') ?> 
                </div>
                    
            </div>  
        </div> 
        <hr />
        <!-- Imported styles on this page --> 
        <link rel="stylesheet" href="assets/js/wysihtml5/bootstrap-wysihtml5.css" id="style-resource-1"> 
        <script src="assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script> 
        <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script> 
        <script src="assets/js/bootstrap.js" id="script-resource-3"></script> 
        <script src="assets/js/joinable.js" id="script-resource-4"></script> 
        <script src="assets/js/resizeable.js" id="script-resource-5"></script> 
        <script src="assets/js/neon-api.js" id="script-resource-6"></script> 
        <script src="assets/js/cookies.min.js" id="script-resource-7"></script> 
        <script src="assets/js/wysihtml5/wysihtml5-0.4.0pre.min.js" id="script-resource-8"></script> 
        <script src="assets/js/wysihtml5/bootstrap-wysihtml5.js" id="script-resource-9"></script> 
        <script src="assets/js/neon-chat.js" id="script-resource-10"></script> 
        <!-- JavaScripts initializations and stuff --> 
        <script src="assets/js/neon-mail.js" id="script-resource-14"></script> 
        <script src="assets/js/neon-custom.js" id="script-resource-11"></script> 
        <!-- Demo Settings --> 
        <script src="assets/js/neon-demo.js" id="script-resource-12"></script> 
        <script src="assets/js/neon-skins.js" id="script-resource-13"></script> 
        <script>
            function onChangedFunction() {
                document.getElementById("send").disabled = false;
                document.getElementById("send").classList.add('btn-success');                           
            }                     
        </script>        
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