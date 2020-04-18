<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
      
    $update="UPDATE `pegawai` SET `nm_pegawai`='$_POST[nm_pgw]',`pass_pegawai`='$_POST[pass_pgw]'
	WHERE `id_pegawai` = '$_POST[id_pgw]';";
	
	mysql_query($update);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=../Assist.Dokter" />';
?>

