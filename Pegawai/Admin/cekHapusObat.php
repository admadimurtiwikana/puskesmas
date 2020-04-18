<?php
mysql_connect("localhost","root","");
mysql_select_db("puskesmas");
$hapus = "DELETE FROM `obat` WHERE id_obat = '$_GET[id_obat]';";

mysql_query ($hapus);
echo '<script type="text/javascript">alert("./Obat Berhasil diHapus! :)");</script>';
echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>