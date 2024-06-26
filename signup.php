<?php
include('support/signup_action.php');
if(!isset($_SESSION['login_user'])){     
}
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
    <title>Registertion</title> 
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
    <body class="page-body login-page login-form-fall" data-url="https://demo.neontheme.com"> 
        <script type="text/javascript">var baseurl = 'index.html';</script> 
        
        <div class="login-container"> 

            <div class="login-header login-caret"> 
                <div class="login-content"> 
                    <a href="dashboard/main/index.html" class="logo"> <img src="assets/images/logo%402x.png" width="120" alt="" /> </a> 
                    <p class="description">Create an account, it's free and takes few moments only!</p> 
                    <div class="login-progressbar-indicator"> <h3>43%</h3> <span>logging in...</span> </div> 
                </div>                 
            </div> 

            <div class="login-progressbar"><div></div></div> 
            <div class="login-form"> 
                <div class="login-content"> 
                    <form method="post" name="form_register" role="form" method="POST" action="" id="form_register"> 
                    <?php if(isset($success)){ ?>
                        <div class="alert alert-success"><?php echo $success; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php } ?>
                    <?php if(isset($error)){ ?>
                        <div class="alert alert-danger"><?php echo $error; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php } ?>
                        <div class="form-steps"> 
                            <div class="step current" id="step-1"> 
                                <div class="form-group"> 
                                    <div class="input-group"> 
                                        <div class="input-group-addon"> <i class="entypo-user-add"></i> </div> 
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" data-mask="[a-zA-Z0-9_]+" data-is-regex="true" autocomplete="off" /> 
                                        <span class="input-group-addon " style="color:white">@mail.com</span>
                                    </div> 
                                </div> 
                                <div class="form-group"> 
                                    <div class="input-group"> 
                                        <div class="input-group-addon"> <i class="entypo-user"></i> </div> 
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" autocomplete="off" /> 
                                    </div> 
                                </div>                                 
                                <div class="form-group"> 
                                    <div class="input-group"> 
                                        <div class="input-group-addon"> <i class="entypo-calendar"></i> </div> 
                                        <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Date of Birth (DD/MM/YYYY)" data-mask="date" autocomplete="off" /> 
                                    </div> 
                                </div>                     
                                <div class="form-group"> 
                                    <button type="button" data-step="step-2" class="btn btn-primary btn-block btn-login"> 
                                        <i class="entypo-right-open-mini"></i>Next Step
                                    </button> 
                                </div> 
                                <div class="form-group">Step 1 of 2</div> 
                            </div> 
                            <div class="step" id="step-2"> 
                                <div class="form-group"> 
                                    <div class="input-group"> 
                                        <div class="input-group-addon"> <i class="entypo-phone"></i> </div> 
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" data-mask="phone" autocomplete="off" /> 
                                    </div> 
                                </div>
                                <div class="form-group"> 
                                    <div class="input-group"> 
                                        <div class="input-group-addon"> <i class="entypo-lock"></i> </div> 
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Choose Password" autocomplete="off" /> 
                                    </div> 
                                </div> 
                                <div class="form-group"> 
                                    <div class="input-group"> 
                                        <div class="input-group-addon"> <i class="entypo-lock"></i> </div> 
                                        <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off" /> 
                                    </div> 
                                </div> 
                                <div class="form-group"> 
                                     <button type="submit" name="sign_up_btn" class="btn btn-success btn-block btn-login"> 
                                        <i class="entypo-right-open-mini"></i>Complete Registration
                                    </button>  
                                  
                                </div> 
                                <div class="form-group">Step 2 of 2</div> 
                            </div> 
                        </div> 
                    </form> 
                    <div class="login-bottom-links"> <a href="index.php" class="link"> <i class="entypo-lock"></i>Return to Login Page</a> </div>
                </div>
            </div> 
        </div>
        <script src="assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script> 
        <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script> 
        <script src="assets/js/bootstrap.js" id="script-resource-3"></script> 
        <script src="assets/js/joinable.js" id="script-resource-4"></script> 
        <script src="assets/js/resizeable.js" id="script-resource-5"></script> 
        <script src="assets/js/neon-api.js" id="script-resource-6"></script> 
        <script src="assets/js/cookies.min.js" id="script-resource-7"></script> 
        <script src="assets/js/jquery.validate.min.js" id="script-resource-8"></script> 
        <script src="assets/js/neon-register.js" id="script-resource-9"></script> 
        <script src="assets/js/jquery.inputmask.bundle.js" id="script-resource-10"></script> 
        <script src="assets/js/neon-custom.js" id="script-resource-11"></script> 
        <script src="assets/js/neon-demo.js" id="script-resource-12"></script> 
        <script src="assets/js/neon-skins.js" id="script-resource-13"></script> 
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