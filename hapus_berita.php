
<!-- berita  -->

<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM berita WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: berita.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
