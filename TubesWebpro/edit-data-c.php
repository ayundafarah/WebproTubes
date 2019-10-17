<?php
	include 'config.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$notelp = $_POST['notelp'];
	$kodepos = $_POST['kodepos'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$query = "UPDATE customer SET id='$id', nama='$nama', alamat='$alamat', notelp='$notelp', kodepos='$kodepos', username='$username', email='$email', password='$password' where id='$id' ";

	mysqli_query($conn, $query);

	header("location:data-c.php");

?>