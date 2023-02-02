<?php
include "config.php";
$datas = mysqli_query($conn, "SELECT * FROM masyarakat");
$cout = mysqli_num_rows($datas);
$data = mysqli_query($conn, "SELECT * FROM pegawai");
$cout1 = mysqli_num_rows($data);


$urut = 1;
$no = 1;
$dana1 = mysqli_query($conn, "SELECT * FROM dana");
$dana = mysqli_query($conn, "SELECT * FROM pengeluaran");

$no2 = 1;
$tanah = mysqli_query($conn, "SELECT * FROM pertanahan");

$no3 = 1;
$kepala = mysqli_query($conn, "SELECT * FROM kepala_desa");

$no4 = 1;
$tabel_1 = mysqli_query($conn, "SELECT * FROM tabel_1");
$no5 = 1;
$tabel_2 = mysqli_query($conn, "SELECT * FROM tabel_2");
$no6 = 1;
$tabel_3 = mysqli_query($conn, "SELECT * FROM tabel_3");
$no7 = 1;
$tabel_4 = mysqli_query($conn, "SELECT * FROM tabel_4");
$no8 = 1;
$tabel_5 = mysqli_query($conn, "SELECT * FROM tabel_5");

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

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
                <div class="sidebar-brand-icon">
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
                tabel masyarakat
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
                        <h6 class="collapse-header">informasi</h6>
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
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1  class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- keseluruhan desa -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                jumlah masyarakat</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $cout;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>


                        <!-- jumlah perangkat desa-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah perangkat desa
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $cout1;?></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  <!-- Dana desa -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">dana desa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="50px">NO</th>
                                            <th>DANA DESA</th>
                                            <th>TANGGAL</th>
                                        </tr>
                                    </thead>
                                        <?php 
                                            while($data = mysqli_fetch_array($dana1)) {
                                        ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $urut;?></td>
                                            <td><?= $data ["jumlah"] ?></td>
                                            <td><?= $data ["tanggal"] ?></td>
                                        </tr>
                                    </tbody>
                                    <?php $urut++; ?>
                                        <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- pengeluaran -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">pengeluaran dana desa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="50px">NO</th>
                                            <th>PENGELUARAN</th>
                                            <th>TANGGAL</th>
                                            <th>DIGUNAKAN UNTUK</th>
                                        </tr>
                                    </thead>
                                        <?php 
                                            while($dn = mysqli_fetch_array($dana)) {
                                        ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no;?></td>
                                            <td><?= $dn ["pengeluaran"] ?></td>
                                            <td><?= $dn ["tanggal"] ?></td>
                                            <td><?= $dn ["dipakai"] ?></td>
                                        </tr>
                                        </tr>
                                    </tbody>
                                    <?php $no++; ?>
                                        <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- tanah  -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data tanah</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>JENIS OP</th>
                                            <th>JUMLAH OP</th>
                                            <th>LUAS OP (m <sup>2</sup>)</th>
                                            <th>NJOP (RP)</th>
                                        </tr>
                                    </thead>
                                        <?php 
                                            while($data = mysqli_fetch_array($tanah)) {
                                        ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no2;?></td>
                                            <td><?= $data ["jenis"] ?></td>
                                            <td><?= $data ["jumlah"] ?></td>
                                            <td><?= $data ["luas"] ?></td>
                                            <td><?= $data ["njop"] ?></td>
                                        </tr>
                                        </tr>
                                    </tbody>
                                    <?php $no2++; ?>
                                        <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>
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
                                        <th>PERIODE</th>
                                        <th>NAMA KEPALA DESA</th>
                                        <th>KETERANGAN</th>
                                    </tr>
                                </thead>
                                    <?php 
                                        while($dn = mysqli_fetch_array($kepala)) {
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?= $no3;?></td>
                                        <td><?= $dn ["periode"] ?></td>
                                        <td><?= $dn ["nama"] ?></td>
                                        <td><?= $dn ["keterangan"] ?></td>
                                    </tr>
                                    </tr>
                                </tbody>
                                <?php $no3++; ?>
                                    <?php }?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel 1</h6>
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
                                    </tr>
                                </thead>
                                    <?php 
                                        while($dn = mysqli_fetch_array($tabel_1)) {
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?= $no4;?></td>
                                        <td><?= $dn ["kolom_1"] ?></td>
                                        <td><?= $dn ["kolom_2"] ?></td>
                                        <td><?= $dn ["kolom_3"] ?></td>
                                    </tr>
                                    </tr>
                                </tbody>
                                <?php $no4++; ?>
                                    <?php }?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel 2</h6>
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
                                    </tr>
                                </thead>
                                    <?php 
                                        while($dn = mysqli_fetch_array($tabel_2)) {
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?= $no5;?></td>
                                        <td><?= $dn ["kolom_1"] ?></td>
                                        <td><?= $dn ["kolom_2"] ?></td>
                                        <td><?= $dn ["kolom_3"] ?></td>
                                    </tr>
                                    </tr>
                                </tbody>
                                <?php $no5++; ?>
                                    <?php }?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel 3</h6>
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
                                    </tr>
                                </thead>
                                    <?php 
                                        while($dn = mysqli_fetch_array($tabel_3)) {
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?= $no6;?></td>
                                        <td><?= $dn ["kolom_1"] ?></td>
                                        <td><?= $dn ["kolom_2"] ?></td>
                                        <td><?= $dn ["kolom_3"] ?></td>
                                    </tr>
                                    </tr>
                                </tbody>
                                <?php $no6++; ?>
                                    <?php }?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel 4</h6>
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
                                    </tr>
                                </thead>
                                    <?php 
                                        while($dn = mysqli_fetch_array($tabel_4)) {
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?= $no7;?></td>
                                        <td><?= $dn ["kolom_1"] ?></td>
                                        <td><?= $dn ["kolom_2"] ?></td>
                                        <td><?= $dn ["kolom_3"] ?></td>
                                    </tr>
                                    </tr>
                                </tbody>
                                <?php $no7++; ?>
                                    <?php }?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel 5</h6>
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
                                    </tr>
                                </thead>
                                    <?php 
                                        while($dn = mysqli_fetch_array($tabel_5)) {
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?= $no8;?></td>
                                        <td><?= $dn ["kolom_1"] ?></td>
                                        <td><?= $dn ["kolom_2"] ?></td>
                                        <td><?= $dn ["kolom_3"] ?></td>
                                    </tr>
                                    </tr>
                                </tbody>
                                <?php $no8++; ?>
                                    <?php }?>
                            </table>
                        </div>
                    </div>
                </div>
               
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; desa gemboang dadi kecamatan suradadi</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">yaqin ingin Logout ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">anda akan diarahkan kehalaman home page !!.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">batal</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
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