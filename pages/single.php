	<?php
	$page_title = "Watch Movie";
	include('../partials/header.php');
	include('../dashboard/includes/db.php');
	include('../dashboard/controllers/movieController.php');
	if (isset($_GET['mid'])) {
		$mid = (int) htmlspecialchars($_GET['mid']);
		//    increase view numbers

		$q = "SELECT * FROM `movies` WHERE `id`='$mid';";

		$result = $con->query($q); ?>

 	<!-- single -->
 	<div class="single-page-agile-main">
 		<div class="container">
 			<!-- /w3l-medile-movies-grids -->
 			<div class="agileits-single-top">
 				<ol class="breadcrumb">
 					<li><a href="/">Home</a></li>
 					<li class="active">Single</li>
 				</ol>
 			</div>
 			<div class="single-page-agile-info">
 				<!-- /movie-browse-agile -->
 				<?php
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							//                        echo "Views".$row['views']. '<br>';
							$view = $row['views'] + 1;
							$query_view = "UPDATE `movies` SET `views` = '$view' WHERE   `id`='$mid';";
							//                        echo $query_view . '<br>';
							$con->query($query_view)
							//                        if ($con->query($query_view)) {
							////                            echo "View Updated :" . $row['views'].' To '.$view;
							//                        }
					?>
 						<div class="show-top-grids-w3lagile">
 							<div class="col-sm-8 single-left">
 								<h2><?php echo $row['name']; ?></h2>
 								<br>
 								<div class="row">

 									<div class="col-md-4 movie-img">
 										<img src="<?php echo  HOST . $row['image']; ?>" alt="" class="img-thumbnail">

 									</div>
 									<div class="col-md-8">
 										<table class="table table-bordered movie-info">
 											<tbody>

 												<tr>
 													<th>Date of Release</th>
 													<td>
 														<h4><?php echo date('M Y', strtotime($row['release_date'])); ?></h4>
 													</td>
 												</tr>


 												<tr>
 													<th>Genres</th>
 													<td>
 														<?php get_genress($row['id']); ?>
 													</td>
 												</tr>
 												<tr>
 													<th>Star Rating</th>
 													<td>
 														<h4><?php

																			include(__DIR__ . "/../dashboard/includes/star_rating.php"); ?></h4>
 													</td>
 												</tr>
 												<tr>
 													<th>Story</th>
 													<td>
 														<?php echo $row['story']; ?>
 													</td>
 												</tr>
 											</tbody>
 										</table>
 									</div>
 								</div>
 								<hr>
 								<div class="song">
 									<div class="song-info">
 										<h3>Watch Now</h3>
 									</div>
 									<div class="video-grid-single-page-agileits">
 										<div id="video">
 											<video width="100%" controls poster="<?php echo HOST . $row['banner']; ?>">
 												<source src="<?php echo HOST . $row['video'] ?>" type="video/<?php echo pathinfo($row['video'], PATHINFO_EXTENSION); ?>">
 											</video>
 										</div>
 									</div>
 								</div>

 								<div class="clearfix"></div>

 							</div>
 							<?php $name = $row['name'];
								$q = "SELECT * FROM `movies` WHERE`name` LIKE '%" . $name . "%' LIMIT 5;";
								$res = $con->query($q);
								?>
 							<div class="col-md-4 single-right">
 								<h3>Up Next</h3>
 								<div class="single-grid-right">
 									<?php if ($res->num_rows > 0) {
											while ($r = $res->fetch_assoc()) {
										?>
 											<div class="single-right-grids">
 												<div class="col-md-4 single-right-grid-left">
 													<a href="<?php echo HOST; ?>pages/single.php?mid=<?php echo $r['id']; ?>"><img src="<?php echo HOST . $r['image']; ?>" alt="" /></a>
 												</div>
 												<div class="col-md-8 single-right-grid-right">
 													<a href="<?php echo HOST; ?>pages/single.php?mid=<?php echo $r['id']; ?>" class="title"><?php echo $r['name']; ?></a>
 													<p class="author"><a href="#" class="author">By:Admin</a></p>
 													<p class="views"><?php echo number_format($r['views']) . ' '; ?> views</p>
 												</div>
 												<div class="clearfix"></div>
 											</div>
 									<?php }
										} ?>

 								</div>
 							</div>


 							<div class="clearfix"></div>
 						</div>
 				<?php
						}
					} ?>
 				<!-- //movie-browse-agile -->



 			</div>
 			<!-- //w3l-latest-movies-grids -->
 		</div>
 	</div>
 	<!-- //w3l-medile-movies-grids -->
 <?php
	}
	include('../partials/footer.php'); ?>