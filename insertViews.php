<?php
require_once(__DIR__ . '/constants.php');
//$host = '//' . $_SERVER['HTTP_HOST'] . '/';
require_once(__DIR__ . '/dashboard/includes/db.php');
require(__DIR__ . "/dashboard/controllers/movieController.php");

for ($movie_id = 1; $movie_id <= 32; $movie_id++) {

 $rand_views = random_int(1000, 1000000);
 $q = "UPDATE `movies` SET `views`='$rand_views' WHERE `id`='$movie_id';";
 $result = $con->query($q);
 if ($result) {
  echo $movie_id . ' success views<br>';
 }
 sleep(3);
 echo "<br>==================================================<br>";
}
