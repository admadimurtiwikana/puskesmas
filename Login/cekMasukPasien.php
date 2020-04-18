<?php  
session_start();
include "koneksi.php";

$idpsn = $_POST['idpsn'];
$passwordpsn = $_POST['passpsn'];  


$query = "SELECT * FROM  data_pasien WHERE id= '$idpsn' AND password = '$passwordpsn'";
$hasil = mysqli_query($conn , $query); 
$data = mysqli_fetch_assoc($hasil);

if ($passwordpsn == $data['password'] && $idpsn == $data['id']) 
	{ 
	echo '<script type="text/javascript">alert("./Login Sukses! ^_^ \n./Klik OK untuk Masuk ke Menu Utama! :)");</script>';
	$_SESSION['level'] = $data['level'];
	$_SESSION['nama'] = $data['namapasien'];
	$_SESSION['idpsn'] = $data['id'];  
	$_SESSION['passwordpsn'] = $data['password'];
	echo '<meta http-equiv="refresh" content="0; url=../Pasien" />';
	} 
else 
{	echo '<script type="text/javascript">alert("./Login Gagal! :( \n./Kombinasi ID Pasien / Kata Sandi tidak Cocok! :(");</script>';
	// echo '<meta http-equiv="refresh" content="0; url=Pasien.php" />';
}
?> 