<!-- 1301154525 -->
<!DOCTYPE html>
<html>
<head>
  <title>transfer</title>
  <?php include "script.html" ?>
  <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
  <?php include "navbar.php"; ?>
    <div class="container">
      <div class="row">
        <center><h3> Transfer Barang </h3></center>
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

<!-- FORM TRANSFER -->

<form enctype='multipart/form-data' method='POST' action='proses_upload.php'>
  <table border='0' align='center'>
    <tr>
      <td>File yang diupload</td>
      <td>:</td>
      <td><input type='file' name='fupload'></td>
    </tr>
    <tr>
      <td>Deskripsi File</td>
      <td>:</td>
      <td><textarea name='deskripsi' rows='8' cols='40'></textarea></td>
    </tr>
    <tr>
      <td colspan='3' align='center'><input type='submit' value='upload'></td>
    </tr>
  </table>
</form>

<!-- <?php  
 include "config.php";
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">    
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM photos";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>   -->

 </body>
</html>