<?php 
include "config.php";
error_reporting(0);


$urut = 1;
$no = 1;

$dana = mysqli_query($conn, "SELECT * FROM tabel_5");


// pengeluaran

if ( isset($_POST["submit"])) {
    $kolom_1 = htmlspecialchars($_POST['kolom_1']);
    $kolom_2 = htmlspecialchars($_POST['kolom_2']);
    $kolom_3 = htmlspecialchars($_POST['kolom_3']);
    
    
    $query = "INSERT INTO tabel_5 VALUES ('', '$kolom_1', '$kolom_2', '$kolom_3')";
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-info text-center'>data berhasil ditambahkan !! </div>";
        header("refresh: 2");
    } else {
        echo "<div class='alert alert-danger text-center'>data gagal ditambahkan!! </div>" .mysqli_error($conn);
        header("refresh: 3");
    }
    mysqli_close($conn);
    
    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> tabel 5</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dasboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                <img src="assets/logo.png" alt="" width="30px">
                </div>
                <div class="sidebar-brand-text mx-3">Gembong<sup>Dadi</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dasboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                tabel data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">data-data</h6>
                        <a class="collapse-item" href="anggota_pemerintah.php">anggota pemerintah</a>
                        <a class="collapse-item" href="masyarakat.php">data masyarakat</a>
                        <a class="collapse-item" href="pertanahan.php">pertanahan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>informasi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">berita/informasi</h6>
                        <a class="collapse-item" href="berita.php">berita</a>
                        <a class="collapse-item" href="dana_desa.php">dana desa</a>
                        <a class="collapse-item" href="kepala_desa.php">kepala desa</a>
                        <a class="collapse-item" href="surat.php">surat skck</a>
                        <a class="collapse-item" href="letteer.php">surat Pemberitahuan</a>
                        <a class="collapse-item" href="tabel_skck.php">tabel skck</a>
                        <a class="collapse-item" href="tabel_surat.php">tabel surat Pemberitahuan</a>
                        <a class="collapse-item" href="skck.php">hasil surat skck</a>
                        <a class="collapse-item" href="pemberitahuan.php">hasil surat Pemberitahuan</a>
                    </div>
                </div>
                </li>
                
                <!-- Divider -->
                <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>tabel-tabel</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">TABEL</h6>
                            <a class="collapse-item" href="tabel_1.php">tabel 1</a>
                            <a class="collapse-item" href="tabel_2.php">tabel 2</a>
                            <a class="collapse-item" href="tabel_3.php">tabel 3</a>
                            <a class="collapse-item" href="tabel_4.php">tabel 4</a>
                            <a class="collapse-item" href="tabel_5.php">tabel 5</a>
                        </div>
                    </div>
                </li>

            <!-- Heading -->
           

           


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                            <!-- Dropdown - Messages -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <p class="mb-2"></p>
                <h1 class="h3 mb-2 text-gray-800 text-center">TABEL 5</h1>
                            <p class="mb-2"></p>
           
<p class="mb-2"></p>
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA
            </div>
            </form>
            <div class="card-body">
              <form action="" method="POST">
                <div class="form-group">
                  <label for="kolom_1">KOLOM 1</label>
                  <input type="text" name="kolom_1" placeholder="Masukkan kolom_1" class="form-control">
                </div>
                
                <div class="form-group">
                  <label for="kolom_2">KOLOM 2</label>
                  <input type="text" name="kolom_2" placeholder="Masukkan kolom_2" class="form-control">
                </div>

                <div class="form-group">
                  <label for="kolom_3">KOLOM 3</label>
                  <input type="text" name="kolom_3" placeholder="keterangan" class="form-control">
                </div>
                
                <input type="submit" name="submit" class="btn btn-success"></input>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>
<p class="mb-2"></p>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Struktur</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="50px">NO</th>
                        <th>KOLOM 1</th>
                        <th>KOLOM 2</th>
                        <th>KOLOM 3</th>
                        <th width="150px">AKSI</th>
                    </tr>
                </thead>
                    <?php 
                        while($dn = mysqli_fetch_array($dana)) {
                    ?>
                <tbody>
                    <tr>
                        <td><?= $no;?></td>
                        <td><?= $dn ["kolom_1"] ?></td>
                        <td><?= $dn ["kolom_2"] ?></td>
                        <td><?= $dn ["kolom_3"] ?></td>
                        <td>
                         <a href="hapus_tabel5.php?id=<?= $dn ["id"]?>"><button class="btn btn-danger">hapus</button></a>
                        </td>
                    </tr>
                    </tr>
                </tbody>
                <?php $no++; ?>
                    <?php }?>
            </table>
        </div>
    </div>
</div>
<!-- Content Row -->
<div class="row">
</div>
<!-- /.container-fluid -->
</div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; desa gemboangdadi kecamatan suradadi</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>