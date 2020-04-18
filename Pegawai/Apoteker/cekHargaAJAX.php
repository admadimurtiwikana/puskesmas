<?php
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
	$a = $_POST['nama_obat'];
 
	$insert = "select * from `obat` WHERE `nama_obat`='$a'";// Do Your Insert Query
	$qryTampil=mysql_query($insert); 
	$dataTampil=mysql_fetch_array($qryTampil);
	echo $dataTampil['hrg_obat'];
?>