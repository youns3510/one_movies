<?php
$host = "http://localhost:8000/";
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
  <link rel="stylesheet" href="<?php echo $host;?>dashboard/includes/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $host;?>dashboard/includes/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $host;?>dashboard/includes/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<?php
    require('../includes/db.php');
    session_start();
        if (isset($_POST['login-btn'])) {
            $username = stripslashes($_POST['username']);
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_POST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $query = "SELECT * FROM `admins` WHERE username='$username';";
            $result = $con->query($query) or die($con->error);
            if ($result->num_rows == 1) {
                $row=$result->fetch_assoc();
                $admin_id = $row['id'];
                $query = "SELECT * FROM `ad_pass` WHERE `admin_id`='$admin_id';";
                $res = $con->query($query) or die($con->error);
                if ($res->num_rows == 1) {
                  $r=$res->fetch_assoc();
                  if (password_verify($password, $r['password'])) {
                    $_SESSION['admin_id'] = $admin_id;
                      $_SESSION['username'] = $username;
                      $_SESSION['name'] =$row['name'];
                      header("Location: /dashboard/");
                  }
                }
            } else {
                echo "<div class='form'>
                      <h3>Username/password is incorrect.</h3>
                      <br/>Click here to <a href='/dashboard/pages/login.php'>Login</a></div>";
            }
        } else {
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
          <input type="text" class="form-control"  name="username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password"  placeholder="Password" required>
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
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="login-btn">Sign In</button>
          </div>
          <!-- /.col -->
       
      </form>

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<?php
        } ?>

<!-- jQuery -->
<script src="<?php echo $host; ?>dashboard/includes/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $host; ?>dashboard/includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
