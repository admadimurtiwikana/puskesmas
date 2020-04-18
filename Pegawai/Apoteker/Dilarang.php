<?php
session_start();
		
if ($_SESSION['level'] == "Admin")
		{
		echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Admin`, Tidak diperbolehkan melihat Menu `Apoteker` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../Admin" />'; 
		} 	

	else if ($_SESSION['level'] == "Pasien")
		{
		echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Pasien`, Tidak diperbolehkan melihat Menu `Apoteker` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../../Pasien" />'; 
		}  

	else if ($_SESSION['level'] == "Assist. Dokter")
		{
	echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Assist. Dokter`, Tidak diperbolehkan melihat Menu `Apoteker` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../Assist.Dokter" />'; 
		}  

	else if ($_SESSION['level'] == "Manajer")
		{
	echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Manajer`, Tidak diperbolehkan melihat Menu `Apoteker` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../Manajer" />'; 
		}  

	else if ($_SESSION['level'] == "Resepsionis")
		{
	echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Resepsionis`, Tidak diperbolehkan melihat Menu `Apoteker` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../Resepsionis" />'; 
		}  
?>