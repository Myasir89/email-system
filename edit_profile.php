<?php
include('support/session.php');
include('support/profile.php');
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
        <script
            >window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-141030632-1', {"groups":"laborator_analytics","link_attribution":true,"linker":{"accept_incoming":true,"domains":["laborator.co","kaliumtheme.com","oxygentheme.com","neontheme.com","themeforest.net","laborator.ticksy.com"]}});
        </script> 
        <title>Neon | Lockscreen</title> 
        <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1"> 
        <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2"> 
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3"> 
        <link rel="stylesheet" href="assets/css/bootstrap.css" id="style-resource-4"> 
        <link rel="stylesheet" href="assets/css/neon-core.css" id="style-resource-5"> 
        <link rel="stylesheet" href="assets/css/neon-theme.css" id="style-resource-6"> 
        <link rel="stylesheet" href="assets/css/neon-forms.css" id="style-resource-7"> 
        <link rel="stylesheet" href="assets/css/custom.css" id="style-resource-8"> 
        <script src="assets/js/jquery-1.11.3.min.js"></script> 
        <style>
            /*Profile */
            .profile-avatar-wrapper {
            height: 140px;
            width: 140px;           
            position: relative;
            border: 3px solid #fff;
            border-radius: 90%;
            overflow: hidden;
            box-shadow: 1px 1px 15px -5px black;
            transition: all 0.3s ease;
            }

            .camera_icon{
                position: absolute;
                bottom: 20px;
                left: 207px;
                width: 35px;
                height: 35px;
                font-size: 20px;
                line-height: 35px;
                text-align: center;
                border-radius: 50%;
                background: #e4e6eb;
                color: black;
                cursor: pointer;
            }

            .profile-avatar-wrapper .profile-pic {
            height: 100%;
            width: 100%;
            border-radius: 90%;
            transition: all 0.3s ease;
            }

        
        </style>


    </head> 
    
    <body class="page-body login-page is-lockscreen login-form-fall" data-url="https://demo.neontheme.com"> 
        <div class="login-container"> 
            <div class="login-header"> 
                <div class="login-content"> 
                    <a href="#" class="logo"> 
                        <img src="assets/images/logo%402x.png" alt="" width="100" /> 
                    </a>   
                    <p class="description">Dear <?php echo $fullName; ?>, you can edit your profile 
                    informnation here</p>
                </div>
            </div>
            <div class="login-form"> 
                <div class="login-content"> 
                    <form method="post" role="form" enctype="multipart/form-data"> 
                        <div class="form-group lockscreen-input"> 
                            <div class="lockscreen-thumb"> 
                                  <div class="profile-avatar-wrapper">
                                    <img class="profile-pic" src="<?php if($image != ""){ echo 'assets/images/'.$image;  }else{ echo 'assets/images/user.png';  }?>"  />                                    
                                    <input class="file-upload" name="profile" type="file" accept="image/*" style="display:none; visibility:hidden;"/>
                                </div>
                            </div>
                            <div class="lockscreen-details"> 
                                <i class="entypo-camera camera_icon" aria-hidden="true"></i>                                            
                            </div> 
                            <h4 style="color:white"><?php echo $userName; ?></h4> 
                            <span><?php echo $userEmail; ?></span> 
                        </div> 
                        <div class="form-group"> 
                            <div class="input-group"> 
                                <div class="input-group-addon"> <i class="entypo-user"></i> </div> 
                                <input type="text" class="form-control" name="fullName" id="name" placeholder="Full Name"  value="<?php echo $fullName; ?>" autocomplete="off" /> 
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="input-group"> 
                                <div class="input-group-addon"> <i class="entypo-phone"></i> </div> 
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone No." value="<?php echo $phone; ?>" autocomplete="off" /> 
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="input-group"> 
                                <div class="input-group-addon"> <i class="entypo-key"></i> </div> 
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" autocomplete="off" /> 
                            </div>
                        </div>                    
                        <div class="form-group">
                            <button type="submit" name="update" class="btn btn-primary btn-block btn-login"> 
                                <i class="entypo-login"></i>Save
                            </button>
                        </div> 
                    </form> 
                
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
        <script src="assets/js/neon-login.js" id="script-resource-9"></script> 
        <script src="assets/js/neon-custom.js" id="script-resource-10"></script> 
        <script src="assets/js/neon-demo.js" id="script-resource-11"></script> 
        <script src="assets/js/neon-skins.js" id="script-resource-12"></script> 
        <script type="text/javascript" src="assets/js/pic.js"></script>
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