<?php
include('../partials/header.php');
include('../dashboard/includes/db.php');
include('../dashboard/controllers/movieController.php');


if (isset($_GET['g'])) {
    $genres = htmlspecialchars($_GET['g']);

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
    $q = "
		SELECT DISTINCT
			movies.id,
			movies.name,
			movies.release_date,
            movies.image,
            `genres`.`" . $genres . "`
		FROM
			`movies`,
			`genres`
		WHERE
            `genres`.`" . $genres . "` = '1' AND movies.id = genres.movie_id ";

    // $result = readAll($q, $record_per_page, $start_read_from);
} else {
    $genres = "All ";
    $q = "
	SELECT  DISTINCT
	movies.id,
	movies.name,
	movies.release_date,
	movies.image
FROM
	`movies` ";
}
// echo $q;

//contain {$record_per_page,$page,$start_read_from} 
require_once(__DIR__ . "/../partials/config_paging.php");
$result = readAll($q, $record_per_page, $start_read_from);

$countAll = countAll($q);
$total_pages = (int) ($countAll / $record_per_page);
$page_url = "/pages/genres.php?g=" . $genres . "&";
?>

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
                                <li class="active"><?php echo $genres; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="browse-inner">
                        <h4>Total Movies : <span><?php echo $countAll; ?></span></h4>
                        <?php
                        if (isset($result->num_rows) && $result->num_rows > 0) {
                            $NO = $start_read_from + 1;
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <div class="col-md-2 w3l-movie-gride-agile">
                                    <p>no=<?php echo $NO++; ?></p>
                                    <a href="<?php echo HOST; ?>pages/single.php?mid=<?php echo $row['id']; ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo HOST . $row['image']; ?>" title="album-name" alt=" " />
                                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
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
                                    <div class="ribben two">
                                        <p>NEW</p>
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
            <div>
                <h1 class="h1">
                    Sorry, There is no movie in this genres try to visit another genres.
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
include('../partials/footer.php'); ?>