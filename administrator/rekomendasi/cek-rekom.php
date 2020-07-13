<?php
  include "../konek/konek.php";
   
  mysql_query("INSERT into rekom (jenis,syarat) VALUES ('$_POST[jenis]', '$_POST[syarat]')");
  echo "<script>window.alert('berhasil')
  window.location='index.php'</script>";
  

  ?>
