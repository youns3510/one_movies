<?php
$host="http://localhost:8000/";
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo $host;?>partials/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $host;?>partials/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo $host;?>partials/css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo $host;?>partials/css/faqstyle.css" type="text/css" media="all" />
<link href="<?php echo $host;?>partials/css/single.css" rel='stylesheet' type='text/css' />
<link href="<?php echo $host;?>partials/css/medile.css" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="<?php echo $host;?>partials/css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="<?php echo $host;?>partials/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo $host;?>partials/css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="<?php echo $host;?>partials/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="<?php echo $host;?>partials/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo $host;?>partials/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 
<!-- //banner-bottom-plugin -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo $host;?>partials/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $host;?>partials/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
				<a href="<?php echo $host;?>partials/index.html"><h1>One<span>Movies</span></h1></a>
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
					<li><a href="<?php echo $host;?>partials/#" data-toggle="modal" data-target="#myModal">Login</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
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
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="submit" value="Login">
								</form>
							  </div>
							  <div class="form">
								<h3>Create an account</h3>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="email" name="Email" placeholder="Email Address" required="">
								  <input type="text" name="Phone" placeholder="Phone Number" required="">
								  <input type="submit" value="Register">
								</form>
							  </div>
							  <div class="cta"><a href="<?php echo $host;?>partials/#">Forgot your password?</a></div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
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
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
							<li class="active"><a href="<?php echo $host;?>partials/index.html">Home</a></li>
							<li class="dropdown">
								<a href="<?php echo $host;?>partials/#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo $host;?>partials/genres.html">Action</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Biography</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Crime</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Family</a></li>
											<li><a href="<?php echo $host;?>partials/horror.html">Horror</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Romance</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Sports</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">War</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo $host;?>partials/genres.html">Adventure</a></li>
											<li><a href="<?php echo $host;?>partials/comedy.html">Comedy</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Documentary</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Fantasy</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Thriller</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo $host;?>partials/genres.html">Animation</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Costume</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Drama</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">History</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Musical</a></li>
											<li><a href="<?php echo $host;?>partials/genres.html">Psychological</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="<?php echo $host;?>partials/series.html">tv - series</a></li>
							<li><a href="<?php echo $host;?>partials/news.html">news</a></li>
							<li class="dropdown">
								<a href="<?php echo $host;?>partials/#" class="dropdown-toggle" data-toggle="dropdown">Country <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="<?php echo $host;?>partials/genres.html">Asia</a></li>
												<li><a href="<?php echo $host;?>partials/genres.html">France</a></li>
												<li><a href="<?php echo $host;?>partials/genres.html">Taiwan</a></li>
												<li><a href="<?php echo $host;?>partials/genres.html">United States</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="<?php echo $host;?>partials/genres.html">China</a></li>
												<li><a href="<?php echo $host;?>partials/genres.html">HongCong</a></li>
												<li><a href="<?php echo $host;?>partials/genres.html">Japan</a></li>
												<li><a href="<?php echo $host;?>partials/genres.html">Thailand</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="<?php echo $host;?>partials/genres.html">Euro</a></li>
												<li><a href="<?php echo $host;?>partials/genres.html">India</a></li>
												<li><a href="<?php echo $host;?>partials/genres.html">Korea</a></li>
												<li><a href="<?php echo $host;?>partials/genres.html">United Kingdom</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="<?php echo $host;?>partials/short-codes.html">Short Codes</a></li>
							<li><a href="<?php echo $host;?>partials/list.html">A - z list</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->