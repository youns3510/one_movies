<?php

// require_once('db.php');
// $q = "SELECT * FROM `star_rating`;";
// $result = $con->query($q);
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $rate_avg = $row['rate_avg'];
//         $max = floor($rate_avg);
//         $half = $rate_avg - $max;
//         echo "rate avg ".$rate_avg . "<br>";
//         echo "max ".$max . "<br>";
//         echo "half ".$half . "<br>===========";
//     }
// }

// die();
$rate_avg = $row['rate_avg'];
// echo $rate_avg;
$max = floor($rate_avg);
$half = $rate_avg - $max;
echo '<ul class="w3l-ratings">';
for ($i = 1; $i <= $max; $i++) {
    echo '<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>';
}
if ($half != 0) {
    echo '<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>';
    $rest = 5 - $max - 1;
    for ($i = 1; $i <= $rest; $i++) {
        echo '<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>';
    }
} else {
    $rest = 5 - $max;
    for ($i = 1; $i <= $rest; $i++) {
        echo '<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>';
    }
}
echo '</ul>';
