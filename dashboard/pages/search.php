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
include(__DIR__ . '/../includes/header.php');
include(__DIR__ . '/../includes/db.php');
require_once(__DIR__ . "/../controllers/movieController.php");

if (isset($_GET['q']) && !empty($_GET['q'])) {
    $q = htmlspecialchars($_GET['q']);

    $query = "SELECT DISTINCT * FROM `movies` WHERE `name` LIKE '%$q%' ";
    //contain {$record_per_page,$page,$start_read_from}
    require_once(__DIR__ . "/../includes/config_paging.php");
    $result = readAll($query, $record_per_page, $start_read_from);
    $countAll = countAll($query);
    $total_pages = (int) ($countAll / $record_per_page);
    $page_url = "/dashboard/pages/search.php?q=" . $q . "&";
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Search about:<?php echo $q; ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
                            <li class="breadcrumb-item active">Search</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <hr>
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
                    include_once(__DIR__ . "/../includes/pagination.php");
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
        <?php } else {
        ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Search about:</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
                                    <li class="breadcrumb-item active">Search</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <section class="content">
                    <div class="container-fluid">
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

                    </div>
                </section>
            </div>

        <?php }
    include(__DIR__ . '/../includes/footer.php');
        ?>