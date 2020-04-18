<?php  
session_start();
mysql_connect('localhost', 'root', ''); 
mysql_select_db('puskesmas');  
$idpgw = $_POST['idpgw'];
$passwordpgw = $_POST['passpgw'];  
$passwordbarupgw = $_POST['passbrpgw2'];

$query = "SELECT * FROM pegawai WHERE id_pegawai = '$idpgw' AND pass_pegawai = '$passwordpgw'";
$hasil = mysql_query($query); 
$data = mysql_fetch_array($hasil);  
if ($passwordpgw == $data['pass_pegawai'] && $idpgw == $data['id_pegawai']) 
	{ 	
	$update="UPDATE pegawai SET pass_pegawai = '$passwordbarupgw' WHERE pass_pegawai='$passwordpgw' AND id_pegawai='$idpgw';";	
    mysql_query($update);
	echo '<script type="text/javascript">alert("./Kata Sandi Berhasil di Ubah! ^_^ \n./Klik OK untuk Masuk ke Halaman Login! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=Pegawai.php" />';
	} 
else 
{	echo '<script type="text/javascript">alert("./Kata Sandi Gagal di Ubah! :( \n./Kombinasi ID Pegawai / Kata Sandi Lama tidak Cocok! :(");</script>';
	echo '<meta http-equiv="refresh" content="0; url=GantiKataSandi.php" />';
}
?> 