<?php
$page_title = "All Movie";
$styles = '<style>
.col-3 .container {
  position: relative; 
}
.overlay {
  position: absolute; 
  bottom: 0; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  font-size: 22px;
}

.col-3 .container:hover .overlay {
  opacity: 1;
}
</style>';
include('../../includes/header.php');
include('../../includes/db.php');
require_once(__DIR__ . "/../../controllers/movieController.php");

$q = "SELECT DISTINCT * FROM `movies` ";
//contain {$record_per_page,$page,$start_read_from}
require_once(__DIR__ . "/../../includes/config_paging.php");
$result = readAll($q, $record_per_page, $start_read_from);
$countAll = countAll($q);
$total_pages = (int) ($countAll / $record_per_page);
$page_url = "/dashboard/pages/movies/index.php?";
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">All Movies</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
                        <li class="breadcrumb-item active">All Movies</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->

            <?php
            if (isset($result->num_rows) && $result->num_rows > 0) {
                echo '<h4>Total Movies : <span>';
                echo ($countAll > 0) ? $countAll : '0';
                echo '</span></h4><div class="row">';
                while ($rows = $result->fetch_assoc()) { ?>
                    <div class="col-3">
                        <div class="container">
                            <img src="<?php echo HOST . $rows["image"]; ?>" alt="<?php echo $rows["name"]; ?>" class="img-thumbnail">
                            <div class="overlay text-center">
                                <a href="<?php echo HOST; ?>pages/single.php?mid=<?php echo $rows['id']; ?>" class="icon badge badge-success" target="_blank"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo HOST; ?>dashboard/pages/movies/edit.php?id=<?php echo $rows['id']; ?>" class=" icon badge badge-primary"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo HOST; ?>dashboard/pages/movies/delete.php?id=<?php echo $rows['id']; ?>" class=" icon badge badge-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                    </div>

                <?php }
                echo '</div>
                            </div>
                           
                            ';
                include_once(__DIR__ . "/../../includes/pagination.php");
            } else {
                ?>

                <div class="text-center">
                    <h1 class="h1">
                        Sorry, There is no movie here try again.
                    </h1>
                    <form class="search-form" action="/dashboard/pages/search.php" style="margin:50px auto;width:50%">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.input-group -->
                    </form>
                </div>
                <!-- Main content -->


            <?php } ?>

    </section>
</div>

<!-- /.content-wrapper -->


<?php
include('../../includes/footer.php'); ?>