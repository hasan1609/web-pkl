 <?php

include '../konek/konek.php';

$id = $_POST['id'];
$jenis = $_POST['jenis'];
$syarat = $_POST['syarat'];

mysql_query("UPDATE uji SET jenis='$jenis', syarat='$syarat' WHERE id='$id'");

header("location:index.php");
?>
