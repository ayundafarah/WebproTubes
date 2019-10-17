<?php 
include 'config.php';
$id = $_GET['id'];
$query = "DELETE FROM stok WHERE id='$id'";
mysqli_query($conn, $query);

header("location:stok.php?pesan=hapus");
?>