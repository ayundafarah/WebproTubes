<?php
include 'config.php';
$id         = $_GET['id'];
$a  = mysqli_query($conn, "select * from pembelian where id='$id'");
$row        = mysqli_fetch_array($a);

?>
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
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xl-12"></div>
            <div class="col-md-4 col-sm-4 col-xl-12">
                <form class="form-container" method="POST" action="edit-pembelian.php">
                <h1>Koleksi Naku</h1>
                <div class="form-group">
                        <label for="nama">Id</label>
                        <input type="text" class="form-control" name="id" placeholder="<?php echo $id ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" class="form-control" name="quantity">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="text" class="form-control" name="total">
                    </div>
                    <button type="submit" class="btn" name="save"><a href="admin.php">Kembali</a></button>
                    <button tyoe="submit" class="btn btn-success" value="simpan">Simpan Perubahan</button>
                </form>
            </div> <!-- End Form -->
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div> <!-- End of Sign Up Section -->
    </body>
</html>