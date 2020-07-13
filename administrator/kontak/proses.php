<?php

include '../konek/konek.php';
$id = $_POST['id'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];


mysql_query("UPDATE visi SET visii='$visi', misi='$misi' WHERE id='$id'");

header("location:index.php");
?>