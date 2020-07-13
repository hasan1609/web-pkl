<?php
include '../konek/konek.php';

$id = $_POST['id'];
$tugas = $_POST['tugas'];
$fungsi = $_POST['fungsi'];


mysql_query("UPDATE tugas SET tugas='$tugas', fungsi='$fungsi' WHERE id_tugas='$id'");

header("location:index.php");
?>