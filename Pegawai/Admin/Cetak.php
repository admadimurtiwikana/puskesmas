<?php
	date_default_timezone_set("Asia/Jakarta");
	$jam = date("H:i:s");
	$tgl = date('d-m-Y');
	
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');

	$id = $_GET['id_pasien'];
	$prosesLunas="UPDATE `proses` SET `5_Lunas`='Tuntas' WHERE `id_pasien`='$id';";

    mysql_query($prosesLunas);
	echo '<meta http-equiv="refresh" content="0; url=../Apoteker" />';
?>
<?php
 // Define relative path from this script to mPDF
 //Beri nama file PDF hasil. 
define('_MPDF_PATH','../../Scripts/mpdf/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'A5'); // Create new mPDF Document //Beginning Buffer to save PHP variables and HTML tags 
ob_start();
?> 
<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak masalah.--> 
<!--CONTOH Code START--> 

<table width="100%" style="border-bottom: 1px solid #000000; vertical-align: bottom; font-family: tahoma; font-size: 9pt; color: #000000;">
	<tr>
		<td width="33%" align="center"><h3> <img src="../../Images/logo.jpg" alt="Logo" width="25" height="30"> <span style="font-size:28pt;">   Puskesmas</span></h3></td>
	</tr>
</table>
<h3><span style="font-size:15pt;">Hasil Pemeriksaan Pasien</span></h3>
<br>

<?php
mysql_connect('localhost','root',''); 
mysql_select_db('puskesmas');
$sqlTampil="select * from pasien WHERE `id_pasien`='$id'";  
$sqlTampil2="select * from apotek WHERE `id_pasien`='$id'";  
$sqlTampil3="select * from dokter WHERE `id_pasien`='$id'";  
$sqlTampil4="select * from total WHERE `id_pasien`='$id'";  

$qryTampil=mysql_query($sqlTampil);  
$qryTampil2=mysql_query($sqlTampil2);
$qryTampil3=mysql_query($sqlTampil3);
$qryTampil4=mysql_query($sqlTampil4);

$dataTampil=mysql_fetch_array($qryTampil);  
$dataTampil2=mysql_fetch_array($qryTampil2);  
$dataTampil3=mysql_fetch_array($qryTampil3);
$dataTampil4=mysql_fetch_array($qryTampil4);  
?>

<table width="100%">
	<tr>
		<td width="35%" align="left">Nota Transaksi: <?php echo $dataTampil4['no_transaksi'];?></h3></td>
		<td width="20%"></td>
		<td width="45%" align="left">Cetak: <?php echo $tgl?>, ( <?php echo $jam?> )</td>
	</tr>
</table>
<table width="800" border="1" align="center" cellpadding="1" cellspacing="1" >  
        <tr>
		<td height="50" colspan="4" align="center"><b>Identitas Pasien</b></td>
        </tr>  
        <tr bgcolor="#FFFFFF">  
          <td align="center"><b>Nama</b></td>  
          <td align="center" height="50"><?php echo $dataTampil['nm_pasien'];?></td> 
		   <td align="center"><b>Gender</b></td>  
          <td align="center" height="50"><?php echo $dataTampil['gender'];?></td>  
        </tr>  
        <tr bgcolor="#FFFFFF">  
          <td align="center"><b>TTL</b></td>  
          <td align="center" height="50"><?php echo $dataTampil['tmp_lahir'];?>, <?php echo $dataTampil['tgl_lahir'];?></td>
		  <td align="center"><b>Alamat</b></td>  
          <td align="center" height="50"><?php echo $dataTampil['alamat'];?></td>
		</tr>
		<tr bgcolor="#FFFFFF">  
          <td align="center"><b>Masuk</b></td>  
          <td align="center" height="50"><?php echo $dataTampil['tgl_masuk'];?> ( <?php echo $dataTampil['jam_masuk'];?> )</td>
		  <td align="center"><b>Keluar</b></td>  
          <td align="center" height="50"><?php echo $dataTampil['tgl_keluar'];?> ( <?php echo $dataTampil['jam_keluar'];?> )</td>
		</tr> 
		<tr bgcolor="#FFFFFF">
		<td height="50" colspan="4" align="center"><b>Pemeriksaan Pasien</b></td>
		</tr>
        <tr bgcolor="#FFFFFF">
			<td align="center"><b>Keluhan</b></td>  
          <td align="center" height="50"><?php echo $dataTampil['keluhan'];?></td>
		  <td align="center"><b>Ruang Rawat</b></td>  
          <td align="center" height="50"><?php echo $dataTampil['r_rawat'];?></td>  
        </tr>
		<tr bgcolor="#FFFFFF">  
		  <td align="center"><b>Resep</b></td>  
          <td align="center" colspan="3" height="50"><?php echo $dataTampil3['resep'];?></td>  
        </tr> 		
		<tr>
		<td align="center"><b>Saran Dokter</b></td>  
          <td align="center" colspan="3" height="50"><?php echo $dataTampil3['saran_dokter'];?></td>  
		</tr>
		<tr>
          <td height="50" colspan="4" align="center"><b>Rincian Biaya</b></td>  
        </tr>  
        <tr bgcolor="#FFFFFF">  
          <td align="center"><b>Detil Periksa</b></td>  
          <td align="center" colspan="3" height="50"><?php echo $dataTampil3['detil_periksa'];?></td>
			
        </tr>  
        <tr bgcolor="#FFFFFF">  
          <td align="center"><b>Detil Obat</b></td>  
        <td align="center" colspan="3" height="50"><?php echo $dataTampil2['detil_beli'];?></td> 
		
        </tr>  
        <tr bgcolor="#FFFFFF">  
          <td align="center"><b>Total Biaya Pemeriksaan</b></td>  
          <td align="center" height="50"><?php echo $dataTampil3['biaya'];?></td>
		  <td align="center"><b>Total Harga Obat</b></td>  
          <td align="center" height="50"><?php echo $dataTampil2['harga'];?></td> 
        </tr>
		<tr bgcolor="#FFFFFF">
		<td align="center"><b>Total Pemeriksaan + Obat</b></td>  
          <td align="center" height="50"><?php echo $dataTampil4['total_prk_obt'];?></td>  
		  <td align="center"><b>Metode Bayar</b></td>  
          <td align="center" height="50"><?php echo $dataTampil['cr_pembayaran'];?></td>  
		</tr>
		<tr bgcolor="#FFFFFF">
		<td align="center"><b>Total Akhir</b></td>  
          <td align="center" colspan="3" height="50"><?php echo $dataTampil4['total_semua'];?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">   
		   <td align="center"><b>Bayar</b></td>  
          <td align="center" height="50"><?php echo $dataTampil4['bayar'];?></td>  
		  <td align="center"><b>Kembali</b></td>  
          <td align="center" height="50"><?php echo $dataTampil4['kembali'];?></td>
        </tr> 
</table>
<br>
<table width="100%">
	<tr>
		<td width="33%" align="center"><h3><span style="font-size:12pt;">-=[ Semoga Lekas Sembuh !! ]=-</span></h3></td>
	</tr>
</table>
<hr>

<!--CONTOH Code END--> 
<?php
$nama_dokumen= ''.$dataTampil['id_pasien'].'-'.$dataTampil['nm_pasien'].'-Cetak ('.$tgl.'-('.$jam.'))';
$stylesheet = file_get_contents('../../Scripts/Bootstrap/css/bootstrap.min.css');
$mpdf->WriteHTML($stylesheet,1);
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB.. ob_end_clean(); 
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML($html);
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>