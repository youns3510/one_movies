<?php
  require('../includes/db.php');
$username = stripslashes('one_movies_admin');
$username = mysqli_real_escape_string($con, $username);
$name = stripslashes('Admin Younes');
$name = mysqli_real_escape_string($con, $name);
$email = stripslashes('youns3510@gmail.com');
$email = mysqli_real_escape_string($con, $email);
$password = stripslashes("@one_movies_admin$2019");
$password = mysqli_real_escape_string($con, $password);

$role = stripslashes('admin');
$role = mysqli_real_escape_string($con, $role);
$query = "INSERT into `admins` (username, name, email, role)
VALUES ('$username', '$name', '$email', '$role')";
$result = $con->query($query);
if ($result) {
    echo 'success';
    $q = "INSERT into `ad_pass`(admin_id,password)VALUES ('$con->insert_id', '" . md5($password) . "')";
    $result = $con->query($q);
    if ($result) {
        echo 'success passwrod';
    } else {
        echo "passoword".$con->error;
    }
} else {
    echo "admin".$con->error;
}
