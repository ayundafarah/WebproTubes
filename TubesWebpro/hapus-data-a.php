<?php 
include 'config.php';
$id = $_GET['id'];
$query = "DELETE FROM admin WHERE id='$id'";
mysqli_query($conn, $query);

header("location:data-a.php?pesan=hapus");
?>