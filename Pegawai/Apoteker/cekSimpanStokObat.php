<?php
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
	$aa = $_POST['nama_obat'];
	$bb = $_POST['stok_obat'];
	
	$update="UPDATE `obat` SET `stok_obat_kini`='$bb' WHERE nama_obat='$aa'";
	mysql_query($update); 
	
	$sqlTampil="select * from obat Where nama_obat='$aa'";  
	$qryTampil=mysql_query($sqlTampil);  
	$dataTampil=mysql_fetch_array($qryTampil);  
	echo $dataTampil['stok_obat_kini'];
 
?>