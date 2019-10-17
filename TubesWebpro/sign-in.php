<!-- 1301154639 -->
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<?php
    include "script.html";
  ?>
  <link rel="stylesheet" href="css/sin-style.css">
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

	<!-- Sign In Section -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<!-- Start Form -->
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="form-container" method="POST" action="login.php">
				<h1>Sign In</h1>
					<div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-success btn-block" name="login">Sign In</button>
				</form>
			</div> <!-- End Form -->
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div> <!-- End of Sign In Section -->

  <footer>
      <center>
        <div>
            <p><a href="index.php">Koleksi Naku</a>  All rights reserved &copy; 2018.</p>
        </div>
      </center>
  </footer>

</body>
</html>