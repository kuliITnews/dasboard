<!-- masyarakat -->

<?php 
include "config.php";
$conn = mysqli_connect("localhost", "root", "", "gembong");



$id = $_GET['id'];

$sql = "DELETE FROM masyarakat WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: masyarakat.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
