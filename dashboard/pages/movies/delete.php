<?php 
include('../../includes/db.php');

if ($_SERVER['SCRIPT_NAME'] == '/dashboard/pages/movies/delete.php') {
    $id = (int) $_GET['id'];
    $q="DELETE FROM `movies` WHERE `id`='$id'";
    $result=$con->query($q);
    if ($result) {
        $_SESSION['action'] = true;
        $_SESSION['option'] = 'success';
        $_SESSION['message'] = 'The Movie deleted successfully';
    }
    header('location:/dashboard/pages/movies/');
}
