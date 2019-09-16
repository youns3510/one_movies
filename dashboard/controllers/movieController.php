<?php
//$errors = array();

if (isset($_POST['upload_btn'])) {
    $name = htmlspecialchars($_POST['name']);
    $story = htmlspecialchars($_POST['story']);
    $genres = array_filter($_POST['genres']);
    $release_date = htmlspecialchars($_POST['release_date']);
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
        $_SESSION['message'] = '!OOPS..<br>' . $err;
    }
}
function upload($name, $story, $genres, $release_date, $star_rating, $image, $video)
{
    global $errors, $con;
    $admin_id = $_SESSION['admin_id'];
    //  echo $admin_id . '<br>';
    // echo gettype($genres) . '<br>';
    $genres = implode(",", $genres);
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
    $fileName = time() . '_' . basename($image['name']);
    $targetFilePath = $targetDir . '/' . $fileName;
    $image_SQL = "";
    // Check whether file type is valid
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


    if (in_array($fileType, $allowTypes)) {
        if (move_uploaded_file($image['tmp_name'], $targetFilePath)) {
            $image_SQL .= $fileName;
        } else {
            $errors['image'] = "error while uploading image";
        }
    } else {
        $errors['image'] = "image type not supported";
    }
    // ===================================================================================
    // ======================================upload video==================================
    $video_allowTypes = array("mp4", "avi", "mov", "3gp", "mpeg", "MP4", "AVI", "MOV", "3GP", "MPEG", "mkv", "MKV");
    $video_fileName = time() . '_' . basename($video['name']);
    $video_targetFilePath = $targetDir . '/' . $video_fileName;
    $video_SQL = "";
    // Check whether file type is valid
    $video_fileType = pathinfo($video_targetFilePath, PATHINFO_EXTENSION);
    // echo $$_FILES['video']['error'];
    // phpinfo();
    //var_dump($_FILES['video']);
    if (in_array($video_fileType, $video_allowTypes)) {
        if (move_uploaded_file($video['tmp_name'], $video_targetFilePath)) {
            $video_SQL .= $video_fileName;
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
            $insert_q = "INSERT INTO `movies`(admin_id,name,story,genres,release_date,image,video) 
    VALUES('$admin_id','$name','$story','$genres','$release_date','$image_SQL','$video_SQL');";

            $result = $con->query($insert_q);
            if ($result) {
                //  echo '<br>movie inserted success<br>';
                $movie_id = $con->insert_id;
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
                $result = $con->query($q);
                // if ($result) {
                //     echo '<br>rate inserted success<br>';
                // }else{
                //     var_dump($con->error);
                // }
                $_SESSION['action'] = true;
                $_SESSION['option'] = 'success';
                $_SESSION['message'] = 'movies successfully uploades';
            } else {
                $_SESSION['action'] = true;
                $_SESSION['option'] = 'error';
                $_SESSION['message'] = 'OOPS..!<br>' . $con->error;
            }
        }
    } else {
        $err = '';
        $_SESSION['action'] = true;
        $_SESSION['option'] = 'error';
        foreach ($errors as $error) {
            $err .= $error . '</br>';
        }
        $_SESSION['message'] = '!OOPS..<br>' . $err;
    }
    // ==========================================================================
}
function update()
{ }
function delete()
{ }
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
    if (empty($star_rating)) {
        $errors['star_rating'] = "* star rating is required";
    }
    if (empty($image)) {
        $errors['image'] = "* image is required";
    }
    if (empty($video)) {
        $errors['video'] = "* video is required";
    }

    return $errors;
}
