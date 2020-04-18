<?php  
	date_default_timezone_set("Asia/Jakarta");
	$jam = date("H:i:s");
	$tgl = date('d-m-Y');
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
	$arrayperiksa = $_POST ['periksa'];
	$arraybiayaperiksa = $_POST ['biaya'];
	$t_biaya_periksa = $_POST ['kol_t_p'];
	$t_periksa_dan_obat = $_POST ['kol_t_o_p'];
	$t_semua = $_POST['kol_t_semua'];
	$t_byr = $_POST['kol_byr'];
	$kembali = $_POST['kol_kembali'];
    $no_trk = $_POST['no_transaksi'];
	$id = $_POST['id_psn_hide'];
	$a = ' "'.implode('" , "', $arrayperiksa).'" ';
	$b = ' "'.implode('" , "', $arraybiayaperiksa).'" ';
	$c = ' | '.$a.' | <br> | '.$b.' | ';
	
	
    $prosesKeluar="UPDATE `pasien` SET `jam_keluar`='$jam' , `tgl_keluar`='$tgl' WHERE `id_pasien`='$id';";
	
	$total="UPDATE `total` SET `no_transaksi`='$no_trk' , `total_prk_obt`='$t_periksa_dan_obat', 
	`total_semua`='$t_semua', `bayar`='$t_byr', `kembali`='$kembali', `tgl_trk`='$tgl', `jam_trk`='$jam' WHERE `id_pasien`='$id';";
	
	$prosesUpdatePeriksa="UPDATE `dokter` SET `detil_periksa`='$c' , `biaya`='$t_biaya_periksa' WHERE `id_pasien`='$id';";
	
	$prosesLunas="UPDATE `proses` SET `4_Bayar`='Tuntas' WHERE `id_pasien`='$id';";
	
    mysql_query($prosesKeluar);
	mysql_query($total);
	mysql_query($prosesUpdatePeriksa);
	mysql_query($prosesLunas);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>