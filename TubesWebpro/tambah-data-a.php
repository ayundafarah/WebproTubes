<!-- 1301154525 -->
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Admin</title>
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
			$sql = mysqli_query($conn, "INSERT INTO admin (id, nama, username, password, umur) VALUES ('".$_POST["id"]."','".$_POST["nama"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["umur"]."')");

			header("location:data-a.php");
		}

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
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="text" class="form-control" name="password">
					</div>
					<div class="form-group">
						<label for="umur">Umur</label>
						<input type="text" class="form-control" name="umur">
					</div>
					<button type="submit" class="btn btn-success btn-block" name="save">Tambah</a></button>
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