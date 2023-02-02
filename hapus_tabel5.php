<!-- tabel 5 -->

<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM tabel_5 WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: tabel_5.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>