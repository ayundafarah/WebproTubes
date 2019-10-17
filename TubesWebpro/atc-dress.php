<!-- 1301154639 -->

<!DOCTYPE html>
<html>
<head>
	<title>Dress</title>
	<?php
		include "script.html";
	?>
  	<link rel="stylesheet" href="css/dress.css">
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
          			<li><a href="indexcust.php">About</a></li>
          			<li><a href="index.php">Log Out</a></li>
        		</ul>
      		</div> <!-- end of isi navbar -->
    	</div> <!-- end of container -->
  	</nav>
	<!-- End of Navigation Bar -->

	<?php
		session_start();
		include "config.php";

		if (isset($_POST["atc"])) {
			if (isset($_SESSION["shopping_cart"])) {
				$item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
				if (!in_array($_GET["id"], $item_array_id)) {
					$count = count($_SESSION["shopping_cart"]);
					$item_array = array(
						'item_id' => $_GET["id"],
						'item_name' => $_POST["hidden_name"],
						'item_price' => $_POST["hidden_price"],
						'item_quantity' => $_POST["quantity"]
					);
					$_SESSION["shopping_cart"][$count] = $item_array;
				} else {
					echo '<script>alert("Item already added")</script>';
					echo '<script>window.location="atc-dress.php"</script>';
				}
			} else {
				$item_array = array(
					'item_id' => $_GET["id"],
					'item_name' => $_POST["hidden_name"],
					'item_price' => $_POST["hidden_price"],
					'item_quantity' => $_POST["quantity"]
				);
				$_SESSION["shopping_cart"][0] = $item_array;
			}
		}

		// if (isset($_GET["action"])) {
		// 	if ($_GET["action"] == "delete") {
		// 		foreach ($_SESSION["shopping_cart"] as $keys => $values) {
		// 			if ($values["item_id"] == $_GET["id"]) {
		// 				unset($_SESSION["shopping_cart"][$keys]);
		// 				echo '<script>alert("Item removed")</script>';
		// 				echo '<script>window.location="atc-dress.php"</script>';
		// 			}
		// 		}
		// 	}
		// }

		// if (isset($_POST["beli"])) {
		// 	$sql = mysqli_query($conn, "INSERT INTO customer (id, nama, quantity, harga, total) VALUES ('".$_GET["id"]."','".$_POST["hidden_name"]."','".$_POST["hidden_price"]."','".$_POST["quantity"]."','".$total."')");
		// }
	?>

	<!-- Shopping Section -->
	<div class="container" style="width: 700px;">
		<div id="judul">
			<center>
				<h1>Shop Your Dress</h1>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
			</center>
		</div>
		<?php
			$query = "SELECT * FROM dress";
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result)>0) {
				while($row = mysqli_fetch_array($result)) {
		?>
				<div class="col-md-4">
					<form method="POST" action="atc-dress.php?action=add&id=<?php echo $row["id"]; ?>">
						<div style="border: 1px solid #333; background-color: #f1f1f1; border-radius: 5px;">
							<img src="<?php echo $row["foto"]; ?>" class="img-responsive">
							<center>
								<h4 class="text-info"><?php echo $row["nama"]; ?></h4>
								<h4 class="text-danger">IDR <?php echo $row["harga"]; ?>,00</h4>
								<h4 class="text-info">Stok: <?php echo $row["stok"]; ?> pcs</h4>
								<input type="text" name="quantity" class="form-control" value="1">
								<input type="hidden" name="hidden_name" value="<?php echo $row["nama"]; ?>">
								<input type="hidden" name="hidden_price" value="<?php echo $row["harga"]; ?>">
								<input type="submit" name="atc" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
							</center>
						</div>
					</form>
				</div>
		<?php			
				}
			}
		?>
		<div style="clear: both;"></div>
		<br />
		<h3>Order Details</h3>
		<div class="table-responsive">
			<table class="table table-striped" style="background-color:white; color: black; font-size:15px;">
				<tr>
					<th width="40%">Item Name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
				<?php
					if (!empty($_SESSION["shopping_cart"])) {
						$total = 0;
						foreach ($_SESSION["shopping_cart"] as $keys => $values) {
				?>
				<tr>
					<td><?php echo $values["item_name"]; ?></td>
					<td><?php echo $values["item_quantity"]; ?></td>
					<td>IDR <?php echo $values["item_price"]; ?></td>
					<td>IDR <?php echo number_format($values["item_quantity"]*$values["item_price"]); ?></td>
					<td><a href="atc-dress.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
				</tr>
				<?php
							$total = $total + ($values["item_quantity"]*$values["item_price"]);			
						}
				?>
				<tr>
					<td colspan="3" align="right">Total</td>
					<td align="right">IDR <?php echo number_format($total); ?></td>
					<td></td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
		<button type="submit" class="btn btn-success btn-block" name="save"><a href="insert-atc.php">Beli</a></button>
	</div>
	<!-- End of Shopping Section -->

</body>
</html>