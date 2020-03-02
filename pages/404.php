<?php
$page_title = "404 Error";
include('../partials/header.php');
include('../dashboard/includes/db.php');
include('../dashboard/controllers/movieController.php');
?>

    <!-- /w3l-medile-movies-grids -->
    <div class="general-agileits-w3l">
        <div class="w3l-medile-movies-grids">

            <!-- /movie-browse-agile -->

            <div class="movie-browse-agile">
                <!--/browse-agile-w3ls -->
                <div class="browse-agile-w3ls general-w3ls">
                    <div class="tittle-head">
                        <h4 class="latest-text">404 ERROR </h4>
                        <div class="container">
                            <div class="agileits-single-top">
                                <ol class="breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">404</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="browse-inner">

                            <div class="text-center">
                                <h1 class="h1">
                                    Sorry, There is no movie here try again.
                                </h1>

                                <div class="w3_search">
                                    <form action="/pages/search.php" method="get">
                                        <input type="text" name="q" placeholder="Search" required="">
                                        <input type="submit" value="Go">
                                    </form>
                                </div>

                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <!-- //latest-movies1 -->

                    </div>
                </div>
                <!--//browse-agile-w3ls -->

            </div>
            <!-- //movie-browse-agile -->
            <!--body wrapper start-->

        </div>
        <!-- //w3l-medile-movies-grids -->
    </div>
    <!-- //comedy-w3l-agileits -->
<?php
include('../partials/footer.php'); ?>