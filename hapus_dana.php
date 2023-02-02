<!-- dana  -->

<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM dana WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: dana_desa.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>