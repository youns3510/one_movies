<?php
$active_dashboard = $active_all_MV = $active_upload_MV = $open = "";
$current_page = $_SERVER['REQUEST_URI'];

switch ($current_page) {
 case '/dashboard/':
 case '/dashboard/index.php':
  $active_dashboard  = "active";
  break;
 case "/dashboard/pages/movies/":
 case "/dashboard/pages/movies/index.php":
  $active_all_MV = "active";
  $open = " menu-open";
  break;
 case "/dashboard/pages/movies/upload.php":
  $active_upload_MV = "active";
  $open = " menu-open";
  break;
}
