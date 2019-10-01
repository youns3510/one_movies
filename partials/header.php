<?php
//session_start();
if (isset($_SESSION["auth"]) && $_SESSION["auth"] == 'user') {
    header("Location: /users/myaccount.php");
    exit();
}
$host = "//" . $_SERVER['HTTP_HOST'] . "/";
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
    <link href="<?php echo $host; ?>partials/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo $host; ?>partials/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo $host; ?>partials/css/contactstyle.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo $host; ?>partials/css/faqstyle.css" type="text/css" media="all"/>
    <link href="<?php echo $host; ?>partials/css/single.css" rel='stylesheet' type='text/css'/>
    <link href="<?php echo $host; ?>partials/css/medile.css" rel='stylesheet' type='text/css'/>
    <!-- banner-slider -->
    <link href="<?php echo $host; ?>partials/css/jquery.slidey.min.css" rel="stylesheet">
    <!-- //banner-slider -->
    <!-- pop-up -->
    <link href="<?php echo $host; ?>partials/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- //pop-up -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="<?php echo $host; ?>partials/css/font-awesome.min.css"/>
    <!-- //font-awesome icons -->
    <!-- js -->
    <script type="text/javascript" src="<?php echo $host; ?>partials/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- toastr -->
    <link rel="stylesheet" href="<?php echo $host; ?>dashboard/includes/plugins/toastr/toastr.min.css" type="text/css"/>

    <!-- banner-bottom-plugin -->
    <link href="<?php echo $host; ?>partials/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <script src="<?php echo $host; ?>partials/js/owl.carousel.js"></script>
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
    <script type="text/javascript" src="<?php echo $host; ?>partials/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo $host; ?>partials/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
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
                <li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 123 345 653</li>
                <li><a href="<?php echo $host; ?>partials/#" data-toggle="modal" data-target="#myModal">Login</a>

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
                            <div class="cta"><a href="<?php echo $host; ?>partials/#">Forgot your password?</a></div>
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
                            <a href="<?php echo $host; ?>partials/#" class="dropdown-toggle" data-toggle="dropdown">Genres
                                <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=action">Action</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=biography">Biography</a>
                                            </li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=crime">Crime</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=family">Family</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=horror">Horror</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=romance">Romance</a>
                                            </li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=sports">Sports</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=war">War</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=adventure">Adventure</a>
                                            </li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=comedy">Comedy</a></li>
                                            <li>
                                                <a href="<?php echo $host; ?>pages/genres.php?p=documentary">Documentary</a>
                                            </li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=fantasy">Fantasy</a>
                                            </li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=thriller">Thriller</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=animation">Animation</a>
                                            </li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=costume">Costume</a>
                                            </li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=drama">Drama</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=history">History</a>
                                            </li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=musical">Musical</a>
                                            </li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php?p=psychological">Psychological</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $host; ?>pages/series.php">tv - series</a></li>
                        <li><a href="<?php echo $host; ?>pages/news.php">news</a></li>
                        <li class="dropdown">
                            <a href="<?php echo $host; ?>partials/#" class="dropdown-toggle" data-toggle="dropdown">Country
                                <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo $host; ?>pages/genres.php">Asia</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php">France</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php">Taiwan</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php">United States</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo $host; ?>pages/genres.php">China</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php">HongCong</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php">Japan</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php">Thailand</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="<?php echo $host; ?>pages/genres.php">Euro</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php">India</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php">Korea</a></li>
                                            <li><a href="<?php echo $host; ?>pages/genres.php">United Kingdom</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $host; ?>pages/short-codes.php">Short Codes</a></li>
                        <li><a href="<?php echo $host; ?>pages/list.php">A - z list</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- //nav -->