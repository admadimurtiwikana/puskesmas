<?php
	date_default_timezone_set("Asia/Jakarta");
	$jamcetak = date("H:i:s");
	$tglcetak = date('d-m-Y');

	$tgl = $_GET['tgl'];
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
<h3><span style="font-size:13pt;">Data Pendapatan Puskesmas per Tanggal (<?php echo $_GET['tgl'];?>)</span></h3>
<br>

<?php
	mysql_connect('localhost','root',''); 
	mysql_select_db('puskesmas');

	$jumlah_periksa=mysql_query("SELECT SUM(biaya) FROM dokter, pasien WHERE `tgl_keluar` ='$tgl' AND pasien.id_pasien = dokter.id_pasien;");
	$jum_prk=mysql_result($jumlah_periksa, 0);   
	$jumlah_beli_obat=mysql_query("SELECT SUM(harga) FROM apotek, pasien WHERE `tgl_keluar` ='$tgl' AND pasien.id_pasien = apotek.id_pasien;;");
	$jum_obt=mysql_result($jumlah_beli_obat, 0);
	$total_akhir = $jum_prk + $jum_obt;
			
	$jumlah_langsung=mysql_query("SELECT SUM(total_semua) FROM total, pasien WHERE `tgl_keluar` ='$tgl' AND pasien.id_pasien = total.id_pasien;");
	$jum_lsg=mysql_result($jumlah_langsung, 0);
	$total_tdk_lsg = $total_akhir - $jum_lsg;		
?>

<table width="100%">
	<tr>
		<td width="45%" align="left">Nota Pendapatan Puskesmas</h3></td>
		<td width="10%"></td>
		<td width="45%" align="left">Cetak: <?php echo $tglcetak?>, (<?php echo $jamcetak;?>)</td>
	</tr>
</table><br>
<table width="800" border="1" align="center" cellpadding="1" cellspacing="1" >  
        <tr>
		<td height="50" colspan="4" align="center"><b>Total Pendapatan Puskesmas </b></td>
        </tr>  
        <tr bgcolor="#FFFFFF">  
          <td align="center" colspan="2"><b>Total Pendapatan Pemeriksan</b></td>  
          <td align="center" height="50" colspan="2"><?php echo $jum_prk;?></td> 
        </tr>  
        <tr bgcolor="#FFFFFF">  
          <td align="center" colspan="2"><b>Total Pendapatan Obat</b></td>  
          <td align="center" height="50" colspan="2"><?php echo $jum_obt;?></td>
		</tr>
		<tr bgcolor="#FFFFFF">  
          <td align="center" colspan="2"><b>Total Pendapatan Akhir</b></td>  
          <td align="center" height="50" colspan="2"><?php echo $total_akhir;?></td>
		</tr> 
        <tr bgcolor="#FFFFFF">
			<td align="center" colspan="2"><b>Total Pendapatan Langsung</b></td>  
          <td align="center" height="50" colspan="2"><?php echo $jum_lsg;?></td>
        </tr>
		<tr bgcolor="#FFFFFF">  
		  <td align="center" colspan="2"><b>Total Pendapatan Tertunda</b></td>  
          <td align="center" colspan="2" height="50"><?php echo $total_tdk_lsg;?></td>  
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
$nama_dokumen= 'Pendapatan - '.$_GET['tgl'].' - Cetak ('.$tglcetak.'-('.$jamcetak.'))';
$stylesheet = file_get_contents('../../Scripts/Bootstrap/css/bootstrap.min.css');
$mpdf->WriteHTML($stylesheet,1);
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB.. ob_end_clean(); 
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML($html);
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>