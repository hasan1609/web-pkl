<?php
  include "../konek/konek.php";

  $gambar = $_FILES["image"]["name"];
  $folder = $_FILES["image"]["tmp_name"];
  $tanggal = date("Y-m-d");
 

  if (isset($_POST['upload'])) {
    move_uploaded_file($folder, "gambar/".$gambar);
    mysql_query("INSERT into berita (judul,gambar,isi,tanggal) VALUES ('$_POST[judul_berita]', '$gambar', '$_POST[isi_berita]', '$tanggal')");
  echo "<script>window.alert('berhasil')
  window.location='index.php'</script>";
  
  }
   
  ?>
