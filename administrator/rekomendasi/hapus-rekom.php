<?php
include "../konek/konek.php";
$id = $_GET['id'];
mysql_query("DELETE FROM rekom WHERE id='$id'")or die(mysql_error());


header("location:index.php");
?>
