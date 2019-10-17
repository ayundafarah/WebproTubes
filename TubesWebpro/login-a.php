<!-- 1301154511 -->
<?php

    /* Checking Database */
    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
      $sql = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
      $result = mysqli_num_rows($sql);
      if ($result) {
        header("location:admin.php");
      } else {
        header("location:signin-admin.php");
      }
    }

  ?>