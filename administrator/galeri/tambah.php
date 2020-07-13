<?php
  include "../konek/konek.php";

  $gambar = $_FILES["image"]["name"];
  $folder = $_FILES["image"]["tmp_name"];
  $tanggal = date("Y-m-d");
 

  if (isset($_POST['upload'])) {
    move_uploaded_file($folder, "gambar/".$gambar);
    mysql_query("INSERT into galeri (keterangan,gambar,tanggal) VALUES ('$_POST[keterangan]','$gambar', '$tanggal')");
  echo "<script>window.alert('berhasil')
  window.location='index.php'</script>";
  
  }
   
  ?>
