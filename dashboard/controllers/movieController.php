<?php
//$errors = array();
// upload new Movie
if (isset($_POST['upload_btn'])) {
    $name = htmlspecialchars($_POST['name']);
    $story = htmlspecialchars($_POST['story']);
    $genres = array_filter($_POST['genres']);

    $_POST['release_date'] ? $release_date = htmlspecialchars($_POST['release_date']) : $release_date = '';

    $star_rating = htmlspecialchars($_POST['star_rating']);
    $image = array_filter($_FILES['image']);
    $video = array_filter($_FILES['video']);
    $errors = data_validate('upload', $name, $story, $genres, $release_date, $star_rating, $image, $video);
    if (count($errors) == 0) {
        upload($name, $story, $genres, $release_date, $star_rating, $image, $video);
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
    $video = array_filter($_FILES['video']);
    $errors = data_validate('update', $name, $story, $genres, $release_date, $star_rating, $image, $video);
    if (count($errors) == 0) {
        update($name, $story, $genres, $release_date, $star_rating, $image, $video);
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

function upload($name, $story, $genres, $release_date, $star_rating, $image, $video)
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
    $targetDir = $targetDir . $yeardir . '/' . $name;
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    //=========================================== upload image============================
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    $fileName = basename($image['name']);
    $targetFilePath = $targetDir . '/' . $fileName;
    $image_SQL = "";
    // Check whether file type is valid
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


    if (in_array($fileType, $allowTypes)) {
        if (count($errors) == 0 && move_uploaded_file($image['tmp_name'], $targetFilePath)) {
            $image_SQL .= "partials/uploads/" . $yeardir . '/' . $name . '/' . $fileName;
        } else {
            $errors['image'] = "error while uploading image";
        }
    } else {
        $errors['image'] = "image type not supported";
    }
    // ===================================================================================
    // ======================================upload video==================================
    $video_allowTypes = array("mp4", "avi", "mov", "mpeg");
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
            $insert_q = "INSERT INTO `movies`(admin_id,name,story,release_date,image,video) 
    VALUES('$admin_id','$name','$story','$release_date','$image_SQL','$video_SQL');";

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

function update($name, $story, $genres, $release_date, $star_rating, $image, $video)
{
    global $errors, $con;
    $id = (int)$_GET['id'];
    $admin_id = $_SESSION['admin_id'];
    $targetDir = "../../../partials/uploads/";
    $yeardir = '' . date("Y", strtotime($release_date)) . '';
    $targetDir = $targetDir . $yeardir . '/' . $name;
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    // var_dump($_FILES['image']['name']);
    if (!empty($_FILES['image']['name'])) {
        //echo 'immm';
        //=========================================== upload image============================
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        $fileName = basename($image['name']);
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

function data_validate($func, $name, $story, $genres, $release_date, $star_rating, $image, $video)
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
        if (empty($_FILES['video']['name'])) {
            $errors['video'] = "* video is required";
        }
    }


    return $errors;
}
