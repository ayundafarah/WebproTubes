<!-- 1301154511 -->

<?php
  include 'config.php';
      $username= $_POST['username'];
      $nama = $_POST['nama'];
      $password = $_POST['password'];
      $umur = $_POST['umur'];

      $query = "UPDATE admin SET nama='$nama', password='$password', umur='$umur', WHERE username='$username'";
      mysqli_query($conn, $query);
      header('location: data-a.php');
  

  /*
    function edt($username){
    	
    }

    function del($username){
    	include 'config.php';
      $query = mysqli_query($conn, "DELETE * FROM admin WHERE username=".$username);
      header('location: data-a.php');
    } */

?>