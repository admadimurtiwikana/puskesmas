<?php
mysql_connect("localhost","root","");
mysql_select_db("puskesmas");
$hapus = "DELETE FROM tarif WHERE periksa = '$_GET[periksa]';";

mysql_query ($hapus);
echo '<script type="text/javascript">alert("./Nama Periksa Berhasil diHapus! :)");</script>';
echo '<script type="text/javascript">window.history.go(-1);</script>';
?>