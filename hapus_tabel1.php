
<!-- tabel 1  -->

<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM tabel_1 WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: tabel_1.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>