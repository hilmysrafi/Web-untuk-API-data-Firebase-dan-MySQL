<?php 
 require_once 'koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$id = $_POST['id'];
 	$nama = $_POST['nama'];
 	$saldo = $_POST['saldo'];
 	
 	$query = "UPDATE  tb_rfid SET saldo = '$saldo'  WHERE id='$id'";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil topup')) :  json_encode(array('kode' =>2, 'pesan' => 'Gagal topup'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>