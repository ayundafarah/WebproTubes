<?php
	include 'config.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$quantity = $_POST['quantity'];
	$harga = $_POST['harga'];
	$total = $_POST['total'];

	$query = "UPDATE pembelian SET id='$id', nama='$nama', quantity='$quantity', harga='$harga', total='$total' where id='$id' ";

	mysqli_query($conn, $query);

	header("location:admin.php");

?>