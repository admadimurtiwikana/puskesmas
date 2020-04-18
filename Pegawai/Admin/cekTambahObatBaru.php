<?php
 mysql_connect("localhost","root","");
			mysql_select_db("puskesmas");
$insert = "INSERT INTO `obat` (`id_obat`, `nama_obat`, `j_obat`,`stok_obat_awal`,`stok_obat_kini`,`hrg_obat`) VALUES
			('$_POST[id_obt]','$_POST[nm_obt]','$_POST[j_obt]','$_POST[s_obt]','$_POST[s_obt]','$_POST[hrg_obt]')";
mysql_query($insert);

echo '<script type="text/javascript">alert("./Data Berhasil disimpan! :)");</script>';
echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
 ?>
