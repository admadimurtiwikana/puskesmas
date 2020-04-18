<?php
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("puskesmas");

    $foto_nama = $_FILES['anu2']['name']; //nama file (tanpa path)
    $tmp_name  = $_FILES['anu2']['tmp_name']; //nama local temp file di server
    $foto_ukuran = $_FILES['anu2']['size']; //ukuran file (dalam bytes)
    $foto_tipe = $_FILES['anu2']['type']; //tipe filenya (langsung detect MIMEnya)
    $fp = fopen($tmp_name, 'r'); // open file (read-only, binary)
    $foto_pegawai = fread($fp, $foto_ukuran) or die("Tidak dapat membaca source file"); // read file
    $foto_pegawai = mysql_real_escape_string($foto_pegawai) or die("Tidak dapat membaca source file"); // parse image ke string
    fclose($fp); // tuptup file

  /* query dan proses handling untuk melakukan insert ke database*/
$qu = "UPDATE `pegawai` set `foto_pegawai`='$foto_pegawai',`foto_nama`='$foto_nama',`foto_tipe`='$foto_tipe',`foto_ukuran`='$foto_ukuran' 
WHERE id_pegawai='$_SESSION[idpgw]'";
 $re = mysql_query($qu) or die 
 ("Gagal Menambah Akun Pegawai, Hal ini dikarenakan Ukuran File Foto terlalu Besar! Silahkan ulangi kembali");
echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
 ?>
