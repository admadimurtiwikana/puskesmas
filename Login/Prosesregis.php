<?php

    include "koneksi.php";

    $idpasien = $_POST['idpsn'];
	$password = $_POST['passpsn'];
    $nama_Pasien = $_POST['namapasien'];
    $tgllahir= $_POST['tgllahir'];
    $tmptlahir = $_POST['Tempatlahir'];
    $gender = $_POST['sex'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    $alamat = $_POST['Alamat'];
    $nohp = $_POST['Nohp'];
    // $level = "pasien";
    
    $regis = "INSERT INTO data_pasien VALUES('$idpasien','$password','$nama_Pasien','$tgllahir','$tmptlahir','$gender','$agama','$status','$alamat','$nohp')";

    
    mysqli_query($conn,$regis);
	
    header('location:Pasien.php?');
?>