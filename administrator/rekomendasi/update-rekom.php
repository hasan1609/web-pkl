 <?php

include '../konek/konek.php';

$id = $_POST['id'];
$jenis = $_POST['jenis'];
$syarat = $_POST['syarat'];

mysql_query("UPDATE rekom SET jenis='$jenis', syarat='$syarat' WHERE id='$id'");

header("location:index.php");
?>
