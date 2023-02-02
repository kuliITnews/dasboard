<?php 
include "config.php";
$id = $_GET["id"];
$datas = mysqli_query($conn, "SELECT * FROM pegawai WHERE id='$id'");
$data = mysqli_fetch_array($datas);

if ( isset($_POST['edit']))
 {
  $kk = htmlspecialchars($_POST['kk']);
  $rw = htmlspecialchars($_POST['rw']);
  $rt = htmlspecialchars($_POST['rt']);
  $nik = htmlspecialchars($_POST['nik']);
  $nama = htmlspecialchars($_POST['nama']);
  $alamat = htmlspecialchars($_POST['alamat']);
  $ttl = htmlspecialchars($_POST['ttl']);
  $jkl = htmlspecialchars($_POST['jkl']);
  $agama = htmlspecialchars($_POST['agama']);
  $status = htmlspecialchars($_POST['status']);
  $hubkel = htmlspecialchars($_POST['hubkel']);
  $gelar = htmlspecialchars($_POST['gelar']);
  $informasi = htmlspecialchars($_POST['informasi']);

    $sql = "UPDATE pegawai SET kk = '$kk', rw = '$rw', rt = '$rt', nik = '$nik', nama = '$nama', alamat = '$alamat', ttl = '$ttl', jkl = '$jkl', agama = '$agama', status = '$status', hubkel = '$hubkel',  gelar = '$gelar',  informasi = '$informasi' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: anggota_pemerintah.php");
    } else {
        echo "Error kohh  " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA PERANGKAT DESA
            </div>
            <div class="card-body">

              <form action="" method="POST">
                <div class="form-group">
                  <label for="kk">No KK</label>
                  <input type="text" name="kk" placeholder="Masukkan nomer kk" class="form-control"  id="kk" value="<?=$data["kk"]?>">
                </div>

                <div class="form-group">
                  <label for="rw">RW</label>
                  <input type="text" name="rw" placeholder="Masukkan rw Siswa" class="form-control"  id="rw" value="<?=$data["rw"]?>">
                </div>
                <div class="form-group">
                  <label for="rt">RT</label>
                  <input type="text" name="rt" placeholder="Masukkan rt Siswa" class="form-control" id="rt" value="<?=$data["rt"]?>">
                </div>
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="text" name="nik" placeholder="Masukkan NIK xxxxxxxxxxxx" class="form-control" id="nik" value="<?=$data["nik"]?>">
                </div>
                <div class="form-group">
                  <label for="nama">NAMA</label>
                  <input type="text" name="nama" placeholder="Masukkan nama " class="form-control" id="nama" value="<?=$data["nama"]?>">
                </div>
                <div class="form-group">
                  <label for="alamat">ALAMAT</label>
                  <input type="text" name="alamat" placeholder="example : tegal atau kabupaten" class="form-control" id="alamat" value="<?=$data["alamat"]?>">
                </div>
                <div class="form-group">
                  <label for="ttl">TANGGAL LAHIR</label>
                  <input type="date" name="ttl" placeholder="Masukkan tanggal lahir" class="form-control" id="ttl" value="<?=$data["ttl"]?>">
                </div>
                <div class="form-group">
                  <label for="jkl">JENIS KELAMIN</label>
                  <input type="text" name="jkl" placeholder="Masukkan jenis kelamin" class="form-control" id="jkl" value="<?=$data["jkl"]?>">
                </div>
                <div class="form-group">
                  <label for="agama">AGAMA</label>
                  <input type="text" name="agama" placeholder="Masukkan agama example : islam" class="form-control" id="agama" value="<?=$data["agama"]?>">
                </div>
                <div class="form-group">
                  <label for="status">STATUS</label>
                  <input type="text" name="status" placeholder="example : kawin/belum kawin" class="form-control" id="status" value="<?=$data["status"]?>">
                </div>
                <div class="form-group">
                  <label for="hubkel">HUBUNGAN KELUARGA</label>
                  <input type="text" name="hubkel" placeholder="example : kepala keluarga" class="form-control" id="hubkel" value="<?=$data["hubkel"]?>">
                </div>
                <div class="form-group">
                  <label for="gelar">GELAR JABATAN</label>
                  <input type="text" name="gelar" placeholder="example : kepala keluarga" class="form-control" id="gelar" value="<?=$data["gelar"]?>">
                </div>
                <div class="form-group">
                  <label for="informasi">INFORMASI TAMBAHAN</label>
                  <input type="text" name="informasi" placeholder="example : kepala keluarga" class="form-control" id="informasi" value="<?=$data["informasi"]?>">
                </div>

               
                
                <a href="anggota_pemerintah.php"><button type="submit" name="edit" id="button" class="btn btn-success">UBAH</button></a>
                <button type="reset" class="btn btn-warning">RESET</button>
                <button type="button" class="btn btn-info"> <a style="text-decoration: none; color: white; font-size: 15px" href="anggota_pemerintah.php">BACK</a></button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>





