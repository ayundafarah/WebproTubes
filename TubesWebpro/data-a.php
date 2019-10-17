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
<?php include 'navbar.php'; ?>
<!-- TABEL -->
	<div class="container">
		<div class="row">
			<center>
				<h3>Data Admin</h3>
			</center>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
            			<th>Id</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Password</th>
						<th>Umur</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php

						/*Get Data from Database */
						include "config.php";
						$sql = mysqli_query($conn, "SELECT * FROM admin");
						$no = 1;

						while ($data = mysqli_fetch_array($sql)) {
            ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data['id']; ?></td>
              <td><?php echo $data['nama'] ?></td>
              <td><?php echo $data['username'] ?></td>
              <td><?php echo $data['password'] ?></td>
              <td><?php echo $data['umur'] ?></td>
              <td>
              <button type="button" class="btn"><a href="hapus-data-a.php?id=<?php echo $data['id']; ?>">Hapus</a></button>
              <button type="button" class="btn"><a href="form-edit-data-a.php?id=<?php echo $data['id']; ?>">Edit</a></button>
            </tr>
          <?php } ?>
				</tbody>
			</table>
			<button type="button" class="btn"><a href="tambah-data-a.php?">Tambah</a></button>
		</div>
	</div>
</body>
</html>