<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
      
    $update="UPDATE `obat` SET `nama_obat`='$_POST[nm_obt]',`j_obat`='$_POST[j_obt]',`stok_obat_awal`='$_POST[s_obt]',`stok_obat_kini`='$_POST[s_kini_obt]',`hrg_obat`='$_POST[hrg_obt]'
	WHERE `id_obat` = '$_POST[id_obt]';";
	
	mysql_query($update);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>

