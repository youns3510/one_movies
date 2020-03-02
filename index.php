<?php
$page_title="Home";
$active_home = "active";
// echo strlen('new Assassin’s Creed ');
include_once 'dashboard/includes/db.php';
include_once 'dashboard/controllers/movieController.php';
include 'partials/header.php';

$slid_query = "SELECT `name`,`banner`,`story` FROM `movies` ORDER BY `created_at` DESC LIMIT 5;";
$result  = $con->query($slid_query); ?>
<!-- banner -->
<div id="slidey" style="display:none;">
    <ul>
        <?php if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
                <li>
                    <img src="<?php echo HOST . $row['banner']; ?>" alt="<?php echo substr($row['name'], 0, 23); ?>">
                    <p class='title'><?php echo substr($row['name'], 0, 23); ?>
                    </p>
                    <p class='description'><?php echo substr($row['story'], 0, 300); ?>
                    </p>
                </li>
        <?php }
        } ?>
    </ul>
</div>
<script src="<?php echo HOST; ?>partials/js/jquery.slidey.js"></script>
<script src="<?php echo HOST; ?>partials/js/jquery.dotdotdot.min.js"></script>
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

                <?php
                $q = "SELECT DISTINCT `id`,`name`,`release_date`,`image`,`created_at` FROM `movies` ORDER BY `created_at` DESC LIMIT 10;";
                $result = $con->query($q);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo  '<div class="item">
                      <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                          <a href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '" class="hvr-shutter-out-horizontal">
                              <img src="' . HOST . $row['image'] . '" title="album-name" class="img-responsive" alt=" " />
                              <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                          </a>
                          <div class="mid-1 agileits_w3layouts_mid_1_home">
                              <div class="w3l-movie-text">
                                  <h6><a href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '">' . substr($row['name'], 0, 23) . '</a></h6>
                              </div>
                              <div class="mid-2 agile_mid_2_home">
                                  <p>' . date('Y', strtotime($row['release_date'])) . '</p>
                                  <div class="block-stars">';
                        include(__DIR__ . "/dashboard/includes/star_rating.php");
                        echo '</div>
                                  <div class="clearfix"></div>
                              </div>
                          </div>
                          <div class="ribben">
                              <p>NEW</p>
                          </div>
                      </div>
                  </div>';
                    }
                }
                ?>

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

                <li role="presentation" class="active"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Top viewed</a></li>
                <li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="false">Top Rating</a></li>
                <li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Recently Added</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">

                <div role="tabpanel" class="tab-pane fade active in" id="profile" aria-labelledby="profile-tab">

                    <?php top_viewed(); ?>
                    <div class="clearfix"></div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
                    <?php top_rating(); ?>
                    <div class="clearfix"></div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
                    <?php recently_added(); ?>

                    <div class="clearfix"></div>
                </div>
            </div>
         

            <div class="clearfix"></div>
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
                    <?php most_popular();?>

        
                    
                    
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="<?php echo HOST; ?>partials/css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="<?php echo HOST; ?>partials/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
</div>
<!-- pop-up-box -->
<script src="<?php echo HOST; ?>partials/js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--//pop-up-box -->
<!-- <div id="small-dialog" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>
</div>
<div id="small-dialog1" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/148284736"></iframe>
</div>
<div id="small-dialog2" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div> -->
<script>
    $(document).ready(function() {
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
<?php include 'partials/footer.php';
