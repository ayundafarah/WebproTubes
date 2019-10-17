<!-- 1301154639 -->

<!DOCTYPE html>
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
                <!-- menu dropdown -->
                <li><a href="admin.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="data-a.php">Data Admin</a></li>
                      <li><a href="data-c.php">Data Pembeli</a></li>
                  </ul>
                </li><!-- end of dropdown -->
                <li><a href="stok.php">Stok</a></li>
                <li><a href="transfer.php">Transfer</a></li>
                <li><a href="sign-up.php" target="_blank">Log Out</a></li>
            </ul>
          </div> <!-- end of isi navbar -->
      </div> <!-- end of container -->
    </nav>
<!-- End of Navigation Bar -->
</html>