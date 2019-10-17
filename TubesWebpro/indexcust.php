<!-- 1301154639 -->
<!DOCTYPE html>
<html>
<head>
  <title>Koleksi Naku</title>
  <?php
    include "script.html";
  ?>
  <link rel="stylesheet" href="css/style.css">
  <script src="scrolling.js"></script>
  <script type="text/javascript">
    $(document).on('click','.navbar-collapse.in',function(e) {
      if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
        $(this).collapse('hide');
      }
    });
  </script>
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
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#khimar">Khimar</a></li>
          <li><a href="#dress">Dress</a></li>
          <li><a href="form.php">Order</a></li>
          <li><a href="index.php">Log Out</a></li>
        </ul>
      </div> <!-- end of isi navbar -->
    </div> <!-- end of container -->
  </nav>
<!-- End of Navigation Bar -->

<!-- Home Section -->
<?php
  include "header.html";
?>
<!-- End of Home Section -->

<!-- About Section -->
  <div id="about" class="container-fluid text-center">
    <h1>Welcome to Koleksi Naku</h1>
    <h3>Gamisnya lucu ih, kaya cimol!</h3>
    <br><br>
    <!-- row dua kolom -->
    <div class="row">
      <div class="col-md-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-md-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div> <!-- end of row -->
    <br>
    <h3><i>"Quote anything here!" -Ayunda, Karina, and Nabila.</i></h3>
  </div>
<!-- End of About Section -->

  <div class="batas-section">
    <br><br>
  </div>

<!-- Khimar Section -->
  <div id="khimar" class="container-fluid text-center">
    <h2>Beautiful Khimar</h2>
    <br><br>
    <!-- row tiga kolom -->
    <div class="row">

      <div class="col-sm-4">
        <img src="img/khimar1.png" id="icon">
        <h3>Khimar 1</h3>
        <div class="property-icon">
          <img src="img/kualitas.png" style="width:20px;height:20px"> Best Seller</br>  
          <img src="img/harga.png" style="width:20px;height:20px"> Rp 185,000</br>
          <img src="img/bahan.png" style="width:20px;height:20px;"> Wolvis
        </div>
        <br>
      </div>

      <div class="col-sm-4">
        <img src="img/khimar2.png" id="icon">
        <h3>Khimar 2</h3>
        <div class="property-icon">
          <img src="img/kualitas.png" style="width:20px;height:20px"> Best Seller</br>  
          <img src="img/harga.png" style="width:20px;height:20px"> Rp 185,000</br>
          <img src="img/bahan.png" style="width:20px;height:20px;"> Wolvis
        </div>
        <br>
      </div>

      <div class="col-sm-4">
        <img src="img/khimar3.png" id="icon">
        <h3>Khimar 3</h3>
        <div class="property-icon">
          <img src="img/kualitas.png" style="width:20px;height:20px"> Best Seller</br>  
          <img src="img/harga.png" style="width:20px;height:20px"> Rp 185,000</br>
          <img src="img/bahan.png" style="width:20px;height:20px;"> Wolvis
        </div>
        <br>
      </div>
      <br>

    </div> <!-- end of row -->
    <div class="col-md-12 text-center" style="padding: 2%;"> 
      <a href="khimar.php" target="_blank"><button type="button">See more!</button></a> 
    </div>
  </div>
<!-- End of Khimar Section -->

<!-- Dress Section -->
  <div id="dress" class="container-fluid text-center">
    <h2>Elegant Dress</h2>
    <br><br>
    <!-- row tiga kolom -->
    <div class="row">

      <div class="col-sm-4">
        <img src="img/dress1.png" id="icon">
        <h3>Dress 1</h3>
        <div class="property-icon">
          <img src="img/kualitas.png" style="width:20px;height:20px"> Best Seller</br>  
          <img src="img/harga.png" style="width:20px;height:20px"> Rp 350,000</br>
          <img src="img/bahan.png" style="width:20px;height:20px;"> Balotelli
        </div>
        <br>
      </div>

      <div class="col-sm-4">
        <img src="img/dress2.png" id="icon">
        <h3>Dress 2</h3>
        <div class="property-icon">
          <img src="img/kualitas.png" style="width:20px;height:20px"> Best Seller</br>  
          <img src="img/harga.png" style="width:20px;height:20px"> Rp 350,000</br>
          <img src="img/bahan.png" style="width:20px;height:20px;"> Balotelli
        </div>
        <br>
      </div>

      <div class="col-sm-4">
        <img src="img/dress3.png" id="icon">
        <h3>Dress 3</h3>
        <div class="property-icon">
          <img src="img/kualitas.png" style="width:20px;height:20px"> Best Seller</br>  
          <img src="img/harga.png" style="width:20px;height:20px"> Rp 350,000</br>
          <img src="img/bahan.png" style="width:20px;height:20px;"> Balotelli
        </div>
        <br>
      </div>
      <br>

    </div> <!-- end of row -->
    <div class="col-md-12 text-center" style="padding: 2%;"> 
      <a href="atc-dress.php"><button type="button">See more!</button></a> 
    </div>
  </div>
<!-- End of Dress Section -->

  <div class="batas-section">
    <br><br>
  </div>

<footer>
  <center>
    <div>
      <p><a href="index.html">Koleksi Naku</a>  All rights reserved &copy; 2018.</p>
    </div>
  </center>
</footer>

</body>
</html>














