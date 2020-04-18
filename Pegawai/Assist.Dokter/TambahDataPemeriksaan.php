<html>
<head>
<title>&nbsp ./Puskesmas &nbsp- &nbspAssist. Dokter &nbsp|</title>
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
	
</style>

</head>
<?php  
      mysql_connect('localhost','root','');  
      mysql_select_db('puskesmas');  
      $sqlTampil="SELECT pasien.id_pasien, `keluhan`, `r_rawat`, `nm_pasien`, `hasil_periksa`, `resep`, `saran_dokter`
					FROM dokter, pasien WHERE dokter.id_pasien=pasien.id_pasien AND pasien.id_pasien='$_POST[id_pasien]';";  
      $qryTampil=mysql_query($sqlTampil);  
      $dataTampil=mysql_fetch_array($qryTampil);  
     ?> 
<br>
	<form id="formTambah" class="form-horizontal" action="cekTambahDataPemeriksaan.php" method="post">
		<div class="form-group">
			<label class="col-xs-4 control-label">ID Pasien</label>
				<div class="col-xs-8 inputGroupContainer">
					<div class="input-group">
						<input type="text" name="id_psn" readonly id="id_psn" class="form-control" value="<?php echo $dataTampil['id_pasien']; ?>" placeholder="ID Pasien..">
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-xs-4 control-label">Nama Pasien</label>
				<div class="col-xs-8 inputGroupContainer">
					<div class="input-group">
						<input type="text" name="nm_psn" readonly class="form-control" value="<?php echo $dataTampil['nm_pasien']; ?>" placeholder="Nama Pasien..">
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-xs-4 control-label">Keluhan</label>
				<div class="col-xs-8 inputGroupContainer">
					<div class="input-group">
						<input type="text" name="keluhan" readonly class="form-control" value="<?php echo $dataTampil['keluhan']; ?>" placeholder="Nama Pasien..">
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-xs-4 control-label">Ruang Rawat</label>
				<div class="col-xs-8 inputGroupContainer">
					<div class="input-group">
						<input type="text" name="r_rawat" readonly class="form-control" value="<?php echo $dataTampil['r_rawat']; ?>" placeholder="Nama Pasien..">
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-xs-4 control-label">Hasil Periksa</label>
				<div class="col-xs-8 inputGroupContainer">
					<div class="input-group">
						<textarea class="form-control" name="hasil_periksa" rows="4" placeholder="Hasil Periksa.."><?php echo $dataTampil['hasil_periksa']; ?></textarea>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-xs-4 control-label">Resep</label>
				<div class="col-xs-8 inputGroupContainer">
					<div class="input-group">
						<textarea class="form-control" name="resep" rows="4" placeholder="Resep.."><?php echo $dataTampil['resep']; ?></textarea>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-xs-4 control-label">Saran Dokter</label>
				<div class="col-xs-8 inputGroupContainer">
					<div class="input-group">
						<textarea class="form-control" name="saran_dokter" rows="4" placeholder="Saran Dokter.."><?php echo $dataTampil['saran_dokter']; ?></textarea>
					</div>
				</div>
		</div>
		<div class="form-group">
			<div class="col-xs-offset-4 col-xs-8">
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span>&nbsp Simpan</button>
			</div>
		</div>
	</form>
</html>
