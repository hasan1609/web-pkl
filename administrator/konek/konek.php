
<?php
$server="localhost";  //definisi server lokal.
$user="root";  //definisi user.
$pass=""; //definisi password (menyesuaikan).
$db="dishub";  //definisi database yang telah dibuat tadi.
//mengkoneksikan server lokal.
$koneski = mysql_connect($server,$user,$pass) or die ("Maaf,
koneksi gagal");
//memilih database.
if($koneski){
mysql_select_db($db) or die ("Maaf, database tidak
ditemukan");
}
?>