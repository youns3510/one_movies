<?php
require_once(__DIR__ . '/constants.php');
//$host = '//' . $_SERVER['HTTP_HOST'] . '/';
require_once(__DIR__ . '/dashboard/includes/db.php');
require(__DIR__ . "/dashboard/controllers/movieController.php");

$data = [

  ["name" => "Independence Day", "story" => "", "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "1_img.jpg", 'banner' => '1.jpg'],
  ["name" => "Maximum Ride", "story" => "",  "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "2_img.jpg", 'banner' => '2.jpg'],
  ["name" => "Ben-Hur", "story" => "",  "release_date" => "2020-01-23", "yeardir" => "2020", "filename" => "3_img.jpg", 'banner' => '3.jpg'],
  ["name" => "Central Intelligence", "story" => "",  "release_date" => "2010-01-23", "yeardir" => "2010", "filename" => "4_img.jpg", 'banner' => '4.jpg'],
  ["name" => "Tarazan", "story" => "",  "release_date" => "2001-01-23", "yeardir" => "2001", "filename" => "5_img.jpg", 'banner' => '5.jpg'],
  ["name" => "L'Era Glaciale", "story" => "",  "release_date" => "2013-01-23", "yeardir" => "2013", "filename" => "6_img.jpg", 'banner' => '6.jpg'],
  ["name" => "The Conjuring 2", "story" => "",  "release_date" => "2012-01-23", "yeardir" => "2012", "filename" => "7_img.jpg", 'banner' => '7.jpg'],
  ["name" => "Captain America:Civil War ", "story" => "",  "release_date" => "2010-01-23", "yeardir" => "2010", "filename" => "8_img.jpg", 'banner' => '8.jpg'],
  ["name" => "Moana", "story" => "",  "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "9_img.jpg", 'banner' => '9.jpg'],
  ["name" => "Nine Lives", "story" => "",  "release_date" => "2020-01-23", "yeardir" => "2020", "filename" => "10_img.jpg", 'banner' => '10.jpg'],
  ["name" => "War Dogs", "story" => "",  "release_date" => "2010-01-23", "yeardir" => "2010", "filename" => "11_img.jpg", 'banner' => '11.jpg'],
  ["name" => "Mechanic", "story" => "",  "release_date" => "2001-01-23", "yeardir" => "2001", "filename" => "12_img.jpg", 'banner' => '12.jpg'],
  ["name" => "BFG", "story" => "",  "release_date" => "2013-01-23", "yeardir" => "2013", "filename" => "13_img.jpg", 'banner' => '13.jpg'],
  ["name" => "X-men Apocalypse", "story" => "",  "release_date" => "2012-01-23", "yeardir" => "2012", "filename" => "14_img.jpg", 'banner' => '14.jpg'],
  ["name" => "Greater", "story" => "",  "release_date" => "2010-01-23", "yeardir" => "2010", "filename" => "15_img.jpg", 'banner' => '15.jpg'],
  ["name" => "Assassin's Creed 3", "story" => "",  "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "16_img.jpg", 'banner' => '16.jpg'],


  ["name" => "New Independence Day", "story" => "", "release_date" => "2003-01-23", "yeardir" => "2003", "filename" => "1_img.jpg", 'banner' => '1.jpg'],
  ["name" => "New Maximum Ride", "story" => "",  "release_date" => "2003-01-23", "yeardir" => "2003", "filename" => "2_img.jpg", 'banner' => '2.jpg'],
  ["name" => "New Ben-Hur", "story" => "",  "release_date" => "2017-01-23", "yeardir" => "2017", "filename" => "3_img.jpg", 'banner' => '3.jpg'],
  ["name" => "New Central Intelligence", "story" => "",  "release_date" => "2017-01-23", "yeardir" => "2017", "filename" => "4_img.jpg", 'banner' => '4.jpg'],
  ["name" => "New Tarazan", "story" => "",  "release_date" => "2011-01-23", "yeardir" => "2011", "filename" => "5_img.jpg", 'banner' => '5.jpg'],
  ["name" => "New L'Era Glaciale", "story" => "",  "release_date" => "2014-01-23", "yeardir" => "2014", "filename" => "6_img.jpg", 'banner' => '6.jpg'],
  ["name" => "New The Conjuring 2", "story" => "",  "release_date" => "2015-01-23", "yeardir" => "2015", "filename" => "7_img.jpg", 'banner' => '7.jpg'],
  ["name" => "New Captain America:Civil War ", "story" => "",  "release_date" => "2012-01-23", "yeardir" => "2012", "filename" => "8_img.jpg", 'banner' => '8.jpg'],
  ["name" => "New Moana", "story" => "",  "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "9_img.jpg", 'banner' => '9.jpg'],
  ["name" => "New Nine Lives", "story" => "",  "release_date" => "2017-01-23", "yeardir" => "2017", "filename" => "10_img.jpg", 'banner' => '10.jpg'],
  ["name" => "New War Dogs", "story" => "",  "release_date" => "2008-01-23", "yeardir" => "2008", "filename" => "11_img.jpg", 'banner' => '11.jpg'],
  ["name" => "New Mechanic", "story" => "",  "release_date" => "2002-01-23", "yeardir" => "2002", "filename" => "12_img.jpg", 'banner' => '12.jpg'],
  ["name" => "New BFG", "story" => "",  "release_date" => "2013-01-23", "yeardir" => "2013", "filename" => "13_img.jpg", 'banner' => '13.jpg'],
  ["name" => "New X-men Apocalypse", "story" => "",  "release_date" => "2014-01-23", "yeardir" => "2014", "filename" => "14_img.jpg", 'banner' => '14.jpg'],
  ["name" => "New Greater", "story" => "",  "release_date" => "2001-01-23", "yeardir" => "2001", "filename" => "15_img.jpg", 'banner' => '15.jpg'],
  ["name" => "New Assassin's Creed 3", "story" => "",  "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "16_img.jpg", 'banner' => '16.jpg'],

];
// partials/uploads

$movie_id = 0;
foreach ($data as $d) {
  // var_export()
  // echo $name."<br>";
  // }
  $d['story'] = $d['name'] . " Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.";
  // die();
  $movie_id++; //last insert id;
  echo "id: " . $movie_id . " name:" . $d['name'] . "   release_date: " . $d['release_date'] . "<br>";








  $image_SQL = "partials/uploads/" . $d['yeardir'] . '/' . str_replace(' ', '_', $d['name']) . '/' . $d['filename'];
  $banner_SQL = "partials/uploads/" . $d['yeardir'] . '/' . str_replace(' ', '_', $d['name']) . '/' . $d['banner'];
  $video_SQL = "partials/uploads/" . $d['yeardir'] . '/' .  str_replace(' ', '_', $d['name']) . '/test.MP4';
  $insert_q = "INSERT INTO `one_movies`.`movies`(`admin_id`,`name`,`story`,`release_date`,`image`,`banner`,`video`) VALUES(1,'" . $d['name'] . "','" . $d['story'] . "','" . $d['release_date'] . "','" . $image_SQL . "','" . $banner_SQL . "','" . $video_SQL . "');";
  // echo "<br><br>first query<br>" . $insert_q;
  $result = $con->query($insert_q);
  if ($result) {
    echo $movie_id . ' success insert_q<br>';
  }

  $targetDir = __DIR__ . "/partials/uploads/" . $d['yeardir'] . '/' . str_replace(' ', '_', $d['name']);
  if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
  }

  $oldpath = __DIR__ . "/partials/images/new/" . $d['filename'];
  if (copy(strval($oldpath), strval($targetDir . "/" . $d['filename']))) {
    echo "id: " . $movie_id . " Success image<br>";
  };
  // banner
  $oldpathbanner = __DIR__ . "/partials/images/new/" . $d['banner'];
  if (copy(strval($oldpathbanner), strval($targetDir . "/" . $d['banner']))) {
    echo "id: " . $movie_id . " Success banner<br>";
  };

  $oldpathvideo = __DIR__ . "/partials/uploads/test.MP4";

  if (copy(strval($oldpathvideo), strval($targetDir . "/test.MP4"))) {
    echo "id: " . $movie_id . " Success video<br>";
  };





  // $star_rating = ["`one`", "`two`", "`three`", "`four`", "`five`"];
  // $rand_rating = array_rand($star_rating);
  // // echo "<br>".$star_rating[$rand_rating];
  // $temp = $star_rating[$rand_rating];
  // $qeury_rating = "INSERT INTO `one_movies`.`star_rating`(`movie_id`, $temp) VALUES($movie_id,1);";

  // // echo "<br><br>star rating<br>" . $qeury_rating;
  // $result = $con->query($qeury_rating);
  // if ($result) {
  //   echo $movie_id . ' success qeury_rating<br>';
  // }


  // $one1  = random_int(0, 1000);
  // $two2   = random_int(0, 1000);
  // $three3 = random_int(0, 700);
  // $four4 = random_int(0, 600);
  // $five5 = random_int(0, 400);
  // $one   = 1 * $one1;
  // $two   = 2 * $two2;
  // $three = 3 * $three3;
  // $four  = 4 * $four4;
  // $five  = 5 * $five5;

  // $max = 1;
  // $m = max($one, $two, $three, $four, $five);
  // $half = false;
  // switch ($m) {
  //   case $one:
  //     if ($two >= ($one / 2)) {
  //       $max = 1;
  //       $half = true;
  //     }
  //     break;

  //   case $two:
  //     if ($three >= ($two / 2)) {
  //       $max = 2;
  //       $half = true;
  //     }
  //     break;
  //   case $three:
  //     if ($four >= ($three / 2)) {
  //       $max = 3;
  //       $half = true;
  //     }
  //     break;
  //   case $four:
  //     if ($five >= ($four / 2)) {
  //       $max = 4;
  //       $half = true;
  //     }
  //     break;
  //   case $five:
  //     $max = 5;
  //     break;
  // }

  // echo '<br>';

  // echo "one " . $one;
  // echo '<br>';
  // echo "two  " . $two;
  // echo '<br>';
  // echo "three" . $three;
  // echo '<br>';
  // echo "four " . $four;
  // echo '<br>';
  // echo "five " . $five;
  // echo '<br>';

  // echo ($half) ? "Max " . $max . ".5" : "Max " . $max;

  // $q = "UPDATE `star_rating` SET `one` ='$one',`two` = '$two',`three`='$three',`four` = '$four',`five` = '$five' WHERE `movie_id` = '$movie_id' ;";
  // if ($con->query($q)) {
  //   echo "<br>update start rating: done<br>";
  //   rating_avg($movie_id);
  // } else {
  //   echo "<br>update start rating: failed {$con->error}<br>";
  // }
  // echo '<br>======================================';


  // $generes = ["`action`", "`biography`", "`crime`", "`family`", "`horror`", "`romance`", "`sports`", "`war`", "`adventure`", "`comedy`", "`documentary`", "`fantasy`", "`thriller`", "`animation`", "`costume`", "`drama`", "`history`", "`musical`", "`psychological`"];

  // $ran_num = random_int(1, 5);
  // $rand_g = array_rand($generes, $ran_num);
  // // var_dump($rand_g);
  // $rand_gen = array();
  // for ($i = 0; $i < count($rand_g); $i++) {
  //   $temp = $rand_g[$i];
  //   $rand_gen[] .= $generes[$temp];
  //   // echo  $rand_gen[$i] . " " . $rand_g[$i] . "<br>";
  // }

  // $one = array();
  // for ($i = 0; $i < count($rand_gen); $i++) {
  //   $one[$i] = 1;
  // }
  // $one = implode(",", $one);
  // $g = implode(",", $rand_gen);
  // $qeury_gen = "INSERT INTO `one_movies`.`genres`(movie_id,$g) VALUES($movie_id,$one);";
  // // echo "<br><br>genres<br>" . $qeury_gen;
  // $result = $con->query($qeury_gen);
  // if ($result) {
  //   echo $movie_id . ' success qeury_gen<br>';
  // }

  sleep(3);
  echo "<br>==================================================<br>";
}
