<?php
// $avg = ($row['one'] + $row['two'] + $row['three'] + $row['four'] + $row['five']) / 5;
// echo $avg;
$max = max($row['one'], $row['two'], $row['three'], $row['four'], $row['five']);

switch ($max) {
    case $row['one']:
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
    case $row['two']:
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
    case $row['three']:
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
    case $row['four']:
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
    case $row['five']:
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
