<?php
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

$q = "SELECT * FROM `movies`;";
$result = $con->query($q);
if ($result->num_rows > 0) {
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
                <div class="row">
                    <?php
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

                    <?php } ?>
                </div>

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php
}
include('../../includes/footer.php'); ?>