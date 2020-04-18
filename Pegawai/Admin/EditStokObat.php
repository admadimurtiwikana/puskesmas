<html>
<?php
include ('cek.php');
	mysql_connect('localhost','root','');  
	mysql_select_db('puskesmas');
	$obt = $_GET['id_obat'];
	$sqlTampil="select * from `obat` Where id_obat='$obt'";  
	$qryTampil=mysql_query($sqlTampil);  
	$dataTampil=mysql_fetch_array($qryTampil);  
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
	<div class="modal-dialog modal-md">
		<div class="modal-content">
		
			<!-- Modal #ppAwal Header -->
			<div class="modal-header">
				<h4 class="modal-title"><span class="glyphicon glyphicon-search"></span>&nbsp Stok Obat</h4>	
				<div align="left">Harap selalu cek Persediaan Obat ketika setiap Anda Masuk ke Sistem!</div>
			</div>
			
			<!-- Modal #ppAwal Body -->
			<div class="modal-body" >
			<form id="formEditStokObat" class="form-horizontal" action="cekEditStokObat.php" method="post">
									<div class="form-group">
										<label class="col-md-3 control-label">ID Obat</label>
											<div class="col-md-6 inputGroupContainer">
												<div class="input-group">
												<input type="text" name="id_obt" class="form-control" readonly value="<?php echo $dataTampil['id_obat']; ?>" placeholder="ID Obat..">
												<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
												</div>
											</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Nama Obat</label>
											<div class="col-md-6 inputGroupContainer">
												<div class="input-group">
												<input type="text" name="nm_obt" id="nm_obt" class="form-control" value="<?php echo $dataTampil['nama_obat']; ?>" placeholder="Nama Obat..">
												<span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span></span>
												</div>
											</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Jenis Obat</label>
											<div class="col-md-5 selectContainer">
												<div class="input-group">
													<span class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></span>
														<select class="form-control" name="j_obt">
															<option value="<?php echo $dataTampil['j_obat']; ?>" selected>Obat <?php echo $dataTampil['j_obat']; ?></option>
															<option class="divider" disabled></option>
															<option value="Bebas">Obat Bebas</option>
															<option value="Generik">Obat Generik</option>
														</select>
												</div>
											</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label"></label>
										<label class="col-md-8">NB: Apabila akan menambah Stok Obat, harap isi masing-masing jumlahnya di Kolom 'Stok Obat Awal' dan di Kolom 'Stok Obat Kini' !</label>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Stok Obat Awal</label>
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
												<input type="text" name="s_obt" id="s_obt" class="form-control" placeholder="Stok Obat.." value="<?php echo $dataTampil['stok_obat_awal']; ?>">
												<span class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></span>
												</div>
											</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Stok Obat Kini</label>
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
												<input type="text" name="s_kini_obt" id="s_kini_obt" class="form-control" placeholder="Stok Obat.." value="<?php echo $dataTampil['stok_obat_kini']; ?>">
												<span class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></span>
												</div>
											</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Harga Satuan</label>
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
												<input type="text" name="hrg_obt" id="hrg_obt" class="form-control" placeholder="Harga Satuan.." value="<?php echo $dataTampil['hrg_obat']; ?>">
												<span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
												</div>
											</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" id="captchaOperation"></label>
											<div class="col-md-4 inputGroupContainer">
												<input type="text" class="form-control" name="captcha" />
											</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp Simpan</button>
										</div>
									</div>
								</form>
			</div>
			
			<!-- Modal #ppAwal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='../Admin'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="hero-unit">
		<h3><center><img src="../../Images/logo.jpg" class="img-thumbnail" alt="Logo" width="70" height="90">&nbsp &nbsp &nbsp Aplikasi SIA Puskesmas</center></h3>
	</div>

<div class="row">
	<!-- Menu Pinggir -->
	<div class="col-md-3">
		<div class="kolom"><br>
		<center><img src="../../Images/Gambar.php?id_pegawai=<?php echo $_SESSION['idpgw']?>" class="img-thumbnail" alt="FotoProfil" width="150" height="150"></center>
		<center><h5><b><strong><a href="#ppEditAkun" style="text-decoration:none" data-toggle="modal" data-target="#ppEditAkun"><span class="glyphicon glyphicon-edit"></span>&nbsp Edit Akun </a></strong></b></h5></center>
		<hr>
			<center><h3><span class="glyphicon glyphicon-dashboard"></span>&nbsp Panel Info</h3></center>
				<table class="table">
					<thead>
						<tr><th></th></tr>
						<tr><th><a href="#ppDaftar" style="text-decoration:none" data-toggle="modal" data-target="#ppDaftar"><span class="glyphicon glyphicon-plus"></span> &nbsp Tambah Pegawai</a></th></tr>
						<tr><th><a href="#ppList" style="text-decoration:none" data-toggle="modal" data-target="#ppList"><span class="glyphicon glyphicon-th-list"></span> &nbsp List Pegawai</a></th></tr>
						<tr><th><a href="#ppTambahStok" style="text-decoration:none" data-toggle="modal" data-target="#ppTambahStok"><span class="glyphicon glyphicon-search"></span> &nbsp Stok Obat</a></th></tr>
						<tr><th><a href="../../Keluar.php" style="text-decoration:none"><span class="glyphicon glyphicon-log-out"></span> &nbsp Keluar</a></th></tr>
					</thead>
				</table>
			
			<!-- Menu Khusus Admin -->
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading1">
						<h4 class="panel-title">
							<a style="text-decoration:none" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
							<span class="glyphicon glyphicon-user"></span>&nbsp Apoteker
							</a>
						</h4>
					</div>
						<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
							<div class="panel-body">
								<a href="" style="text-decoration:none"><h4><span class="glyphicon glyphicon-stats"></span>&nbsp Statistik Pasien</h4></a><br>
							</div>
						</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading2">
						<h4 class="panel-title">
							<a style="text-decoration:none" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
							<span class="glyphicon glyphicon-user"></span>&nbsp Assist. Dokter
							</a>
						</h4>
					</div>
						<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
							<div class="panel-body">
								<a href="" style="text-decoration:none"><h4><span class="glyphicon glyphicon-stats"></span>&nbsp Statistik Pasien</h4></a><br>
							</div>
						</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading3">
						<h4 class="panel-title">
							<a style="text-decoration:none" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
							<span class="glyphicon glyphicon-user"></span>&nbsp Manajer
							</a>
						</h4>
					</div>
						<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
							<div class="panel-body">
							Test3
							</div>
						</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading4">
						<h4 class="panel-title">
							<a style="text-decoration:none" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
							<span class="glyphicon glyphicon-user"></span>&nbsp Resepsionis
							</a>
						</h4>
					</div>
						<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
							<div class="panel-body">
								<a href="" style="text-decoration:none"><h4><span class="glyphicon glyphicon-stats"></span>&nbsp Statistik Pasien</h4></a><br>
								<a href="" style="text-decoration:none"><h4><span class="glyphicon glyphicon-plus"></span>&nbsp Pendaftaran Pasien</h4></a><br>
								<a href="" style="text-decoration:none"><h4><span class="glyphicon glyphicon-trash"></span>&nbsp Hapus Pasien</h4></a><br>
							</div>
						</div>
				</div>
			</div>
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
			<center><h4><b>Informasi Akun</b><h4></center>
				<table class="table">
					<thead>
						<tr><th></th></tr>
						<tr><th><a href="../../Pasien" style="text-decoration:none">Info Akun</a></th></tr>
						<tr><th><a href="../../Pasien" style="text-decoration:none">Edit Akun</a></th></tr>
						<tr><th><a href="../../Pasien" style="text-decoration:none">Info Pembayaran</a></th></tr>
					</thead>
				</table>
		</div>
	</div>	
</div>
</div>
</body>
</html>

<!-- Konfig Validasi Form Edit -->
<style>
#formEditStokObat .inputGroupContainer .form-control-feedback,
#formEditStokObat .selectContainer .form-control-feedback {
    top: 0;
    right: -20px;
}
</style>

<!-- KontrolValidasi #formDaftar -->
<script> 
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 10), '+', randomNumber(1, 20), '='].join(' '));
	
    $('#formEditStokObat').formValidation({
        message: 'Nilai ini tidak valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			id_obt: {
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "ID Obat" !'
                    },
                }
            },
			nm_obt: {
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "Nama Obat" !'
                    },
                }
            },
            j_obt: {
                validators: {
                    notEmpty: {
                        message: 'Anda belum memilih "Jenis Obat" !'
                    },
                }
            },
			s_obt: {
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "Stok Obat Awal" !'
                    },
                }
            },
			s_kini_obt: {
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "Stok Obat Kini" !'
                    },
                }
            },
			hrg_obt: {
                validators: {
					notEmpty: {
                        message: 'Anda belum memasukkan "Harga Obat" !'
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