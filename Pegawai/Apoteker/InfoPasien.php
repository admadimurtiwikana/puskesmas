<html>
<?php
      mysql_connect('localhost','root','');  
      mysql_select_db('puskesmas');  
      $sqlTampil="SELECT * FROM pasien WHERE id_pasien='$_GET[id_pasien]';";  
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
. {
margin:10px auto;
padding:5px;
width:93%;
}
.controls {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:93%;
}
.entry {
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

<!-- Konfig FormEdit -->
<style type="text/css">
#FormEdit .tab-content {
    margin-top: 20px;
}
</style>

	<script type="text/javascript">
		$(window).load(function()
		{
			$('#ppEdit').modal('show');
			$('#ppEdit').data('bs.modal').isShown = true;
		});
	</script>

</head>

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
				<form id="FormEdit" class="form-horizontal" action="cekInfoPasien.php" method="post">
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
								<label class="col-xs-3 control-label">Password Pasien</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" class="form-control" readonly name="pass_psn" value="<?php echo $dataTampil['pass_pasien']; ?>" />
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
										<input type="text" class="form-control" readonly name="tgl_lhr" value="<?php echo $dataTampil['tgl_lahir']; ?>" placeholder="HH/BB/TTTT"/>
									</div>
							</div>		
			
							 <div class="form-group">
								<label class="col-xs-3 control-label">Tempat Lahir</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" class="form-control" readonly name="tmp_lhr" value="<?php echo $dataTampil['tmp_lahir']; ?>" placeholder="Tempat lahir.."/>
									</div>
							</div>
			
							<div class="form-group">
								<label class="col-xs-3 control-label">Jenis Kelamin</label>
									<div class="col-xs-5">
										<div class="radio">
											<label>
												<input type="radio" id="gender" name="gender" value="Laki - Laki" /> Laki - Laki
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" id="gender" name="gender" value="Perempuan" /> Perempuan
											</label>
										</div>
									</div>
							</div>
			
							<div class="form-group">
								<label class="col-xs-3 control-label">Agama</label>
									<div class="col-xs-5">
										<div class="radio">
											<label>
												<input type="radio" id="agama" name="agama" value="Islam" /> Islam
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" id="agama" name="agama" value="Protestan" /> Protestan
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" id="agama" name="agama" value="Katolik" /> Katolik
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" id="agama" name="agama" value="Hindu" /> Hindu
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" id="agama" name="agama" value="Buddha" /> Buddha
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" id="agama" name="agama" value="KongHuCu" /> KongHuCu
											</label>
										</div>
									</div>
							</div>
			
							<div class="form-group">
								<label class="col-xs-3 control-label">Status</label>
									<div class="col-xs-5">
										<div class="radio">
											<label>
												<input type="radio" id="status" name="status" value="Lajang" /> Lajang
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" id="status" name="status" value="Menikah" /> Menikah
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" id="status" name="status" value="Janda" /> Janda
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" id="status" name="status" value="Duda" /> Duda
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
										<input type="text" class="form-control" readonly name="hp" value="<?php echo $dataTampil['hp']; ?>" placeholder="No.HP.."/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Alamat</label>
									<div class="col-xs-5 inputGroupContainer">
										<textarea class="form-control" readonly name="alamat" rows="6" placeholder="Alamat.."><?php echo $dataTampil['alamat']; ?></textarea>
									</div>
							</div>
						</div>
		
		
						<!-- Tab Ketiga #formEdit -->
						<div class="tab-pane" id="tabEdit-3">
							<div class="form-group">
								<label class="col-xs-3 control-label">Keluhan</label>
									<div class="col-xs-7 selectContainer">
										<select name="keluhan" disabled id="keluhan" class="form-control" onchange="runkeluhan()">
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
										<input type="text" readonly class="form-control" id="dokter" name="dokter" value="<?php echo $dataTampil['dokter']; ?>" placeholder="Dokter Pemeriksa.."/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Ruang Rawat</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" readonly class="form-control" id="r_rawat" name="r_rawat" value="<?php echo $dataTampil['r_rawat']; ?>" placeholder="Ruang Rawat.."/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Metode Pembayaran</label>
									<div class="col-xs-5">
										<div class="radio">
											<label>
												<input type="radio" id="cr_byr" name="cr_byr" value="Tunai" /> Tunai
											</label>
										</div> 
										<div class="radio">
											<label>
												<input type="radio" id="cr_byr" name="cr_byr" value="Askes" /> Askes
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" id="cr_byr" name="cr_byr" value="Kartu Indonesia Sehat" /> Kartu Indonesia Sehat
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" id="cr_byr" name="cr_byr" value="Jamkesmas / BPJS Kesehatan" /> Jamkesmas / BPJS Kesehatan
											</label>
										</div>
									</div>
							</div>
						</div>

					
					</div>
				</form>
	
			</div>

			<!-- Footer MainModal #ppEdit -->
			<div class="modal-footer">		
				<button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='../Apoteker'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>	
			</div>
		</div>
	</div>
</div>

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

<!-- Konfig Validasi #FormEdit -->
<style type="text/css">
#FormEdit .inputGroupContainer .form-control-feedback,
#FormEdit .selectContainer .form-control-feedback {
    top: 0;
    right: -20px;
}
</style>

<script>
$('input[name=cr_byr]').attr("disabled",true);
$('input[name=gender]').attr("disabled",true);
$('input[name=agama]').attr("disabled",true);
$('input[name=status]').attr("disabled",true);
</script>

</html>