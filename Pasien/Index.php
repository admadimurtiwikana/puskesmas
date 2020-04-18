<html>
<?php
	include ('cek.php');
	include "../login/koneksi.php";
	$sqlTampil="select * from data_pasien Where id='$_SESSION[idpsn]'";  
	$qryTampil=mysqli_query($conn , $sqlTampil);  
	$dataTampil=mysqli_fetch_array($qryTampil);  
?>
<head>
  <title>&nbsp ./Puskesmas &nbsp- &nbspPasien &nbsp|</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="icon" type="image/ico" href="../favicon.ico">
  <link rel="stylesheet" href="../Scripts/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Scripts/Validator/css/formValidation.css"/>
  <link rel="stylesheet" href="../Scripts/FakeLoader/fakeLoader.css">
  <script type="text/javascript" src="../Scripts/jquery.js"></script>
  <script type="text/javascript" src="../Scripts/Bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../Scripts/Tinymce/tinymce.min.js"></script>
  <script type="text/javascript" src="../Scripts/Validator/js/formValidation.js"></script>
  <script type="text/javascript" src="../Scripts/Validator/js/framework/bootstrap.js"></script>
  <script type="text/javascript" src="../Scripts/jquery.bootstrap.wizard.min.js"></script>
  <script type="text/javascript" src="../Scripts/FakeLoader/fakeLoader.min.js"></script>

<!-- Konfig FormInsert dan FormEdit -->
<style type="text/css">
#FormEdit .tab-content {
    margin-top: 20px;
}
</style>
<script>
$(#FormEdit).formValidation(options);
$(#FormEdit).data('formValidation').resetForm();
</script>

<!-- Konfig Halaman -->
<style> 
body {
	background:url('../Images/bg.jpg') no-repeat fixed top center;
}
	table { color:#000000}
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
background:url('../Images/bg-transparent.png') repeat top center;
margin:25px auto;
padding:5px;
width:95%;
}
.kolom {
background:url('../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:78%;
}
.headisi {
background:url('../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:93%;
}
.isi {
background:url('../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:93%;
}
</style>

<!-- Judul Marquee -->
<script>
(function titleMarquee() {
    document.title = document.title.substring(1)+document.title.substring(0,1);
    setTimeout(titleMarquee, 200);
})();
</script>

<!-- Konfig Validasi #FormEdit -->
<style type="text/css">
#FormEdit .inputGroupContainer .form-control-feedback,
#FormEdit .selectContainer .form-control-feedback {
    top: 0;
    right: -20px;
}
</style>

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
      $('#ppAwal').modal('show');
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
					<center><h3><img src="../Images/logo.jpg" alt="Logo" width="70" height="90">&nbsp &nbsp &nbsp Aplikasi SIA Puskesmas</h3></center>
				</h4>
			</div>
			
			<!-- Modal #ppAwal Body -->
			<div class="modal-body" >
				
					<h4>./Selamat Datang</h4>
					<li>Sebelum melakukan pemeriksaan, Harap Lengkapi Identitas diri Anda dengan Benar, guna menunjang Kesehatan Anda. <br></li>
					<li>Harap Klik Menu <b><a href="../Keluar.php" style="text-decoration:none" data-dismiss="modal">Keluar</a></b> setiap kali Anda selesai menggunakan Sistem ini.</li>
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


<!-- ModalMain #ppEdit -->
<div class="modal fade" id="ppEdit" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"  aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">

			<!-- Header MainModal #ppEdit -->     
			<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-edit"></span> Edit Akun</h4>	
				<div align="left">Harap lengkapi Identitas diri Anda dengan Benar, guna menunjang Kesehatan Anda !</div>
			</div>

			<!-- Isi MainModal #ppEdit -->
			<div class="modal-body">
	
				<!-- Form Boostrap Wizard #formEdit -->
				<form id="FormEdit" class="form-horizontal" action="cekEditAkun.php" method="post">
					<ul class="nav nav-pills">
						<li class="active"><a href="#tabEdit-1" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>&nbsp Identitas Diri</a></li>
						<li><a href="#tabEdit-2" data-toggle="tab"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp Kontak & Alamat</a></li>
						<li><a href="#tabEdit-3" data-toggle="tab"><span class="glyphicon glyphicon-usd"></span>&nbsp Keluhan & Pembayaran</a></li>
					</ul>
					
					<!-- Tab Boostrap Wizard #formEdit -->
					<div class="tab-content">
        
						<!-- Tab Pertama #formEdit -->
						<div class="tab-pane active" id="tabEdit-1">
							<div class="form-group inputGroupContainer">
								<label class="col-xs-3 control-label">ID Pasien</label>
									<div class="col-xs-5">
										<input type="text" class="form-control" readonly name="id_psn" value="<?php echo $dataTampil['id_pasien']; ?>"/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Nama Pasien</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" class="form-control" readonly name="nm_psn" value="<?php echo $dataTampil['nm_pasien']; ?>" />
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Tgl Lahir</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" class="form-control" name="tgl_lhr" value="<?php echo $dataTampil['tgl_lahir']; ?>" placeholder="HH/BB/TTTT"/>
									</div>
							</div>		
			
							 <div class="form-group">
								<label class="col-xs-3 control-label">Tempat Lahir</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" class="form-control" name="tmp_lhr" value="<?php echo $dataTampil['tmp_lahir']; ?>" placeholder="Tempat lahir.."/>
									</div>
							</div>
			
							<div class="form-group">
								<label class="col-xs-3 control-label">Jenis Kelamin</label>
									<div class="col-xs-5">
										<div class="radio">
											<label>
												<input type="radio" name="gender" value="Laki - Laki" /> Laki - Laki
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="gender" value="Perempuan" /> Perempuan
											</label>
										</div>
									</div>
							</div>
			
							<div class="form-group">
								<label class="col-xs-3 control-label">Agama</label>
									<div class="col-xs-5">
										<div class="radio">
											<label>
												<input type="radio" name="agama" value="Islam" /> Islam
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="agama" value="Protestan" /> Protestan
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="agama" value="Katolik" /> Katolik
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="agama" value="Hindu" /> Hindu
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="agama" value="Buddha" /> Buddha
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="agama" value="KongHuCu" /> KongHuCu
											</label>
										</div>
									</div>
							</div>
			
							<div class="form-group">
								<label class="col-xs-3 control-label">Status</label>
									<div class="col-xs-5">
										<div class="radio">
											<label>
												<input type="radio" name="status" value="Lajang" /> Lajang
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="status" value="Menikah" /> Menikah
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="status" value="Janda" /> Janda
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="status" value="Duda" /> Duda
											</label>
										</div>
									</div>
							</div>
						</div>
		
						<!-- Tab Kedua #formEdit -->
						<div class="tab-pane" id="tabEdit-2">
							<div class="form-group">
								<label class="col-xs-3 control-label">No.HP</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" class="form-control" name="hp" value="<?php echo $dataTampil['hp']; ?>" placeholder="No.HP.."/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Alamat</label>
									<div class="col-xs-5 inputGroupContainer">
										<textarea class="form-control" name="alamat" rows="6" placeholder="Alamat.."><?php echo $dataTampil['alamat']; ?></textarea>
									</div>
							</div>
						</div>
		
		
						<!-- Tab Ketiga #formEdit -->
						<div class="tab-pane" id="tabEdit-3">
							<div class="form-group">
								<label class="col-xs-3 control-label">Keluhan</label>
									<div class="col-xs-7 selectContainer">
										<select name="keluhan" id="keluhan" class="form-control" onchange="runkeluhan()">
											<option value="<?php echo $dataTampil['keluhan']; ?>" selected><?php echo $dataTampil['keluhan']; ?></option>
											<option class="divider" disabled>===================================</option>
											<option class="divider" disabled>POLI GIGI</option>
											<option value="Gigi">Gigi</option>
				
											<option class="divider" disabled>POLI KESEHATAN IBU ANAK</option>
											<option value="Imunisasi">Imunisasi</option>
											<option value="Kesehatan Balita">Kesehatan Balita</option>
											<option value="Kesehatan Ibu Hamil">Kesehatan Ibu Hamil</option>
											<option value="Persalinan Ibu Hamil">Persalinan Ibu Hamil</option>
											<option value="Pelayanan KB">Pelayanan KB</option>
											
											<option class="divider" disabled>POLI MATA</option>
											<option value="Mata">Mata</option>
											
											<option class="divider" disabled>POLI THT</option>
											<option value="Telinga / Hidung / Tenggorokan">Telinga / Hidung / Tenggorokan</option>
											
											<option class="divider" disabled>POLI UMUM</option>
											<option value="Demam / Flu">Demam / Flu</option>
											<option value="Pilek / Batuk">Pilek / Batuk</option>
											<option value="Diare / TBC">Diare / TBC</option>
											<option value="Rematik / Asam Urat">Rematik / Asam Urat</option>
											
										</select>       
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Dokter Pemeriksa</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" class="form-control" id="dokter" name="dokter" value="<?php echo $dataTampil['dokter']; ?>" placeholder="Dokter Pemeriksa.."/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Ruang Rawat</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" class="form-control" id="r_rawat" name="r_rawat" value="<?php echo $dataTampil['r_rawat']; ?>" placeholder="Ruang Rawat.."/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Metode Pembayaran</label>
									<div class="col-xs-5">
										<div class="radio">
											<label>
												<input type="radio" name="cr_byr" value="Tunai" /> Tunai
											</label>
										</div> 
										<div class="radio">
											<label>
												<input type="radio" name="cr_byr" value="Askes" /> Askes
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="cr_byr" value="Kartu Indonesia Sehat" /> Kartu Indonesia Sehat
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="cr_byr" value="Jamkesmas / BPJS Kesehatan" /> Jamkesmas / BPJS Kesehatan
											</label>
										</div>
									</div>
							</div>
						</div>

					<!-- Previous/Next buttons #formEdit -->
					<ul class="pager wizard">
						<li class="previous"><a href="javascript: void(0);">Kembali</a></li>
						<li class="next"><a href="javascript: void(0);">Lanjut</a></li>
					</ul>
					</div>
				</form>
	
			</div>

			<!-- Footer MainModal #ppEdit -->
			<div class="modal-footer">		
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>	
			</div>
		</div>
	</div>
</div>


<!-- Body Index.php -->
<div class="container">
	<div class="hero-unit">
			<h3><center><img src="../Images/logo.jpg" alt="Logo" width="70" height="90">&nbsp &nbsp &nbsp Aplikasi SIA Puskesmas</center></h3>
	</div>
		<div class="row">
			<div class="col-md-3">
				
				<!-- Menu Kolom Index.php -->
				<div class="kolom"><center><h3>Panel Info</h3></center>
					<table class="table">
						<thead>
							<tr><th></th></tr>
							<tr><th><a href="#" style="text-decoration:none"><span class="glyphicon glyphicon-user"></span> &nbsp Info Akun</a></th></tr>
							<tr><th><a href="" style="text-decoration:none" data-toggle="modal" data-target="#ppEdit"><span class="glyphicon glyphicon-edit"></span> &nbsp Edit Akun</a></th></tr>
							<tr><th><a href="" style="text-decoration:none" data-toggle="modal" data-target="#ppAwal"><span class="glyphicon glyphicon-question-sign"></span> &nbsp Bantuan</a></th></tr>
							<tr><th><a href="../Keluar.php" style="text-decoration:none"><span class="glyphicon glyphicon-log-out"></span> &nbsp Keluar</a></th></tr>
						</thead>
					</table>
				</div>
			
			</div>
			
			<div class="col-md-9">
				<!-- Head Index.php -->
				<div class="headisi">
					<center><h4>
					<marquee behavior="scroll" direction="left" scrollamount="3" scrolldelay="20" width="80%">
						<span>./Selamat Datang di Pelayanan SIA Puskesmas Kami, Untuk Informasi lebih lanjut bisa Kontak Resepsionis (Rawat Jalan: 08.00 - 15.00 Senin s/d Sabtu. | 08.00-12.00 Minggu. | Hari Besar Tutup.) </span>
					</marquee>
					</h4></center>
				</div>
				<?php
						
						$sqlTampil="select * from pasien Where id_pasien='$_SESSION[idpsn]'";  
						$qryTampil=mysqli_query($conn , $sqlTampil);  
						$dataTampil=mysqli_fetch_assoc($qryTampil); 
				?>

				<!-- Isi Index.php -->
				<div class="isi">
					<h5><b>
					<?php echo "<p>Selamat Datang, ".$_SESSION['level']." (".$_SESSION['nama'].")</p>";?>
					</b></h5>
						<center><h4><b>Informasi Akun</b><h4></center>
							<table class="table">
							<thead>
								<tr><th></th></tr>
								<tr><th>ID Pasien: <?php echo $dataTampil['id_pasien']; ?></th></tr>
								<tr><th>Nama Pasien: <?php echo $dataTampil['nm_pasien']; ?></th></tr>
								<tr><th>Tgl Lahir: <?php echo $dataTampil['tgl_lahir']; ?></th></tr>
								<tr><th>Tempat Lahir: <?php echo $dataTampil['tmp_lahir']; ?></th></tr>
								<tr><th>Jenis Kelamin: <?php echo $dataTampil['gender']; ?></th></tr>
								<tr><th>Agama: <?php echo $dataTampil['agama']; ?></th></tr>
								<tr><th>Status: <?php echo $dataTampil['status']; ?></th></tr>
								<tr><th>Alamat: <?php echo $dataTampil['alamat']; ?></th></tr>
								<tr><th>No.HP: <?php echo $dataTampil['hp']; ?></th></tr>
								<tr><th>Keluhan: <?php echo $dataTampil['keluhan']; ?></th></tr>
								<tr><th>Ruang Rawat: <?php echo $dataTampil['r_rawat']; ?></th></tr>
								<tr><th>Dokter: <?php echo $dataTampil['dokter']; ?></th></tr>
								<tr><th>Cara Pembayaran: <?php echo $dataTampil['cr_pembayaran']; ?></th></tr>
							</thead>
							</table>
				</div>
			</div>	
		</div>
</div>
</body>

<!-- ReadOnly r_rawat / dokter #formEdit -->
<script>
document.getElementById('r_rawat').readOnly = true;
document.getElementById('dokter').readOnly = true;
</script>

<!-- Konfig Select Keluhan #formEdit -->
<script>
function runkeluhan() {
   
	var cek = document.getElementById("keluhan");
	if(cek.value == "Gigi")
		document.getElementById("dokter").value = "Andre";
	if(cek.value == "Gigi")
		document.getElementById("r_rawat").value = "Poli Gigi";
	
	if(cek.value == "Imunisasi")
		document.getElementById("dokter").value = "Ana";
	if(cek.value == "Imunisasi")
		document.getElementById("r_rawat").value = "Poli Kesehatan Ibu Anak";

	if(cek.value == "Kesehatan Balita")
		document.getElementById("dokter").value = "Ana";
	if(cek.value == "Kesehatan Balita")
		document.getElementById("r_rawat").value = "Poli Kesehatan Ibu Anak";

	if(cek.value == "Kesehatan Ibu Hamil")
		document.getElementById("dokter").value = "Dewi";
	if(cek.value == "Kesehatan Ibu Hamil")
		document.getElementById("r_rawat").value = "Poli Kesehatan Ibu Anak";

	if(cek.value == "Persalinan Ibu Hamil")
		document.getElementById("dokter").value = "Retno";
	if(cek.value == "Persalinan Ibu Hamil")
		document.getElementById("r_rawat").value = "Poli Kesehatan Ibu Anak";

	if(cek.value == "Pelayanan KB")
		document.getElementById("dokter").value = "Dewi";
	if(cek.value == "Pelayanan KB")
		document.getElementById("r_rawat").value = "Poli Kesehatan Ibu Anak";

	if(cek.value == "Mata")
		document.getElementById("dokter").value = "Budi";
	if(cek.value == "Mata")
		document.getElementById("r_rawat").value = "Poli Mata";

	if(cek.value == "Telinga / Hidung / Tenggorokan")
		document.getElementById("dokter").value = "Asih";
	if(cek.value == "Telinga / Hidung / Tenggorokan")
		document.getElementById("r_rawat").value = "Poli THT";

	if(cek.value == "Demam / Flu")
		document.getElementById("dokter").value = "Agus";
	if(cek.value == "Demam / Flu")
		document.getElementById("r_rawat").value = "Poli Umum";

	if(cek.value == "Pilek / Batuk")
		document.getElementById("dokter").value = "Agus";
	if(cek.value == "Pilek / Batuk")
		document.getElementById("r_rawat").value = "Poli Umum";

	if(cek.value == "Diare / TBC")
		document.getElementById("dokter").value = "Ria";
	if(cek.value == "Diare / TBC")
		document.getElementById("r_rawat").value = "Poli Umum";

	if(cek.value == "Rematik / Asam Urat")
		document.getElementById("dokter").value = "Ria";
	if(cek.value == "Rematik / Asam Urat")
		document.getElementById("r_rawat").value = "Poli Umum";

	}
</script>

<!-- Konfig Radio Gender/Agama/Status/MetodePembayaran #formEdit -->
<script>
var genderEdit = document.getElementsByName('gender');
for (i = 0; i < genderEdit.length; i++) {
    if (genderEdit[i].value == "<?php echo $dataTampil['gender']; ?>") {
        genderEdit[i].checked = true;
    }
}

var agamaEdit = document.getElementsByName('agama');
for (i = 0; i < agamaEdit.length; i++) {
    if (agamaEdit[i].value == "<?php echo $dataTampil['agama']; ?>") {
        agamaEdit[i].checked = true;
    }
}

var statusEdit = document.getElementsByName('status');
for (i = 0; i < statusEdit.length; i++) {
    if (statusEdit[i].value == "<?php echo $dataTampil['status']; ?>") {
        statusEdit[i].checked = true;
    }
}

var cr_byrEdit = document.getElementsByName('cr_byr');
for (i = 0; i < cr_byrEdit.length; i++) {
    if (cr_byrEdit[i].value == "<?php echo $dataTampil['cr_pembayaran']; ?>") {
        cr_byrEdit[i].checked = true;
    }
}
</script>

<!-- Konfig #formEdit -->
<script>
$(document).ready(function() {
     function adjustIframeHeight() {
        var $body   = $('body'),
                $iframe = $body.data('iframe.fv');
        if ($iframe) {
            // Adjust the height of iframe
            $iframe.height($body.height());
        }
    }

  $('#FormEdit')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
           excluded: ':disabled',
            fields: {
                id_psn: {
                    validators: {
                        notEmpty: {
                            message: 'Kolom `ID Pasien` masih Kosong'
                        }
                    }
                },
				nm_psn: {
                    validators: {
                        notEmpty: {
                            message: 'Kolom `Nama` masih Kosong'
                        }
                    }
                },
                tgl_lhr: {
                    validators: {
                        notEmpty: {
                            message: 'Kolom `Tgl Lahir` masih Kosong'
                        },
						date: {
						message: 'Input `Tgl Lahir` masih Salah, Contoh Format = 9/12/1999',
                        format: 'DD/MM/YYYY'
						}
                    }
                },
                tmp_lhr: {
                    validators: {
                        notEmpty: {
                            message: 'Kolom `Tempat Lahir` masih Kosong'
                        }
                    }
                },
                gender: {
                    validators: {
                        notEmpty: {
                            message: 'Anda belum memilih `Gender`'
                        }
                    }
                },
                agama: {
                    validators: {
                        notEmpty: {
                            message: 'Anda belum memilih `Agama`'
                        }
                    }
                },
				status: {
                    validators: {
                        notEmpty: {
                            message: 'Anda belum memilih `Status`'
                        }
                    }
                },
				hp: {
                    validators: {
                        notEmpty: {
                            message: 'Kolom `No.HP` masih Kosong'
                        },
						 numeric: {
                            message: 'No.HP harus berupa Angka'
                        }
                    }
                },
				alamat: {
                    validators: {
                        notEmpty: {
                            message: 'Kolom `Alamat` masih Kosong'
                        }
                    }
                },
				keluhan: {
                    validators: {
                        notEmpty: {
                            message: 'Kolom `Keluhan` masih Kosong'
                        }
                    }
                },
				dokter: {
                    validators: {
                        notEmpty: {
                            message: 'Kolom `Dokter` masih Kosong'
                        }
                    }
                },
				r_rawat: {
                    validators: {
                        notEmpty: {
                            message: 'Kolom `Ruang Rawat` masih Kosong'
                        }
                    }
                },
				cr_byr: {
                    validators: {
                        notEmpty: {
                            message: 'Kolom `Metode Pembayaran` masih Kosong'
                        }
                    }
                }
            }
        })
        .bootstrapWizard({
            tabClass: 'nav nav-pills',
            onTabClick: function(tab, navigation, index) {
                return validateTab(index);
            },
            onNext: function(tab, navigation, index) {
                var numTabs    = $('#FormEdit').find('.tab-pane').length,
                    isValidTab = validateTab(index - 1);
                if (!isValidTab) {
                    return false;
                }

                if (index === numTabs) {
                    // We are at the last tab

                    // Uncomment the following line to submit the form using the defaultSubmit() method
                    $('#FormEdit').formValidation('defaultSubmit');

                }

                return true;
            },
            onPrevious: function(tab, navigation, index) {
                return validateTab(index + 1);
            },
            onTabShow: function(tab, navigation, index) {
                // Update the label of Next button when we are at the last tab
                var numTabs = $('#FormEdit').find('.tab-pane').length;
                $('#FormEdit')
                    .find('.next')
                        .removeClass('disabled')    // Enable the Next button
                        .find('a')
                        .html(index === numTabs - 1 ? 'Simpan' : 'Lanjut');

                // You don't need to care about it
                // It is for the specific demo
                adjustIframeHeight();
            }
        });

    function validateTab(index) {
        var fv   = $('#FormEdit').data('formValidation'), // FormValidation instance
            // The current tab
            $tab = $('#FormEdit').find('.tab-pane').eq(index);

        // Validate the container
        fv.validateContainer($tab);

        var isValidStep = fv.isValidContainer($tab);
        if (isValidStep === false || isValidStep === null) {
            // Do not jump to the target tab
            return false;
        }

        return true;
    }
});
</script>

</html>