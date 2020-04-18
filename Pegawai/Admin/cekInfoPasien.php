<?php
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
      
    $update="UPDATE `pasien` SET `pass_pasien`='$_POST[pass_psn]',`nm_pasien`='$_POST[nm_psn]',`tgl_lahir`='$_POST[tgl_lhr]',`tmp_lahir`='$_POST[tmp_lhr]',`gender`='$_POST[gender]',`agama`='$_POST[agama]',
	`status`='$_POST[status]',`alamat`='$_POST[alamat]',`hp`='$_POST[hp]',`keluhan`='$_POST[keluhan]',`r_rawat`='$_POST[r_rawat]',`dokter`='$_POST[dokter]',`cr_pembayaran`='$_POST[cr_byr]' 
	WHERE `id_pasien` = '$_POST[id_psn]';";

	$prosesEdit="UPDATE `proses` SET `1_Edit`='Tuntas' WHERE `id_pasien`='$_POST[id_psn]';";
	
	
	mysql_query($update);
    mysql_query($prosesEdit);
	echo '<script type="text/javascript">alert("./Data Berhasil di Edit dan Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>