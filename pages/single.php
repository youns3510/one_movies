<?php
include('../partials/header.php');
include('../dashboard/includes/db.php');
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
								<div class="song">
									<div class="song-info">
										<h3><?php echo $row['name']; ?></h3>
									</div>
									<div class="video-grid-single-page-agileits">
										<div id="video">
											<video width="100%" controls poster="<?php echo HOST . $row['banner']; ?>">
												<source src="<?php echo HOST . $row['video'] ?>" type="video/<?php echo pathinfo($row['video'], PATHINFO_EXTENSION); ?>">
											</video>
										</div>
									</div>
								</div>
								<div class="song-grid-right">
									<div class="story">


										<?php echo $row['story']; ?>
									</div>
									<div class="share">
										<h5>Share this</h5>
										<div class="single-agile-shar-buttons">
											<ul>
												<li>
													<div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
													<script>
														(function(d, s, id) {
															var js, fjs = d.getElementsByTagName(s)[0];
															if (d.getElementById(id)) return;
															js = d.createElement(s);
															js.id = id;
															js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
															fjs.parentNode.insertBefore(js, fjs);
														}(document, 'script', 'facebook-jssdk'));
													</script>
												</li>
												<li>
													<div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a>
													</div>
												</li>
												<li class="news-twitter">
													<a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow
														@w3layouts</a>
													<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
												</li>
												<li>
													<a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to
														@w3layouts</a>
													<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
												</li>
												<li>
													<!-- Place this tag where you want the +1 button to render. -->
													<div class="g-plusone" data-size="medium"></div>

													<!-- Place this tag after the last +1 button tag. -->
													<script type="text/javascript">
														(function() {
															var po = document.createElement('script');
															po.type = 'text/javascript';
															po.async = true;
															po.src = 'https://apis.google.com/js/platform.js';
															var s = document.getElementsByTagName('script')[0];
															s.parentNode.insertBefore(po, s);
														})();
													</script>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>

								<div class="all-comments">
									<div class="all-comments-info">
										<a href="#">Comments</a>
										<div class="agile-info-wthree-box">
											<form>
												<input type="text" placeholder="Name" required="">
												<input type="text" placeholder="Email" required="">
												<input type="text" placeholder="Phone" required="">
												<textarea placeholder="Message" required=""></textarea>
												<input type="submit" value="SEND">
												<div class="clearfix"></div>
											</form>
										</div>
									</div>
									<div class="media-grids">
										<div class="media">
											<h5>TOM BROWN</h5>
											<div class="media-left">
												<a href="#">
													<img src="<?php echo HOST; ?>partials/images/user.jpg" title="One movies" alt=" " />
												</a>
											</div>
											<div class="media-body">
												<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex
													pretium hendrerit maecenas imperdiet ipsum id ex pretium
													hendrerit</p>
												<span>View all posts by :<a href="#"> Admin </a></span>
											</div>
										</div>
										<div class="media">
											<h5>MARK JOHNSON</h5>
											<div class="media-left">
												<a href="#">
													<img src="<?php echo HOST; ?>partials/images/user.jpg" title="One movies" alt=" " />
												</a>
											</div>
											<div class="media-body">
												<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex
													pretium hendrerit maecenas imperdiet ipsum id ex pretium
													hendrerit</p>
												<span>View all posts by :<a href="#"> Admin </a></span>
											</div>
										</div>
										<div class="media">
											<h5>STEVEN SMITH</h5>
											<div class="media-left">
												<a href="#">
													<img src="<?php echo HOST; ?>partials/images/user.jpg" title="One movies" alt=" " />
												</a>
											</div>
											<div class="media-body">
												<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex
													pretium hendrerit maecenas imperdiet ipsum id ex pretium
													hendrerit</p>
												<span>View all posts by :<a href="#"> Admin </a></span>
											</div>
										</div>

									</div>
								</div>
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