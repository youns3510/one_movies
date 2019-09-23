<?php
// $avg = ($value['one'] + $value['two'] + $value['three'] + $value['four'] + $value['five']) / 5;
// echo $avg;
$max = max($value['one'], $value['two'], $value['three'], $value['four'], $value['five']);

switch ($max) {
  case $value['one']:
    ?>
    <ul class="w3l-ratings">
      <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
    </ul>
  <?php
    break;
  case $value['two']:
  ?>
  <ul class="w3l-ratings">
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
  </ul>
<?php
    break;
  case $value['three']:
  ?>
  <ul class="w3l-ratings">
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
  </ul>
<?php
    break;
  case $value['four']:
  ?>
  <ul class="w3l-ratings">
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
  </ul>
<?php
    break;
  case $value['five']:
  ?>
  <ul class="w3l-ratings">
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
  </ul>
<?php
    break;
}
