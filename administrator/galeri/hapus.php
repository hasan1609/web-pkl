<?php
include "../konek/konek.php";
$id = $_GET['id'];
$pilih = mysql_query("SELECT * FROM galeri WHERE id='$id'");
$data = mysql_fetch_array($pilih);
$foto = $data['gambar'];
unlink("gambar/".$foto);
$hapus = mysql_query("DELETE FROM galeri WHERE id='$id'");
if($hapus){
  echo"<script>alert('berhasil');
  location.href='index.php';
  </script>";
}else{
  echo "gagal";
}
?>

