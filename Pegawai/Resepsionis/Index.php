<html>
<?php
include ('cek.php');
	mysql_connect('localhost','root',''); 
	mysql_select_db('puskesmas');
	$sqlTampil="select * from pasien";  
	$qryTampil=mysql_query($sqlTampil);  
	$dataTampil=mysql_fetch_array($qryTampil);  
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

<!-- Keterangan Kursor -->
<script>
$(document).ready(function(){
    $('[data-toggle="intip"]').tooltip();   
});
</script>

<!-- Konfig Validasi -->
<style type="text/css"> 
#formDaftar .inputGroupContainer .form-control-feedback,
#formDaftar .selectContainer .form-control-feedback {
    top: 0;
    right: -20px; }
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

</head>
<body>
<div class="fakeloader"></div>

<!-- Modal #ppDaftar -->
<div class="modal fade" id="ppDaftar" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
		
			<!-- Modal #ppDaftar Header -->
			<div class="modal-header">
					<h4 class="modal-title"><span class="glyphicon glyphicon-plus"></span> Pendaftaran Pasien</h4>	
				<div align="left">Harap selalu menggunakan Nama Lengkap Pasien ketika melakukan Pendaftaran !</div>
			</div>
			
			<!-- NoUrut ID Pasien #formDaftar -->
			<?php
			mysql_connect("localhost","root","");
			mysql_select_db("puskesmas");
			$q = mysql_query("SELECT * FROM pasien ORDER BY id_pasien DESC LIMIT 1");
						$jumlah = mysql_num_rows($q);
						$data = mysql_fetch_array($q);

			if($jumlah <= 0)
				{ $NoUrut = 101;}		
			else{ $NoUrut = $data['id_pasien'] + 1;}
			?>
			
			<!-- Password Acak -->
			<?php
			function randomPassword() {
				$alphabet = "0123456789";
				$pass = array(); //remember to declare $pass as an array
				$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
				for ($i = 0; $i < 3; $i++) {
					$n = rand(0, $alphaLength);
					$pass[] = $alphabet[$n];
				}
				return implode($pass); //turn the array into a string
			}
			?>

			<!-- Modal #ppDaftar Body -->
			<div class="modal-body" >
				
				<form id="formDaftar" class="form-horizontal" action="CekDaftarPasien.php" method="post">
					
						<div class="form-group">
							<label class="col-md-3 control-label">Nama Pasien</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="nm_psn" class="form-control" placeholder="Nama Pasien..">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									</div>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">ID Pasien</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="id_psn" id="id_psn" class="form-control" value="<?php echo $NoUrut ?>" placeholder="ID Pasien..">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									</div>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Kata Sandi</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="pass_psn" id="pass_psn" class="form-control" value="<?php echo randomPassword(); ?>" placeholder="Kata Sandi..">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									</div>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" id="captchaOperation"></label>
								<div class="col-md-3 inputGroupContainer">
									<input type="text" class="form-control" name="captcha" />
								</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-3 col-md-9">
								<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span>&nbsp Daftar</button>
							</div>
						</div>
				</form>
					
			</div>
			
			<!-- Modal #ppDaftar Footer -->
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
		<tr><th><a href="../Resepsionis" style="text-decoration:none"><span class="glyphicon glyphicon-stats"></span> &nbsp Statistik Pasien</a></th></tr>
		<tr><th><a href="" style="text-decoration:none" data-toggle="modal" data-target="#ppDaftar"><span class="glyphicon glyphicon-plus"></span> &nbsp Pendaftaran Pasien</a></th></tr>
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
<!-- HideMenu Pembayaran -->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none">
				<span class="glyphicon glyphicon-eye-open"></span> Pantauan Pasien (Pembayaran)</a> 
			</h4>
			</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
				
				 		<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Calendar"></span>&nbsp Masuk</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</div></strong></td> 
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span>&nbsp Bayar</div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `jam_masuk`, `tgl_masuk`,`1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien And `3_Apotek`='Tuntas' And `4_Bayar`='Proses'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong>
						<a href="Transaksi.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"  style="text-decoration:none"><span data-toggle="intip" title="Edit Transaksi" class="glyphicon glyphicon-plus"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
				
				
				</div>
				</div>
	</div>
<!-- HideMenu Cetak -->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingTwo">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="text-decoration:none">
				<span class="glyphicon glyphicon-eye-open"></span> Pantauan Pasien (Cetak Nota)</a> 
			</h4>
			</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				<div class="panel-body">
				
				 		<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Calendar"></span>&nbsp Masuk</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</div></strong></td> 
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Print Nota" class="glyphicon glyphicon-print"></span>&nbsp Cetak Nota</div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `jam_masuk`, `tgl_masuk`,`5_Lunas`,`4_Bayar`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien And `4_Bayar`='Tuntas' And `5_Lunas`='Proses'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['5_Lunas'] ; ?></label></strong></div></td>
						<td><div align="center"><strong>
						<a href="Cetak.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"  style="text-decoration:none"><span data-toggle="intip" title="Cetak Nota" class="glyphicon glyphicon-print"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
				
				
				</div>
				</div>
	</div>
<!-- HideMenu Riwayat Daftar -->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingThree">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="text-decoration:none">
				<span class="glyphicon glyphicon-flag"></span> Riwayat Pendaftaran Pasien</a> 
			</h4>
			</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				<div class="panel-body">
				
				 		<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Calendar"></span>&nbsp Masuk</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-pencil"></span>&nbsp Nama</div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, pasien.nm_pasien, `jam_masuk`, `tgl_masuk`, `1_Edit`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien And `1_Edit`='Proses'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['nm_pasien'] ; ?></strong></div></td>
						<td><div align="center"><strong>
						<a href="InfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"  style="text-decoration:none"><span data-toggle="intip" title="Edit Pasien" class="glyphicon glyphicon-edit"></span></a>
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

<!-- ReadOnly r_rawat / dokter #formEdit -->
<script>
	document.getElementById('id_psn').readOnly = true;
	document.getElementById('pass_psn').readOnly = true;
</script>

<!-- Konfig Validasi #FormEdit -->
<style type="text/css">
#formEditAkun .inputGroupContainer .form-control-feedback,
#formEditAkun .selectContainer .form-control-feedback {
    top: 0;
    right: -20px;
}
#formEditAkun2 .inputGroupContainer .form-control-feedback,
#formEditAkun2 .selectContainer .form-control-feedback {
    top: 0;
    right: -20px;
}
.tab-content {
    margin-top: 20px;
}
</style>

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

<!-- KontrolValidasi #formDaftar -->
<script> 
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 10), '+', randomNumber(1, 20), '='].join(' '));
	
    $('#formDaftar').formValidation({
        message: 'Nilai ini tidak valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			nm_psn: {
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "Nama Pasien" !'
                    },
                }
            },
			id_psn: {
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "ID Pasien" !'
                    },
                }
            },
            pass_psn: {
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "Kata Sandi" !'
                    },
                }
            },
			captcha: {
                validators: {
                    callback: {
                        message: 'Jawaban Salah',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
        }
    });
});
</script>
</html>