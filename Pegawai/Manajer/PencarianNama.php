<html>
<?php
include ('cek.php');
?>
<head>
  <title>&nbsp ./Puskesmas &nbsp- &nbspPasien &nbsp|</title>
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
		
			<!-- Modal #ppAwal Header -->
			<div class="modal-header">
				<h4 class="modal-title"><span class="glyphicon glyphicon-search"></span>&nbsp Stok Obat</h4>	
				<div align="left">Harap selalu cek Persediaan Obat ketika setiap Anda Masuk ke Sistem!</div>
			</div>
		<?php
		$Nama = $_POST['nm_cari'];
		?>
			<!-- Modal #ppAwal Body -->
			<div class="modal-body" >
				<h4>Hasil Pencarian dengan Kata Kunci : <?php echo $Nama;?></h4>
				<!-- Menu TambahStokObat -->
				<div role="tabpanel">
											
					<ul class="nav nav-tabs" role="tablist" id="StokObat">
						<li role="presentation" class="active"><a href="#TabCariObat" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span>&nbsp Obat</a></li>
						<li role="presentation"><a href="#TabCariPasien" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span>&nbsp Pasien</a></li>
						<li role="presentation"><a href="#TabCariPegawai" aria-controls="home" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span>&nbsp Pegawai</a></li>
					</ul>

					<!-- Tab panes -->
						<div class="tab-content">
							<!-- Tab #ppPencarianNama #Obat -->
							<div role="tabpanel" class="tab-pane fade in active" id="TabCariObat">
								<table class="table table-striped"> 
									<thead>
										<tr>
											<td><strong><div align="center"><span class="glyphicon glyphicon-globe"></span>&nbsp ID Obat</div></strong></td> 
											<td><strong><div align="center"><span class="glyphicon glyphicon-th-list"></span>&nbsp Nama Obat</span></div></strong></td> 
											<td><strong><div align="center"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp Stok Obat Awal</span></div></strong></td>	
											<td><strong><div align="center"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp Stok Obat Kini</span></div></strong></td>	
											<td><strong><div align="center"><span class="glyphicon glyphicon-usd"></span>&nbsp Harga Satuan</div></strong></td>
										</tr>
									</thead>
								<?php 
									mysql_connect('localhost','root',''); 
									mysql_select_db('puskesmas'); 
									$tampil="SELECT * FROM `obat` WHERE nama_obat LIKE '%$Nama%' ORDER BY `id_obat` ASC"; 
									$qryTampil=mysql_query($tampil); 
									while ($dataTampil=mysql_fetch_array($qryTampil)) { 
								?> 
										<tr> 
											<td><div align="center"><strong><?php echo $dataTampil['id_obat'] ; ?></strong></div></td> 
											<td><div align="center"><strong><?php echo $dataTampil['nama_obat'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['stok_obat_awal'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['stok_obat_kini'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['hrg_obat'] ; ?></strong></div></td>
											
										</tr> 
								<?php } ?> 
								</table>
							</div>
							
							<!-- Tab #ppPencarianNama #Pasien -->
							<div role="tabpanel" class="tab-pane fade in" id="TabCariPasien">
								<table class="table table-striped"> 
									<thead>
										<tr>
											<td><strong><div align="center"><span class="glyphicon glyphicon-globe"></span>&nbsp ID Pasien</div></strong></td> 
											<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp Nama Pasien</span></div></strong></td> 
											<td><strong><div align="center"><span class="glyphicon glyphicon-flag"></span>&nbsp Gender</span></div></strong></td>	
											<td><strong><div align="center"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp Keluhan</span></div></strong></td>	
											<td><strong><div align="center"><span class="glyphicon glyphicon-usd"></span>&nbsp Ruang Rawat</div></strong></td>
											<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Tgl Masuk</div></strong></td>
											<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Tgl Keluar</div></strong></td>
											<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
										</tr>
									</thead>
								<?php 
									mysql_connect('localhost','root',''); 
									mysql_select_db('puskesmas'); 
									$tampil="SELECT * FROM `pasien` WHERE nm_pasien LIKE '%$Nama%' ORDER BY `id_pasien` ASC"; 
									$qryTampil=mysql_query($tampil); 
									while ($dataTampil=mysql_fetch_array($qryTampil)) { 
								?> 
										<tr> 
											<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
											<td><div align="center"><strong><?php echo $dataTampil['nm_pasien'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['gender'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['keluhan'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['r_rawat'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['tgl_keluar'] ; ?></strong></div></td>
											
											<td><div align="center"><strong>
											<a href="InfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>">
											<span data-toggle="intip" title="Hapus Obat" class="glyphicon glyphicon-info-sign"></span></a>
											</strong></div></td>
										</tr> 
								<?php } ?> 
								</table>
							</div>		
							
							<!-- Tab #ppPencarianNama #Pegawai -->
							<div role="tabpanel" class="tab-pane fade in" id="TabCariPegawai">
								<table class="table table-striped"> 
									<thead>
										<tr>
											<td><strong><div align="center"><span class="glyphicon glyphicon-camera"></span>&nbsp Foto Pegawai</div></strong></td> 
											<td><strong><div align="center"><span class="glyphicon glyphicon-globe"></span>&nbsp ID Pegawai</span></div></strong></td> 
											<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp Nama Pegawai</span></div></strong></td>	
											<td><strong><div align="center"><span class="glyphicon glyphicon-eye-open"></span>&nbsp Jabatan</span></div></strong></td>	
										</tr>
									</thead>
								<?php 
									mysql_connect('localhost','root',''); 
									mysql_select_db('puskesmas'); 
									$tampil="SELECT * FROM `pegawai` WHERE nm_pegawai LIKE '%$Nama%' ORDER BY `id_pegawai` ASC"; 
									$qryTampil=mysql_query($tampil); 
									while ($dataTampil=mysql_fetch_array($qryTampil)) { 
								?> 
										<tr> 
											<td><center><img src="../../Images/Gambar.php?id_pegawai=<?php echo $dataTampil['id_pegawai']?>" class="img-thumbnail" alt="FotoProfil" width="75" height="75"></center></td>
											<td><div align="center"><strong><?php echo $dataTampil['id_pegawai'] ; ?></strong></div></td> 
											<td><div align="center"><strong><?php echo $dataTampil['nm_pegawai'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['jabatan'] ; ?></strong></div></td>
										</tr> 
								<?php } ?> 
								</table>
							</div>							
						</div>
				</div>
			
			</div>
			<!-- Modal #ppAwal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='../Manajer'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>