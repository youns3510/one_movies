<?php
$page_title = "Search";
include('../partials/header.php');
include('../dashboard/includes/db.php');
include('../dashboard/controllers/movieController.php');


if (isset($_GET['q'])) {
    $q = htmlspecialchars($_GET['q']);

    $query = "SELECT DISTINCT * FROM `movies` WHERE `name` LIKE '%$q%' ";
    //contain {$record_per_page,$page,$start_read_from}
    require_once(__DIR__ . "/../partials/config_paging.php");
    $result = readAll($query, $record_per_page, $start_read_from);
    $countAll = countAll($query);
    $total_pages = (int)($countAll / $record_per_page);
    $page_url = "/pages/search.php?q=" . $q . "&";
    ?>

    <!-- /w3l-medile-movies-grids -->
    <div class="general-agileits-w3l">
        <div class="w3l-medile-movies-grids">

            <!-- /movie-browse-agile -->

            <div class="movie-browse-agile">
                <!--/browse-agile-w3ls -->
                <div class="browse-agile-w3ls general-w3ls">
                    <div class="tittle-head">
                        <h4 class="latest-text">Search about: <?php echo $q; ?>  </h4>
                        <div class="container">
                            <div class="agileits-single-top">
                                <ol class="breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">Search</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="browse-inner">
                            <h4>Total Movies : <span><?php echo ($countAll > 0) ? $countAll : '0'; ?></span></h4>
                            <br>
                            <?php
                            if (isset($result->num_rows) && $result->num_rows > 0) {
                            // $NO = $start_read_from + 1;
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <div class="col-md-2 w3l-movie-gride-agile">
                                    <!-- <p>no=<?php // echo $NO++; ?></p> -->
                                    <a href="<?php echo HOST; ?>pages/single.php?mid=<?php echo $row['id']; ?>"
                                       class="hvr-shutter-out-horizontal"><img src="<?php echo HOST . $row['image']; ?>"
                                                                               title="album-name" alt=" "/>
                                        <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                        aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="w3l-movie-text">
                                            <h6>
                                                <a href="<?php echo HOST; ?>pages/single.php?mid=<?php echo $row['id']; ?>"><?php echo substr($row['name'], 0, 23); ?></a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><?php echo date('Y', strtotime($row['release_date'])); ?></p>
                                            <div class="block-stars">
                                                <?php include('../dashboard/includes/star_rating.php'); ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>

                                </div>
                            <?php }
                            ?>

                            <div class="clearfix"></div>
                        </div>
                        <!-- //latest-movies1 -->

                    </div>
                </div>
                <!--//browse-agile-w3ls -->
                <?php
                include_once(__DIR__ . "/../partials/pagination.php");
                } else {
                    ?>
                    <div class="text-center">
                        <h1 class="h1">
                            Sorry, There is no movie here try again.
                        </h1>
                        <hr class="hr">
                    </div>
                <?php } ?>
            </div>
            <!-- //movie-browse-agile -->
            <!--body wrapper start-->

        </div>
        <!-- //w3l-medile-movies-grids -->
    </div>
    <!-- //comedy-w3l-agileits -->
    <?php
} else { ?>


    <!-- /w3l-medile-movies-grids -->
    <div class="general-agileits-w3l">
        <div class="w3l-medile-movies-grids">

            <!-- /movie-browse-agile -->

            <div class="movie-browse-agile">
                <!--/browse-agile-w3ls -->
                <div class="browse-agile-w3ls general-w3ls">

                    <div class="container">
                        <div class="browse-inner">


                            <div class="text-center">
                                <h1 class="h1">
                                    Sorry, There is no movie here try again.
                                </h1>
                                <hr class="hr">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- //movie-browse-agile -->
            <!--body wrapper start-->

        </div>
        <!-- //w3l-medile-movies-grids -->
    </div>
    <!-- //comedy-w3l-agileits -->

    <?php
}
include('../partials/footer.php'); ?>