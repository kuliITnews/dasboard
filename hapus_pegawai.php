<!-- pegawai -->

<?php 
include "config.php";



$id = $_GET['id'];

$sql = "DELETE FROM pegawai WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: anggota_pemerintah.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
