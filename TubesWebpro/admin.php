<!-- 1301154525 -->
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

<!DOCTYPE html>

<!-- TABEL -->
	<div class="container">
		<div class="row">
			<center>
				<h3>Data Pembelian</h3>
			</center>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Id</th>
						<th>Nama</th>
						<th>Quantity</th>
						<th>Harga</th>
						<th>Total</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php

						/*Get Data from Database */
						include "config.php";
						$sql = mysqli_query($conn, "SELECT * FROM pembelian");
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
						<td><?php echo $data['quantity'] ?></td>
						<td><?php echo $data['harga'] ?></td>
						<td><?php echo $data['total'] ?></td>
						<td>
							<button type="button" class="btn"><a href="hapus-pembelian.php?id=<?php echo $data['id']; ?>">Hapus</a></button>
              				<button type="button" class="btn"><a href="form-edit-pembelian.php?id=<?php echo $data['id']; ?>">Edit</a></button>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
			<button type="button" class="btn"><a href="tambah-pembelian.php?">Tambah</a></button>
		</div>
	</div>
<!-- End of TABEL -->
<html>


</body>
</html>