<?php
// echo "Assassin’s Creed 3<br>";
// // echo trim("Assassin’s Creed 3");
// echo str_replace(' ','_',"Assassin’s Creed 3");
// die();
//$errors = array();
// upload new Movie

require_once(__DIR__ . '/../../constants.php');
include_once __DIR__ . '/../includes/db.php';

if (isset($_POST['upload_btn'])) {
    $name = htmlspecialchars($_POST['name']);
    $story = htmlspecialchars($_POST['story']);
    $genres = array_filter($_POST['genres']);

    $_POST['release_date'] ? $release_date = htmlspecialchars($_POST['release_date']) : $release_date = '';

    $star_rating = htmlspecialchars($_POST['star_rating']);
    $image = array_filter($_FILES['image']);
    $banner = array_filter($_FILES['banner']);

    $video = array_filter($_FILES['video']);
    $errors = data_validate('upload', $name, $story, $genres, $release_date, $star_rating);
    if (count($errors) == 0) {
        upload($name, $story, $genres, $release_date, $star_rating, $image, $banner, $video);
    } else {
        $err = '';
        $_SESSION['action'] = true;
        $_SESSION['option'] = 'error';
        foreach ($errors as $error) {
            $err .= $error . '</br>';
        }
        $_SESSION['message'] = '!Opps..<br>' . $err;
    }
}

// Update Current Movie
if (isset($_POST['update_btn'])) {
    $name = htmlspecialchars($_POST['name']);
    $story = htmlspecialchars($_POST['story']);
    $genres = array_filter($_POST['genres']);
    $release_date = htmlspecialchars($_POST['release_date']);
    $star_rating = htmlspecialchars($_POST['star_rating']);
    $image = array_filter($_FILES['image']);
    $banner = array_filter($_FILES['banner']);
    $video = array_filter($_FILES['video']);
    $errors = data_validate('update', $name, $story, $genres, $release_date, $star_rating);
    if (count($errors) == 0) {
        update($name, $story, $genres, $release_date, $star_rating, $image, $banner, $video);
    } else {
        $err = '';
        $_SESSION['action'] = true;
        $_SESSION['option'] = 'error';
        foreach ($errors as $error) {
            $err .= $error . '</br>';
        }
        $_SESSION['message'] = '!Opps..<br>' . $err;
    }
}

function upload($name, $story, $genres, $release_date, $star_rating, $image, $banner, $video)
{
    global $errors, $con;
    $admin_id = $_SESSION['admin_id'];
    //  echo $admin_id . '<br>';
    // echo gettype($genres) . '<br>';
    // $genres = implode(",", $genres);
    // echo gettype($genres) . '<br>';
    // $date = date("Y-m", strtotime($release_date));
    // echo $date . '<br>' . $star_rating . '<br>';


    // $name
    // $story
    // $genres
    // $release_date
    // $star_rating
    //     var_dump($_FILES['image']).'<br/>';
    // echo $_FILES['image']['name'].'<br/>';
    // echo $image['name'];
    // $image
    // $video
    $targetDir = "../../../partials/uploads/";
    $yeardir = '' . date("Y", strtotime($release_date)) . '';
    $targetDir = $targetDir . $yeardir . '/' . str_replace(' ', '_', $name);
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    //=========================================== upload image============================
    $allowTypes = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'gif', 'GIF');
    $fileName = "img_" . basename($image['name']);
    $targetFilePath = $targetDir . '/' . $fileName;
    $image_SQL = "";
    // Check whether file type is valid
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


    if (in_array($fileType, $allowTypes)) {
        if (count($errors) == 0 && move_uploaded_file($image['tmp_name'], $targetFilePath)) {
            $image_SQL .= "partials/uploads/" . $yeardir . '/' . str_replace(' ', '_', $name) . '/' . $fileName;
        } else {
            $errors['image'] = "error while uploading image";
        }
    } else {
        $errors['image'] = "image type not supported";
    }
    // ============================upload banner=========================================

    // $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    $fileName = "banner_" . basename($banner['name']);
    $targetFilePath = $targetDir . '/' . $fileName;
    $banner_SQL = "";
    // Check whether file type is valid
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


    if (in_array($fileType, $allowTypes)) {
        if (count($errors) == 0 && move_uploaded_file($banner['tmp_name'], $targetFilePath)) {
            $banner_SQL .= "partials/uploads/" . $yeardir . '/' . str_replace(' ', '_', $name) . '/' . $fileName;
        } else {
            $errors['banner'] = "error while uploading banner";
        }
    } else {
        $errors['banner'] = "banner type not supported";
    }
    // ===================================================================================
    // ======================================upload video==================================
    $video_allowTypes = array("mp4", "MP4", "avi", "AVI", "mov", "MOV", "mpeg", "MPEG");
    $video_fileName = basename($video['name']);
    $video_targetFilePath = $targetDir . '/' . $video_fileName;
    $video_SQL = "";
    // Check whether file type is valid
    $video_fileType = pathinfo($video_targetFilePath, PATHINFO_EXTENSION);
    // echo $$_FILES['video']['error'];
    // phpinfo();
    //var_dump($_FILES['video']);
    if (in_array($video_fileType, $video_allowTypes)) {
        if (count($errors) == 0 && move_uploaded_file($video['tmp_name'], $video_targetFilePath)) {
            $video_SQL .= "partials/uploads/" . $yeardir . '/' . str_replace(' ', '_', $name) . '/' . $video_fileName;
        } else {
            $errors['video'] = "error while uploading video";
        }
    } else {
        $errors['video'] = "video type not supported";
    }
    // echo $image_SQL . "<br>" . $video_SQL;
    //var_dump($errors);
    if (count($errors) == 0) {
        if (!empty($image_SQL) && !empty($video_SQL)) {
            $insert_q = "INSERT INTO `movies`(admin_id,name,story,release_date,image,banner,video) 
    VALUES('$admin_id','$name','$story','$release_date','$image_SQL','$banner_SQL','$video_SQL');";

            $result = $con->query($insert_q);
            if ($result) {
                //  echo '<br>movie inserted success<br>';
                $movie_id = $con->insert_id;
                // query for insert star rating
                switch ($star_rating) {
                    case '1':
                        $q = "INSERT INTO `star_rating`(movie_id,one) VALUES('$movie_id',1);";
                        break;

                    case '2':
                        $q = "INSERT INTO `star_rating`(movie_id,two) VALUES('$movie_id',1);";
                        break;

                    case '3':
                        $q = "INSERT INTO `star_rating`(movie_id,three) VALUES('$movie_id',1);";
                        break;

                    case '4':
                        $q = "INSERT INTO `star_rating`(movie_id,four) VALUES('$movie_id',1);";
                        break;

                    case '5':
                        $q = "INSERT INTO `star_rating`(movie_id,five) VALUES('$movie_id',1);";
                        break;
                }
                $con->query($q);
                // update rating average
                rating_avg($movie_id);

                // ==================================================
                // =============query for insert genres  $g = implode(",",$genres);

                $one = array();
                for ($i = 0; $i < count($genres); $i++) {
                    $one[$i] = 1;
                }

                $one = implode(",", $one);
                $g = implode(",", $genres);
                $qeury_gen = "INSERT INTO `genres`(movie_id,$g) VALUES('$movie_id',$one);";
                $con->query($qeury_gen);

                $_SESSION['action'] = true;
                $_SESSION['option'] = 'success';
                $_SESSION['message'] = 'movies successfully uploades';
            } else {
                if (file_exists($video_targetFilePath)) {
                    unlink($video_targetFilePath);
                }
                if (file_exists($targetFilePath)) {
                    unlink($targetFilePath);
                    rmdir($targetDir);
                }
                $_SESSION['action'] = true;
                $_SESSION['option'] = 'error';
                $_SESSION['message'] = 'Opps..!<br>' . $con->error;
            }
        }
    } else {
        if (file_exists($video_targetFilePath)) {
            unlink($video_targetFilePath);
        }
        if (file_exists($targetFilePath)) {
            unlink($targetFilePath);
            rmdir($targetDir);
        }
        $err = '';
        $_SESSION['action'] = true;
        $_SESSION['option'] = 'error';
        foreach ($errors as $error) {
            $err .= $error . '</br>';
        }
        $_SESSION['message'] = '!Opps..<br>' . $err;
    }
    // ==========================================================================
}

function update($name, $story, $genres, $release_date, $star_rating, $image, $banner, $video)
{
    global $errors, $con;
    $id = (int) $_GET['id'];
    $admin_id = $_SESSION['admin_id'];
    $targetDir = "../../../partials/uploads/";
    $yeardir = '' . date("Y", strtotime($release_date)) . '';
    $targetDir = $targetDir . $yeardir . '/' . str_replace(' ', '_', $name);
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    // var_dump($_FILES['image']['name']);
    if (!empty($_FILES['image']['name'])) {
        //echo 'immm';
        //=========================================== upload image============================
        $allowTypes = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'gif', 'GIF');
        $fileName = "img_" . basename($image['name']);
        $targetFilePath = $targetDir . '/' . $fileName;
        $image_SQL = "";
        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


        if (in_array($fileType, $allowTypes)) {
            if (count($errors) == 0 && move_uploaded_file($image['tmp_name'], $targetFilePath)) {
                $image_SQL .= "partials/uploads/" . $yeardir . '/' . $name . '/' . $fileName;
                $img_q = "UPDATE `movies`  SET `image`='$image_SQL' WHERE `id`='$id';";
                $con->query($img_q);
                // echo 'update img '.$con->error.'<br><br>';
            } else {
                $errors['image'] = "error while uploading image";
            }
        } else {
            $errors['image'] = "image type not supported";
        }
    }

    // ============================upload banner=========================================
    if (!empty($_FILES['banner']['name'])) {
        $allowTypes = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'gif', 'GIF');
        $fileName = "banner_" . basename($banner['name']);
        $targetFilePath = $targetDir . '/' . $fileName;
        $banner_SQL = "";
        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


        if (in_array($fileType, $allowTypes)) {
            if (count($errors) == 0 && move_uploaded_file($banner['tmp_name'], $targetFilePath)) {
                $banner_SQL .= "partials/uploads/" . $yeardir . '/' . str_replace(' ', '_', $name) . '/' . $fileName;
                $banner_q = "UPDATE `movies`  SET `banner`='$banner_SQL' WHERE `id`='$id';";
                $con->query($banner_q);
            } else {
                $errors['banner'] = "error while uploading banner";
            }
        } else {
            $errors['banner'] = "banner type not supported";
        }
    }
    // ===================================================================================
    // ===================================================================================
    // ======================================upload video==================================
    if (!empty($_FILES['video']['name'])) {
        //   echo 'viddddddddddd';
        $video_allowTypes = array("mp4", "avi", "mov", "mpeg", "MP4", "AVI", "MOV", "MPEG");
        $video_fileName = basename($video['name']);
        $video_targetFilePath = $targetDir . '/' . $video_fileName;
        $video_SQL = "";
        // Check whether file type is valid
        $video_fileType = pathinfo($video_targetFilePath, PATHINFO_EXTENSION);
        // echo $$_FILES['video']['error'];
        // phpinfo();
        //var_dump($_FILES['video']);
        if (in_array($video_fileType, $video_allowTypes)) {
            if (count($errors) == 0 && move_uploaded_file($video['tmp_name'], $video_targetFilePath)) {
                $video_SQL .= "partials/uploads/" . $yeardir . '/' . $name . '/' . $video_fileName;
                $vid_q = "UPDATE `movies`  SET `video`='$video_SQL' WHERE `id`='$id';";
                $con->query($vid_q);
                //       echo 'update vid '.$con->error.'<br><br>';
            } else {
                $errors['video'] = "error while uploading video";
            }
        } else {
            $errors['video'] = "video type not supported";
        }
    }
    if (count($errors) == 0) {

        $update = "
                    UPDATE
                        `movies`
                    SET
                        `admin_id` = '$admin_id',
                        `name` = '$name',
                        `story` = '$story',
                        `release_date` = '$release_date'
                    WHERE
                        `id` = '$id';
                        ";

        $result = $con->query($update);

        // echo 'update name ,story,release '.$con->error.'<br><br>';
        if (!empty($star_rating)) {
            $q0 = "SELECT * FROM  `star_rating` WHERE `movie_id`='$id';";
            $result = $con->query($q0);
            //   echo 'select star_rating'.$con->error.'<br><br>';
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // echo ($row['one'])."<br>";
                    // echo ($row['two'])."<br>";
                    // echo ($row['three'])."<br>";
                    // echo ($row['four'])."<br>";
                    // echo ($row['five'])."<br>";

                    // query for insert star rating
                    switch ($star_rating) {
                        case '1':
                            $q = "UPDATE `star_rating` SET `one` ='" . ($row["one"] + 1) . "' WHERE `movie_id` = '$id' ;";
                            break;

                        case '2':
                            $q = "UPDATE `star_rating` SET `two`='" . ($row["two"] + 1) . "' WHERE `movie_id` = '$id';";
                            break;

                        case '3':
                            $q = "UPDATE `star_rating` SET `three`='" . ($row["three"] + 1) . "' WHERE `movie_id` = '$id';";

                            break;

                        case '4':
                            $q = "UPDATE `star_rating` SET `four`= '" . ($row["four"] + 1) . "'WHERE `movie_id` = '$id';";
                            break;

                        case '5':
                            $q = "UPDATE `star_rating` SET `five`='" . ($row["five"] + 1) . "'WHERE `movie_id` = '$id';";
                            break;
                    }
                }
            }

            $con->query($q);
            //    echo 'update star_rating'.$con->error.'<br><br>';
            // update rating average
            rating_avg($id);
        }

        // ==================================================
        // =============query for insert genres  $g = implode(",",$genres);
        $genresAll = array('action', 'biography', 'crime', 'family', 'horror', 'romance', 'sports', 'war', 'adventure', 'comedy', 'documentary', 'fantasy', 'thriller', 'animation', 'costume', 'drama', 'history', 'musical', 'psychological');

        $one = array();
        for ($i = 0; $i < count($genresAll); $i++) {
            if (in_array($genresAll[$i], $genres)) {
                $one[$i] = 1;
            } else {
                $one[$i] = 0;
            }
        }
        $g_sql = '';
        for ($i = 0; $i < count($genresAll) - 1; $i++) {
            $g_sql .= '`' . $genresAll[$i] . '` = "' . $one[$i] . '",';
        }
        $g_sql .= '`' . $genresAll[count($genresAll) - 1] . '` = "' . $one[count($one) - 1] . '"';
        //  echo $g_sql;

        $qeury_gen = "UPDATE `genres` SET  " . $g_sql . " WHERE `movie_id` = '$id';";
        $con->query($qeury_gen);
        // echo 'update genres'.$con->error.'<br><br>';

        $_SESSION['action'] = true;
        $_SESSION['option'] = 'success';
        $_SESSION['message'] = 'movies successfully uploades';
    } else {

        $err = '';
        $_SESSION['action'] = true;
        $_SESSION['option'] = 'error';
        foreach ($errors as $error) {
            $err .= $error . '</br>';
        }
        $_SESSION['message'] = '!Opps..<br>' . $err;
    }
}

function data_validate($func, $name, $story, $genres, $release_date, $star_rating)
{
    $errors = array();
    if (empty($name)) {
        $errors['name'] = "* name is required";
    }
    if (empty($story)) {
        $errors['story'] = "* story is required";
    }
    if (empty($genres)) {
        $errors['genres'] = "* genres is required";
    }
    if (empty($release_date)) {
        $errors['release_date'] = "* release date is required";
    }

    if ($func == 'upload') {
        if (empty($star_rating)) {
            $errors['star_rating'] = "* star rating is required";
        }
        if (empty($_FILES['image']['name'])) {
            $errors['image'] = "* image is required";
        }
        if (empty($_FILES['banner']['name'])) {
            $errors['image'] = "* image is required";
        }
        if (empty($_FILES['video']['name'])) {
            $errors['video'] = "* video is required";
        }
    }


    return $errors;
}

// update rating_avg
function rating_avg($movie_id)
{
    global $con;
    $q = "SELECT * FROM `star_rating` WHERE `movie_id` = '$movie_id' ;";
    $result = $con->query($q);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {


            $one = 1 * $row['one'];
            $two = 2 * $row['two'];
            $three = 3 * $row['three'];
            $four = 4 * $row['four'];
            $five = 5 * $row['five'];

            $max = 1;
            $m = max($one, $two, $three, $four, $five);
            $half = false;
            switch ($m) {
                case $one:
                    if ($two >= ($one / 2)) {
                        $max = 1;
                        $half = true;
                    }
                    break;

                case $two:
                    if ($three >= ($two / 2)) {
                        $max = 2;
                        $half = true;
                    }
                    break;
                case $three:
                    if ($four >= ($three / 2)) {
                        $max = 3;
                        $half = true;
                    }
                    break;
                case $four:
                    if ($five >= ($four / 2)) {
                        $max = 4;
                        $half = true;
                    }
                    break;
                case $five:
                    $max = 5;
                    break;
            }

            if ($half) {
                $max = $max + 0.5;
            }

            $q = "UPDATE `star_rating` SET `rate_avg` = '$max' WHERE `movie_id` = '$movie_id' ;";
            $con->query($q);
        }
    }
}
// get rating_avg
function get_rate_avg($id)
{
    global $con;
    $q = "SELECT `star_rating`.`rate_avg` FROM `star_rating` WHERE `movie_id` = '$id';";
    $result  = $con->query($q);

    if (isset($result->num_rows) && $result->num_rows > 0) {
        return $result->fetch_assoc()['rate_avg'];
    }
}

// echo get_rate_avg(13);
// show top viewed movies on home page for all users
function top_viewed()
{
    global $con;
    $q = "SELECT DISTINCT movies.id,movies.name,movies.release_date,movies.views,movies.image FROM `movies` ORDER BY `views` DESC	LIMIT 10;";
    $result = $con->query($q);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-2 w3l-movie-gride-agile">
        <a href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '" class="hvr-shutter-out-horizontal">
        <img src="' . HOST . $row['image'] . '" title="album-name" class="img-responsive" alt=" " />
            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
        </a>
        <div class="mid-1 agileits_w3layouts_mid_1_home">
            <div class="w3l-movie-text">
                <h6><a href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '">' . substr($row['name'], 0, 23) . '</a></h6>
            </div>
            <div class="mid-2 agile_mid_2_home">
            <p class="release_year">' . date('Y', strtotime($row['release_date'])) . '</p>
                <p class="views"> ' . number_format($row['views']) . '<i class="fa fa-eye"></i></p>
                
               
           
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="ribben">
            <p>NEW</p>
        </div>
    </div>
    ';
        }
    }
}

// top rating movies home page
function top_rating()
{
    global $con;
    $q = "SELECT DISTINCT movies.id,movies.name,movies.release_date,movies.image,star_rating.rate_avg FROM `movies`,`star_rating` WHERE star_rating.movie_id = movies.id ORDER BY `rate_avg` DESC LIMIT 10;";
    $result = $con->query($q);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-2 w3l-movie-gride-agile">
        <a href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '" class="hvr-shutter-out-horizontal">
        <img src="' . HOST . $row['image'] . '" title="album-name" class="img-responsive" alt=" " />
            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
        </a>
        <div class="mid-1 agileits_w3layouts_mid_1_home">
            <div class="w3l-movie-text">
                <h6><a href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '">' . substr($row['name'], 0, 23) . '</a></h6>
            </div>
            <div class="mid-2 agile_mid_2_home">
            <p class="release_year">' . date('Y', strtotime($row['release_date'])) . '</p>
            <div class="block-stars">';

            include 'dashboard/includes/star_rating.php';
            echo '</div>
             <div class="clearfix"></div>
            </div>
        </div>
                <div class="ribben">
                    <p>NEW</p>
                </div>
            </div>
            ';
        }
    }
}

function recently_added()
{
    global $con;
    $q = "SELECT DISTINCT `id`,`name`,`release_date`,`image`,`created_at` FROM `movies` ORDER BY `created_at` DESC LIMIT 10;";
    $result = $con->query($q);
    // echo $q;
    // var_dump( $con->error);
    if (isset($result->num_rows) && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-2 w3l-movie-gride-agile">
                        <a href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '" class="hvr-shutter-out-horizontal">
                        <img src="' . HOST . $row['image'] . '" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '">' . substr($row['name'], 0, 23) . '</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                            <p class="release_year">' . date('Y', strtotime($row['release_date'])) . '</p>
                            <div class="block-stars">';

            include 'dashboard/includes/star_rating.php';
            echo '</div>
                             <div class="clearfix"></div>
                            </div>
                        </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                            ';
        }
    }
}

function most_popular()
{
    global $con;

    $q = "SELECT DISTINCT `movies`.*,`star_rating`.`rate_avg`  FROM `movies`,`star_rating` WHERE   `star_rating`.`movie_id` = `movies`.`id`  ORDER BY  `views` DESC ,`rate_avg` DESC LIMIT 6;";
    $result = $con->query($q);
    if ($result->num_rows > 0) {

        $i = 0;
        // var_dump($result2);
        while ($row = $result->fetch_assoc()) {
            $i++;
            echo '
            <li>
                <div class="agile_tv_series_grid">
                    <div class="col-md-6 agile_tv_series_grid_left">
                            <div class="w3ls_market_video_grid1">
                                <img src="' . HOST . $row['banner'] . '" alt="' . $row['name'] . '" class="img-responsive " id="most_popular_img' . $i . '" />
                                <a class="w3_play_icon" href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '">
                                    <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                                </a>
                            </div>
                    </div>
                    <div class="col-md-6 agile_tv_series_grid_right" id="most_popular_right' . $i . '" style="padding:3rem
                    ">
                        <p class="fexi_header">' . $row['name'] . '</p>
                        <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>
                            ' . substr($row['story'], 0, 400) . '</p>
                        <p class="fexi_header_para"><span>Date of Release<label>:</label></span> ' . date('M Y', strtotime($row['release_date'])) . '</p>
                        <p class="fexi_header_para">
                            <span>Genres<label>:</label> </span>';
            get_genress($row['id']);

            echo '
                        </p>
                        <p class="fexi_header_para fexi_header_para1">
                            <span>Star Rating<label>:</label></span>';
            get_star_rate_popular($row['rate_avg']);

            echo '
                        </p>
                    </div>   
                                        
                                        
                    <div class="clearfix"></div>

                    <div class="agileinfo_flexislider_grids">
                    ';

            // var_dump($result);
            // foreach ($result as $res) {
            //     var_dump($res);
            //     echo '<br>';
            // }
            // echo '<br>';
            // echo '<br>';
            // var_dump($result2);
            sub_most_pupular();

            echo ' 
                <div class="clearfix"> </div>
                </div>
                </div>
            </li>';
            echo '        <script>
                var height' . $i . ' = document.getElementById("most_popular_right' . $i . '").offsetHeight;
                document.getElementById("most_popular_img' . $i . '").style.height = height' . $i . '+"px";
                </script>';
        }
    }
}


function sub_most_pupular()
{


    global $con;

    $q = "SELECT DISTINCT `movies`.*,`star_rating`.`rate_avg`  FROM `movies`,`star_rating` WHERE   `star_rating`.`movie_id` = `movies`.`id`  ORDER BY  `views` DESC ,`rate_avg` DESC LIMIT 6;";
    $result = $con->query($q);
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            // var_dump($row);echo '<br>';echo '<br>';
            echo '
            

                <div class="col-md-2 w3l-movie-gride-agile">
                    <a href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '" class="hvr-shutter-out-horizontal"><img src="' . HOST . $row['image'] . '" title="' . $row['name'] . '" class="img-responsive" alt="' . $row['name'] . ' " />
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '">' . $row['name'] . '</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>' . date('Y', strtotime($row['release_date'])) . '</p>
                            <div class="block-stars">               ';
            include 'dashboard/includes/star_rating.php';
            echo '
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="ribben">
                        <p>NEW</p>
                    </div>
                

                    <div class="clearfix"></div>
                </div>
            
       ';
        }
    }
}

function get_star_rate_popular($rate_avg)
{


    // echo $rate_avg;
    $max = floor($rate_avg);
    $half = $rate_avg - $max;

    for ($i = 1; $i <= $max; $i++) {
        echo '<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>';
    }
    if ($half != 0) {
        echo '<a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>';
        $rest = 5 - $max - 1;
        for ($i = 1; $i <= $rest; $i++) {
            echo '<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>';
        }
    } else {
        $rest = 5 - $max;
        for ($i = 1; $i <= $rest; $i++) {
            echo '<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>';
        }
    }
}


function get_genress($id)
{
    global $con;
    $genres = array('action', 'biography', 'crime', 'family', 'horror', 'romance', 'sports', 'war', 'adventure', 'comedy', 'documentary', 'fantasy', 'thriller', 'animation', 'costume', 'drama', 'history', 'musical', 'psychological');
    $current_genres = array();
    $qeury_gen = "SELECT * FROM `genres` WHERE `movie_id`={$id};";
    $result_gen = $con->query($qeury_gen);
    if ($result_gen->num_rows > 0) {
        $current_genres = array();
        while ($row = $result_gen->fetch_assoc()) {
            foreach ($genres as $gen) {
                if ($row['' . $gen . ''] == '1') {
                    $current_genres[] .= '' . $gen . '';
                    // var_dump($current_genres);
                    // echo ' | ';
                }
            }
        }
        $count_gen = count($current_genres) - 2;
        // var_dump($genres);
        for ($i = 0; $i <= $count_gen; $i++) {
            echo '<a href="' . HOST . 'pages/genres.php?g=' . $current_genres[$i] . '">' . $current_genres[$i] . '</a>';
            echo ' | ';
        }
        echo '<a href="' . HOST . 'pages/genres.php?g=' . $current_genres[$i] . '">' . $current_genres[$count_gen + 1] . '</a>';
    }
}



function readAll($qeury, $record_per_page, $start_read_from)
{
    global $con;
    $record_per_page = (int) $record_per_page;
    $start_read_from = (int) $start_read_from;
    $q = $qeury . " LIMIT  $start_read_from,$record_per_page;";

    // echo "qeury=".$q."<br>record_per_page:".$record_per_page." ===start_read_from:".$start_read_from."<br>==============<br>";
    $result = $con->query($q);
    if ($result->num_rows > 0) {
        return $result;
    }
}

function countAll($q)
{
    global $con;
    $result = $con->query($q);

    if (isset($result->num_rows) && $result->num_rows > 0) {
        return  $result->num_rows;
        // return   $this->countAll;
    }else{
        return 0;
    }
    // else {

    //     var_dump($stmt->errorInfo());
    // }
}

// list page a-z list
function get_data($char, $active)
{
    // global $record_per_page, $start_read_from;
    $q = "SELECT DISTINCT `movies`.`id`,`movies`.`name`,`movies`.`image`,`movies`.`release_date`  FROM `movies`  WHERE `movies`.`name` LIKE '$char%' ";
  
    //contain {$record_per_page,$page,$start_read_from} 
    require(__DIR__ . "/../../partials/config_paging.php");
    $countAll = countAll($q);
    ${'total_pages_'.$char} = (int) ($countAll / $record_per_page);
    $result = readAll($q, $record_per_page, $start_read_from);

    $page_url = "/pages/list.php?char=" . $char . "&";

    // echo $active."<br>";
    // die;
    $active = ($active == 'active') ? ' in active' : '';
    
    echo '  <div role="tabpanel" class="tab-pane fade ' . $active . '" id="' . $char . '" aria-labelledby="' . $char . '-tab">
    <div class="agile-news-table">';
    
    
  

    if (isset($result->num_rows) && $result->num_rows > 0) {


        echo '   
                <div class="w3ls-news-result">
                    <h4>Search Results : <span>' . $countAll . '</span></h4>
                </div>
                <br>
                <table id="table-breakpoint1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>preview</th>
                            <th>Movie Name</th>
                            <th>Year</th>
                            <th>Genre</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>';

        // $i = (isset(${'No_' . $char}) && ( ${'No_' . $char} != ${'total_' . $char} )) ? ${'No_' . $char}++ : 1;
        $i = $start_read_from+1;
        while ($row = $result->fetch_assoc()) {

            echo '
                <tr>
                    <td>' . $i++ . '</td>
                    <td class="w3-list-img">
                        <a href="' . HOST . 'pages/single.php?mid=' . $row['id'] . '">
                            <img src="' . HOST . $row['image'] . '" alt="' . $row['name'] . '" />
                        </a>
                    </td>
                    <td>' . $row['name'] . '</td> 
                    <td>' . date('Y', strtotime($row['release_date']))  . '</td>                 

                    <td class="w3-list-info">';
            get_genress($row['id']);
            echo '</td>
                    <td>' . get_rate_avg($row['id']) . '</td>
                </tr>   
';
        }
        // $_SESSION['No_' . $char] = $i;
        echo ' </tbody>
        </table>
   ';
        // var_dump($_SESSION);

        include(__DIR__ . "/../../partials/pagination.php");
    } else {
        // var_dump($_SESSION);
        echo '<h3>There is no movie here.</h3>';
    }
    echo ' </div>
    </div>';
}


// end list page

