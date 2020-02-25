<?php
require_once(__DIR__ . '/../constants.php');
 if (!isset($_SESSION)) {      
     session_start();
 }
if ($_SERVER['SCRIPT_NAME'] == '/index.php' && isset($_SESSION["auth"]) == true && $_SESSION["auth"] == 'user') {    
    header("Location: /users/myaccount.php"); 
    exit();
}

// $host = "//" . $_SERVER['HTTP_HOST'] . "/";
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="<?php echo HOST; ?>partials/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo HOST; ?>partials/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo HOST; ?>partials/css/contactstyle.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo HOST; ?>partials/css/faqstyle.css" type="text/css" media="all"/>
    <link href="<?php echo HOST; ?>partials/css/single.css" rel='stylesheet' type='text/css'/>
    <link href="<?php echo HOST; ?>partials/css/medile.css" rel='stylesheet' type='text/css'/>
    <!-- banner-slider -->
    <link href="<?php echo HOST; ?>partials/css/jquery.slidey.min.css" rel="stylesheet">
    <!-- //banner-slider -->
    <!-- pop-up -->
    <link href="<?php echo HOST; ?>partials/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- //pop-up -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="<?php echo HOST; ?>partials/css/font-awesome.min.css"/>
    <!-- //font-awesome icons -->
    <!-- js -->
    <script type="text/javascript" src="<?php echo HOST; ?>partials/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- toastr -->
    <link rel="stylesheet" href="<?php echo HOST; ?>dashboard/includes/plugins/toastr/toastr.min.css" type="text/css"/>

    <!-- banner-bottom-plugin -->
    <link href="<?php echo HOST; ?>partials/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <script src="<?php echo HOST; ?>partials/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 5,
                itemsDesktop: [640, 4],
                itemsDesktopSmall: [414, 3]

            });

        });
    </script>
    <!-- //banner-bottom-plugin -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
          rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="<?php echo HOST; ?>partials/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo HOST; ?>partials/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <link rel="stylesheet" href="<?php echo HOST; ?>partials/css/custom.css" type="text/css"/>
    <style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(/partials/images/loading.gif) center no-repeat #fff;
}
</style>

<!-- <script src="<?php echo HOST; ?>partials/js/jquery.min.js"></script> -->
<script src="<?php echo HOST; ?>partials/js/modernizr.js"></script>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>

</head>



<body>
<!-- Paste this code after body tag -->
<div class="se-pre-con"></div>
<!-- Ends -->
<!-- header -->
<div class="header">
    <div class="container">
        <div class="w3layouts_logo">
            <a href="/"><h1>One<span>Movies</span></h1></a>
        </div>
        <div class="w3_search">
            <form action="#" method="post">
                <input type="text" name="Search" placeholder="Search" required="">
                <input type="submit" value="Go">
            </form>
        </div>
        <div class="w3l_sign_in_register">
            <ul>
        <?php 
            if (isset($_SESSION["auth"]) == true && $_SESSION["auth"] == 'user') {    
            
        ?>
           <li><a href="<?php echo HOST; ?>users/logout.php">Log out</a>
                </li>
            <?php }else{?>
                <li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 123 345 653</li>
                <li><a href="<?php echo HOST; ?>partials/#" data-toggle="modal" data-target="#myModal">Login</a>
            <?php }?>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Sign In & Sign Up
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="w3_login_module">
                        <div class="module form-module">
                            <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                                <div class="tooltip">Click Me</div>
                            </div>
                            <div class="form">
                                <h3>Login to your account</h3>
                                <form action="/" method="post" enctype="multipart/form-data">
                                    <input type="text" name="username" placeholder="Username" required="">
                                    <input type="password" name="password" placeholder="Password" required="">
                                    <input type="submit" value="Login" name="login">
                                </form>
                            </div>
                            <div class="form">
                                <h3>Create an account</h3>
                                <form action="/" method="post" enctype="multipart/form-data">
                                    <?php if (isset($errors['username'])) {
                                        echo "<span style='font-size:10px;color:#ff0000;display:block'>*" . $errors['username'] . "</span>";
                                    } ?>
                                    <input type="text" name="username" placeholder="Username">
                                    <?php if (isset($errors['password'])) {
                                        echo "<span style='font-size:10px;color:red;display:block'>*" . $errors['password'] . "</span>";
                                    } ?>
                                    <input type="password" name="password" placeholder="Password">
                                    <?php if (isset($errors['email'])) {
                                        echo "<span style='font-size:10px;color:red;display:block'>*" . $errors['email'] . "</span>";
                                    } ?>
                                    <input type="email" name="email" placeholder="Email Address">
                                    <?php if (isset($errors['phone'])) {
                                        echo "<span style='font-size:10px;color:red;'>*" . $errors['phone'] . "</span>";
                                    } ?>
                                    <input type="text" name="phone" placeholder="Phone Number">
                                    <input type="submit" value="Register" name="register">
                                </form>
                            </div>
                            <div class="cta"><a href="<?php echo HOST; ?>partials/#">Forgot your password?</a></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script>
    $('.toggle').click(function () {
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms
        $('.form').animate({
            height: "toggle",
            'padding-top': 'toggle',
            'padding-bottom': 'toggle',
            opacity: "toggle"
        }, "slow");
    });
</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->
<div class="movies_nav">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li class="dropdown">
                            <a href="<?php echo HOST; ?>partials/#" class="dropdown-toggle" data-toggle="dropdown">Genres
                                <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=action">Action</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=biography">Biography</a>
                                            </li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=crime">Crime</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=family">Family</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=horror">Horror</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=romance">Romance</a>
                                            </li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=sports">Sports</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=war">War</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=adventure">Adventure</a>
                                            </li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=comedy">Comedy</a></li>
                                            <li>
                                                <a href="<?php echo HOST; ?>pages/genres.php?g=documentary">Documentary</a>
                                            </li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=fantasy">Fantasy</a>
                                            </li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=thriller">Thriller</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=animation">Animation</a>
                                            </li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=costume">Costume</a>
                                            </li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=drama">Drama</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=history">History</a>
                                            </li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=musical">Musical</a>
                                            </li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php?g=psychological">Psychological</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo HOST; ?>pages/series.php">tv - series</a></li>
                        <li><a href="<?php echo HOST; ?>pages/news.php">news</a></li>
                        <li class="dropdown">
                            <a href="<?php echo HOST; ?>partials/#" class="dropdown-toggle" data-toggle="dropdown">Country
                                <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">Asia</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">France</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">Taiwan</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">United States</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">China</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">HongCong</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">Japan</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">Thailand</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">Euro</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">India</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">Korea</a></li>
                                            <li><a href="<?php echo HOST; ?>pages/genres.php">United Kingdom</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo HOST; ?>pages/short-codes.php">Short Codes</a></li>
                        <li><a href="<?php echo HOST; ?>pages/list.php">A - z list</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- //nav -->

<div class="general_social_icons">
        <nav class="social">
            <ul>
                <li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
                <li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
                <li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
                <li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>
            </ul>
        </nav>
    </div>
  