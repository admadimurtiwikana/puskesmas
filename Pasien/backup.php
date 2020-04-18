<html>
<head></head>

<!-- ModalMain #ppInsert -->
<div class="modal fade" id="ppInsert" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"  aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">

			<!-- Header MainModal #ppInsert -->     
			<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-pencil"></span> Lengkapi Akun</h4>	
				<div align="left">Harap lengkapi Identitas diri Anda dengan Benar, guna menunjang Kesehatan Anda !</div>
			</div>

			<!-- Isi MainModal #ppInsert -->
			<div class="modal-body">
	
				<!-- Form Boostrap Wizard #formInsert -->
				<form id="FormInsert" class="form-horizontal" action="cekLengkapiAkun.php" method="post">
					<ul class="nav nav-pills">
						<li class="active"><a href="#tab-1" data-toggle="tab">Identitas Diri</a></li>
						<li><a href="#tab-2" data-toggle="tab">Kontak & Alamat</a></li>
						<li><a href="#tab-3" data-toggle="tab">Keluhan & Pembayaran</a></li>
					</ul>
					
					<!-- Tab Boostrap Wizard #formInsert -->
					<div class="tab-content">
        
						<!-- Tab Pertama #formInsert -->
						<div class="tab-pane active" id="tab-1">
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
										<input type="text" class="form-control" name="tgl_lhr" placeholder="HH/BB/TTTT"/>
									</div>
							</div>		
			
							 <div class="form-group">
								<label class="col-xs-3 control-label">Tempat Lahir</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" class="form-control" name="tmp_lhr" placeholder="Tempat lahir.."/>
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
		
						<!-- Tab Kedua #formInsert -->
						<div class="tab-pane" id="tab-2">
							<div class="form-group">
								<label class="col-xs-3 control-label">No.HP</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" class="form-control" name="hp" placeholder="No.HP.."/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Alamat</label>
									<div class="col-xs-5 inputGroupContainer">
										<textarea class="form-control" name="alamat" rows="6" placeholder="Alamat.."></textarea>
									</div>
							</div>
						</div>
		
		
						<!-- Tab Ketiga #formInsert -->
						<div class="tab-pane" id="tab-3">
							<div class="form-group">
								<label class="col-xs-3 control-label">Keluhan</label>
									<div class="col-xs-7 selectContainer">
										<select name="keluhan" id="keluhan" class="form-control" onchange="runKeluhan()">
											<option value="" selected>Pilih Keluhan</option>
											<option class="divider" disabled></option>
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
											
											<option class="divider" disabled>PELAYANAN OBAT</option>
											<option value="Pelayanan Resep / Konsultasi Obat">Pelayanan Resep / Konsultasi Obat</option>
										</select>
       
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Dokter Pemeriksa</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" readonly class="form-control" id="dokter" name="dokter" placeholder="Dokter Pemeriksa.."/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">Ruang Rawat</label>
									<div class="col-xs-5 inputGroupContainer">
										<input type="text" readonly class="form-control" id="r_rawat" name="r_rawat" placeholder="Ruang Rawat.."/>
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

					<!-- Previous/Next buttons #formInsert -->
					<ul class="pager wizard">
						<li class="previous"><a href="javascript: void(0);">Kembali</a></li>
						<li class="next"><a href="javascript: void(0);">Lanjut</a></li>
					</ul>
					</div>
				</form>


	
			</div>

			<!-- Footer MainModal #ppInsert -->
			<div class="modal-footer">		
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>	
			</div>
		</div>
	</div>
</div>

<!-- Konfig Select Keluhan #formInsert -->
<script>
function runKeluhan() {
   
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
	
	if(cek.value == "Pelayanan Resep / Konsultasi Obat")
		document.getElementById("dokter").value = "Ajeng";
	if(cek.value == "Pelayanan Resep / Konsultasi Obat")
		document.getElementById("r_rawat").value = "Pelayanan Obat";
	
	}
</script>

<!-- Konfig #formInsert -->
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

  $('#FormInsert')
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
                var numTabs    = $('#FormInsert').find('.tab-pane').length,
                    isValidTab = validateTab(index - 1);
                if (!isValidTab) {
                    return false;
                }

                if (index === numTabs) {
                    // We are at the last tab

                    // Uncomment the following line to submit the form using the defaultSubmit() method
                    $('#FormInsert').formValidation('defaultSubmit');

                }

                return true;
            },
            onPrevious: function(tab, navigation, index) {
                return validateTab(index + 1);
            },
            onTabShow: function(tab, navigation, index) {
                // Update the label of Next button when we are at the last tab
                var numTabs = $('#FormInsert').find('.tab-pane').length;
                $('#FormInsert')
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
        var fv   = $('#FormInsert').data('formValidation'), // FormValidation instance
            // The current tab
            $tab = $('#FormInsert').find('.tab-pane').eq(index);

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
</script