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
margin:15px auto;
padding:5px;
width:85%;
}
. {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:78%;
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

<!-- Konfig Validasi #FormEdit2 -->
<style type="text/css">
#FormEdit2 .inputGroupContainer .form-control-feedback,
#FormEdit2 .selectContainer .form-control-feedback {
    top: 0;
    right: -20px;
}
</style>

<!-- Konfig FormEdit -->
<style type="text/css">
#FormEdit .tab-content {
    margin-top: 20px;
}
</style>

<!-- Load #ppAwal -->
<script type="text/javascript">
		$(window).load(function()
		{
			$('#ppAwal').modal('show');
			$('#ppAwal').data('bs.modal').isShown = true;
		});
</script>
</head>

<body>

	<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
    $sqlTampil="SELECT pasien.id_pasien, `nm_pasien`,`resep`
				FROM dokter, pasien WHERE dokter.id_pasien=pasien.id_pasien AND pasien.id_pasien='$_GET[id_pasien]';";  
    $qryTampil=mysql_query($sqlTampil);  
    $dataTampil=mysql_fetch_array($qryTampil);  
	?> 
	
<!-- ModalMain #ppAwal -->
<div class="modal fade" id="ppAwal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"  aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">

		<!-- Header MainModal #ppAwal -->     
			<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-console"></span> Tambah Obat</h4>
					<div align="left">Pastikan Anda memasukkan Jumlah Pembelian Obat sesuai dengan Resep yang diberikan!</div>
			</div>

		<!-- Isi MainModal #ppAwal -->
			<div class="modal-body">
				<!-- #FormEdit -->
					<form id="FormEdit" class="form-horizontal"  method="post">	
						<div class="hero-unit">
							<div class="form-group">
									<label class="col-xs-4 control-label">ID Pasien</label>
										<div class="col-xs-6 ">
											<input type="text" class="form-control" readonly name="id_psn" value="<?php echo $dataTampil['id_pasien']; ?>"/>
										</div>
							</div>
							
							<div class="form-group">				
									<label class="col-xs-4 control-label">Nama Pasien</label>
										<div class="col-xs-6 ">
											<input type="text" class="form-control" readonly name="nm_psn" value="<?php echo $dataTampil['nm_pasien']; ?>" />
										</div>
							</div>
						
							<div class="form-group">
									<label class="col-xs-4 control-label">Resep</label>
										<div class="col-xs-6 ">
											<textarea class="form-control" name="resep" readonly rows="6" placeholder="Resep.."><?php echo $dataTampil['resep']; ?></textarea>
										</div>
							</div>		
						</div>
					<hr>
						<div class="hero-unit">
						<h4><center>Jumlah Item Pembelian Obat Pasien</center></h4>
							<div class="form-group">				
								<label class="col-xs-3 control-label">Jumlah Item</label>
									<div class="col-xs-5 ">
										<div class="input-group">
											<input type="text" class="form-control" name="t_item" placeholder="Jumlah Item.." />
										<span class="input-group-addon"><span class="glyphicon glyphicon-plus"></span></span>
										</div>
									<div align="left"><strong>Maksimal Pembelian Obat Hingga 20 Item</strong></div>
									</div>
									<div class="col-xs-3">
										<button type="submit" class="btn btn-default" form="FormEdit">Tambah</button>
									</div>
							</div>			
						</div>
					</form>
					<hr>
					
				<!-- #FormEdit2 -->
					<form id="FormEdit2" class="form-horizontal"  action="cekTambahBeliObat.php" method="post">

				<!-- Hide Elemen #IDPasien -->
				<input type="text" class="form-control" readonly id="id_psn" name="id_psn" value="<?php echo $dataTampil['id_pasien']; ?>"/>
				<script>$("#id_psn").hide();</script>

	<!-- Looping #FormEdit2 -->					
	<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$nilai = $_POST['t_item'];
	if($nilai > 20)
		{echo '<script type="text/javascript">alert("./Maksimal Pembelian Obat Hingga 20 Item! \n./Gagal Menambahkan Kolom! :(");</script>';
		die();}
	else { for($x=1; $x<=$nilai; $x++) 
	{
	?>
					
						<div class="hero-unit">
						<h4>Item Obat (<?php echo $x;?>)</h4>
							<div class="form-group">				
								<label class="col-xs-3 control-label">Nama Obat</label>
									<div class="col-xs-7 selectContainer">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span></span>
												<select class="form-control" id="combo_<?php echo $x;?>" name="obat[]" onchange="updateValue_<?php echo $x;?>()">
													<option value="" selected>Pilih Obat</option>
													<option class="divider" disabled>===================================</option>
													<option class="divider" disabled>OBAT GENERIK</option>
													<option class="divider" disabled>===================================</option>
														
														<!-- Looping #FormEdit2 Obat Generik -->						
															<?php  
															mysql_connect('localhost','root','');  
															mysql_select_db('puskesmas');  
															$sqlTampil="SELECT * FROM obat WHERE `j_obat` ='Generik' ORDER BY `nama_obat` ASC";  
															$qryTampil=mysql_query($sqlTampil); 
															?> 
		
															<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) {?> 

													<option value="<?php echo $dataTampil['nama_obat']?>" label="<?php echo $dataTampil['nama_obat']?>"><?php echo $dataTampil['nama_obat']?></option>
														
															<?php } ?>

															<!-- Looping #FormEdit2 Obat Bebas -->
															<option class="divider" disabled>===================================</option>
															<option class="divider" disabled>OBAT BEBAS</option>
															<option class="divider" disabled>===================================</option>
															<?php  
															mysql_connect('localhost','root','');  
															mysql_select_db('puskesmas');  
															$sqlTampil="SELECT * FROM obat WHERE `j_obat` ='Bebas' ORDER BY `nama_obat` ASC";  
															$qryTampil=mysql_query($sqlTampil); 
															?> 
														
															<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) { ?> 

													<option value="<?php echo $dataTampil['nama_obat'] ; ?>" label="<?php echo $dataTampil['nama_obat']?>"><?php echo $dataTampil['nama_obat'] ; ?></option>

															<?php } ?> 
	
												</select>
										</div>
									</div>	
							</div>			
						
							<div class="form-group">
								<label class="col-md-3 control-label">Harga Satuan</label>
									<div class="col-md-6 inputGroupContainer">
										<div class="input-group">
										<input type="text" id="kol1_<?php echo $x;?>"  readonly class="form-control" placeholder="Harga Satuan..">
										<span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
										</div>
									<div align="left"><strong><b>Per Kaplet / Per Strip / Per Botol</b></strong></div>
									</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">Stok</label>
									<div class="col-md-3 inputGroupContainer">
										<div class="input-group">
										<input type="text" id="stok1_<?php echo $x;?>"  readonly class="form-control">
										<span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
										</div>
									<div align="left"><strong><b>Stok Dahulu</b></strong></div>
									</div>
									<div class="col-md-3 inputGroupContainer">
										<div class="input-group">
										<input type="text" id="stok2_<?php echo $x;?>"  readonly class="form-control">
										<span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
										</div>
									<div align="left"><strong><b>Stok Kini</b></strong></div>
									</div>
									<div class="col-xs-3">
										<button type="button" id="btnStok_<?php echo $x;?>" class="btn btn-default">Simpan Stok</button>
									</div>
							</div>
														
							<div class="form-group">
								<label class="col-md-3 control-label">Jumlah Beli</label>
									<div class="col-md-6 inputGroupContainer">
										<div class="input-group">
										<input type="text" name="jumlah[]" id="kol2_<?php echo $x;?>" class="form-control" value="0" placeholder="Jumlah Beli..">
										<span class="input-group-addon"><span class="glyphicon glyphicon-plus"></span></span>
										</div>
									</div>
							</div>
						
							<div class="form-group">
								<label class="col-md-3 control-label">Harga Total</label>
									<div class="col-md-6 inputGroupContainer">
										<div class="input-group">
										<input type="text" name="harga[]" id="kol3_<?php echo $x;?>" readonly class="it form-control" placeholder="Harga Total..">
										<span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
										</div>
									</div>
							</div>
						
						</div>
					

<!-- JQuery #btnStok Click (Simpan Stok Obat)-->							
<script>
$("#btnStok_<?php echo $x;?>").on('click',function() {
    var stokupdate_<?php echo $x;?> = $("#stok2_<?php echo $x;?>").val(); 
	var nm_obt_<?php echo $x;?> = $("#combo_<?php echo $x;?> option:selected").val();
	var quey = 'stok_obat='+stokupdate_<?php echo $x;?>+'&nama_obat='+nm_obt_<?php echo $x;?>;
		$.ajax({
			type:'POST',
			data:quey,
			url:'cekSimpanStokObat.php',
			success:function(data) { 
			alert('Stok Obat berhasil di Ubah dan di Simpan! :)');
			$('#kol2_<?php echo $x;?>').prop('readonly', true);
									}
  });
   
});
</script>

<!-- JQuery #Combo Selecting (Nama Obat)-->								
<script>
$("#combo_<?php echo $x;?>").on('change',function(e) {
  e.preventDefault();
  var nm_obt_<?php echo $x;?> = $("#combo_<?php echo $x;?>").val(); 
  var query_<?php echo $x;?> = 'nama_obat='+nm_obt_<?php echo $x;?>;
  $.ajax({
    type:'POST',
    data:query_<?php echo $x;?>,
    url:'cekHargaAJAX.php',
    success:function(data) {
    $("#kol1_<?php echo $x;?>").val(data); 
	var a = $("#kol1_<?php echo $x;?>").val();
	var b = $("#kol2_<?php echo $x;?>").val();
	$("#kol3_<?php echo $x;?>").val(a*b);
    }
  });
  
  var stok_obt_<?php echo $x;?> = $("#combo_<?php echo $x;?>").val(); 
  var stok_<?php echo $x;?> = 'nama_obat='+stok_obt_<?php echo $x;?>;
  $.ajax({
    type:'POST',
    data:stok_<?php echo $x;?>,
    url:'cekStokObatDahulu.php',
    success:function(data) {
     $("#stok1_<?php echo $x;?>").val(data); 
	
	var c_<?php echo $x;?> = $("#kol2_<?php echo $x;?>").val();
	var d_<?php echo $x;?> = $("#stok1_<?php echo $x;?>").val();
	$("#stok2_<?php echo $x;?>").val(d_<?php echo $x;?>-c_<?php echo $x;?>);
    }
  });
 
});
</script>

<!-- JQuery #Kol2 Editing (Jumlah Beli)-->
<script>
$("#kol2_<?php echo $x;?>").keyup(function(){
	var a_<?php echo $x;?> = $("#kol1_<?php echo $x;?>").val();
	var b_<?php echo $x;?> = $("#kol2_<?php echo $x;?>").val();
	$("#kol3_<?php echo $x;?>").val(a_<?php echo $x;?>*b_<?php echo $x;?>);
	
	var c_<?php echo $x;?> = $("#kol2_<?php echo $x;?>").val();
	var d_<?php echo $x;?> = $("#stok1_<?php echo $x;?>").val();
	$("#stok2_<?php echo $x;?>").val(d_<?php echo $x;?>-c_<?php echo $x;?>);

	var cekNilai = $("#stok2_<?php echo $x;?>").val();
	if (cekNilai < 0)
	{
		alert('Stok Obat Anda Minus, Tidak diperbolehkan!');
		$("#kol2_<?php echo $x;?>").val(0);
		$("#kol3_<?php echo $x;?>").val(0);
		var e_<?php echo $x;?> = $("#stok1_<?php echo $x;?>").val();
		$("#stok2_<?php echo $x;?>").val(e_<?php echo $x;?> - 0);
	}
	else {}
	
	});
</script>


<!-- Akhir Looping #FormEdit2 -->	
<?php
}}
?>

							<hr>
							<div class="form-group">
								<label class="col-md-4 control-label">Total Harga Keseluruhan</label>
									<div class="col-md-5 inputGroupContainer">
										<div class="input-group">
										<input type="text" name="total" readonly id="total" class="form-control" placeholder="Total Harga Keseluruhan....">
										<span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
										</div>
									</div>
									<div class="col-md-3 inputGroupContainer">
										<button type="button" id="btn_total" class="btn btn-default btn_total" onclick="tot();">Total</button>
									</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-4 control-label" id="captchaOperationObat"></label>
									<div class="col-md-3 inputGroupContainer">
										<input type="text" class="form-control" name="captchaObat" />
									</div>
							</div>
							
							<div class="form-group">
								<div class="col-xs-5 col-xs-offset-1">
									<button type="submit" id="btn_Akhir" class="btn btn-default" form="FormEdit2">Order dan Simpan</button>
								</div>
							</div>
				
					</form>

<!-- JS #btn_Total Click (Total Harga Keseluruhan) -->		
<script>
	function tot()
		{
			var jumlahIT = document.getElementsByClassName("it");
			var total = 0;
			for(var i = 0; i < jumlahIT.length; i++)
				{
			total = total + parseFloat(document.getElementById("kol3_"+(i+1)).value);
				}
			document.getElementById('total').value = total;
			return total;
		}
</script>	

			</div>

		<!-- Footer MainModal #ppAwal -->
		<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='../Apoteker'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>	
		</div>
		</div>
	</div>
</div>



<!-- KontrolValidasi #formEditAkun -->
<script> 
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperationObat').html([randomNumber(1, 10), '+', randomNumber(1, 20), '='].join(' '));
	
    $('#FormEdit2').formValidation({
        message: 'Nilai ini tidak valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			captchaObat: {
                validators: {
                    callback: {
                        message: 'Jawaban Salah',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperationObat').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
        }
    });
});
</script>

</body>
</html>