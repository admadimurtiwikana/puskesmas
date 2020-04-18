<html>
<head>
<script language="javascript">
var i = 1;
function changeIt()
{

my_div.innerHTML = my_div.innerHTML +"<br><input type='text' name='mytext'+ i>"
i++;
}
</script>
</head>


<input type="text" id="txt1"  onkeyup="kali();" />
<input type="text" id="txt2"  onkeyup="kali();" />
<input type="text" id="txt3" />

<select name="obat[]" id="obat" class="form-control" onchange="runObat()">
	<option value="" selected>PILIH OBAT</option>
	<option class="divider" disabled>===================================</option>
	<option class="divider" disabled>OBAT GENERIK</option>
	<option value="Amoxicillin 500mg">Amoxicillin 500mg</option>
	<option value="Ampicillin 500mg">Ampicillin 500mg</option>
</select>

<input type="button" value="test" onClick="changeIt()">

<div id="my_div"></div>
</html>

<script>
function kali() {
	
	for(j=0; j<lines.length; j++){
            var Hrg_Satuan = document.getElementById('txt1'+j).value;
            var Jml_Beli = document.getElementById('txt2'+j).value;
            var total = parseInt(Hrg_Satuan) * parseInt(Jml_Beli);
            if (!isNaN(total)) {
                document.getElementById('txt3'+j).value = total;
            }
        }
}
</script>

<script>
function runObat() {
   
	var cek = document.getElementById("obat");
	if(cek.value == "Amoxicillin 500mg")
		document.getElementById("txt1").value = 6000;
	
	if(cek.value == "Ampicillin 500mg")
		document.getElementById("txt1").value = 5500;

	if(cek.value == "Antalgin 500mg")
		document.getElementById("txt1").value = 2500;

	if(cek.value == "Dexamethasone 0,5mg")
		document.getElementById("txt1").value = 1500;
}
</script>