<?php 
include 'config.php';
$id = $_GET['id'];
$query = "DELETE FROM pembelian WHERE id='$id'";
mysqli_query($conn, $query);

header("location:admin.php?pesan=hapus");
?>