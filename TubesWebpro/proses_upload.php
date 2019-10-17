<?php
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file = $_FILES['fupload']['name'];
  $ukuran_file = $_FILES['fupload']['size'];
  $direktori = "files/$nama_file";
   
  //apabila file berhasil diupload
  if (move_uploaded_file($lokasi_file,"$direktori")) {
    echo "Nama File : <b>$nama_file</b> sukses diupload<br>";
    echo "Ukuran File : <b>$ukuran_file</b> bytes";
     
    //masukan informasi ke dalam database
    include "config.php";
    // mysql_select_db("pintar");
    $sql = "insert into upload_file(nama_file,ukuran_file,deskripsi,direktori) values ('$nama_file','$ukuran_file','$_POST[deskripsi]','$direktori')";
    mysql_query($sql);
  }else{
    echo "File gagal diupload.";
  }
?>