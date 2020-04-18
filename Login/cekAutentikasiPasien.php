<!-- Cek Folder -->
<?php
if ($_SESSION['level'] == "Admin")
		{
		echo '<meta http-equiv="refresh" content="0; url=../Pegawai/Admin" />';
		} 	
else if ($_SESSION['level'] == "Apoteker")
		{
	echo '<meta http-equiv="refresh" content="0; url=../Pegawai/Apoteker" />';
		}  
else if ($_SESSION['level'] == "Assist. Dokter")
		{
	echo '<meta http-equiv="refresh" content="0; url=../Pegawai/Assist.Dokter" />';
		}  
else if ($_SESSION['level'] == "Manajer")
		{
	echo '<meta http-equiv="refresh" content="0; url=../Pegawai/Manajer" />';
		}  
else if ($_SESSION['level'] == "Resepsionis")
		{
	echo '<meta http-equiv="refresh" content="0; url=../Pegawai/Resepsionis" />';
		}  
?>