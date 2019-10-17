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
          			<li><a href="index.php">Home</a></li>
        		</ul>
      		</div> <!-- end of isi navbar -->
    	</div> <!-- end of container -->
  	</nav>
	<!-- End of Navigation Bar -->

	<?php

		/*Save Data to Database */
		include "config.php";

		if (isset($_POST['save'])) {
			$sql = mysqli_query($conn, "INSERT INTO customer (id, nama, alamat, notelp, kodepos, username, email, password) VALUES ('".$_POST["id"]."','".$_POST["nama"]."','".$_POST["alamat"]."','".$_POST["notelp"]."','".$_POST["kodepos"]."','".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."')");
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
				<h2>Please sign up for your shopping convenience.</h2>
				<div class="form-group">
						<label for="id">Id</label>
						<input type="text" class="form-control" name="id" placeholder="Your Id">
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" placeholder="Your Name">
					</div>
					<div class="form-group">
						<label for="alamat">Address</label>
						<input type="text" class="form-control" name="alamat" placeholder="Address">
					</div>
					<div class="form-group">
						<label for="notelp">Phone</label>
						<input type="text" class="form-control" name="notelp" placeholder="Phone">
					</div>
					<div class="form-group">
						<label for="kodepos">Postal Code</label>
						<input type="text" class="form-control" name="kodepos" placeholder="Postal Code">
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" name="email" placeholder="E-mail">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="checkbox">
						<center>
						<label>
							<input type="checkbox"> Send me an e-mail for Koleksi Naku's updates.
						</label>
						</center>
					</div>
					<button type="submit" class="btn btn-success btn-block" name="save"><a href="indexcust.php">Sign Up</a></button>

					<!-- Link untuk Sign In -->
					<p>Already have an account? Sign in <a href="sign-in.php">here</a>.</p>
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