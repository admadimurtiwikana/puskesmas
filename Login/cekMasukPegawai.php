<?php  
session_start();
mysql_connect('localhost', 'root', ''); 
mysql_select_db('puskesmas');  
$idpgw = $_POST['idpgw'];
$passwordpgw = $_POST['passpgw'];  
$level = $_POST['jabatan'];


$query = "SELECT * FROM pegawai WHERE id_pegawai = '$idpgw' AND pass_pegawai = '$passwordpgw'";
$hasil = mysql_query($query); 
$data = mysql_fetch_array($hasil);  
if ($passwordpgw == $data['pass_pegawai'] && $level == $data['jabatan']) 
	{ 
	echo '<script type="text/javascript">alert("./Login Sukses! ^_^ \n./Klik OK untuk Masuk ke Menu Utama! :)");</script>';
	
	$_SESSION['nama'] = $data['nm_pegawai'];
	$_SESSION['level'] = $data['jabatan'];     
	$_SESSION['idpgw'] = $data['id_pegawai'];  
	$_SESSION['passwordpgw'] = $data['pass_pegawai'];
	include "cekAutentikasiPegawai.php";
	} 
else 
{	echo '<script type="text/javascript">alert("./Login Gagal! :( \n./Kombinasi ID Pegawai / Kata Sandi / Jabatan tidak Cocok! :(");</script>';
	echo '<meta http-equiv="refresh" content="0; url=Pegawai.php" />';
}
?> 