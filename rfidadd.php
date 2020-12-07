<?php
 include 'koneksirfid.php'; 
 $uid = $_GET['id'];
 
 $sql = "INSERT INTO tb_rfid (id) VALUES ('$uid')";
	if(mysqli_query($dbconnect, $sql)){
		echo "Id Sukses Terdaftar";
	} else{
		echo "Id Telah Terdaftar";
	}
?>