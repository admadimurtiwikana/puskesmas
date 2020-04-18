<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
      
    $update="UPDATE `tarif` SET `periksa`='$_POST[nm_prk]',`biaya`='$_POST[tarif_prk]'
	WHERE `periksa` = '$_POST[nm_prk]';";
	
	mysql_query($update);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>

