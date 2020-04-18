<html>
<?php
include ('cek.php');
mysql_connect('localhost','root','');  
mysql_select_db('puskesmas');

date_default_timezone_set("Asia/Jakarta");
$tgl = date('d-m-Y');
?>

<head>
<title>&nbsp ./Puskesmas &nbsp- &nbspPegawai &nbsp|</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="icon" type="image/ico" href="../../favicon.ico">
  <link rel="stylesheet" href="../../Scripts/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Scripts/Validator/css/formValidation.css"/>
  <link rel="stylesheet" href="../../Scripts/FakeLoader/fakeLoader.css">
  <script type="text/javascript" src="../../Scripts/jquery.js"></script>
  <script type="text/javascript" src="../../Scripts/Bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../Scripts/Tinymce/tinymce.min.js"></script>
  <script type="text/javascript" src="../../Scripts/Validator/js/formValidation.js"></script>
  <script type="text/javascript" src="../../Scripts/Validator/js/framework/bootstrap.js"></script>
  <script type="text/javascript" src="../../Scripts/jquery.bootstrap.wizard.min.js"></script>
  <script type="text/javascript" src="../../Scripts/FakeLoader/fakeLoader.min.js"></script>

<style> 
body {
	background:url('../../Images/bg.jpg') no-repeat fixed top center;
}
a { color:#000000 }
	label {color:#000000}
	a:focus { color:#000000}
	p { color:#000000 }
	.navbar-fixed-top { background:#F5DEB3 }
	.navbar-fixed-bottom { background:#DEB887 }
	.modal-backdrop { background:#000000 }
	div { color:#000000 }
	hr {
		width: 80%;
		height: 2px;
		margin-left: auto;
		margin-right: auto;
		background-color:#000000;
		color:#000000;
		border: 0 none;
		margin-top: 5px;
		margin-bottom:15px;
		}
.hero-unit {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:25px auto;
padding:5px;
width:95%;
}
.kolom {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:78%;
}
.headisi {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:93%;
}
.isi {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:93%;
}
</style>

<!-- Konfig Tab FormEditAkun dan FormEditAkun2 -->
<style type="text/css">
.tab-content {
    margin-top: 20px;
}
</style>

<!-- Judul Marquee -->
<script>
(function titleMarquee() {
    document.title = document.title.substring(1)+document.title.substring(0,1);
    setTimeout(titleMarquee, 200);
})();
</script>

<!-- Tampil Modal #ppAwal -->
<script>
	$(document).ready(function() {
    setTimeout(function() {
		$('#ppAwal').modal('show');
    }, 300);
});
</script>

</head>
<body>

<!-- Modal #ppAwal -->
<div class="modal fade" id="ppAwal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-piggy-bank"></span> Pendapatan</h4>
		<h5>Data Pendapatan Puskesmas!</h5>
      </div>
      <div class="modal-body">

	   <?php
		date_default_timezone_set("Asia/Jakarta");
		$tgl = date('d-m-Y');
	
		$per_tgl= (isset($_GET['tgl_dptn'])) ? $_GET['tgl_dptn'] : $tgl;
		$per_hal= (isset($_GET['per_page'])) ? (int)$_GET['per_page'] : 5;
		$jumlah_record=mysql_query("SELECT COUNT(*) FROM proses, pasien WHERE `tgl_keluar` = '$per_tgl' AND pasien.id_pasien=proses.id_pasien ORDER BY pasien.id_pasien");
		$jum=mysql_result($jumlah_record, 0);
		$halaman=ceil($jum / $per_hal);
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start = ($page - 1) * $per_hal;
	   ?>
		<h3><center>Data Pendapatan Puskesmas perTanggal (<?php echo $per_tgl;?>)</center></h3>
		<hr>
		<div class="col-lg-9">
		<form id="perPage" method="get" class="form-horizontal">
		<label>Edit Tampilan Data per Halaman</label>
			<div class="input-group col-lg-5">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit">Ubah</button>
				</span>
				<input type="text" name="per_page" class="form-control" placeholder="Tampil Data per Hal...">
			</div>
			
			<!-- Hidden Input PerTgl -->
			<input type="text" id="per_tgl_hidden" name="tgl_dptn" value="<?php echo $_GET['tgl_dptn']?>" class="form-control" placeholder="Cari Data per Tgl..">
			<script>$("#per_tgl_hidden").hide();</script>
			
		</form>
		</div>
		<div class="col-lg-3">
		<form id="perTgl" method="get" class="form-horizontal">
		
		<!-- Hidden Input PerPage -->
		<input type="text" id="per_page_hidden" name="per_page" value="<?php echo $_GET['per_page']?>" class="form-control" placeholder="Tampil Data per Hal...">
		<script>$("#per_page_hidden").hide();</script>
		
		<label>Cari Data per Tanggal</label>
			<div class="input-group col-lg-12">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit">Cari</button>
				</span>
				<input type="text" name="tgl_dptn" class="form-control" placeholder="Cari Data per Tgl..">
			</div>
			<h5><b>Format: HH-BB-TTTT</b></h5>
		</form>
		</div>
		
			<div class="col-md-9">
				<label>Jumlah Data Ditemukan : <?php echo $jum;?></label><br>
				<label>Tampilan Data per Halaman : <?php echo $per_hal;?></label>
			</div>
			<div class="col-md-3">
				<label>Halaman Ke : <?php echo $page;?></label><br>
				<label>Jumlah Halaman : <?php echo $halaman;?></label>
				
			</div>

		
		<table class="table table-striped"> 
			  <tr>
				<td><div align="center"><strong><span class="glyphicon glyphicon-globe"></span></strong></div></td>
				<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span>&nbsp Nama Pasien</strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-usd"></span>&nbsp Biaya Periksa</strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-usd"></span>&nbsp Harga Obat</strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-usd"></span>&nbsp Total</strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-credit-card"></span>&nbsp Bayar</strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-usd"></span>&nbsp Total Akhir</strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td>
			  </tr> 
		  <?php 
			  $tampil="SELECT * FROM pasien,total,apotek,dokter WHERE `tgl_keluar`='$per_tgl' AND pasien.id_pasien = total.id_pasien AND total.id_pasien=dokter.id_pasien AND dokter.id_pasien=apotek.id_pasien ORDER BY pasien.id_pasien limit $start, $per_hal;";  
			  $qryTampil=mysql_query($tampil); 
			  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
		  ?> 
			   <tr> 
				<td><center><?php echo $dataTampil['id_pasien'] ; ?></center></td> 
				<td><center><?php echo $dataTampil['nm_pasien']; ?></center></td> 
				<td><center><?php echo $dataTampil['biaya']; ?></center></td> 
				<td><center><?php echo $dataTampil['harga']; ?></center></td> 
				<td><center><?php echo $dataTampil['total_prk_obt']; ?></center></td> 
				<td><center><?php echo $dataTampil['cr_pembayaran']; ?></center></td> 
				<td><center><?php echo $dataTampil['total_semua']; ?></center></td> 
				<td><div align="center">
				<a href="Cetak.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span title="Cetak Nota" class="glyphicon glyphicon-print"></span></a></div>
				</td>  
			  </tr> 
		<?php } ?> 
		</table>	

<nav>
	<ul class="pagination">
<?php for($x=1;$x<=$halaman;$x++){ ?>
    <li><a href="?per_page=<?php echo $_GET['per_page']?>&tgl_dptn=<?php echo $_GET['tgl_dptn'] ?>&page=<?php echo $x ?>"><?php echo $x ?></a></li>	
<?php } ?>
	</ul>
</nav>
	
		<table class="table table-striped"> 
			  <tr>
				<td><div align="center"><strong><span class="glyphicon glyphicon-usd"></span>&nbsp Total Pendapatan Pemeriksaan</strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-usd"></span>&nbsp Total Pendapatan Obat</strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-usd"></span>&nbsp Total Pendapatan Akhir</strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-usd"></span>&nbsp Total Pendapatan Langsung</strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-usd"></span>&nbsp Total Pendapatan Tertunda</strong></div></td>
				<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td>
			  </tr> 
			<?php 
				$jumlah_periksa=mysql_query("SELECT SUM(biaya) FROM dokter, pasien WHERE `tgl_keluar` ='$per_tgl' AND pasien.id_pasien = dokter.id_pasien;");
				$jum_prk=mysql_result($jumlah_periksa, 0);   
				$jumlah_beli_obat=mysql_query("SELECT SUM(harga) FROM apotek, pasien WHERE `tgl_keluar` ='$per_tgl' AND pasien.id_pasien = apotek.id_pasien;;");
				$jum_obt=mysql_result($jumlah_beli_obat, 0);
				$total_akhir = $jum_prk + $jum_obt;
				
				$jumlah_langsung=mysql_query("SELECT SUM(total_semua) FROM total, pasien WHERE `tgl_keluar` ='$per_tgl' AND pasien.id_pasien = total.id_pasien;");
				$jum_lsg=mysql_result($jumlah_langsung, 0);
				$total_tdk_lsg = $total_akhir - $jum_lsg;
			?> 
			   <tr> 
				<td><center><?php echo $jum_prk; ?></center></td> 
				<td><center><?php echo $jum_obt; ?></center></td> 
				<td><center><?php echo $total_akhir?></center></td> 
				<td><center><?php echo $jum_lsg ?></center></td> 
				<td><center><?php echo $total_tdk_lsg; ?></center></td> 
				<td><div align="center">
				<a href="CetakPendapatan.php?tgl=<?php echo $_GET['tgl_dptn'] ; ?>"><span title="Cetak Nota Pendapatan" class="glyphicon glyphicon-print"></span></a></div>
				</td>  
			  </tr> 
	
		</table>	
		

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='../Admin'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>