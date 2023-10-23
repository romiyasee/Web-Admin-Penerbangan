<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php'; ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="dist/img/logo-pemweb.png" style="width: 300px;">
  </div>
  <hr>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login untuk Melanjutkan</p>

      <?php
        if (isset($_POST['login'])) {
            $user = trim(mysqli_real_escape_string($conn, $_POST['user']));
            $pass = sha1(trim(mysqli_real_escape_string($conn, $_POST['pass'])));
            $sql_login = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") 
            or die(mysqli_error($conn));
            if (mysqli_num_rows($sql_login) > 0) {
                session_start();             
                $_SESSION['user'] = $user;                                              
                echo "<script>window.location='" . baseurl("home.php") . "';</script>";
                // echo "berhasil";
            } else {
                ?>
                    <div class="alert alert-danger" role="alert">
                    Gagal Login
                    </div>
                <?php
            }
        }

        ?>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="user">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
      <!-- /.social-auth-links -->

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="Assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="Assets/dist/js/adminlte.min.js"></script>
</body>
</html>