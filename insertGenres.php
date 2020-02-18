<?php
require_once(__DIR__ . '/constants.php');
//$host = '//' . $_SERVER['HTTP_HOST'] . '/';
require_once(__DIR__ . '/dashboard/includes/db.php');
require(__DIR__."/dashboard/controllers/movieController.php");

for ($movie_id = 1; $movie_id <= 73; $movie_id++) {

  $generes = ["`action`", "`biography`", "`crime`", "`family`", "`horror`", "`romance`", "`sports`", "`war`", "`adventure`", "`comedy`", "`documentary`", "`fantasy`", "`thriller`", "`animation`", "`costume`", "`drama`", "`history`", "`musical`", "`psychological`"];
  $gen_count = count($generes);
  $ran_num = random_int(1, $gen_count);
  $rand_g = array_rand($generes, $ran_num);
  // var_dump($rand_g);
  $rand_gen = array();
  for ($i = 0; $i < count($rand_g); $i++) {
    $temp = $rand_g[$i];
    $rand_gen[$i] = $generes[$temp];
    // echo  $rand_gen[$i] . " " . $rand_g[$i] . "<br>";
  }

  $one = array();
  for ($i = 0; $i < count($rand_gen); $i++) {
    $one[$i] = 1;
  }
  $one = implode(",", $one);
  $g = implode(",", $rand_gen);
  $qeury_gen = "INSERT INTO `one_movies`.`genres`(movie_id,$g) VALUES($movie_id,$one);";
  // echo "<br><br>genres<br>" . $qeury_gen;
  $result = $con->query($qeury_gen);
  if ($result) {
    echo $movie_id . ' success qeury_gen<br>';
  }

  sleep(3);
  echo "<br>==================================================<br>";
}
