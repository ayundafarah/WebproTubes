<?php
include 'config.php';

$id = $_GET['id'];
$a  = mysqli_query($conn, "select * from customer where id='$id'");
$row = mysqli_fetch_array($a);

?>

<html>
<head>
	<title>Admin's Page</title>
	<?php
    	include "script.html";
  	?>
  	<link rel="stylesheet" href="css/sup-style.css">
</head>

<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xl-12"></div>
			<!-- Start Form -->
			<div class="col-md-4 col-sm-4 col-xl-12">
				<form class="form-container" method="POST" action="edit-data-c.php">
					<div class="form-group">
						<label for="id">Id</label>
						<input type="text" class="form-control" name="id" placeholder="<?php echo $id ?>">
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
					<button type="submit" class="btn"><a href="data-c.php">Kembali</a></button>
                    <button type="submit" class="btn btn-success" value="simpan">Simpan Perubahan</button>
			</div> <!-- End Form -->
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>
</html>