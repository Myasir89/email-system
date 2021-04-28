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
        <title>Mailbox</title> 
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
                    <div class="mail-body"> <div class="mail-header"> 
                        <!-- title --> 
                        <h3 class="mail-title">Sent<span class="count"></span> </h3> 

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
                                <th colspan="4"> <div class="mail-select-options">Mark as Read</div> <div class="mail-pagination" colspan="2"> <strong>1-30</strong> <span>of 789</span> <div class="btn-group"> <a href="#" class="btn btn-sm btn-white"><i class="entypo-left-open"></i></a> <a href="#" class="btn btn-sm btn-white"><i class="entypo-right-open"></i></a> </div> </div> </th> 
                            </tr> 
                        </thead>
                        <!-- email list --> 
                        <tbody> 
                            <tr class="unread">
                                <!-- new email class: unread --> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star stared"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Facebook</a> </td> 
                                <td class="col-subject"> <a href="message.php">Reset your account password</a> </td> <td class="col-options"> <a href="message.php"><i class="entypo-attach"></i></a> </td> <td class="col-time">13:52</td> </tr> <tr> <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Google AdWords</a> </td> 
                                <td class="col-subject"> <a href="message.php">Google AdWords: Ads not serving</a> </td> 
                                <td class="col-options"></td> <td class="col-time">09:27</td> </tr> <tr> <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Apple.com</a> </td> <td class="col-subject"> <a href="message.php"> <span class="label label-danger">Business</span>Your apple account ID has been accessed from un-familiar location.</a> </td> 
                                <td class="col-options"></td> 
                                <td class="col-time">Today</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">World Weather Online</a> </td> 
                                <td class="col-subject"> <a href="message.php">Over Throttle Alert</a> </td> 
                                <td class="col-options"> <a href="message.php"><i class="entypo-attach"></i></a> </td> 
                                <td class="col-time">Yesterday</td> 
                            </tr> 
                            <tr class="unread"> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Dropbox</a> </td> 
                                <td class="col-subject"> <a href="message.php">Complete your Dropbox setup!</a> </td> 
                                <td class="col-options"></td> 
                                <td class="col-time">4 Dec</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star stared"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Arlind Nushi</a> </td> 
                                <td class="col-subject"> <a href="message.php"> <span class="label label-warning">Friends</span>Work progress for Neon Project</a> </td> 
                                <td class="col-options"></td> <td class="col-time">28 Nov</td> 
                            </tr> 
                            <tr class="unread">
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star stared"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Jose D. Gardner</a> </td> 
                                <td class="col-subject"> <a href="message.php">Regarding to your website issues.</a> </td> 
                                <td class="col-options"> <a href="message.php"><i class="entypo-attach"></i></a> </td> 
                                <td class="col-time">22 Nov</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Aurelio D. Cummins</a> </td> 
                                <td class="col-subject"> <a href="message.php">Steadicam operator</a> </td> 
                                <td class="col-options"></td> 
                                <td class="col-time">15 Nov</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Filan Fisteku</a> </td> 
                                <td class="col-subject"> <a href="message.php">You are loosing clients because your website is not responsive.</a> </td> 
                                <td class="col-options"></td> 
                                <td class="col-time">02 Nov</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Instagram</a> </td> 
                                <td class="col-subject"> <a href="message.php">Instagram announces the new video uploadin feature.</a> </td> 
                                <td class="col-options"> <a href="message.php"><i class="entypo-attach"></i></a> </td> 
                                <td class="col-time">26 Oct</td> 
                            </tr> 
                            <tr class="unread"> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">James Blue</a> </td> 
                                <td class="col-subject"> <a href="message.php"> <span class="label label-info">Sports</span>There are 20 notifications</a> </td> <td class="col-options"></td> 
                                <td class="col-time">18 Oct</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">SomeHost</a> </td> 
                                <td class="col-subject"> <a href="message.php">Bugs in your system.</a> </td> 
                                <td class="col-options"></td> <td class="col-time">01 Sep</td> 
                            </tr> 
                            <tr class="unread">
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star stared"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Facebook</a> </td> 
                                <td class="col-subject"> <a href="message.php">Reset your account password</a> </td> 
                                <td class="col-options"> <a href="message.php"><i class="entypo-attach"></i></a> </td> 
                                <td class="col-time">13:52</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Google AdWords</a> </td> 
                                <td class="col-subject"> <a href="message.php">Google AdWords: Ads not serving</a> </td> 
                                <td class="col-options"></td> <td class="col-time">09:27</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Apple.com</a> </td> 
                                <td class="col-subject"> <a href="message.php"> <span class="label label-danger">Business</span>Your apple account ID has been accessed from un-familiar location.</a> </td> 
                                <td class="col-options"></td> 
                                <td class="col-time">Today</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">World Weather Online</a> </td> 
                                <td class="col-subject"> <a href="message.php">Over Throttle Alert</a> </td> 
                                <td class="col-options"> <a href="message.php"><i class="entypo-attach"></i></a> </td> 
                                <td class="col-time">Yesterday</td> 
                            </tr> 
                            <tr class="unread"> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Dropbox</a> </td> 
                                <td class="col-subject"> <a href="message.php">Complete your Dropbox setup!</a> </td> 
                                <td class="col-options"></td> 
                                <td class="col-time">4 Dec</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star stared"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Arlind Nushi</a> </td> 
                                <td class="col-subject"> <a href="message.php"> <span class="label label-warning">Friends</span>Work progress for Neon Project</a> </td> 
                                <td class="col-options"></td> <td class="col-time">28 Nov</td> 
                            </tr> 
                            <tr class="unread">
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star stared"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Jose D. Gardner</a> </td> 
                                <td class="col-subject"> <a href="message.php">Regarding to your website issues.</a> </td> 
                                <td class="col-options"> <a href="message.php"><i class="entypo-attach"></i></a> </td> 
                                <td class="col-time">22 Nov</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Aurelio D. Cummins</a> </td> 
                                <td class="col-subject"> <a href="message.php">Steadicam operator</a> </td> 
                                <td class="col-options"></td> <td class="col-time">15 Nov</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Filan Fisteku</a> </td> 
                                <td class="col-subject"> <a href="message.php">You are loosing clients because your website is not responsive.</a> </td> 
                                <td class="col-options"></td> <td class="col-time">02 Nov</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">Instagram</a> </td> 
                                <td class="col-subject"> <a href="message.php">Instagram announces the new video uploadin feature.</a> </td> 
                                <td class="col-options"> <a href="message.php"><i class="entypo-attach"></i></a> </td> 
                                <td class="col-time">26 Oct</td> 
                            </tr> 
                            <tr class="unread"> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">James Blue</a> </td> 
                                <td class="col-subject"> <a href="message.php"> <span class="label label-info">Sports</span>There are 20 notifications</a> </td> <td class="col-options"></td> 
                                <td class="col-time">18 Oct</td> 
                            </tr> 
                            <tr> 
                                <td> <div class="checkbox checkbox-replace"> <input type="checkbox" /> </div> </td> 
                                <td class="col-name"> <a href="#" class="star"> <i class="entypo-star"></i> </a> <a href="message.php" class="col-name">SomeHost</a> </td> 
                                <td class="col-subject"> <a href="message.php">Bugs in your system.</a> </td> 
                                <td class="col-options"></td> <td class="col-time">01 Sep</td> 
                            </tr> 
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