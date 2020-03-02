<?php
require_once(__DIR__ . '/../../constants.php');
require(__DIR__."/active.php");

 if (!isset($_SESSION)) {
     session_start();
 }
if (!isset($_SESSION["auth"]) && $_SESSION["auth"] !== 'admin') {
    header("Location: /dashboard/pages/login.php");
    exit();
}


//$host = '//' . $_SERVER['HTTP_HOST'] . '/';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $page_title." | ";?>Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo HOST; ?>dashboard/includes/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo HOST; ?>dashboard/includes/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
          href="<?php echo HOST; ?>dashboard/includes/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- summernote -->
    <!-- <link rel="stylesheet" href="<?php echo HOST; ?>dashboard/includes/plugins/summernote/summernote-bs4.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo HOST; ?>dashboard/includes/plugins/toastr/toastr.min.css" type="text/css"/>

    <?php if (isset($styles)) {
        echo $styles;
    }; ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link" target="_blank">Visit Site</a>
            </li>

        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3" action="/dashboard/pages/search.php">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search"  name="q" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
 </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/dashboard/" class="brand-link">
            <img src="<?php echo HOST; ?>dashboard/includes/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">ONE MOVIES| Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->


            <div class="dropdown mb-5" style="width:100px">
                <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img style="width:50px" src="<?php echo HOST; ?>dashboard/includes/dist/img/user2-160x160.jpg"
                         class="img-circle" alt="User Image">
                    <span class="ml-2">
            <?php if (isset($_SESSION['username'])) {
                echo $_SESSION['username'];
            } ?></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                        <i class="right fas fa-user-alt"></i>
                        Porfile
                    </a>
                    <a class="dropdown-item" href="/dashboard/pages/logout.php">
                        <i class="right fas fa-sign-out-alt"></i>
                        Log out
                    </a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/dashboard/"
                           class="nav-link <?php echo $active_dashboard;?>">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview <?php echo $open; ?>">
                        <a href="#" class="nav-link <?php echo $active_all_MV; echo $active_upload_MV; ?>">
                            <i class="nav-icon fas fa-video"></i>
                            <p>
                                Movies
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard/pages/movies/"
                                   class="nav-link <?php echo $active_all_MV;?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/pages/movies/upload.php"
                                   class="nav-link <?php echo $active_upload_MV; ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Upload</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
