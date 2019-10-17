<?php 
include 'config.php';
$id = $_GET['id'];
$query = "DELETE FROM customer WHERE id='$id'";
mysqli_query($conn, $query);

header("location:data-c.php?pesan=hapus");
?>