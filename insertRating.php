<?php
require_once(__DIR__ . '/constants.php');
//$host = '//' . $_SERVER['HTTP_HOST'] . '/';
require_once(__DIR__ . '/dashboard/includes/db.php');
require(__DIR__ . "/dashboard/controllers/movieController.php");

for ($movie_id = 1; $movie_id <= 32; $movie_id++) {



 $star_rating = ["`one`", "`two`", "`three`", "`four`", "`five`"];
 $rand_rating = array_rand($star_rating);
 // echo "<br>".$star_rating[$rand_rating];
 $temp = $star_rating[$rand_rating];
 $qeury_rating = "INSERT INTO `one_movies`.`star_rating`(`movie_id`, $temp) VALUES($movie_id,1);";

 // echo "<br><br>star rating<br>" . $qeury_rating;
 $result = $con->query($qeury_rating);
 if ($result) {
  echo $movie_id . ' success qeury_rating<br>';
 }


 $one1  = random_int(0, 1000);
 $two2   = random_int(0, 1000);
 $three3 = random_int(0, 700);
 $four4 = random_int(0, 600);
 $five5 = random_int(0, 400);
 $one   = 1 * $one1;
 $two   = 2 * $two2;
 $three = 3 * $three3;
 $four  = 4 * $four4;
 $five  = 5 * $five5;

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

 echo '<br>';

 echo "one " . $one;
 echo '<br>';
 echo "two  " . $two;
 echo '<br>';
 echo "three" . $three;
 echo '<br>';
 echo "four " . $four;
 echo '<br>';
 echo "five " . $five;
 echo '<br>';

 echo ($half) ? "Max " . $max . ".5" : "Max " . $max;

 $q = "UPDATE `star_rating` SET `one` ='$one',`two` = '$two',`three`='$three',`four` = '$four',`five` = '$five' WHERE `movie_id` = '$movie_id' ;";
 if ($con->query($q)) {
  echo "<br>update start rating: done<br>";
  rating_avg($movie_id);
 } else {
  echo "<br>update start rating: failed {$con->error}<br>";
 }
 sleep(3);
 echo "<br>==================================================<br>";
}
