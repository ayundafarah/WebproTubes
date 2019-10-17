<?php
	include 'config.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$umur = $_POST['umur'];

	$query = "UPDATE admin SET id='$id', nama='$nama', username='$username', password='$password', umur='$umur' where id='$id' ";

	mysqli_query($conn, $query);

	header("location:data-a.php");

?>