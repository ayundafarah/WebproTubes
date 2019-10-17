<!-- 1301154525 -->
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Here</title>
	<?php
    	include "script.html";
  	?>
  	<link rel="stylesheet" href="css/sup-style.css">
</head>
<body>
	<?php
		/*Get Data from Database */
		include "config.php";

		if (isset($_POST['save'])) {
			$sql = mysqli_query($conn, "INSERT INTO customer (id, nama, alamat, notelp, kodepos, username, email, password) VALUES ('".$_POST["id"]."','".$_POST["nama"]."','".$_POST["alamat"]."','".$_POST["notelp"]."','".$_POST["kodepos"]."','".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."')");
		}
		header("location:data-c.php");

	?>

	<!-- Sign Up Section -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xl-12"></div>
			<!-- Start Form -->
			<div class="col-md-4 col-sm-4 col-xl-12">
				<form class="form-container" method="POST">
				<h1>Koleksi Naku</h1>
				<div class="form-group">
						<label for="id">Id</label>
						<input type="text" class="form-control" name="id">
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label for="alamat">Address</label>
						<input type="text" class="form-control" name="alamat">
					</div>
					<div class="form-group">
						<label for="notelp">Phone</label>
						<input type="text" class="form-control" name="notelp">
					</div>
					<div class="form-group">
						<label for="kodepos">Postal Code</label>
						<input type="text" class="form-control" name="kodepos">
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<button type="submit" class="btn btn-success btn-block" name="save"><a href="data-c.php">Tambah</a></button>
				</form>
			</div> <!-- End Form -->
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div> <!-- End of Sign Up Section -->

	<footer>
  		<center>
    		<div>
      			<p><a href="index.php">Koleksi Naku</a>  All rights reserved &copy; 2018.</p>
    		</div>
  		</center>
	</footer>

</body>
</html>