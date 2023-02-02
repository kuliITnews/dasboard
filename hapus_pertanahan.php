<!-- pertanahan -->


<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM pertanahan WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: pertanahan.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>