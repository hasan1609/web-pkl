 <?php

include '../konek/konek.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$filename=$_FILES['image']['name'];
$tanggal = date("Y-m-d");
$move=move_uploaded_file($_FILES['image']['tmp_name'],'gambar/'.$filename);
if(empty($filename))   //jika gambar kosong atau tidak di ganti
{
                $update=mysql_query("UPDATE berita SET judul='$judul', isi='$isi', tanggal='$tanggal' where id_berita='$_POST[id]' ") or die ("gagal update ");
echo "<script>alert ('data telah di update ');document.location='index.php' </script> ";
}
elseif (!empty($filename)) // jika gambar di ganti
{
                $update=mysql_query("UPDATE berita SET judul='$judul', isi='$isi', gambar='$filename', tanggal='$tanggal' where id_berita='$_POST[id]' ") or die ("gagal update gambar ");
echo "<script>alert ('data telah di update ');document.location='index.php' </script> ";
}
?>