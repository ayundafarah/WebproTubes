<!-- 1301154525 -->
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pembelian</title>
	<?php
    	include "script.html";
  	?>
  	<link rel="stylesheet" href="css/sup-style.css">
</head>
<body>
	<?php
		include "config.php";

		if (isset($_POST['save'])) {
			$sql = mysqli_query($conn, "INSERT INTO stok (id, nama, stok, harga) VALUES ('".$_POST["id"]."','".$_POST["nama"]."','".$_POST["stok"]."','".$_POST["harga"]."')");

			header("location:stok.php");
		}
	?>

	<!-- Form Section -->
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
						<label for="stok">Stok</label>
						<input type="text" class="form-control" name="stok">
					</div>
					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="text" class="form-control" name="harga">
					</div>
					<button type="submit" class="btn btn-success btn-block" name="save">Tambah</a></button>
				</form>
			</div> <!-- End Form -->
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div> <!-- End of form -->

	<footer>
  		<center>
    		<div>
      			<p><a href="index.php">Koleksi Naku</a>  All rights reserved &copy; 2018.</p>
    		</div>
  		</center>
	</footer>

</body>
</html>