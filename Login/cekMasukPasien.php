<?php  
session_start();
mysql_connect('localhost', 'root', ''); 
mysql_select_db('puskesmas');  
$idpsn = $_POST['idpsn'];
$passwordpsn = $_POST['passpsn'];  

$query = "SELECT * FROM pasien WHERE id_pasien = '$idpsn' AND pass_pasien = '$passwordpsn'";
$hasil = mysql_query($query); 
$data = mysql_fetch_array($hasil);  
if ($passwordpsn == $data['pass_pasien'] && $idpsn == $data['id_pasien']) 
	{ 
	echo '<script type="text/javascript">alert("./Login Sukses! ^_^ \n./Klik OK untuk Masuk ke Menu Utama! :)");</script>';
	$_SESSION['level'] = $data['level'];
	$_SESSION['nama'] = $data['nm_pasien'];
	$_SESSION['idpsn'] = $data['id_pasien'];  
	$_SESSION['passwordpsn'] = $data['pass_pasien'];
	echo '<meta http-equiv="refresh" content="0; url=../Pasien" />';
	} 
else 
{	echo '<script type="text/javascript">alert("./Login Gagal! :( \n./Kombinasi ID Pasien / Kata Sandi tidak Cocok! :(");</script>';
	echo '<meta http-equiv="refresh" content="0; url=Pasien.php" />';
}
?> 