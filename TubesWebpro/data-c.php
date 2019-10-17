<!-- 1301154511 -->

<!DOCTYPE html>
<html>
<head>
	<title>Admin's Page</title>
	<?php
		include "script.html";
	?>
  	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<?php include "navbar.php"; ?>
<!-- TABEL -->
	<div class="container">
		<div class="row">
			<center>
				<h3>Data Pembeli</h3>
			</center>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Id</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>No. Telepon</th>
						<th>Kode Pos</th>
						<th>Username</th>
						<th>E-mail</th>
						<th>Password</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php

						/*Get Data from Database */
						include "config.php";
						$sql = mysqli_query($conn, "SELECT * FROM customer");
						$no = 1;

					?>

					<!-- Show Data -->
					<?php

						while ($data = mysqli_fetch_array($sql)) {
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $data['id'] ?></td>
						<td><?php echo $data['nama'] ?></td>
						<td><?php echo $data['alamat'] ?></td>
						<td><?php echo $data['notelp'] ?></td>
						<td><?php echo $data['kodepos'] ?></td>
						<td><?php echo $data['username'] ?></td>
						<td><?php echo $data['email'] ?></td>
						<td><?php echo $data['password'] ?></td>
						<td>
						<button type="button" class="btn"><a href="hapus-data-c.php?id=<?php echo $data['id']; ?>">Hapus</a></button>
              			<button type="button" class="btn"><a href="form-edit-data-c.php?id=<?php echo $data['id'];?>">Edit</a></button>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
			<button type="button" class="btn"><a href="tambah-data-c.php?">Tambah</a></button>
		</div>
	</div>
<!-- End of TABEL -->

</body>
</html>