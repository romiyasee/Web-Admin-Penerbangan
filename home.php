<?php 
  session_start();
  include 'koneksi.php';
  // Memeriksa apakah session telah diatur
  if (isset($_SESSION['user'])) {
      // Session tersedia, lakukan sesuatu
      $nilai = $_SESSION['user'];
  } else {
      // Session tidak tersedia
      echo "Session tidak diatur.";
      echo "<script>window.location='" . baseurl("login.php") . "';</script>";
      
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pemweb Airlines | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/logo-poloss.png" alt="Pemweb-Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pemweb Airlines</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block"><?php echo $nilai;?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                MENU
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            <li class="nav-item">
            <a href="pages/jadwal_penerbangan/index.php" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
                Jadwal Penerbangan
              </p>
            </a>
          </li>   
          </li>
          <li class="nav-item">
            <a href="pages/rute_penerbangan/index.php" class="nav-link">
              <i class="nav-icon fas fa-route"></i>
              <p>
                Rute Penerbangan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/data_pesawat/index.php" class="nav-link">
              <i class="nav-icon fas fa-plane"></i>
              <p>
                Data Pesawat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/data_pilot/index.php" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Data Pilot
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/data_penumpang/index.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Penumpang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="av-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <?php $data = mysqli_query($conn,"SELECT * FROM jadwal_penerbangan");
                      $jumlah= mysqli_num_rows($data);
                ?>
                <h3><?php echo $jumlah;?></h3>
                <p>Jumlah Penerbangan</p>
              </div>
              <div class="icon">
                <i class="ion ion-navigate"></i>
              </div>
              <a href="pages/jadwal_penerbangan/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php $data = mysqli_query($conn,"SELECT * FROM rute_penerbangan");
                      $jumlah= mysqli_num_rows($data);
                ?>
                <h3><?php echo $jumlah;?></h3>

                <p>Jumlah Rute</p>
              </div>
              <div class="icon">
                <i class="ion ion-map"></i>
              </div>
              <a href="pages/rute_penerbangan/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php $data = mysqli_query($conn,"SELECT * FROM data_pesawat");
                      $jumlah= mysqli_num_rows($data);
                ?>
                <h3><?php echo $jumlah;?></h3>

                <p>Jumlah Pesawat</p>
              </div>
              <div class="icon">
                <i class="ion ion-plane"></i>
              </div>
              <a href="pages/data_pesawat/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php $query = "SELECT SUM(harga_tiket) AS total FROM data_penumpang";
                      $result = mysqli_query($conn, $query);
                      $total= mysqli_num_rows($data);
                      $row = mysqli_fetch_assoc($result);
                      $total = $row['total'];
                ?>
                <h3> Rp. <?php echo $total; ?></h2>

                <p>Penjualan Tiket</p>
              </div>
              <div class="icon">
                <i class="ion ion-social-usd"></i>
              </div>
              <a href="pages/data_penumpang/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php $data = mysqli_query($conn,"SELECT * FROM data_pilot");
                      $jumlah= mysqli_num_rows($data);
                ?>
                <h3><?php echo $jumlah;?></h3>
                <p>Jumlah Pilot</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="pages/data_pilot/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php $data = mysqli_query($conn,"SELECT * FROM data_penumpang");
                      $jumlah= mysqli_num_rows($data);
                ?>
                <h3><?php echo $jumlah;?></h3>
                <p>Jumlah Penumpang</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="pages/data_penumpang/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
</div>

    <!-- /.content -->
  </div>
  


    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          
            <div class="col-12 col-sm-6">
              
              <img src="dist/img/logo-pemweb.png" style=" width: 400px; margin-left: 50px; margin-right: auto;">

              <hr>
              <h3 class="my-3">Profil Singkat</h3>

              

            </div>
          
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="deskripsi-tab" data-toggle="tab" href="#deskripsi" role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi</a>
                <a class="nav-item nav-link" id="komen-tab" data-toggle="tab" href="#komen" role="tab" aria-controls="komen" aria-selected="false">Komentar</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Galeri</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab"> 
              Pemweb Airlines adalah sebuah maskapai penerbangan yang beroperasi di industri penerbangan global. Dengan komitmen untuk memberikan pengalaman penerbangan yang aman, nyaman, dan terjangkau, Pemweb Airlines telah menjadi salah satu pemimpin di pasar penerbangan. Sebagai perusahaan penerbangan yang inovatif, Pemweb Airlines berusaha untuk memberikan layanan terbaik kepada pelanggan. Perusahaan ini mengutamakan kepuasan pelanggan dengan menyediakan penerbangan tepat waktu, pelayanan berkualitas tinggi, dan fasilitas modern yang memenuhi kebutuhan penumpang. Pemweb Airlines memiliki jaringan penerbangan yang luas, melayani berbagai tujuan domestik dan internasional. Dengan armada pesawat yang modern dan terawat dengan baik, perusahaan ini menjamin keamanan dan kenyamanan selama perjalanan. Perusahaan ini juga mengutamakan teknologi dan inovasi. Pemweb Airlines menggunakan sistem manajemen penerbangan yang canggih untuk memastikan efisiensi operasional dan keselamatan penerbangan. Selain itu, perusahaan ini juga menawarkan layanan online yang mudah digunakan, termasuk pemesanan tiket, pengecekan status penerbangan, dan manajemen pemesanan.
                 </div>
              <div class="tab-pane fade" id="komen" role="tabpanel" aria-labelledby="komen-tab"> 
              "Pemweb Airlines adalah maskapai terbaik yang pernah saya gunakan. Layanan pelanggan mereka sangat ramah dan responsif. Penerbangan tepat waktu dan kru pesawat sangat profesional. Saya sangat merekomendasikan Pemweb Airlines kepada siapa pun yang mencari pengalaman penerbangan yang luar biasa." - Michelle L.
              <p></p>
              "Saya telah menggunakan Pemweb Airlines untuk beberapa perjalanan bisnis dan saya sangat terkesan. Pesawatnya bersih dan nyaman, dan staf mereka sangat membantu. Saya juga senang dengan fleksibilitas jadwal yang ditawarkan. Pemweb Airlines adalah pilihan terbaik bagi saya." - John R.
              <p></p>
              "Saya baru saja menyelesaikan perjalanan internasional dengan Pemweb Airlines dan saya sangat puas dengan pengalaman tersebut. Penerbangan tepat waktu, makanan yang lezat, dan layanan pelanggan yang luar biasa. Pemweb Airlines pasti akan menjadi pilihan saya untuk perjalanan selanjutnya." - Sarah W.
              <p></p>
              "Saya ingin memberikan testimonial positif untuk Pemweb Airlines. Mereka memiliki harga yang sangat kompetitif dan fasilitas yang luar biasa. Saya juga menghargai keselamatan yang diutamakan oleh maskapai ini. Saya merasa aman dan nyaman selama penerbangan. Terima kasih Pemweb Airlines!" - David M.
              <p></p>
              "Saya telah menggunakan Pemweb Airlines beberapa kali dan mereka belum pernah mengecewakan saya. Staf yang ramah, layanan pelanggan yang hebat, dan penerbangan yang nyaman. Saya sangat senang dengan pengalaman saya bersama Pemweb Airlines dan saya akan terus menggunakan layanan mereka di masa mendatang." - Emily S.
              </div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> 
              <div class="post">
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="dist/img/galeri1.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="dist/img/galeri2.jpg" alt="Photo">
                              <img class="img-fluid" src="dist/img/galeri3.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="dist/img/galeri4.jpg" alt="Photo">
                              <img class="img-fluid" src="dist/img/galeri5.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
              </div>

              </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
