<?php
include('../partials/header.php');
include('../dashboard/includes/db.php');

if (isset($_GET['p'])) {
	$genres = htmlspecialchars($_GET['p']);
//	echo $genres;
	// $q = "SELECT 
	// 					movies.*,
	// 					genres.*,
	// 					star_rating.*
	// 			FROM
	// 					`movies`,
	// 					`genres`,
	// 					`star_rating`
	// 			WHERE
	// 			genres." . $genres . " = '1' AND	movies.id = genres.movie_id  AND star_rating.movie_id = genres.movie_id;";
	$q="
		SELECT
			movies.id,
			movies.name,
			movies.release_date,
			movies.image,  
			star_rating.one,
			star_rating.two,
			star_rating.three,
			star_rating.four,
			star_rating.five
		FROM
			`movies`,
			`genres`,
			`star_rating`
		WHERE
			genres.".$genres." = '1' AND movies.id = genres.movie_id AND star_rating.movie_id = genres.movie_id LIMIT 24;";
} else {
	$genres = "All ";
	$q = "
	SELECT 
	movies.id,
	movies.name,
	movies.release_date,
	movies.image,
	star_rating.one,
	star_rating.two,
	star_rating.three,
	star_rating.four,
	star_rating.five
FROM
	`movies`,
	`star_rating`
WHERE
	star_rating.movie_id = movies.id LIMIT 24;";
}
// echo $q;
$result = $con->query($q);
?>

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
<!-- /w3l-medile-movies-grids -->
<div class="general-agileits-w3l">
	<div class="w3l-medile-movies-grids">

		<!-- /movie-browse-agile -->

		<div class="movie-browse-agile">
			<!--/browse-agile-w3ls -->
			<div class="browse-agile-w3ls general-w3ls">
				<div class="tittle-head">
					<h4 class="latest-text"><?php echo $genres; ?> Movies </h4>
					<div class="container">
						<div class="agileits-single-top">
							<ol class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Genres</li>
							</ol>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="browse-inner">
						<?php
						if ($result->num_rows > 0) {						
							$data = $result->fetch_all(MYSQLI_ASSOC);	
							// foreach ($data as $key => $value) {		
							// 	include('../dashboard/includes/star_rating.php');	
							// 	foreach ($value as $key2 => $value2) {
							// 		echo $key2." : ".$value2."<br>";
								
							// 							}
							// 							echo "<br>=========================<br>";
							// 						}		


							foreach ($data as $key => $value) {							
							 ?>
								<div class="col-md-2 w3l-movie-gride-agile">
									<a href="<?php echo $host; ?>pages/single.php?mid=<?php echo $value['id'];?>" class="hvr-shutter-out-horizontal"><img src="<?php echo $host.$value['image']; ?>" title="album-name" alt=" " />
										<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									<div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="<?php echo $host; ?>pages/single.php?mid=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></h6>
										</div>
										<div class="mid-2">
											<p><?php echo date('Y',strtotime($value['release_date']));?></p>
											<div class="block-stars">
										<?php include('../dashboard/includes/star_rating.php');?>
											</div>
											<div class="clearfix"></div>
										</div>

									</div>
									<div class="ribben two">
										<p>NEW</p>
									</div>
								</div>
						<?php }?>

						<div class="clearfix"> </div>
					</div>
					<!-- //latest-movies1 -->

				</div>
			</div>
			<!--//browse-agile-w3ls -->

			<div class="blog-pagenat-wthree">
				<ul>
					<li><a class="frist" href="#">Prev</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a class="last" href="#">Next</a></li>
				</ul>
			</div>
			<?php }else{?>
				<div>
					<h1 class="h1">
						Sorry, There is no movie in this genres try to visit another genres.
					</h1>
					<hr class="hr">
				</div>
				<?php }?>
		</div>
		<!-- //movie-browse-agile -->
		<!--body wrapper start-->
		<!--body wrapper start-->
		<div class="review-slider">
			<h4 class="latest-text">Movie Reviews</h4>
			<div class="container">
				<div class="w3_agile_banner_bottom_grid">
					<div id="owl-demo" class="owl-carousel owl-theme">

						<div class="item">
							<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
								<a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img src="<?php echo $host; ?>partials/images/m13.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="<?php echo $host; ?>pages/single.php">Citizen Soldier</a></h6>
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--body wrapper end-->
			</div>
		</div>
	</div>
	<!-- //w3l-medile-movies-grids -->
</div>
<!-- //comedy-w3l-agileits -->
<?php
include('../partials/footer.php'); ?>