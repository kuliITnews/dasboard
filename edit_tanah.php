<?php 
include "config.php";
$id = $_GET["id"];
$datas = mysqli_query($conn, "SELECT * FROM pertanahan WHERE id='$id'");
$data = mysqli_fetch_array($datas);

if ( isset($_POST['edit']))
 {
    $jenis = htmlspecialchars($_POST['jenis']);
    $jumlah = htmlspecialchars($_POST['jumlah']);
    $luas = htmlspecialchars($_POST['luas']);
    $njop = htmlspecialchars($_POST['njop']);
  

    $sql = "UPDATE  pertanahan SET jenis = '$jenis', jumlah = '$jumlah', luas = '$luas', njop = '$njop' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: pertanahan.php");
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
             
            </div>
            <div class="card-body">

              <form action="" method="POST">
                <div class="form-group">
                  <label for="jenis">JENIS </label>
                  <input type="input" name="jenis" id="jenis" cols="30" rows="10" value="<?= $data["jenis"]?>"></input>
                </div>
                <div class="form-group">
                  <label for="jumlah">JUMLAH</label>
                  <input type="input" name="jumlah" id="jumlah" cols="30" rows="10" value="<?= $data["jumlah"]?>"></input>
                </div>
                <div class="form-group">
                  <label for="luas">LUAS</label>
                  <input type="input" name="luas" id="luas" cols="30" rows="10" value="<?= $data["luas"]?>"></input>
                </div>
                <div class="form-group">
                  <label for="njop">NJOP</label>
                  <input type="input" name="njop" id="njop" cols="30" rows="10" value="<?= $data["njop"]?>"></input>
                </div>

                
               
                
                <a href="prtanahan.php"><button type="submit" name="edit" id="button" class="btn btn-success">UBAH</button></a>
                <button type="reset" class="btn btn-warning">RESET</button>
                <button type="button" class="btn btn-info"> <a style="text-decoration: none; color: white; font-size: 15px" href="pertanahan.php">BACK</a></button>

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





