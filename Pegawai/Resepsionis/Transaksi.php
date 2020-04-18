<html>
<?php
include ('cek.php');
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
		margin-top: 10px;
		margin-bottom:20px;
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
				<h4 class="modal-title"><span class="glyphicon glyphicon-plus"></span>&nbsp Pembayaran Pasien</h4>	
				<div align="left">Harap isi sesuai dengan Data yg telah diolah oleh Assist. Dokter dan Apoteker!</div>
			</div>

			
			<!-- NoUrut ID Pasien #formBayar -->
			<?php
			mysql_connect("localhost","root","");
			mysql_select_db("puskesmas");
			$q = mysql_query("SELECT * FROM total ORDER BY no_transaksi DESC LIMIT 1");
						$jumlah = mysql_num_rows($q);
						$data = mysql_fetch_array($q);

			if($jumlah <= 0)
				{ $NoUrutTransaksi = 1;}		
			else{ $NoUrutTransaksi = $data['no_transaksi'] + 1;}
			?>
			
			<?php
			mysql_connect('localhost','root','');  
			mysql_select_db('puskesmas');  
			$sqlTampil="SELECT * FROM pasien WHERE id_pasien='$_GET[id_pasien]';";
			$qryTampil=mysql_query($sqlTampil);  
			$dataTampil=mysql_fetch_array($qryTampil);  
			$metode = $dataTampil['cr_pembayaran'];
			?> 
			
			<!-- Modal #ppAwal Body -->
			<div class="modal-body" >
			<form id="FormTambah" class="form-horizontal"  method="post">
			<hr style="margin-bottom:10px;">
			<h4><center>Identitas Pasien</center></h4>
			<hr style="margin-bottom:10px;">
									
				<div class="form-group">
					<label class="col-xs-4 control-label">No Transaksi</label>
						<div class="col-xs-5 inputGroupContainer">
							<input type="text" class="form-control" readonly name="no_trans" value="<?php echo $NoUrutTransaksi; ?>" />
						</div>
				</div>
				
				<div class="form-group inputGroupContainer">
					<label class="col-xs-4 control-label">ID Pasien</label>
						<div class="col-xs-5">
							<input type="text" class="form-control" readonly name="id_psn" value="<?php echo $dataTampil['id_pasien']; ?>"/>
						</div>
				</div>

				<div class="form-group">
					<label class="col-xs-4 control-label">Nama Pasien</label>
						<div class="col-xs-5 inputGroupContainer">
							<input type="text" class="form-control" readonly name="nm_psn" value="<?php echo $dataTampil['nm_pasien']; ?>" />
						</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-4 control-label">Keluhan</label>
						<div class="col-xs-5 inputGroupContainer">
							<input type="text" class="form-control" readonly name="keluhan" value="<?php echo $dataTampil['keluhan']; ?>" />
						</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-4 control-label">Ruang Rawat</label>
						<div class="col-xs-5 inputGroupContainer">
							<input type="text" class="form-control" readonly name="r_rawat" value="<?php echo $dataTampil['r_rawat']; ?>" />
						</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-4 control-label">Metode Pembayaran</label>
						<div class="col-xs-5 inputGroupContainer">
							<input type="text" class="form-control" readonly name="cr_byr" value="<?php echo $dataTampil['cr_pembayaran']; ?>" />
						</div>
				</div>
				
				
					<?php
					mysql_connect('localhost','root','');  
					mysql_select_db('puskesmas');  
					$sqlTampil="SELECT * FROM dokter WHERE id_pasien='$_GET[id_pasien]';";
					$qryTampil=mysql_query($sqlTampil);  
					$dataTampil=mysql_fetch_array($qryTampil);  
					?> 
				
				
			<hr style="margin-bottom:10px;">
			<h4><center>Biaya Pemeriksaan</center></h4>
			<hr style="margin-bottom:10px;">
				
				<div class="form-group">
					<label class="col-xs-4 control-label">Hasil Periksa</label>
						<div class="col-xs-5 ">
							<textarea class="form-control" name="h_periksa" readonly rows="6" placeholder="Hasil Periksa.."><?php echo $dataTampil['hasil_periksa']; ?></textarea>
						</div>
				</div>	
				
				
				<div class="form-group">				
					<label class="col-xs-4 control-label">Jumlah Pemeriksaan</label>
						<div class="col-xs-5 ">
							<div class="input-group">
								<input type="text" class="form-control" name="t_item" placeholder="Jumlah Pemeriksaan.." />
								<span class="input-group-addon"><span class="glyphicon glyphicon-plus"></span></span>
							</div>
						</div>
					<div class="col-xs-3">
						<button type="submit" class="btn btn-default" form="FormTambah">Tambah</button>
					</div>
				</div>
			</form>
				
			
			<form id="FormBayar" class="form-horizontal"  action="cekTransaksi.php" method="post">
			
			<!-- Looping #FormEdit2 -->					
	<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$nilai = $_POST['t_item'];
	if($nilai > 10)
		{echo '<script type="text/javascript">alert("./Maksimal Jumlah Pemeriksaan Hingga 10 Aksi! \n./Gagal Menambahkan Kolom! :(");</script>';
		die();}
	else { for($x=1; $x<=$nilai; $x++) 
	{
	?>
	
	<div class="form-group">				
		<label class="col-xs-4 control-label">Detil Pemeriksaan</label>
			<div class="col-xs-5 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span></span>
						<select class="form-control" id="combo_<?php echo $x;?>" name="periksa[]" onchange="updateValue_<?php echo $x;?>()">
							<option value="" selected>Pilih Pemeriksaan</option>
							<option class="divider" disabled>====================</option>
														
							<!-- Looping #FormEdit2 Obat Generik -->						
							<?php  
								mysql_connect('localhost','root','');  
								mysql_select_db('puskesmas');  
								$sqlTampil="SELECT * FROM tarif";  
								$qryTampil=mysql_query($sqlTampil); 
							?> 
		
							<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) {?> 

							<option value="<?php echo $dataTampil['periksa']?>" label="<?php echo $dataTampil['periksa']?>"><?php echo $dataTampil['periksa']?></option>
														
							<?php } ?>
	
						</select>
				</div>
			</div>	
	</div>
	
	<div class="form-group">
		<label class="col-md-4 control-label">Biaya</label>
			<div class="col-md-5 inputGroupContainer">
				<div class="input-group">
					<input type="text" id="kol1_<?php echo $x;?>"  name="biaya[]" readonly class="it form-control" placeholder="Biaya..">
						<span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
				</div>
			</div>
	</div>
							
<script>
$("#combo_<?php echo $x;?>").on('change',function(e) {
  e.preventDefault();
  var nm_obt_<?php echo $x;?> = $("#combo_<?php echo $x;?>").val(); 
  var query_<?php echo $x;?> = 'periksa='+nm_obt_<?php echo $x;?>;
  $.ajax({
    type:'POST',
    data:query_<?php echo $x;?>,
    url:'cekTarifAJAX.php',
    success:function(data) {
    $("#kol1_<?php echo $x;?>").val(data); 
    }
  });
});
</script>
	
	<!-- Akhir Looping #FormEdit2 -->	
<?php
}}
?>
			
			
				<div class="form-group">
					<label class="col-xs-4 control-label">Total Biaya Periksa</label>
						<div class="col-xs-4 inputGroupContainer">
							<input type="text" class="form-control" readonly id="kol_t_p" name="kol_t_p"/>
						</div>
						<div class="col-xs-3">
							<button type="button" id="btn_1" class="btn btn-default" onclick="tot();">Hitung</button>
						</div>
				</div>
	<!-- JS #btn_Total Click (Total Harga Keseluruhan) -->		
<script>
	function tot()
		{
			var jumlahIT = document.getElementsByClassName("it");
			var total = 0;
			for(var i = 0; i < jumlahIT.length; i++)
				{
			total = total + parseFloat(document.getElementById("kol1_"+(i+1)).value);
				}
			document.getElementById('kol_t_p').value = total;
			return total;
		}
</script>	
							
					<?php
					@mysql_connect('localhost','root','');  
					mysql_select_db('puskesmas');  
					$sqlTampil="SELECT * FROM apotek WHERE id_pasien='$_GET[id_pasien]';";
					$qryTampil=mysql_query($sqlTampil);  
					$dataTampil=mysql_fetch_array($qryTampil);  
					?> 
				
			<hr style="margin-bottom:10px;">
			<h4><center>Biaya Pembelian Obat</center></h4>
			<hr style="margin-bottom:10px;">
			
			<!-- Hidden Informasi-->
				<div class="form-group">
					<textarea class="form-control" id="detil_beli" name="detil_beli" readonly rows="6" placeholder="Detil.."><?php echo $dataTampil['detil_beli']; ?></textarea>
					<input type="text" class="form-control" readonly id="id_psn_hide" name="id_psn_hide" value="<?php echo $dataTampil['id_pasien']; ?>"/>
					<input type="text" class="form-control" readonly id="no_transaksi" name="no_transaksi" value="<?php echo $NoUrutTransaksi; ?>" />
				</div>	
				
				<script>$("#detil_beli").hide(); $("#no_transaksi").hide(); $("#id_psn_hide").hide();</script>
				
				<div class="form-group">
					<label class="col-xs-4 control-label">Detil Pembelian Obat</label>
						<div class="col-xs-5 ">
							<?php echo $dataTampil['detil_beli']; ?>
						</div>
				</div>	
				
				<div class="form-group">
					<label class="col-xs-4 control-label">Total Harga Obat</label>
						<div class="col-xs-5 inputGroupContainer">
							<input type="text" class="form-control" readonly id="kol_t_obt" name="kol_t_obt" value="<?php echo $dataTampil['harga']; ?>" />
						</div>
				</div>
				
			<hr style="margin-bottom:10px;">
			<h4><center>Total Biaya Pemeriksaan Pasien</center></h4>
			<hr style="margin-bottom:10px;">
				
				<div class="form-group">
					<label class="col-xs-4 control-label">Total Periksa + Obat</label>
						<div class="col-xs-4 inputGroupContainer">
							<input type="text" class="form-control" readonly id="kol_t_o_p" name="kol_t_o_p"/>
						</div>
						<div class="col-xs-3">
							<button type="button" id="btn_2" class="btn btn-default">Hitung</button>
						</div>
				</div>
				
<script>
$("#btn_2").on('click',function() {
	var a = parseInt($("#kol_t_obt").val());
	var b = parseInt($("#kol_t_p").val());
	$("#kol_t_o_p").val(a+b);
});
</script>


				
				<div class="form-group">
					<label class="col-xs-4 control-label">Metode Bayar</label>
						<div class="col-xs-4 inputGroupContainer">
							<input type="text" class="form-control" readonly name="met_byr" id="met_byr" value="<?php echo $metode; ?>" />
						</div>
						<div class="col-xs-3">
							<button type="button" id="btn_3" class="btn btn-default" onclick="runMetode();">Proses</button>
						</div>
				</div>
				
<script>
function runMetode() {
   
	var a = document.getElementById("met_byr");
	var b = document.getElementById("kol_t_o_p");
	
	if(a.value == "Askes")
		document.getElementById("kol_t_semua").value = 0;
	
	if(a.value == "Kartu Indonesia Sehat")
		document.getElementById("kol_t_semua").value = 0;

	if(a.value == "Jamkesmas / BPJS Kesehatan")
		document.getElementById("kol_t_semua").value = 0;

	if(a.value == "Tunai")
		document.getElementById("kol_t_semua").value = b.value;
}
</script>

				<div class="form-group">
					<label class="col-xs-4 control-label">Total Keseluruhan</label>
						<div class="col-xs-5 inputGroupContainer">
							<input type="text" class="form-control" readonly name="kol_t_semua" id="kol_t_semua"/>
						</div>
				</div>
				<div class="form-group">
					<label class="col-xs-4 control-label">Bayar</label>
						<div class="col-xs-4 inputGroupContainer">
							<input type="text" class="form-control" name="kol_byr" id="kol_byr"/>
						</div>
						<div class="col-xs-3">
							<button type="button" id="btn_4" class="btn btn-default">Hitung</button>
						</div>
				</div>
				
<script>
$("#btn_4").on('click',function() {
	var a = parseInt($("#kol_t_semua").val());
	var b = parseInt($("#kol_byr").val());
		if (b < a)
			{
				alert('Uang Kembalian Minus, Tidak Diperkenankan! Cek Kembali Kolom `Bayar`');
			}
		else
			{
				$("#kol_kembali").val(b-a);
			}			
});
</script>
				
				<div class="form-group">
					<label class="col-xs-4 control-label">Kembalian</label>
						<div class="col-xs-5 inputGroupContainer">
							<input type="text" class="form-control" readonly name="kol_kembali" id="kol_kembali"/>
						</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label" id="captchaOperation"></label>
						<div class="col-md-3 inputGroupContainer">
							<input type="text" class="form-control" name="captchaBayar" />
						</div>
				</div>
							
				<div class="form-group">
					<div class="col-xs-5 col-xs-offset-1">
						<button type="submit" id="btn_5" class="btn btn-default" form="FormBayar">Simpan</button>
					</div>
				</div>
				
			</form>
			</div>
			<!-- Modal #ppAwal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='../Resepsionis'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<!-- KontrolValidasi #formEditAkun2 -->
<script> 
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 10), '+', randomNumber(1, 20), '='].join(' '));
	
    $('#FormBayar').formValidation({
        message: 'Nilai ini tidak valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			captchaBayar: {
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