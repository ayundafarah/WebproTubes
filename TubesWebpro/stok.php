<!-- 1301154525 -->

<!DOCTYPE html>
<head>
	<title>Stok</title>
	<?php include "script.html" ?>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<?php include "navbar.php"; ?>
		<div class="container">
			<div class="row">
				<center><h3>Stok Barang</h3></center>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Barang</th>
						<th>Nama</th>
						<th>Stok</th>
						<th>Harga</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						/*Get Data from Database */
						include "config.php";
						$sql = mysqli_query($conn, "SELECT * FROM stok");
						$no = 1;

					?>
					<!-- Show Data -->
					<?php

						while ($data = mysqli_fetch_array($sql)) {
							$id = $data['id'];
							$nama = $data['nama'];
							$stok = $data['stok'];
							$harga= $data['harga'];
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $id ?></td>
						<td><?php echo $nama ?></td>
						<td><?php echo $stok ?></td>
						<td><?php echo $harga ?></td>
						<td>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $id;  ?>"><i class="fas fa-trash-alt"></i></button>
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit<?php echo $id; ?>"><i class="fas fa-edit"></i></button>
						</td>
					</tr>

					<!-- Delete dan Edit Section -->
					<div class="modal fade" id="edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5 class="modal-title" id="exampleModalLabel">Data <?php echo $nama?></h5>
                  <!-- Insert Form here -->
                  <form method="POST" action="function.php">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="id" value="<?php echo $data["id"]?>">   
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" name="username" value="<?php echo $data["username"]?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="text" class="form-control" name="password" value="<?php echo $data["password"]?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUmur1">Umur</label>
                      <input type="text" class="form-control" name="umur" value="<?php echo $data["umur"]?>">
                    </div>
                    <a href="function.php?username<?php echo $data['username'];?>">Edit</a>
                  </form>                        
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="del<?php echo $id_users;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete <?php echo $data["nama"]?> ?</h5>
                </div>
                <div class="modal-footer">
                  <form method="POST" action="function.php">
                    <input type="text" class="form-control" name="username" value="<?php echo $data["username"] ?>" hidden>
                    <button type="submit" name="delete" class="btn btn-danger">YES</a>
                  </form>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">NO</button> 
                </div>
              </div>
            </div>
          </div>
					<?php
						}
					?>
				</tbody>
			</table>
      <button type="button" class="btn"><a href="tambah-stok.php?">Tambah</a></button>
		</div>
	</div>
<!-- End of TABEL -->
</body>
</html>