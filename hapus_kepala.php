
<!-- kepala desa  -->

<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM kepala_desa WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: kepala_desa.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>