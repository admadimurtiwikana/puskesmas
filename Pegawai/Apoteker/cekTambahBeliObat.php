<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
	$id = $_POST['id_psn'];
	$obat = $_POST['obat'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];	
	$as = ' "'.implode('" , "', $obat).'" ';
	$as2 = ' "'.implode('" , "', $jumlah).'" ';
	$as3 = ' "'.implode('" , "', $harga).'" ';
	$as4 = ' | '.$as.' | <br> | '.$as2.' | <br> | '.$as3.' | ';
	$total2 = array_sum($jumlah);
	$total3 = array_sum($harga);
	$ad = explode(",", $as);
	$ad2 = explode(",", $as2);
	$ad3 = explode(",", $as3);
	
	$update="UPDATE `apotek` SET `nm_obat`='$as',`jml_satuan`='$total2', `harga`='$total3', `detil_beli`='$as4'
	WHERE `id_pasien` = '$id';";
	$prosesBeliObat="UPDATE `proses` SET `3_Apotek`='Tuntas' WHERE `id_pasien`='$id';";
	
	mysql_query($update);
	mysql_query($prosesBeliObat);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=../Apoteker" />';
?>