<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('test');  
	$price = $_POST['book']; 
	$isbn = $_POST['book']; 
	$title = $_POST['book']; 
	$as = implode(",", $price);
	$ad = implode(",", $isbn);
	$ac = implode(",", $title);
    $insert="INSERT INTO `data`(`a`, `b`, `c`) 
	VALUES ('$ac','$ad','$as');";
	
	mysql_query($insert);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=Anu.php" />';
?>