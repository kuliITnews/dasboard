<!-- SKCK -->

<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM skck WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: skck.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>