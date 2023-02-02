<?php
include "config.php";
error_reporting(0);
$cari = $_POST['input'];
if ($cari != '') {
    $surat = mysqli_query($conn, "SELECT * FROM leetteer WHERE nama LIKE '%".$cari."%' or ttgl LIKE '%".$cari."%'");
    $ada = "hasil pencarian : ";
} else {
    $surat = mysqli_query($conn, "SELECT * FROM leetteer ORDER BY id DESC");
}
$cout = mysqli_num_rows($surat);
$urut = 1;

while($st = mysqli_fetch_array($surat)) {
    // $tgl = $st ["tanggal"];
    $tgl = date('d / m / y');
    $tgl2 = date('d M Y');

?>
<link rel="stylesheet" href="pemberitahuan.css">
<style>
    button {
        margin: 50px 50px 50px 50px;
    }
    @media print {
    button{
        display: none;
    }
}
</style>
<body>
    <a href="dasboard.php"><button style="width: 100px; height: 30px;  background-color: red; ">&larr; Go Back !!</button></a>
<div class="surat">
    <div class="container">
        <div class="nav">
            <div class="logo">
                <img src="assets/logo.png" alt="logo" class="" width="120">
            </div>
            <div class="title">
                <h2 style="font-size: 30px;">PEMERINTAH KABUPATEN TEGAL <br> KECAMATAN SURADADI <br> DESA GEMBONGDADI</h2>
                <p style="font-size: 25px;">Alamat : Jl. Lodadi No. 04 Desa Gembongdadi Kode Pos 52182</p>
            </div>
        </div>
        <hr>
    </div>
    <div class="main">
        <h3 style="font-size: 25px; margin-top: 50px; text-transform: uppercase; text-decoration: underline;"><?=  $st ["judul"] ?></h3>
        <p style=" font-size: 25px; text-align: center; margin: 5px 0px 20px 0;">Nomor :  <?= $st ["id"] ?> / <?=$tgl; ?>  </p>
        <br>
        <br>
        <br>
        <p style="font-size: 25px; margin: 40px 0 15px 0;"> &emsp;Yang bertanda tangan dibawah ini Kepala Desa Gembongdadi Kecamatan Suradadi Kabupaten Tegal, menerangkan dengan sesungguhnya bahwa :</p>
        <br>
        <br>
        <br>
        <div class="isi">
        <pre style="font-family: 'Times New Roman', Times, serif; font-size: 23px; margin: 0 0 0 -30px; text-transform: capitalize;">
        NIK                             : <?= $st ["nik"] ?> <br>
        Nama                 &emsp; &emsp;: <?= $st ["nama"] ?> <br>
        Tempat/TGLL             : <?= $st ["ttgl"] ?> <br>
        Jenis Kelamin             : <?= $st ["kelamin"] ?> <br>
        Pekerjaan                    : <?= $st ["pekerjaan"] ?> <br>
        Status                          : <?= $st ["status"] ?> <br>
        Alamat Sekarang        : <?= $st ["alamat"] ?> <br>
        </pre>
       
       
    </div>
       

    <p style="font-size: 25px; margin: 5px 0 0 0;" >&emsp;Adalah benar-benar warga masyarakat/penduduk yang bertempat tinggal didesa kami. <?= $st ["judul"] ?> ini dibuat untuk keperluan :</p>
    <h2 style="text-transform: capitalize; font-style: italic;">- &emsp;<?= $st["keterangan"] ?></h2>
    <p style="font-size: 25px; margin: 5px 0 0 0;" >&emsp; Demikian <?= $st ["judul"] ?> ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
     <br>
     <br>
     <br>
     <br>
        <div class="ttd">
            <p>Gembongdadi, <?=$tgl2; ?>  </p>
            <p style="text-transform: capitalize;"><?=$st["jabatan"] ?> Desa Gembongdadi</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <b style="text-transform: uppercase; text-decoration: underline;"> <?= $st ["penanda_tangan"] ?>  </b>
        </div>
        
</div>
</body>
</html>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php }?>

