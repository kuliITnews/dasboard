<?php

//include koneksi database
include 'config.php';

  if ( isset($_POST["submit"])) {
      $jenis = htmlspecialchars($_POST['jenis']);
      $jumlah = htmlspecialchars($_POST['jumlah']);
      $luas = htmlspecialchars($_POST['luas']);
      $njop = htmlspecialchars($_POST['njop']);
     

  $query = "INSERT INTO pertanahan VALUES ('', '$jenis', '$jumlah', '$luas', '$njop')";
    if (mysqli_query($conn, $query)) {
        echo '<script> alert("Data berhasil disimpan !!");</script>';
        echo '<script> document.location.href = "pertanahan.php";</script>';
      
      } else {
        echo "<div class='alert alert-success'> Data gagal ditambahkan !! </div>" .mysqli_error($conn);
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
              TAMBAH DATA TANAH
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="form-group">
                  <label for="jenis">JENIS</label>
                  <input type="text" name="jenis" placeholder="Masukkan jenis" class="form-control">
                </div>
                <div class="form-group">
                  <label for="jumlah">JUMLAH</label>
                  <input type="text" name="jumlah" placeholder="Masukkan jumlah" class="form-control">
                </div>
                <div class="form-group">
                  <label for="luas">LUAS</label>
                  <input type="text" name="luas" placeholder="Masukkan luas" class="form-control">
                </div>
                <div class="form-group">
                  <label for="njop">NJOP</label>
                  <input type="text" name="njop" placeholder="Masukkan NJOP" class="form-control">
                </div>
                
                <input type="submit" name="submit" class="btn btn-success"></input>
                <button type="reset" class="btn btn-warning">RESET</button>
                <button type="button" class="btn btn-info "> <a style="text-decoration: none; color: white; font-size: 15px" href="pertanahan.php">BACK</a></button>

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