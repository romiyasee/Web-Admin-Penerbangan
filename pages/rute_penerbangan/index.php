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
  <title>Pemweb Airlines | Rute </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
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

      <!-- Messages Dropdown Menu -->
     
      
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
    <img src="../../dist/img/logo-poloss.png" alt="Pemweb-Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pemweb Airlines</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
            <a href="../../home.php" class="nav-link active">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                MENU
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../home.php" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="../jadwal_penerbangan/index.php" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
                Jadwal Penerbangan
              </p>
            </a>
          </li>   
          </li>

          <li class="nav-item">
            <a href="../rute_penerbangan/index.php" class="nav-link active">
              <i class="nav-icon fas fa-route"></i>
              <p>
                Rute Penerbangan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../data_pesawat/index.php" class="nav-link">
              <i class="nav-icon fas fa-plane"></i>
              <p>
                Data Pesawat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../data_pilot/index.php" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Data Pilot
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../data_penumpang/index.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Penumpang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rute Penerbangan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rute Penerbangan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="container mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahmahasiswa">
        <i class="fas fa-plus"></i>
            Tambah Rute
        </button>
        <a href="export.php" class="btn btn-warning" target="_blank">
        <i class="fas fa-file-export"></i>
            Export
        </a>
        <br>

        <!-- Modal -->
        <div class="modal fade" id="tambahmahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Rute</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="<?php echo baseurl("aksi.php") ?>">
                        <input type="hidden" class="form-control" id="id" aria-describedby="emailHelp" value="<?php echo $row["id_rute"]; ?>" name="id_rute">
                        <div class="mb-3">
                            <label for="kode_rute" class=" form-label">Kode Rute</label>
                            <input type="text" class="form-control" id="kode_rute" aria-describedby="emailHelp" name="kode_rute">
                        </div>
                        <div class="mb-3">
                            <label for="bandara_asal" class=" form-label">Bandara Asal</label>
                            <input type="text" class="form-control" id="bandara_asal" aria-describedby="emailHelp" name="bandara_asal">
                        </div>
                        <div class="mb-3">
                            <label for="bandara_tujuan" class=" form-label">Bandara Tujuan</label>
                            <input type="text" class="form-control" id="bandara_tujuan" aria-describedby="emailHelp" name="bandara_tujuan">
                        </div>
                        <div class="mb-3">
                            <label for="lama_penerbangan" class=" form-label">Lama Penerbangan</label>
                            <input type="text" class="form-control" id="lama_penerbangan" aria-describedby="emailHelp" name="lama_penerbangan">
                        </div>
                        <div class="mb-3">
                            <label for="harga_tiket" class=" form-label">Harga Tiket</label>
                            <input type="text" class="form-control" id="harga_tiket" aria-describedby="emailHelp" name="harga_tiket">
                        </div>
                        <br>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="tambah-user">Save changes</button>
                        </div>
                    </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr class="bg-primary">
                    <th scope="col">No</th>
                    <th scope="col">Kode Rute</th>
                    <th scope="col">Bandara Asal</th>
                    <th scope="col">Bandara Tujuan</th>
                    <th scope="col">Lama Penerbangan</th>
                    <th scope="col">Harga Tiket</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM rute_penerbangan";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $no_urut = 0;
                    while ($row = $result->fetch_assoc()) {
                        $no_urut++
                ?>
                        <tr>
                            <td>
                                <?php echo $no_urut; ?>
                            </td>
                            <td>
                                <?php echo $row["kode_rute"]; ?>
                            </td>
                            <td>
                                <?php echo $row["bandara_asal"]; ?>
                            </td>
                            <td>
                                <?php echo $row["bandara_tujuan"]; ?>
                            </td>
                            <td>
                                <?php echo $row["lama_penerbangan"]; ?>
                            </td>
                            <td>
                                <?php echo $row["harga_tiket"]; ?>
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row["id_rute"]; ?>">
                                <i class="fas fa-pen"></i>
                               </a>

                                <!-- Modal -->
                                <div class="modal fade" id="edit<?php echo $row["id_rute"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Rute</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?php echo baseurl("aksi.php") ?>">
                                                    <input type="hidden" class="form-control" id="id" aria-describedby="emailHelp" value="<?php echo $row["id_rute"]; ?>" name="id_rute">
                                                    <div class="mb-3">
                                                        <label for="kode_rute" class=" form-label">Kode Rute</label>
                                                        <input type="text" class="form-control" id="kode_rute" aria-describedby="emailHelp" value="<?php echo $row["kode_rute"]; ?>" name="kode_rute">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="bandara_asal" class=" form-label">Bandara Asal</label>
                                                        <input type="text" class="form-control" id="bandara_asal" aria-describedby="emailHelp" value="<?php echo $row["bandara_asal"]; ?>" name="bandara_asal">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="bandara_tujuan" class=" form-label">Bandara Tujuan</label>
                                                        <input type="text" class="form-control" id="bandara_tujuan" aria-describedby="emailHelp" value="<?php echo $row["bandara_tujuan"]; ?>" name="bandara_tujuan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="lama_penerbangan" class=" form-label">Lama Penerbangan</label>
                                                        <input type="text" class="form-control" id="lama_penerbangan" aria-describedby="emailHelp" value="<?php echo $row["lama_penerbangan"]; ?>" name="lama_penerbangan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="harga_tiket" class=" form-label">Harga Tiket</label>
                                                        <input type="text" class="form-control" id="harga_tiket" aria-describedby="emailHelp" value="<?php echo $row["harga_tiket"]; ?>" name="harga_tiket">
                                                    </div>
                                                    <br>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="edit-user">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $row["id_rute"]; ?>">
                                <i class="fas fa-trash"></i>
                                </a>
                                <div class="modal fade" id="hapus<?php echo $row["id_rute"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Rute</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?php echo baseurl("aksi.php") ?>">
                                                    <input type="text" class="form-control" id="id" aria-describedby="emailHelp" value="<?php echo $row["id_rute"]; ?>" name="id_rute">

                                                    <br>
                                                    <h5>Apakah Anda Yakin Menghapus ?</h5>
                                                    <br>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger" name="delete-user">Hapus</button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "data kosong";
                }

                ?>
            </tbody>
        </table>
    </div>
   

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
