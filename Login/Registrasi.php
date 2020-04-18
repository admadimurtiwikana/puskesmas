<!DOCTYPE html>
<html>
<head>
  <title>&nbsp ./Puskesmas &nbsp- &nbspPasien &nbsp(Login)&nbsp|</title>
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

<!-- Konfig Halaman -->
<style type="text/css"> 
	body {background: #000000 url('../Images/bg.jpg') fixed;}
	form {background:url('../Images/bg-transparent.png') repeat top center; height:100%; margin: 10;}
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
		margin-top: 1px;
		margin-bottom:8px;
		}
	h3 {margin-top:10px;}
</style>

<!-- Keterangan Kursor -->
<script>
$(document).ready(function(){
    $('[data-toggle="intip"]').tooltip();   
});
</script>

<!-- Konfig Validasi -->
<style type="text/css"> 
#loginpsn .inputGroupContainer .form-control-feedback,
#loginpsn .selectContainer .form-control-feedback {
    top: 0;
    right: -20px; }
</style>

</head>
<body>
<div class="fakeloader"></div>
<div class="container">
  <div class="col-md-8 col-md-offset-2">
  <br><br><br>
  
<form id="registrasipasien" class="form-horizontal" action="prosesregis.php" method="post">
		<div class="col-md-offset-2 col-md-10">
			<h3> &nbsp <img src="../Images/a.png" alt="Logo" width="300" ></h3>
		</div>
	<hr>
  
		<div class="col-md-9 col-md-offset-1">
			<h3>REGISTRASI PASIEN</h3> 
		</div>
	
		<div>
			<h3>&nbsp &nbsp <a href="../" data-toggle="intip" title="Halaman Rumah"><span class="glyphicon glyphicon-home"></span></a></h3>
		</div>
  
	<div class="form-group">
		<label class="col-md-3 control-label">ID Pasien</label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
				<input type="text" name="idpsn" class="form-control" placeholder="ID Pasien" style="width:250px">
				</div>
			</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-3 control-label">Kata Sandi</label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
				<input type="password" name="passpsn" class="form-control" placeholder="Kata Sandi" style="width:250px">
				</div>
			</div>
	</div>

    <div class="form-group">
		<label class="col-md-3 control-label">Nama Pasien</label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
				<input type="text" name="namapasien" class="form-control" placeholder="Nama pasien" style="width:250px">
				</div>
			</div>
	</div>
	
    <div class="form-group">
		<label class="col-md-3 control-label">Tanggal lahir </label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
				<input type="date" name="tgllahir" class="form-control"  style="width:250px">
				</div>
			</div>
	</div>
      	
    <div class="form-group">
		<label class="col-md-3 control-label">Tempat lahir </label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
				<input type="text" name="Tempatlahir" placeholder="Tempat lahir" class="form-control"  style="width:250px">
				</div>
			</div>
	</div>

    <div class="form-group">
		<label class="col-md-3 control-label">Gender </label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
                        <input type="radio" name="sex" value="laki_laki" /><font color="white">Laki laki  </font><br />
                        <input type="radio" name="sex" value="perempuan" /><font color="white">Perempuan  </font><br />
				</div>
			</div>
	</div>

    <div class="form-group">
		<label class="col-md-3 control-label">AGAMA</label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
				<select class="form-control" name="agama">
                    <option>-</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>katolik</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    </select>
				</div>
			</div>
	</div>

    <div class="form-group">
		<label class="col-md-3 control-label">STATUS</label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
				<select class="form-control" name="status">
                    <option>-</option>
                    <option>Single</option>
                    <option>Menikah</option>
                    <option>janda</option>
                    <option>Duda</option>
                    </select>
				</div>
			</div>
	</div>

    <div class="form-group">
		<label class="col-md-3 control-label">Alamat</label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
				<input type="text" name="Alamat" placeholder="Alamat" class="form-control"  style="width:400px">
				</div>
			</div>
	</div>
    
    <div class="form-group">
		<label class="col-md-3 control-label">No hp</label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
				<input type="text" name="Nohp" placeholder="Nomor Handphone" class="form-control"  style="width:250px">
				</div>
			</div>
	</div>

	<div class="form-group ">
		<div class="col-md-offset-3 col-md-9 mb-3">
			<button type="submit" class="btn btn-primary">DAFTAR</button>
		</div>
	</div>

</form>

  </div>
</div>


<!--KontrolFakeLoader-->
<script> 
            $(document).ready(function(){
                $(".fakeloader").fakeLoader({
                    timeToHide:2000,
                    bgColor:"#2ecc71",
                    spinner:"spinner2"
                });
            });
</script>
</body>
</html>