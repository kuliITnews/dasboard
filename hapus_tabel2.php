<!-- tabel 2 -->

<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM tabel_2 WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: tabel_2.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>