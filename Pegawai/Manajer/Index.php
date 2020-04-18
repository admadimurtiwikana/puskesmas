<html>
<?php
include ('cek.php');
date_default_timezone_set("Asia/Jakarta");
$tgl = date('d-m-Y');
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
.tab-content {
    margin-top: 20px;
}
#formPencarianID .inputGroupContainer .form-control-feedback,
#formPencarianID .selectContainer .form-control-feedback {
    top: 0;
    right: -20px;
}
#formPencarianNama .inputGroupContainer .form-control-feedback,
#formPencarianNama .selectContainer .form-control-feedback {
    top: 0;
    right: -20px;
}
</style>

<!-- Judul Marquee -->
<script>
(function titleMarquee() {
    document.title = document.title.substring(1)+document.title.substring(0,1);
    setTimeout(titleMarquee, 200);
})();
</script>

<!--KontrolFakeLoader-->
<script>
    $(document).ready(function(){
        $(".fakeloader").fakeLoader({
            timeToHide:3000,
            bgColor:"#2ecc71",
            spinner:"spinner2"
            });
        });
</script>

<!-- Tampil Modal #ppAwal -->
<script type="text/javascript">
		$(document).ready(function() {
    setTimeout(function() {
      $('#ppAwal').modal('hide');
    }, 4500);
});
</script>

</head>
<body>
<div class="fakeloader"></div>

<!-- Modal #ppAwal -->
<div class="modal fade" id="ppAwal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
		
			<!-- Modal #ppAwal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">
					<center><h3><img src="../../Images/logo.jpg" alt="Logo" width="70" height="90">&nbsp &nbsp &nbsp Aplikasi SIA Puskesmas</h3></center>
				</h4>
			</div>
			
			<!-- Modal #ppAwal Body -->
			<div class="modal-body" >
				
					<h4>./Selamat Datang</h4>
					<li>Harap Lengkapi Identitas diri Anda dengan Benar guna menunjang Kesehatan Anda.</li>
					<li>Harap Klik Menu 'Keluar' setiap kali Anda selesai menggunakan Sistem ini.</li>
					<li>Sebelum melakukan Pembayaran, Anda Bisa mengecek Info Pembayaran pada Menu Panel.</li>
					<li>Apabila mengalami Kesulitan Penginputan Data bisa kontak Resepsionis untuk Bantuan.</li>
			<br>
				<h5 align="left"><b><strong>TTD</strong></b></h5>
				<h5 align="left"><b><strong>Resepsionis</strong></b></h5>
			</div>
			
			<!-- Modal #ppAwal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal #ppList -->
<div class="modal fade" id="ppList" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
		
			<!-- Modal #ppList Header -->
			<div class="modal-header">
				<h4 class="modal-title"><span class="glyphicon glyphicon-th-list"></span> List Pegawai</h4>	
				<div align="left">List Pegawai Beserta Jabatan dan Foto Identitas</div>
			</div>
			
			<!-- Modal #ppList Body -->
			<div class="modal-body" >
			
				<div class="panel-group" id="accordList" role="tablist" aria-multiselectable="true">
					<!-- Isi Collapse #ppList (Admin) -->
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="head1">
							<h4 class="panel-title">
								<a style="text-decoration:none" data-toggle="collapse" data-parent="#accordList" href="#list1" aria-expanded="true" aria-controls="list1">
								<span class="glyphicon glyphicon-user"></span>&nbsp Admin
								</a>
							</h4>
						</div>
							<!-- Isi Tabel #ppList (Admin) -->
							<div id="list1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head1">
								<div class="panel-body">
									<table class="table table-striped"> 
										<tr>
											<td><div align="center"><strong><span class="glyphicon glyphicon-camera"></span></strong></div></td>
											<td><div align="center"><strong><span class="glyphicon glyphicon-sort"></span></strong></div></td>
											<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></strong></div></td> 
											<td><div align="center"><strong><span class="glyphicon glyphicon-eye-open"></span></strong></div></td> 
											<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td> 
										</tr> 
									<?php 
										mysql_connect('localhost','root',''); 
										mysql_select_db('puskesmas'); 
										$tampil="select * from pegawai WHERE `jabatan`='Admin' ORDER BY id_pegawai ASC "; 
										$qryTampil=mysql_query($tampil); 
										while ($dataTampil=mysql_fetch_array($qryTampil)) { 
									?> 
										<tr>
											<td><center><img src="../../Images/Gambar.php?id_pegawai=<?php echo $dataTampil['id_pegawai']?>" class="img-thumbnail" alt="FotoProfil" width="75" height="75"></center></td>
											<td><center><?php echo $dataTampil['id_pegawai']; ?></center></td> 
											<td><center><?php echo $dataTampil['nm_pegawai']; ?></center></td> 
											<td><center><?php echo $dataTampil['jabatan']; ?></center></td> 
											<td><div align="center">
												<a href="cekHapusPegawai.php?id_pasien=<?php echo $dataTampil['id_pegawai'] ; ?>"><span class="glyphicon glyphicon-trash"></span></a></div>
											</td>  
										</tr> 
									<?php } ?> 
									</table>
								</div>
							</div>
					</div>
				
					<!-- Isi Collapse #ppList (Apoteker) -->
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="head2">
							<h4 class="panel-title">
								<a style="text-decoration:none" class="collapsed" data-toggle="collapse" data-parent="#accordList" href="#list2" aria-expanded="false" aria-controls="list2">
								<span class="glyphicon glyphicon-user"></span>&nbsp Apoteker
								</a>
							</h4>
						</div>
							<!-- Isi Tabel #ppList (Apoteker) -->
							<div id="list2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head2">
								<div class="panel-body">
									<table class="table table-striped"> 
										<tr>
											<td><div align="center"><strong><span class="glyphicon glyphicon-camera"></span></strong></div></td>
											<td><div align="center"><strong><span class="glyphicon glyphicon-sort"></span></strong></div></td>
											<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></strong></div></td> 
											<td><div align="center"><strong><span class="glyphicon glyphicon-eye-open"></span></strong></div></td> 
											<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td> 
										</tr> 
									<?php 
										mysql_connect('localhost','root',''); 
										mysql_select_db('puskesmas'); 
										$tampil="select * from pegawai WHERE `jabatan`='Apoteker' ORDER BY id_pegawai ASC "; 
										$qryTampil=mysql_query($tampil); 
										while ($dataTampil=mysql_fetch_array($qryTampil)) { 
									?> 
										<tr>
											<td><center><img src="../../Images/Gambar.php?id_pegawai=<?php echo $dataTampil['id_pegawai']?>" class="img-thumbnail" alt="FotoProfil" width="75" height="75"></center></td>
											<td><center><?php echo $dataTampil['id_pegawai']; ?></center></td> 
											<td><center><?php echo $dataTampil['nm_pegawai']; ?></center></td> 
											<td><center><?php echo $dataTampil['jabatan']; ?></center></td> 
											<td><div align="center">
												<a href="cekHapusPegawai.php?id_pasien=<?php echo $dataTampil['id_pegawai'] ; ?>"><span class="glyphicon glyphicon-trash"></span></a></div>
											</td>  
										</tr> 
									<?php } ?> 
									</table>
								</div>
							</div>
					</div>
					
					<!-- Isi Collapse #ppList (Assist.Dokter) -->
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="head3">
							<h4 class="panel-title">
								<a style="text-decoration:none" class="collapsed" data-toggle="collapse" data-parent="#accordList" href="#list3" aria-expanded="false" aria-controls="list3">
								<span class="glyphicon glyphicon-user"></span>&nbsp Assist. Dokter
								</a>
							</h4>
						</div>
							<!-- Isi Tabel #ppList (Assist.Dokter) -->
							<div id="list3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head3">
								<div class="panel-body">	
									<table class="table table-striped"  > 
										<tr>
											<td><div align="center"><strong><span class="glyphicon glyphicon-camera"></span></strong></div></td>
											<td><div align="center"><strong><span class="glyphicon glyphicon-sort"></span></strong></div></td>
											<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></strong></div></td> 
											<td><div align="center"><strong><span class="glyphicon glyphicon-eye-open"></span></strong></div></td> 
											<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td> 
										</tr> 
									<?php 
										mysql_connect('localhost','root',''); 
										mysql_select_db('puskesmas'); 
										$tampil="select * from pegawai WHERE `jabatan`='Assist. Dokter' ORDER BY id_pegawai ASC "; 
										$qryTampil=mysql_query($tampil); 
										while ($dataTampil=mysql_fetch_array($qryTampil)) { 
									?> 
										<tr>
											<td><center><img src="../../Images/Gambar.php?id_pegawai=<?php echo $dataTampil['id_pegawai']?>" class="img-thumbnail" alt="FotoProfil" width="75" height="75"></center></td>
											<td><center><?php echo $dataTampil['id_pegawai']; ?></center></td> 
											<td><center><?php echo $dataTampil['nm_pegawai']; ?></center></td> 
											<td><center><?php echo $dataTampil['jabatan']; ?></center></td> 
											<td><div align="center">
												<a href="cekHapusPegawai.php?id_pasien=<?php echo $dataTampil['id_pegawai'] ; ?>"><span class="glyphicon glyphicon-trash"></span></a></div>
											</td>  
										</tr> 
									<?php } ?> 
									</table>
								</div>
							</div>
					</div>
					
					<!-- Isi Collapse #ppList (Manajer) -->
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="head4">
							<h4 class="panel-title">
								<a style="text-decoration:none" class="collapsed" data-toggle="collapse" data-parent="#accordList" href="#list4" aria-expanded="false" aria-controls="list4">
								<span class="glyphicon glyphicon-user"></span>&nbsp Manajer
								</a>
							</h4>
						</div>
							<!-- Isi Tabel #ppList (Manajer) -->
							<div id="list4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head4">
								<div class="panel-body">
									<table class="table table-striped"> 
										<tr>
											<td><div align="center"><strong><span class="glyphicon glyphicon-camera"></span></strong></div></td>
											<td><div align="center"><strong><span class="glyphicon glyphicon-sort"></span></strong></div></td>
											<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></strong></div></td> 
											<td><div align="center"><strong><span class="glyphicon glyphicon-eye-open"></span></strong></div></td> 
											<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td> 
										</tr> 
									<?php 
										mysql_connect('localhost','root',''); 
										mysql_select_db('puskesmas'); 
										$tampil="select * from pegawai WHERE `jabatan`='Manajer' ORDER BY id_pegawai ASC "; 
										$qryTampil=mysql_query($tampil); 
										while ($dataTampil=mysql_fetch_array($qryTampil)) { 
									?> 
										<tr>
											<td><center><img src="../../Images/Gambar.php?id_pegawai=<?php echo $dataTampil['id_pegawai']?>" class="img-thumbnail" alt="FotoProfil" width="75" height="75"></center></td>
											<td><center><?php echo $dataTampil['id_pegawai']; ?></center></td> 
											<td><center><?php echo $dataTampil['nm_pegawai']; ?></center></td> 
											<td><center><?php echo $dataTampil['jabatan']; ?></center></td> 
											<td><div align="center">
												<a href="cekHapusPegawai.php?id_pasien=<?php echo $dataTampil['id_pegawai'] ; ?>"><span class="glyphicon glyphicon-trash"></span></a></div>
											</td>  
										</tr> 
									<?php } ?> 
									</table>
								</div>
							</div>
					</div>
					
					<!-- Isi Collapse #ppList (Resepsionis) -->
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="head5">
							<h4 class="panel-title">
								<a style="text-decoration:none" class="collapsed" data-toggle="collapse" data-parent="#accordList" href="#list5" aria-expanded="false" aria-controls="list5">
								<span class="glyphicon glyphicon-user"></span>&nbsp Resepsionis
								</a>
							</h4>
						</div>
							<!-- Isi Tabel #ppList (Resepsionis) -->
							<div id="list5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head5">
								<div class="panel-body">
									<table class="table table-striped"  > 
										<tr>
											<td><div align="center"><strong><span class="glyphicon glyphicon-camera"></span></strong></div></td>
											<td><div align="center"><strong><span class="glyphicon glyphicon-sort"></span></strong></div></td>
											<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></strong></div></td> 
											<td><div align="center"><strong><span class="glyphicon glyphicon-eye-open"></span></strong></div></td> 
											<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td> 
										</tr> 
									<?php 
										mysql_connect('localhost','root',''); 
										mysql_select_db('puskesmas'); 
										$tampil="select * from pegawai WHERE `jabatan`='Resepsionis' ORDER BY id_pegawai ASC "; 
										$qryTampil=mysql_query($tampil); 
										while ($dataTampil=mysql_fetch_array($qryTampil)) { 
									?> 
										<tr>
											<td><center><img src="../../Images/Gambar.php?id_pegawai=<?php echo $dataTampil['id_pegawai']?>" class="img-thumbnail" alt="FotoProfil" width="75" height="75"></center></td>
											<td><center><?php echo $dataTampil['id_pegawai']; ?></center></td> 
											<td><center><?php echo $dataTampil['nm_pegawai']; ?></center></td> 
											<td><center><?php echo $dataTampil['jabatan']; ?></center></td> 
											<td><div align="center">
												<a href="cekHapusPegawai.php?id_pasien=<?php echo $dataTampil['id_pegawai'] ; ?>"><span class="glyphicon glyphicon-trash"></span></a></div>
											</td>  
										</tr> 
									<?php } ?> 
									</table>
								</div>
							</div>
					</div>
				</div>		
			</div>
			
			<!-- Modal #ppList Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal #ppEditAkun -->
<div class="modal fade" id="ppEditAkun" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
		
			<!-- Modal #ppEditAkun Header -->
			<div class="modal-header">
					<h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit Akun</h4>	
				<div align="left">Pastikan Anda memasukkan Identitas Akun yg sesuai dengan Identitas Diri Anda!</div>
			</div>
			
			<!-- Modal #ppEditAkun Body -->
			<div class="modal-body" >
			
					<ul class="nav nav-pills">
						<li class="active"><a href="#tabEdit-1" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>&nbsp Identitas Akun</a></li>
						<li><a href="#tabEdit-2" data-toggle="tab"><span class="glyphicon glyphicon-picture"></span>&nbsp Identitas Foto</a></li>
					</ul>
					
					<?php
					mysql_connect('localhost','root',''); 
					mysql_select_db('puskesmas');
					$sqlTampil="select * from pegawai Where id_pegawai='$_SESSION[idpgw]'";  
					$qryTampil=mysql_query($sqlTampil);  
					$dataTampil=mysql_fetch_array($qryTampil);  
					?>
					
					<!-- Tab Boostrap Wizard #formEditAkun -->
					<div class="tab-content">
					
						<!-- Tab Pertama #Wizard #formEditAkun -->
						<div class="tab-pane active" id="tabEdit-1">
					<form id="formEditAkun" class="form-horizontal" action="cekEditAkun.php" method="post">
							
							<div class="form-group">
							<label class="col-md-3 control-label">ID Pegawai</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="id_pgw" readonly class="form-control" value="<?php echo $dataTampil['id_pegawai'] ?>" placeholder="ID Pegawai..">
									<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
									</div>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Nama Pegawai</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="nm_pgw" id="nm_pgw" class="form-control" placeholder="Nama Pegawai.." value="<?php echo $dataTampil['nm_pegawai']?>">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									</div>
								</div>
						</div>
							<div class="form-group">
							<label class="col-md-3 control-label">Kata Sandi</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="pass_pgw" id="pass_pgw" class="form-control" placeholder="Kata Sandi.." value="<?php echo $dataTampil['pass_pegawai']?>">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									</div>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" id="captchaOperationEditAkun"></label>
								<div class="col-md-3 inputGroupContainer">
									<input type="text" class="form-control" name="captchaEditAkun" />
								</div>
						</div>
							
								<ul class="pager wizard">
									<li class="next"><button type="submit" class="btn btn-primary" type="submit">Simpan</button></li>
								</ul>
					</form>
						</div>
		
						<!-- Tab Kedua #Wizard #formEditAkun2 -->
						<div class="tab-pane" id="tabEdit-2">
					<form id="formEditAkun2" class="form-horizontal" action="cekEditAkun2.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
							<label class="col-md-3 control-label">Foto Anda</label>
								<div class="col-md-8 inputGroupContainer">
								<img src="../../Images/Gambar.php?id_pegawai=<?php echo $_SESSION['idpgw']?>" class="img-thumbnail" alt="FotoProfil" width="100" height="100">
								</div>
						</div>
					
						
						<div class="form-group">
							<label class="col-md-3 control-label">Ganti Foto</label>
								<div class="col-md-8 inputGroupContainer">
								<div class="input-group">
									<input type="file" class="form-control" name="anu2" />
								<span class="input-group-addon"><span class="glyphicon glyphicon-camera"></span></span>
								</div>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" id="captchaOperationEditAkun2"></label>
								<div class="col-md-3 inputGroupContainer">
									<input type="text" class="form-control" name="captchaEditAkun2" />
								</div>
						</div>
						<ul class="pager wizard">
									<li class="next"><button type="submit" class="btn btn-primary" type="submit">Simpan</button></li>
								</ul>
					</form>
						</div>

					</div>
				
				
			</div>
			
			<!-- Modal #ppEditAkun Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal #ppTambahStok -->
<div class="modal fade" id="ppTambahStok" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		
			<!-- Modal #ppAwal Header -->
			<div class="modal-header">
				<h4 class="modal-title"><span class="glyphicon glyphicon-search"></span>&nbsp Stok Obat</h4>	
				<div align="left">Harap selalu cek Persediaan Obat ketika setiap Anda Masuk ke Sistem!</div>
			</div>
			
			<!-- Modal #ppAwal Body -->
			<div class="modal-body" >

<!-- Menu TambahStokObat -->
				<div role="tabpanel">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#TabObatGenerik" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span>&nbsp Obat Generik</a></li>
						<li role="presentation"><a href="#TabObatBebas" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span>&nbsp Obat Bebas</a></li>
					</ul>

					<!-- NoUrut ID Obat #StokObat -->
					<?php
					mysql_connect("localhost","root","");
					mysql_select_db("puskesmas");
					$q_obt = mysql_query("SELECT * FROM obat ORDER BY id_obat DESC LIMIT 1");
								$jumlah_obt = mysql_num_rows($q_obt);
								$data_obt = mysql_fetch_array($q_obt);
					if($jumlah_obt <= 0)
						{ $NoUrut_obt = 1;}		
					else{ $NoUrut_obt = $data_obt['id_obat'] + 1;}
					?>
			
					<!-- Tab panes -->
						<div class="tab-content">
							<!-- Tab #StokObat (Obat Generik) -->
							<div role="tabpanel" class="tab-pane fade in active" id="TabObatGenerik">
								<table class="table table-striped"> 
									<thead>
										<tr>
											<td><strong><div align="center"><span class="glyphicon glyphicon-globe"></span>&nbsp ID Obat</div></strong></td> 
											<td><strong><div align="center"><span class="glyphicon glyphicon-th-list"></span>&nbsp Nama Obat</span></div></strong></td> 
											<td><strong><div align="center"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp Stok Obat Awal</span></div></strong></td>	
											<td><strong><div align="center"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp Stok Obat Kini</span></div></strong></td>	
											<td><strong><div align="center"><span class="glyphicon glyphicon-usd"></span>&nbsp Harga Satuan</div></strong></td>
											<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
										</tr>
									</thead>
								<?php 
									mysql_connect('localhost','root',''); 
									mysql_select_db('puskesmas'); 
									$tampil="SELECT * FROM `obat` WHERE `j_obat`='Generik';"; 
									$qryTampil=mysql_query($tampil); 
									while ($dataTampil=mysql_fetch_array($qryTampil)) { 
								?> 
										<tr> 
											<td><div align="center"><strong><?php echo $dataTampil['id_obat'] ; ?></strong></div></td> 
											<td><div align="center"><strong><?php echo $dataTampil['nama_obat'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['stok_obat_awal'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['stok_obat_kini'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['hrg_obat'] ; ?></strong></div></td>
											<td><div align="center"><strong>
											<a href="EditStokObat.php?id_obat=<?php echo $dataTampil['id_obat'] ; ?>">
											<span data-toggle="intip" title="Tambah Stok Obat" class="glyphicon glyphicon-edit"></span></a>
											&nbsp &nbsp
											<a href="cekHapusObat.php?id_obat=<?php echo $dataTampil['id_obat'] ; ?>">
											<span data-toggle="intip" title="Hapus Obat" class="glyphicon glyphicon-trash"></span></a>
											</strong></div></td>
										</tr> 
								<?php } ?> 
								</table>
							</div>
							
							<!-- Tab #StokObat (Obat Bebas) -->
							<div role="tabpanel" class="tab-pane fade" id="TabObatBebas">
								<table class="table table-striped"> 
									<thead>
										<tr>
											<td><strong><div align="center"><span class="glyphicon glyphicon-globe"></span>&nbsp ID Obat</div></strong></td> 
											<td><strong><div align="center"><span class="glyphicon glyphicon-th-list"></span>&nbsp Nama Obat</span></div></strong></td> 
											<td><strong><div align="center"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp Stok Obat Awal</span></div></strong></td>
											<td><strong><div align="center"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp Stok Obat Kini</span></div></strong></td>											
											<td><strong><div align="center"><span class="glyphicon glyphicon-usd"></span>&nbsp Harga Satuan</div></strong></td>
											<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
										</tr>
									</thead>
								<?php 
									mysql_connect('localhost','root',''); 
									mysql_select_db('puskesmas'); 
									$tampil="SELECT * FROM `obat` WHERE `j_obat`='Bebas';"; 
									$qryTampil=mysql_query($tampil); 
									while ($dataTampil=mysql_fetch_array($qryTampil)) { 
								?> 
										<tr> 
											<td><div align="center"><strong><?php echo $dataTampil['id_obat'] ; ?></strong></div></td> 
											<td><div align="center"><strong><?php echo $dataTampil['nama_obat'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['stok_obat_awal'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['stok_obat_kini'] ; ?></strong></div></td>
											<td><div align="center"><strong><?php echo $dataTampil['hrg_obat'] ; ?></strong></div></td>
											<td><div align="center"><strong>
											<a href="EditStokObat.php?id_obat=<?php echo $dataTampil['id_obat'] ; ?>">
											<span data-toggle="intip" title="Tambah Stok Obat" class="glyphicon glyphicon-edit"></span></a>
											&nbsp &nbsp
											<a href="cekHapusObat.php?id_obat=<?php echo $dataTampil['id_obat'] ; ?>">
											<span data-toggle="intip" title="Hapus Obat" class="glyphicon glyphicon-trash"></span></a>
											</strong></div></td>
										</tr> 
								<?php } ?> 
								</table>
							</div>				
						</div>
				</div>

			
			</div>
			
			<!-- Modal #ppAwal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal #ppPencarian -->
<div class="modal fade" id="ppPencarian" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-xs">
		<div class="modal-content">
		
			<!-- Modal #ppPencarian Header -->
			<div class="modal-header">
				<h4 class="modal-title"><span class="glyphicon glyphicon-search"></span>&nbsp Pencarian</h4>	
				<div align="left">Pencarian Multi termasuk dalam Pencarian ID Obat / Nama Obat, ID Karyawan / Nama Karyawan, dan ID Pasien / Nama Pasien!</div>
			</div>
			
			<!-- Modal #ppPencarian Body -->
			<div class="modal-body" >

								<form id="formPencarianID" class="form-horizontal" action="PencarianID.php" method="post">
									<div class="form-group">
										<label class="col-md-3 control-label">Kata Kunci</label>
											<div class="col-md-6 inputGroupContainer">
												<div class="input-group">
												<input type="text" name="id_cari" class="form-control" placeholder="ID Obat / Pasien / Pegawai..">
												<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
												</div>
											</div>
									</div>		
									<div class="form-group">
										<label class="col-md-3 control-label" id="captchaOperationPencarianID"></label>
											<div class="col-md-3 inputGroupContainer">
												<input type="text" class="form-control" name="captchaPencarianID" />
											</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp Cari ID</button>
										</div>
									</div>
								</form>
								<hr>
								<form id="formPencarianNama" class="form-horizontal" action="PencarianNama.php" method="post">
									<div class="form-group">
										<label class="col-md-3 control-label">Kata Kunci</label>
											<div class="col-md-6 inputGroupContainer">
												<div class="input-group">
												<input type="text" name="nm_cari" class="form-control" placeholder="Nama Obat / Pasien / Pegawai..">
												<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
												</div>
											</div>
									</div>		
									<div class="form-group">
										<label class="col-md-3 control-label" id="captchaOperationPencarianNama"></label>
											<div class="col-md-3 inputGroupContainer">
												<input type="text" class="form-control" name="captchaPencarianNama" />
											</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp Cari Nama</button>
										</div>
									</div>
								</form>
			
			</div>
			
			<!-- Modal #ppPencarian Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal #ppTambahPeriksa -->
<div class="modal fade" id="ppTambahPeriksa" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		
			<!-- Modal #ppTambahPeriksa Header -->
			<div class="modal-header">
				<h4 class="modal-title"><span class="glyphicon glyphicon-usd"></span>&nbsp Tarif Periksa</h4>	
				<div align="left">Harap menghubungi Manajer terlebih dahulu apabila akan mengubah Tarif Periksa !</div>
			</div>
			
			<!-- Modal #ppTambahPeriksa Body -->
			<div class="modal-body" >

<!-- Menu TambahPeriksa -->
				<div role="tabpanel">
											
					<ul class="nav nav-tabs" role="tablist" id="TarifPeriksa">
						<li role="presentation" class="active"><a href="#TabTarifPeriksa" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span>&nbsp Tarif Periksa</a></li>
					</ul>

			
					<!-- Tab panes -->
						<div class="tab-content">
							<!-- Tab #ppTambahPeriksa (List Periksa) -->
							<div role="tabpanel" class="tab-pane fade in active" id="TabTarifPeriksa">
								<table class="table table-striped"> 
									<thead>
										<tr>
											<td><strong><div align="center"><span class="glyphicon glyphicon-th-list"></span>&nbsp Nama Periksa</span></div></strong></td> 
											<td><strong><div align="center"><span class="glyphicon glyphicon-usd"></span>&nbsp Harga Satuan</div></strong></td>
										</tr>
									</thead>
								<?php 
									mysql_connect('localhost','root',''); 
									mysql_select_db('puskesmas'); 
									$tampil="SELECT * FROM `tarif` ORDER BY `periksa` ASC"; 
									$qryTampil=mysql_query($tampil); 
									while ($dataTampil=mysql_fetch_array($qryTampil)) { 
								?> 
										<tr> 
											<td><div align="center"><strong><?php echo $dataTampil['periksa'] ; ?></strong></div></td> 
											<td><div align="center"><strong><?php echo $dataTampil['biaya'] ; ?></strong></div></td>
										</tr> 
								<?php } ?> 
								</table>
							</div>
												
						</div>
				</div>

			
			</div>
			
			<!-- Modal #ppTambahPeriksa Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="hero-unit">
			<h3><center><img src="../../Images/logo.jpg" alt="Logo" width="70" height="90">&nbsp &nbsp &nbsp Aplikasi SIA Puskesmas</center></h3>
	</div>
	<div class="row">
	<div class="col-md-3">
	<div class="kolom"><br>
	<center><img src="../../Images/Gambar.php?id_pegawai=<?php echo $_SESSION['idpgw']?>" class="img-thumbnail" alt="FotoProfil" width="150" height="150"></center>
	<center><h5><b><strong><a href="#ppEditAkun" style="text-decoration:none" data-toggle="modal" data-target="#ppEditAkun"><span class="glyphicon glyphicon-edit"></span>&nbsp Edit Akun </a></strong></b></h5></center>
	<hr>
	
	<center><h3><span class="glyphicon glyphicon-dashboard"></span>&nbsp Panel Info</h3></center>
	<table class="table">
    <thead>
		<tr><th></th></tr>
		<tr><th><a href="../Manajer" style="text-decoration:none"><span class="glyphicon glyphicon-stats"></span> &nbsp Statistik Pasien</a></th></tr>
        <tr><th><a href="#ppList" style="text-decoration:none" data-toggle="modal" data-target="#ppList"><span class="glyphicon glyphicon-th-list"></span> &nbsp List Pegawai</a></th></tr>
		<tr><th><a href="Riwayat.php?per_page=5" style="text-decoration:none"><span class="glyphicon glyphicon-flag"></span> &nbsp Riwayat Pasien</a></th></tr>
		<tr><th><a href="#ppTambahStok" style="text-decoration:none" data-toggle="modal" data-target="#ppTambahStok"><span class="glyphicon glyphicon-briefcase"></span> &nbsp Stok Obat</a></th>
		<tr><th><a href="#ppTambahPeriksa" style="text-decoration:none" data-toggle="modal" data-target="#ppTambahPeriksa"><span class="glyphicon glyphicon-usd"></span> &nbsp Tarif Periksa</a></th></tr>
		<tr><th><a href="Pendapatan.php?per_page=5&tgl_dptn=<?php echo $tgl;?>" style="text-decoration:none"><span class="glyphicon glyphicon-piggy-bank"></span> &nbsp Pendapatan</a></th></tr></tr>
		<tr><th><a href="#ppPencarian" style="text-decoration:none" data-toggle="modal" data-target="#ppPencarian"><span class="glyphicon glyphicon-search"></span> &nbsp Pencarian</a></th></tr>
		<tr><th><a href="../../Keluar.php" style="text-decoration:none"><span class="glyphicon glyphicon-log-out"></span> &nbsp Keluar</a></th></tr>
	</thead>
	</table>
	</div>
	</div>
	<div class="col-md-9">
	<div class="headisi">
	<center><h4><marquee behavior="scroll" direction="left" scrollamount="3" scrolldelay="20" width="80%">
<span>./Selamat Datang di Pelayanan SIA Puskesmas Kami, Untuk Informasi lebih lanjut bisa Kontak Resepsionis (Rawat Jalan: 08.00 - 15.00 Senin s/d Sabtu. | 08.00-12.00 Minggu. | Hari Besar Tutup.) </span>
</marquee></h4></center>
</div>

<?php
	mysql_connect('localhost','root',''); 
	mysql_select_db('puskesmas');
	$sqlTampil="select * from pegawai Where id_pegawai='$_SESSION[idpgw]'";  
	$qryTampil=mysql_query($sqlTampil);  
	$dataTampil=mysql_fetch_array($qryTampil);  
?>

	<div class="isi">
	<h5><b><?php echo "<p>Selamat Datang, ".$_SESSION['level']." (".$dataTampil['nm_pegawai'].")</p>";?></b></h5>
	<h5><b><?php date_default_timezone_set("Asia/Jakarta"); echo "Tanggal : " . date('d-m-Y')."</br>Pukul : " . date('H:i:s');?></b></h5>
	<center><h4><b>Statistik Pasien</b><h4></center>
	
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<!-- HideMenu Pantauan Pasien -->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none">
				<span class="glyphicon glyphicon-eye-open"></span> Pantauan Pasien (Alur Proses)</a> 
			</h4>
			</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
				
				 		<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `jam_masuk`, `tgl_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Lunas`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `5_Lunas`='Proses'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong>
						<a href="InfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"  style="text-decoration:none"><span data-toggle="intip" title="Info Pasien" class="glyphicon glyphicon-info-sign"></span></a>
						<a href="cekHapusPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Hapus Pasien" class="glyphicon glyphicon-trash"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
				
				
				</div>
				</div>
	</div>
	</div>
	
	</div>
	</div>	
	</div>
</div>
</body>
</html>

<!-- KontrolValidasi #formEditAkun -->
<script> 
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperationEditAkun').html([randomNumber(1, 10), '+', randomNumber(1, 20), '='].join(' '));
	
    $('#formEditAkun').formValidation({
        message: 'Nilai ini tidak valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			captchaEditAkun: {
                validators: {
                    callback: {
                        message: 'Jawaban Salah',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperationEditAkun').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
        }
    });
});
</script>

<!-- KontrolValidasi #formEditAkun2 -->
<script> 
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperationEditAkun2').html([randomNumber(1, 10), '+', randomNumber(1, 20), '='].join(' '));
	
    $('#formEditAkun2').formValidation({
        message: 'Nilai ini tidak valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			captchaEditAkun2: {
                validators: {
                    callback: {
                        message: 'Jawaban Salah',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperationEditAkun2').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
        }
    });
});
</script>

<!-- KontrolValidasi #ppPencarian #formPencarianID -->
<script> 
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperationPencarianID').html([randomNumber(1, 10), '+', randomNumber(1, 20), '='].join(' '));
	
    $('#formPencarianID').formValidation({
        message: 'Nilai ini tidak valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			captchaPencarianID: {
                validators: {
                    callback: {
                        message: 'Jawaban Salah',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperationPencarianID').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
        }
    });
});
</script>


<!-- KontrolValidasi #formTambahPeriksaBaru -->
<script> 
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperationTambahPeriksaBaru').html([randomNumber(1, 10), '+', randomNumber(1, 20), '='].join(' '));
	
    $('#formTambahPeriksaBaru').formValidation({
        message: 'Nilai ini tidak valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			captchaTambahPeriksaBaru: {
                validators: {
                    callback: {
                        message: 'Jawaban Salah',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperationTambahPeriksaBaru').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
        }
    });
});
</script>

<!-- KontrolValidasi #ppPencarian #formPencarianNama -->
<script> 
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperationPencarianNama').html([randomNumber(1, 10), '+', randomNumber(1, 20), '='].join(' '));
	
    $('#formPencarianNama').formValidation({
        message: 'Nilai ini tidak valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			captchaPencarianNama: {
                validators: {
                    callback: {
                        message: 'Jawaban Salah',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperationPencarianNama').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
        }
    });
});
</script>