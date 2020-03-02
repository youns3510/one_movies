<?php
// Notice that this file will be required in two different files so there is one condition get excat data  (isset($char)&& !empty($char))?
// this file for determine products per page
// echo 'config_pageing';
// die;
// number of page
$page = (isset($char)&& !empty($char))? $char."_page" : "page"; //
if (isset($_GET[$page]) &&  filter_var($_GET[$page], FILTER_VALIDATE_INT)) { 
    $page = (int) $_GET[$page];
} else {
    $page = 1;
}

// echo $page;
// record per page
$record_per_page = 12;

$start_read_from = ($record_per_page * $page) - $record_per_page;
