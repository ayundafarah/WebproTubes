<!-- 1301154525 -->

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<?php
    	include "script.html";
  	?>
  	<link rel="stylesheet" href="css/form.css">
  	<script type="text/javascript" src="functions.js"></script>
</head>
<body>

<!-- Navigation Bar -->
  	<nav class="navbar navbar-inverse navbar-fixed-top">
    	<!-- container -->
    	<div class="container-fluid">

      		<!-- navbar header -->
      		<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="#"><img src="img/logofix.png" style="width: 100px; height: 50px;"></a>
      		</div> <!-- end of navbar header -->

      		<!-- isi navbar -->
      		<div class="collapse navbar-collapse" id="myNavbar">
        		<ul class="nav navbar-nav navbar-right">
          			<li><a href="indexcust.php">Home</a></li>
          			<li><a href="index.php">Log Out</a></li>
        		</ul>
      		</div> <!-- end of isi navbar -->
    	</div> <!-- end of container -->
  	</nav>
	<!-- End of Navigation Bar -->

	<?php
		/*Get Data from Database */
		include "config.php";

		if (isset($_POST['save'])) {
			$sql = mysqli_query($conn, "INSERT INTO pembelian (id, nama, quantity, harga, total) VALUES ('".$_POST["id"]."','".$_POST["nama"]."','".$_POST["quantity"]."','".$_POST["harga"]."','".$_POST["total"]."')");

			header("location:indexcust.php");
		}

	?>

<!-- Form Section -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<!-- Start Form -->
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="form-container">
				<h1>Order Form</h1>
					<div class="form-group">
						<label for="id">Id</label>
						<input type="text" class="form-control" id="id">
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama">
					</div>
					<div class="form-group">
						<label for="quantity">Quantity</label>
						<input type="text" class="form-control" id="quantity">
					</div>
					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="text" class="form-control" id="harga">
					</div>
					<button type="submit" class="btn btn-success btn-block" name="save">Order</button>
				</form>
			</div> <!-- End Form -->
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div> <!-- End of From Section -->

</body>
</html>