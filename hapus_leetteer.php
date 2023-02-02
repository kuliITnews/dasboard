<!-- leetteer -->

<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM leetteer WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: leetteer.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
