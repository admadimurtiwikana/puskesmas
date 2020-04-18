<?php
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
	$ab = $_POST['periksa'];
 
	$insert = "select * from `tarif` WHERE `periksa`='$ab'";// Do Your Insert Query
	$qryTampil=mysql_query($insert); 
	$dataTampil=mysql_fetch_array($qryTampil);
	echo $dataTampil['biaya'];
?>