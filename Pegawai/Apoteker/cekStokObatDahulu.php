<?php
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
	$a = $_POST['nama_obat'];
 
	$update = "select * from `obat` WHERE `nama_obat`='$a'";
	$qryTampil=mysql_query($update); 
	$dataTampil=mysql_fetch_array($qryTampil);
	echo $dataTampil['stok_obat_kini'];
 
?>