<!DOCTYPE html>
<html>
<head>
  <title>Palang Merah Indonesia </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="icon" type="image/ico" href="favicon.ico">
  <link rel="stylesheet" href="Scripts/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Scripts/Validator/css/formValidation.css"/>
  <link rel="stylesheet" href="Scripts/FakeLoader/fakeLoader.css">
  <script type="text/javascript" src="Scripts/jquery.js"></script>
  <script type="text/javascript" src="Scripts/Bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Scripts/Tinymce/tinymce.min.js"></script>
  <script type="text/javascript" src="Scripts/Validator/js/formValidation.js"></script>
  <script type="text/javascript" src="Scripts/Validator/js/framework/bootstrap.js"></script>
  <script type="text/javascript" src="Scripts/jquery.bootstrap.wizard.min.js"></script>
  <script type="text/javascript" src="Scripts/FakeLoader/fakeLoader.min.js"></script>
	
<!-- Judul Marquee -->


<!-- FakeLoader -->
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

<!-- Konfig Carousel #gambargerak -->
<script type="text/javascript">
  var $ = jQuery.noConflict();
  $(document).ready(function() { 
      $('#gambargerak').carousel({ interval: 4000, cycle: true });
  }); 
</script>

<!-- Konfig Halaman -->
<style type="text/css">
	body {background: #000000 url('Images/bg.jpg') fixed;}
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

<!-- Konfig Carousel #gambargerak -->
<style type="text/css">
.item{
    text-align: center;
    width: auto;
}
.ukuran {
height: 300px;
}
.carousel {
width:100%;
margin:0 auto; 
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
				<h3><img src="Images/a.png" alt="Logo" width="300" >
				</h3>
				</h4>
			</div>
			
			<!-- Modal #ppAwal Body -->
			<div class="modal-body">
				<div class="col-md-6">
					<div id="gambargerak" class="carousel slide" data-interval="4000">
  
<iframe width="400" height="315" src="https://www.youtube.com/embed/v3Zl6D2F-bY?autoplay=1" frameborder="0" allowfullscreen></iframe>					
					</div>
				</div>
			</div>
			
			<!-- Modal #ppAwal Isi -->
			<div>
				<h4 align="center"><strong>Selamat Datang!</strong>
				</h4> 
					<h5><strong>Sistem Informasi Palang  Merah Indonesia</strong> <b>terdiri atas:</b> 
						<h4>
							<li>MENU</li>
							<li>MENU</li>
							<li>MENU</li>
							<li>MENU</li>
							<li>MENU</li>
							<li>MENU</li>
						</h4>
						Silahkan Login ke sistem untuk menggunakan pelayanan ini secara maksimal!
					</h5>
				<br><br>
				<a href="Login/Pegawai.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span>&nbsp Masuk Sebagai Pegawai</button></a>
				<a href="Login/Pasien.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span>&nbsp Masuk Sebagai Pasien</button></a>
			</div>
			<br><br>
			
			<!-- Modal #ppAwal Footer -->
			<div class="modal-footer">
				<a class="weatherwidget-io" href="https://forecast7.com/en/n7d01110d44/semarang/" data-label_1="SEMARANG" data-label_2="WEATHER" data-theme="original" >SEMARANG WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
			</div>
			
		</div>
	</div>
</div>

</body>
</html>