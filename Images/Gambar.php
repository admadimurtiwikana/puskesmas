<?php  
		$idnya = $_GET['id_pegawai'];  // id yang gambarnya mo ditampilkakn
		mysql_connect('localhost','root','');  
		mysql_select_db('puskesmas');  
		$sqlTampil="SELECT * FROM pegawai WHERE `id_pegawai`='$idnya'";  
		$qryTampil=mysql_query($sqlTampil); 
		$dataTampil=mysql_fetch_array($qryTampil);

		
		header("Content-type: $dataTampil[foto_tipe];");
		
		echo $dataTampil['foto_pegawai'];
?>
