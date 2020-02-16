<?php
require_once(__DIR__ . '/constants.php');
//$host = '//' . $_SERVER['HTTP_HOST'] . '/';
require_once(__DIR__ . '/dashboard/includes/db.php');
require(__DIR__."/dashboard/controllers/movieController.php");

$data = [

  ["name" => "God’s Compass", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.", "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "m15.jpg"],
  ["name" => "Jason Bourne", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.",  "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "m5.jpg"],
  ["name" => "Peter", "story" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!",  "release_date" => "2020-01-23", "yeardir" => "2020", "filename" => "m17.jpg"],
  ["name" => "War Dogs", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.", "release_date" => "2010-01-23", "yeardir" => "2010", "filename" => "m1.jpg"],
  ["name" => "Civil War", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2001-01-23", "yeardir" => "2001", "filename" => "m19.jpg"],
  ["name" => "The Secret Life of Pets", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2013-01-23", "yeardir" => "2013", "filename" => "m20.jpg"],
  ["name" => "The Jungle Book", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2012-01-23", "yeardir" => "2012", "filename" => "m21.jpg"],
  ["name" => "Assassin’s Creed 3", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2010-01-23", "yeardir" => "2010", "filename" => "m22.jpg"],

  ["name" => "new God’s Compass", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.", "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "m15.jpg"],
  ["name" => "new Jason Bourne", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.",  "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "m5.jpg"],
  ["name" => "new Peter", "story" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!",  "release_date" => "2020-01-23", "yeardir" => "2020", "filename" => "m17.jpg"],
  ["name" => "new War Dogs", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.", "release_date" => "2010-01-23", "yeardir" => "2010", "filename" => "m1.jpg"],
  ["name" => "new Civil War", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2001-01-23", "yeardir" => "2001", "filename" => "m19.jpg"],
  ["name" => "new The Secret Life of Pets", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2013-01-23", "yeardir" => "2013", "filename" => "m20.jpg"],
  ["name" => "new The Jungle Book", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2012-01-23", "yeardir" => "2012", "filename" => "m21.jpg"],
  ["name" => "new Assassin’s Creed 3", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2010-01-23", "yeardir" => "2010", "filename" => "m22.jpg"],

  ["name" => "last God’s Compass", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus perspiciatis eveniet, blanditiis molestiae dolore quaerat, vitae maiores, aspernatur explicabo quisquam nemo quas consectetur nisi accusamus dolores ipsam praesentium distinctio.", "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "m15.jpg"],
  ["name" => "last Jason Bourne", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla, alias aspernatur fuga minus quisquam dolorum laudantium ratione doloremque possimus consequatur, ducimus autem impedit odio temporibus labore nihil accusamus expedita.",  "release_date" => "2019-01-23", "yeardir" => "2019", "filename" => "m5.jpg"],
  ["name" => "last Peter", "story" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, ducimus minus excepturi esse sunt fuga saepe ipsum totam, pariatur quam distinctio. Eum nemo sint accusantium laborum illo? Obcaecati, eos laborum!",  "release_date" => "2020-01-23", "yeardir" => "2020", "filename" => "m17.jpg"],
  ["name" => "last War Dogs", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.", "release_date" => "2010-01-23", "yeardir" => "2010", "filename" => "m1.jpg"],
  ["name" => "last Civil War", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2001-01-23", "yeardir" => "2001", "filename" => "m19.jpg"],
  ["name" => "last The Secret Life of Pets", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2013-01-23", "yeardir" => "2013", "filename" => "m20.jpg"],
  ["name" => "last The Jungle Book", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2012-01-23", "yeardir" => "2012", "filename" => "m21.jpg"],
  ["name" => "last Assassin’s Creed 3", "story" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus minus delectus nulla optio praesentium nobis magnam inventore blanditiis doloribus, vel, minima, autem asperiores in ex sapiente consectetur est excepturi.",  "release_date" => "2010-01-23", "yeardir" => "2010", "filename" => "m22.jpg"]

];
// partials/uploads

$movie_id = 0;
foreach ($data as $d) {
  // var_export()
  // echo $name."<br>";
  // }

  // die();
  $movie_id++; //last insert id;
  echo "id: " . $movie_id . " name:" . $d['name'] . "   release_date: " . $d['release_date'] . "<br>";








  $image_SQL = "partials/uploads/" . $d['yeardir'] . '/' . str_replace(' ','_',$d['name']) . '/' . $d['filename'];
  $video_SQL = "partials/uploads/" . $d['yeardir'] . '/' .  str_replace(' ','_',$d['name']). '/test.MP4';
  $insert_q = "INSERT INTO `one_movies`.`movies`(`admin_id`,`name`,`story`,`release_date`,`image`,`video`) VALUES(1,'" .$d['name']. "','" . $d['story'] . "','" . $d['release_date'] . "','" . $image_SQL . "','" . $video_SQL . "');";
  // echo "<br><br>first query<br>" . $insert_q;
  $result = $con->query($insert_q);
  if ($result) {
    echo $movie_id . ' success insert_q<br>';
  }

  $targetDir = __DIR__ . "/partials/uploads/" . $d['yeardir'] . '/' . str_replace(' ','_',$d['name']);
  if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
  }

  $oldpath = __DIR__ . "/partials/images/" . $d['filename'];
  if (copy(strval($oldpath), strval($targetDir . "/" . $d['filename']))) {
    echo "id: " . $movie_id . " Success image<br>";
  };

  $oldpathvideo = __DIR__ . "/partials/uploads/test.MP4";

  if (copy(strval($oldpathvideo), strval($targetDir . "/test.MP4"))) {
    echo "id: " . $movie_id . " Success video<br>";
  };





  $star_rating = ["`one`", "`two`", "`three`", "`four`", "`five`"];
  $rand_rating = array_rand($star_rating);
  // echo "<br>".$star_rating[$rand_rating];
  $qeury_rating = "INSERT INTO `one_movies`.`star_rating`(`movie_id`,$star_rating[$rand_rating]) VALUES($movie_id,1);";

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
 }else{
  echo "<br>update start rating: failed {$con->error}<br>";
 }
 echo '<br>======================================';


  $generes = ["`action`", "`biography`", "`crime`", "`family`", "`horror`", "`romance`", "`sports`", "`war`", "`adventure`", "`comedy`", "`documentary`", "`fantasy`", "`thriller`", "`animation`", "`costume`", "`drama`", "`history`", "`musical`", "`psychological`"];
  $gen_count = count($generes);
  $ran_num = random_int(1, $gen_count);
  $rand_g = array_rand($generes, $ran_num);
  // var_dump($rand_g);
  $rand_gen = array();
  for ($i = 0; $i < count($rand_g); $i++) {
    $rand_gen[$i] = $generes[$rand_g[$i]];
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
