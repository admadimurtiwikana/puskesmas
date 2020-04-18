
<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('test');  
	$email = $_POST['email']; 
	$as = implode(",", $email);
	$ad = explode(",", $as);
    $insert="INSERT INTO `data`(`a`, `b`, `c`) 
	VALUES ('$as','$ad[0]','$ad[2]');";
	
	mysql_query($insert);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=Anu.php" />';
?>