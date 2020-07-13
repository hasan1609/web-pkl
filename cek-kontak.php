<?php
  include "administrator/konek/konek.php";
   
  mysql_query("INSERT into kontak (nama,email,kritik,saran) VALUES ('$_POST[nama]', '$_POST[email]','$_POST[kritik]','$_POST[saran]')");
  echo "<script>window.alert('berhasil')
  window.location='index.php'</script>";
  

  ?>