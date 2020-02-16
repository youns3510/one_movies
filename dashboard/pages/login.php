<?php
//$host = '//' . $_SERVER['HTTP_HOST'] . '/';
require_once(__DIR__.'/../../constants.php');
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["auth"]) && $_SESSION["auth"] = 'admin') {
    header("Location: /dashboard/");
    exit();
}
require('../includes/db.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ONE MOVIES| Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo HOST; ?>dashboard/includes/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo HOST; ?>dashboard/includes/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo HOST; ?>dashboard/includes/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo HOST; ?>dashboard/includes/plugins/toastr/toastr.min.css" type="text/css" />

</head>

<body class="hold-transition login-page">
    <?php

// var_dump($_POST);
// echo "<br><br><br> Session:";
// var_dump($_SESSION);
    if (isset($_POST['login-btn'])) {
        // var_dump($_POST);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $query = "SELECT * FROM `one_movies`.`admins` WHERE `username`='$username';";
        $result = $con->query($query);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $admin_id = $row['id'];
            $query = "SELECT * FROM `one_movies`.`ad_pass` WHERE `admin_id`='$admin_id';";
            $res = $con->query($query);
            if ($res->num_rows == 1) {
                $r = $res->fetch_assoc();
                if (password_verify($password, $r['password'])) {
                    $_SESSION["auth"] = 'admin';
                    $_SESSION['admin_id'] = $admin_id;
                    $_SESSION['username'] = $username;

                    $_SESSION['action'] = true;
                    $_SESSION['option'] = 'success';
                    $_SESSION['message'] = 'successfully Login';

                    header("Location: /dashboard/");
                } else {
                    // echo "test password";
                    $_SESSION['action'] = true;
                    $_SESSION['option'] = 'error';
                    $_SESSION['message'] = 'OOPs.....<br>Authentication Error<br>Username/password is incorrect.';
               
                }
            }
        } else {
            // echo "test username";
            $_SESSION['action'] = true;
            $_SESSION['option'] = 'error';
            $_SESSION['message'] = 'OOPs.....<br>Authentication Error<br>Username/password is incorrect.';
               
        }
    }
    ?>
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>ONE MOVIES|Admin</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="login.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="login-btn">Sign In
                        </button>
                    </div>
                    <!-- /.col -->

                </form>


            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->


    <!-- jQuery -->
    <script src="<?php echo HOST; ?>dashboard/includes/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo HOST; ?>dashboard/includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo HOST; ?>/dashboard/includes/plugins/toastr/toastr.min.js"></script>
    <?php if (isset($_SESSION['action']) && $_SESSION['option'] == 'error') { ?>
        <script>
            toastr.options.closeButton = true;
            <?php echo 'toastr.'.$_SESSION['option'] . '("' . $_SESSION['message'] . '",{timeOut: 10000});'; ?>
        </script>

    <?php
        unset($_SESSION['action']);
        unset($_SESSION['message']);
        unset($_SESSION['option']);
    } ?>
</body>

</html>