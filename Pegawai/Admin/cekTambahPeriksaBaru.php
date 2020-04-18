<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
	
	$insert="INSERT INTO `tarif`(`periksa`,`biaya`) 
	VALUES ('$_POST[nm_prk]','$_POST[tarif_prk]');";
	
    mysql_query($insert);
	echo '<script type="text/javascript">alert("./Nama Periksa Berhasil Ditambahkan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>