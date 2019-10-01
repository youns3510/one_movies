<?php
include_once('dashboard/includes/db.php');
include_once('dashboard/controllers/userController.php');
include('partials/header.php');

$slid_query = "SELECT `name`,`image`,`story` FROM `movies` ORDER BY `created_at` DESC LIMIT 5;";
$result = $con->query($slid_query); ?>
    <!-- banner -->
    <div id="slidey" style="display:none;">
        <ul>
            <?php if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <li>
                        <img src="<?php echo $host . $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                        <p class='title'><?php echo $row['name']; ?></p>
                        <p class='description'><?php echo substr($row['story'], 0, 300); ?></p>
                    </li>
                <?php }
            } ?>
        </ul>
    </div>
    <script src="<?php echo $host; ?>partials/js/jquery.slidey.js"></script>
    <script src="<?php echo $host; ?>partials/js/jquery.dotdotdot.min.js"></script>
    <script type="text/javascript">
        $("#slidey").slidey({
            interval: 8000,
            listCount: 5,
            autoplay: false,
            showList: true
        });
        $(".slidey-list-description").dotdotdot();
    </script>
    <!-- //banner -->
    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="w3_agile_banner_bottom_grid">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m13.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
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
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
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
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m11.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">X-Men</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m12.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">Greater</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m7.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">Light B/t Oceans</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m8.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">The BFG</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m9.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">Central Intelligence</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
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
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m10.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">Don't Think Twice</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m17.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">Peter</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m15.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">God’s Compass</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
        </div>
    </div>
    <!-- //banner-bottom -->
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
    <!-- general -->
    <div class="general">
        <h4 class="latest-text w3_latest_text">Featured Movies</h4>
        <div class="container">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab"
                                                              aria-controls="home" aria-expanded="true">Featured</a>
                    </li>
                    <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab"
                                               aria-controls="profile" aria-expanded="false">Top viewed</a></li>
                    <li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab"
                                               aria-controls="rating" aria-expanded="true">Top Rating</a></li>
                    <li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab"
                                               aria-controls="imdb" aria-expanded="false">Recently Added</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                        <div class="w3_agile_featured_movies">
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m15.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">God’s Compass</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m2.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">Bad Moms</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m5.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">Jason Bourne</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m16.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">Rezort</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m17.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">Peter</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m18.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">ISRA 88</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m1.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">War Dogs</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m14.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">The Other Side</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m19.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">Civil War</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m20.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">The Secret Life of Pets</a>
                                        </h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m21.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">The Jungle Book</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                            src="<?php echo $host; ?>partials/images/m22.jpg" title="album-name"
                                            class="img-responsive" alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo $host; ?>pages/single.php">Assassin's Creed 3</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m22.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">Assassin's Creed 3</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m2.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">Bad Moms</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m9.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">Central Intelligence</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m7.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">Light B/t Oceans</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m11.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">X-Men</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m8.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">The BFG</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="<?php echo $host; ?>pages/single.php" class="hvr-shutter-out-horizontal"><img
                                        src="<?php echo $host; ?>partials/images/m17.jpg" title="album-name"
                                        class="img-responsive" alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo $host; ?>pages/single.php">Peter</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
                        <?php $q = " SELECT
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
				star_rating.movie_id = movies.id
		ORDER BY
				`created_at`
		DESC
		LIMIT 10;";
                        $result = $con->query($q);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {


                                ?>
                                <div class="col-md-2 w3l-movie-gride-agile">
                                    <a href="<?php echo $host; ?>pages/single.php?mid=<?php echo $row['id']; ?>"
                                       class="hvr-shutter-out-horizontal"><img
                                                src="<?php echo $host . $row['image']; ?>" title="album-name"
                                                class="img-responsive" alt=" "/>
                                        <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                        aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                        <div class="w3l-movie-text">
                                            <h6>
                                                <a href="<?php echo $host; ?>pages/single.php?mid=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                                            </h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p><?php echo date('Y', strtotime($row['release_date'])); ?></p>
                                            <div class="block-stars">
                                                <?php include('dashboard/includes/star_rating.php'); ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                            <?php }
                        } ?>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="ribben">
                    <p>NEW</p>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- //general -->
    <!-- Latest-tv-series -->
    <div class="Latest-tv-series">
        <h4 class="latest-text w3_latest_text w3_home_popular">Most Popular Movies</h4>
        <div class="container">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="agile_tv_series_grid">
                                <div class="col-md-6 agile_tv_series_grid_left">
                                    <div class="w3ls_market_video_grid1">
                                        <img src="<?php echo $host; ?>partials/images/h1-1.jpg" alt=" "
                                             class="img-responsive"/>
                                        <a class="w3_play_icon" href="#small-dialog">
                                            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 agile_tv_series_grid_right">
                                    <p class="fexi_header">the conjuring 2</p>
                                    <p class="fexi_header_para"><span
                                                class="conjuring_w3">Story Line<label>:</label></span> 720p,Bluray HD
                                        Free Movie Downloads, Watch Free Movies Online with high speed Free Movie
                                        Streaming | MyDownloadTube Lorraine and Ed Warren go to north London to help a
                                        single...</p>
                                    <p class="fexi_header_para"><span>Date of Release<label>:</label></span> Jun 10,
                                        2016 </p>
                                    <p class="fexi_header_para">
                                        <span>Genres<label>:</label> </span>
                                        <a href="<?php echo $host; ?>pages/genres.php">Drama</a> |
                                        <a href="<?php echo $host; ?>pages/genres.php">Adventure</a> |
                                        <a href="<?php echo $host; ?>pages/genres.php">Family</a>
                                    </p>
                                    <p class="fexi_header_para fexi_header_para1">
                                        <span>Star Rating<label>:</label></span>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="agileinfo_flexislider_grids">
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m22.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Assassin's Creed
                                                        3</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m2.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Bad Moms</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m9.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Central
                                                        Intelligence</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m7.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Light B/t Oceans</a>
                                                </h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m11.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">X-Men</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m17.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Peter</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="agile_tv_series_grid">
                                <div class="col-md-6 agile_tv_series_grid_left">
                                    <div class="w3ls_market_video_grid1">
                                        <img src="<?php echo $host; ?>partials/images/h2-1.jpg" alt=" "
                                             class="img-responsive"/>
                                        <a class="w3_play_icon1" href="#small-dialog1">
                                            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 agile_tv_series_grid_right">
                                    <p class="fexi_header">a haunting in cawdor</p>
                                    <p class="fexi_header_para"><span
                                                class="conjuring_w3">Story Line<label>:</label></span> Vivian Miller,
                                        sent to a rehabilitation programme for young offenders, where a theatre camp is
                                        used as an alternative to jail time. After she views tape ...</p>
                                    <p class="fexi_header_para"><span>Date of Release<label>:</label></span> Oct 09,
                                        2015 </p>
                                    <p class="fexi_header_para">
                                        <span>Genres<label>:</label> </span>
                                        <a href="<?php echo $host; ?>pages/genres.php">Thriller</a> |
                                        <a href="<?php echo $host; ?>pages/genres.php">Horror</a>
                                    </p>
                                    <p class="fexi_header_para fexi_header_para1">
                                        <span>Star Rating<label>:</label></span>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="agileinfo_flexislider_grids">
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m2.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Bad Moms</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m9.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Central
                                                        Intelligence</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m7.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Light B/t Oceans</a>
                                                </h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m11.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">X-Men</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m17.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Peter</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m21.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">The Jungle Book</a>
                                                </h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="agile_tv_series_grid">
                                <div class="col-md-6 agile_tv_series_grid_left">
                                    <div class="w3ls_market_video_grid1">
                                        <img src="<?php echo $host; ?>partials/images/h3-1.jpg" alt=" "
                                             class="img-responsive"/>
                                        <a class="w3_play_icon2" href="#small-dialog2">
                                            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 agile_tv_series_grid_right">
                                    <p class="fexi_header">civil war captain America</p>
                                    <p class="fexi_header_para"><span
                                                class="conjuring_w3">Story Line<label>:</label></span> After the
                                        Avengers leaves some&nbsp;collateral damage, political pressure mounts to
                                        install a system of accountability.&nbsp;The new status quo deeply divides ...
                                    </p>
                                    <p class="fexi_header_para"><span>Date of Release<label>:</label></span> May 06,
                                        2016 </p>
                                    <p class="fexi_header_para">
                                        <span>Genres<label>:</label> </span>
                                        <a href="<?php echo $host; ?>pages/genres.php">Action</a> |
                                        <a href="<?php echo $host; ?>pages/genres.php">Adventure</a>
                                    </p>
                                    <p class="fexi_header_para fexi_header_para1">
                                        <span>Star Rating<label>:</label></span>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="agileinfo_flexislider_grids">
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m2.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Bad Moms</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m9.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Central
                                                        Intelligence</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m7.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Light B/t Oceans</a>
                                                </h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m11.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">X-Men</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m17.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">Peter</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="<?php echo $host; ?>pages/single.php"
                                           class="hvr-shutter-out-horizontal"><img
                                                    src="<?php echo $host; ?>partials/images/m20.jpg" title="album-name"
                                                    class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="<?php echo $host; ?>pages/single.php">The Secret Life of
                                                        Pets</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- flexSlider -->
            <link rel="stylesheet" href="<?php echo $host; ?>partials/css/flexslider.css" type="text/css" media="screen"
                  property=""/>
            <script defer src="<?php echo $host; ?>partials/js/jquery.flexslider.js"></script>
            <script type="text/javascript">
                $(window).load(function () {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function (slider) {
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!-- //flexSlider -->
        </div>
    </div>
    <!-- pop-up-box -->
    <script src="<?php echo $host; ?>partials/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!--//pop-up-box -->
    <div id="small-dialog" class="mfp-hide">
        <iframe src="https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>
    </div>
    <div id="small-dialog1" class="mfp-hide">
        <iframe src="https://player.vimeo.com/video/148284736"></iframe>
    </div>
    <div id="small-dialog2" class="mfp-hide">
        <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
    </div>
    <script>
        $(document).ready(function () {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- //Latest-tv-series -->
<?php include('partials/footer.php'); ?>