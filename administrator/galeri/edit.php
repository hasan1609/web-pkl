<?php
include ('../konek/konek.php');
$filename=$_FILES['image']['name'];
$tanggal = date("Y-m-d");
$move=move_uploaded_file($_FILES['image']['tmp_name'],'gambar/'.$filename);
if(empty($filename))   //jika gambar kosong atau tidak di ganti
{
                $update=mysql_query("UPDATE galeri set keterangan='$_POST[keterangan]', tanggal='$tanggal' where id='$_POST[id]' ") or die ("gagal update ");
echo "<script>alert ('data telah di update ');document.location='index.php' </script> ";
}
elseif (!empty($filename)) // jika gambar di ganti
{
                $update=mysql_query("UPDATE galeri set keterangan='$_POST[keterangan]',gambar='$filename', tanggal='$tanggal' where id='$_POST[id]' ") or die ("gagal update gambar ");
echo "<script>alert ('data telah di update ');document.location='index.php' </script> ";
}
?>