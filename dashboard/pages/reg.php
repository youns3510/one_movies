<?php
  require('../includes/db.php');
$username = stripslashes('2one_movies_admin');
$username = mysqli_real_escape_string($con, $username);
$name = stripslashes('2Admin Younes');
$name = mysqli_real_escape_string($con, $name);
$email = stripslashes('2youns3510@gmail.com');
$email = mysqli_real_escape_string($con, $email);
$password = stripslashes("2@one_movies_admin$2019");
$password = mysqli_real_escape_string($con, $password);

$role = stripslashes('admin');
$role = mysqli_real_escape_string($con, $role);
$query = "INSERT into `admins` (username, name, email, role)
VALUES ('$username', '$name', '$email', '$role')";
$result = $con->query($query);
if ($result) {
    echo 'success';
    $q = "INSERT into `ad_pass`(admin_id,password)VALUES ('$con->insert_id', '".password_hash($password, PASSWORD_DEFAULT)."')";
    $result = $con->query($q);
    if ($result) {
        echo 'success passwrod';
    } else {
        echo "passoword".$con->error;
    }
} else {
    echo "admin".$con->error;
}
