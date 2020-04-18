<!DOCTYPE html>
<?php  
      mysql_connect('localhost','root','');  
      mysql_select_db('puskesmas');  
      $sqlTampil="select * from pegawai Where id_pegawai='$_GET[idpgw]' AND jabatan='$_GET[jabatan]'";  
      $qryTampil=mysql_query($sqlTampil);  
      $dataTampil=mysql_fetch_array($qryTampil);  	 
?> 
<html>
<head>
  <title>&nbsp ./Puskesmas &nbsp- &nbspPegawai &nbsp(Lupa Kata Sandi) &nbsp|</title>
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
      $('#ppAwal').modal('show');
    }, 4500);
});
</script>
 
<!-- Konfig Halaman -->
<style type="text/css">
	body {background: #000000 url('../Images/bg.jpg') no-repeat center top;}
	form {background: #ffffff; height:100%; margin: 10;}
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
	h3 img {
	margin-left:235px;
			}
</style>
</head>


<body>
<div class="fakeloader"></div>

<!-- Modal #ppAwal -->
<div class="modal fade" id="ppAwal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		
			<!-- Modal #ppAwal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">
					<h3><img src="../Images/logo.jpg" alt="Logo" width="70" height="90">&nbsp &nbsp &nbsp Aplikasi SIA Puskesmas</h3>
				</h4>
			</div>
			
			<!-- Modal #ppAwal Body -->
			<div class="modal-body" >
				<div class="col-md-9 col-md-offset-1">
					<h3>./Lupa Kata Sandi</h3>
				</div>
			
				<form id="cekLupaPassword" class="form-horizontal">	
					<div class="form-group">
						<label class="col-md-4 control-label">ID Pasien</label>
						<div class="col-md-5">
							<div class="input-group">
							<input type="text" name="idpgw" readonly class="form-control" value="<?php echo $dataTampil['id_pegawai'];?>" aria-describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2">
							<span class="glyphicon glyphicon-user"></span></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Jabatan</label>
						<div class="col-md-5">
							<div class="input-group">
							<input type="text" name="jabatan" readonly class="form-control" value="<?php echo $dataTampil['jabatan'];?>" aria-describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2">
							<span class="glyphicon glyphicon-eye-open"></span></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Password</label>
						<div class="col-md-5">
							<div class="input-group">
							<input type="text" name="passpgw" readonly class="form-control" value="<?php echo $dataTampil['pass_pegawai'];?>" aria-describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2">
							<span class="glyphicon glyphicon-lock"></span></span>
							</div>
						</div>
						<div class="col-md-5 col-md-offset-4">
							<br>
							<label>Tidak ditemukan ?? Cari lagi, klik <a style="text-decoration:none" href="LupaKataSandi.php">disini</a></label>
						</div>
					</div>
				</form>
			</div>
			
			<!-- Modal #ppAwal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='Pegawai.php'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>

</body>
</html>