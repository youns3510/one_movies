<?php
$page_title = "Upload Movie";
$styles = '<link rel="stylesheet" href="/dashboard/includes/plugins/multiselect/bootstrap-multiselect.css" type="text/css"/>' .
    '<style>.multiselect-native-select{overflow: auto;}ul.multiselect-container{padding: 20px 0px;}ul.multiselect-container  li{width:200px}</style>';
$scripts = '<script type="text/javascript" src="/dashboard/includes/plugins/multiselect/bootstrap-multiselect.min.js"></script>' .
    '<script type="text/javascript">$(document).ready(function() {$("#example-getting-started").multiselect();});</script>';

include('../../includes/header.php');
include('../../includes/db.php');
include('../../controllers/movieController.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Upload Movie</h1>
                 
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
                        <li class="breadcrumb-item active">Upload Movie</li>
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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Movie</h3>
                </div>
                <div class="card-body">
                <?php //var_dump($_POST);?>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputName">Movie Name</label>
                            <input type="text" id="inputName" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Story Line</label>
                            <textarea id="inputDescription" class="form-control" rows="4" name="story" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Genres</label>
                            <select id="example-getting-started" multiple="multiple" name="genres[]" required>
                                <?php
                                $genres = array('action', 'biography', 'crime', 'family', 'horror', 'romance', 'sports', 'war', 'adventure', 'comedy', 'documentary', 'fantasy', 'thriller', 'animation', 'costume', 'drama', 'history', 'musical', 'psychological');

                                foreach ($genres as $gen) {
                                    echo '<option value="' . $gen . '">' . $gen . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Release Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="date" name="release_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputProjectLeader">Rating</label> &nbsp;&nbsp;&nbsp;
                            <div class="form-check form-check-inline"><input type="radio" value="1" class="form-check-input" name="star_rating" required><label class="form-check-label">1</label></div>
                            <div class="form-check form-check-inline"><input type="radio" value="2" class="form-check-input" name="star_rating" required><label class="form-check-label">2</label></div>
                            <div class="form-check form-check-inline"><input type="radio" value="3" class="form-check-input" name="star_rating" required><label class="form-check-label">3</label></div>
                            <div class="form-check form-check-inline"><input type="radio" value="4" class="form-check-input" name="star_rating" required><label class="form-check-label">4</label></div>
                            <div class="form-check form-check-inline"><input type="radio" value="5" class="form-check-input" name="star_rating" required><label class="form-check-label">5</label></div>
                        </div>
                        <div class="form-group">
                            <label for="customFile">Preview Image{small image Height=268px X Width = 182px}</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" accept="image/*" required>
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customFile">Banner Image</label>
                            <div>
                                            <span style="font-size:13px;color:#dc3545"> for using  in the  slider and as a image post for video {big image Height=500px X Width =1300px}</span>

                                        </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="banner" accept="image/*" required>
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customFile">Thriller</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="video" required>
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="upload_btn">Save</button>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include('../../includes/footer.php'); ?>