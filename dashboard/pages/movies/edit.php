<?php

$styles = '<link rel="stylesheet" href="http://localhost:8000/dashboard/includes/plugins/multiselect/bootstrap-multiselect.css" type="text/css"/>' .
    '<style>.multiselect-native-select{overflow: auto;}ul.multiselect-container{padding: 20px 0px;}ul.multiselect-container  li{width:200px}</style>';
$scripts = '<script type="text/javascript" src="http://localhost:8000/dashboard/includes/plugins/multiselect/bootstrap-multiselect.min.js"></script>' .
    '<script type="text/javascript">$(document).ready(function() {$("#example-getting-started").multiselect();});</script>';

include('../../includes/header.php');
include('../../includes/db.php');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $q = "
SELECT
  movies.*,
  genres.*,
  star_rating.*
FROM
  `movies`,
  `genres`,
  `star_rating`
WHERE
  movies.id ='$id' AND genres.movie_id='$id' AND star_rating.movie_id='$id';";

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
        <div class="ml-5">
            <?php include('../../controllers/movieController.php'); ?>
        </div>
        <!-- /.content-header -->
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Movie</h3>
                        </div>
                        <div class="card-body">
                            <form action="edit.php?id=<?php echo $row['id']; ?>" method="post"
                                  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputName">Movie Name</label>
                                    <input type="text" id="inputName" class="form-control" name="name"
                                           value="<?php echo $row['name']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Story Line</label>
                                    <textarea id="inputDescription" class="form-control" rows="4" name="story"
                                              required><?php echo $row['story']; ?></textarea>
                                </div>
                                <?php
                                $genres = array('action', 'biography', 'crime', 'family', 'horror', 'romance', 'sports', 'war', 'adventure', 'comedy', 'documentary', 'fantasy', 'thriller', 'animation', 'costume', 'drama', 'history', 'musical', 'psychological');
                                $current_genres = array();
                                foreach ($genres as $gen) {
                                    if ($row['' . $gen . ''] == '1') {
                                        $current_genres[] .= '' . $gen . '';
                                    }
                                }
                                $current_genres = implode(",", $current_genres);
                                ?>
                                <div class="form-group">
                                    <label for="inputStatus">Genres</label>
                                    <select id="example-getting-started" multiple="multiple" name="genres[]" required>
                                        <?php
                                        foreach ($genres as $gen) {
                                            echo '<option value="' . $gen . '">' . $gen . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <?php $scripts .= '<script type="text/javascript">
                                $(document).ready(function() {
                                                $("#example-getting-started").multiselect();
                                                var data = "' . $current_genres . '";
                                                var valArr = data.split(",");
                                               var i = 0, size = valArr.length;
                                                for (i; i < size; i++) {
                                                 $("#example-getting-started").multiselect("select", valArr[i]);
                                               }
                                            });
                            </script>'; ?>
                                <div class="form-group">
                                    <label for="inputClientCompany">Release Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="date" name="release_date" class="form-control"
                                               value="<?php echo date('Y-m-d', strtotime($row['release_date'])); ?>"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span style="margin-right:20px">Rating</span>
                                    <div class="form-check form-check-inline"><input type="radio" value="1"
                                                                                     class="form-check-input"
                                                                                     name="star_rating"><label
                                                class="form-check-label">1</label></div>
                                    <div class="form-check form-check-inline"><input type="radio" value="2"
                                                                                     class="form-check-input"
                                                                                     name="star_rating"><label
                                                class="form-check-label">2</label></div>
                                    <div class="form-check form-check-inline"><input type="radio" value="3"
                                                                                     class="form-check-input"
                                                                                     name="star_rating"><label
                                                class="form-check-label">3</label></div>
                                    <div class="form-check form-check-inline"><input type="radio" value="4"
                                                                                     class="form-check-input"
                                                                                     name="star_rating"><label
                                                class="form-check-label">4</label></div>
                                    <div class="form-check form-check-inline"><input type="radio" value="5"
                                                                                     class="form-check-input"
                                                                                     name="star_rating"><label
                                                class="form-check-label">5</label></div>
                                </div>
                                <div class="form-group">
                                    <label for="customFile">Preview Image</label>
                                    <div class="text-center">
                                        <img src="<?php echo $host . $row['image'] ?>" alt="<?php echo $row['name'] ?>"
                                             class="img-thumbnail">
                                    </div>
                                    <div class="text-center">
                                        <span style="font-size:13px;color:#dc3545"> if you need to change current image please select new image</span>

                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" accept="image/*">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="customFile">Thriller</label>
                                    <div class="text-center">
                                        <iframe src="<?php echo $host . $row['video'] ?>"
                                                style="border:none;width:100%;height:500px;"></iframe>
                                    </div>
                                    <div class="text-center">
                                        <span style="font-size:13px;color:#dc3545"> if you need to change current movie please select new movie</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="video">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="update_btn">Save</button>
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
            <?php
        }
    }
}
include('../../includes/footer.php'); ?>