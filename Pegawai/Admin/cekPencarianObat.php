<?php
mysql_connect("localhost","root","");
mysql_select_db("puskesmas");
$hapus = "DELETE FROM pegawai WHERE id_pegawai = '$_GET[id_pasien]';";

mysql_query ($hapus);
echo '<script type="text/javascript">alert("./Akun Pegawai Berhasil diHapus! :)");</script>';
echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>