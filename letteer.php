
<?php
include "config.php";

?>

<?php

    if ( isset($_POST["submit"])) {
        $judul = htmlspecialchars($_POST['judul']);
        $nomor = htmlspecialchars($_POST['nomor']);
        $nik = htmlspecialchars($_POST['nik']);
        $nama = htmlspecialchars($_POST['nama']);
        $ttgl = htmlspecialchars($_POST['ttgl']);
        $kelamin = htmlspecialchars($_POST['kelamin']);
        $pekerjaan = htmlspecialchars($_POST['pekerjaan']);
        $status = htmlspecialchars($_POST['status']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $keterangan = htmlspecialchars($_POST['keterangan']);
        $penanda_tangan = htmlspecialchars($_POST['penanda_tangan']);
        $jabatan = htmlspecialchars($_POST['jabatan']);
        
        
        $query = "INSERT INTO leetteer VALUES ('','$judul', '$nomor', '$nik','$nama', '$ttgl', '$kelamin','$pekerjaan','$status','$alamat', '$keterangan', '$penanda_tangan',  '$jabatan')";
        if (mysqli_query($conn, $query)) {
            echo "<div class='alert alert-success text-center'> surat berhasil dibuat !! </div>";
            header("Location: pemberitahuan.php");
            
        } else {
            echo "<div class='alert alert-danger'> surat gagal dibuat !! </div>" .mysqli_error($conn);
            header("refresh: 2");
        }
        mysqli_close($conn);
        
        
    }
    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>surat | Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
   

    <!-- Form Surat -->
    <div class="padding-surat">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 py-5" data-aos="fade-down" data-aos-delay="1000">
                    <h1 align="center">
                        <p>tools membuat surat pemberitahuan</p>
                    </h1>
                    <p class="lead">Silahkan lengkapi form menggunakan data yang benar</p>
                    <form id="contact-form" method="post" action="" role="form" novalidate="true" enctype="multipart/form-data">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_name">JUDUL *</label>
                                        <input id="form_name" type="text" name="judul" class="form-control"
                                            placeholder="Silahkan masukkan judul surat" required="required"
                                            data-error="judul harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_name">NOMOR *</label>
                                        <input id="form_name" type="text" name="nomor" class="form-control"
                                            placeholder="Silahkan masukkan nomor surat" required="required"
                                            data-error="nomor harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_name">NIK *</label>
                                        <input id="form_name" type="text" name="nik" class="form-control"
                                            placeholder="Silahkan masukkan NIK dengan benar" required="required"
                                            data-error="NIK harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_lastname">NAMA *</label>
                                        <input id="form_lastname" type="text" name="nama" class="form-control"
                                            placeholder="Silahkan masukkan Nama anda" required="required"
                                            data-error="NAma Harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_lastname">Tempat/TTGL *</label>
                                        <input id="form_lastname" type="text" name="ttgl" class="form-control"
                                            placeholder="Silahkan Tempat dan Tanggal Lahir" required="required"
                                            data-error="NIK Harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group has-error has-danger">
                                        <label for="form_need">Jenis Kelamin *</label>
                                        <select id="form_need" name="kelamin" class="form-control"
                                            placeholder="Tentukan Kelamin Anda" required="required"
                                            data-error="Tentukan Kelamin Anda">
                                            <option value=""></option>
                                            <option value="laki-laki">laki-laki</option>
                                            <option value="perempuan">perempuan</option>
                                            <option value="Netral">Netral</option>
                                        </select>
                                        <div class="help-block with-errors">
                                            <ul class="list-unstyled">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_lastname">pekerjaan</label>
                                        <input id="form_lastname" type="text" name="pekerjaan" class="form-control"
                                            placeholder="apa pekerjaan anda saat ini" required="required"
                                            data-error=" Harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_lastname">status</label>
                                        <input id="form_lastname" type="text" name="status" class="form-control"
                                            placeholder="apa status anda saat ini" required="required"
                                            data-error=" Harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_lastname">Alamat Sekarang</label>
                                        <input id="form_lastname" type="text" name="alamat" class="form-control"
                                            placeholder="Silahkan Tempat dan Tanggal Lahir" required="required"
                                            data-error="NIK Harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                               
                                </div>
                                <div class="row">
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="1000">
                                    <div class="form-group">
                                    <label for="form_lastname">keterangan *</label>
                                        <input id="form_lastname" type="text" name="keterangan" class="form-control"
                                            placeholder="Silahkan keterangan surat" required="required"
                                            data-error="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="1000">
                                    <div class="form-group">
                                    <label for="form_lastname">Penanda Tangan *</label>
                                        <input id="form_lastname" type="text" name="penanda_tangan" class="form-control"
                                            placeholder="Silahkan isi siapa yang ingin bertanda tangan" required="required"
                                            data-error="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="1000">
                                    <div class="form-group">
                                    <label for="form_lastname">Jabatan Penanda Tangan *</label>
                                        <input id="form_lastname" type="text" name="penanda_tangan" class="form-control"
                                            placeholder="example : kepala desa" required="required"
                                            data-error="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="row">
                             
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-success btn-send  mb-3"
                                        value="Kirim Permohonan" name="submit">
                                </div>
                                <div class="col-md-6">
                                    <input type="button" class="btn btn-primary btn-send" value="Kembali"
                                        onclick="window.history.back()">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted">
                                        <strong>*</strong> Harus diisi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.8 -->
            </div>
            <!-- /.row-->
        </div>
        <!-- /.container-->
        <!-- End Form Surat -->
    </div>
   

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({
            once: true,
            duration: 1000,
        });</script>
</body>

</html>