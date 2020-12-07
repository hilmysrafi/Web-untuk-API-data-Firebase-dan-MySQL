<?php 
 require_once 'koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$id = $_POST['id'];
 	$nama = $_POST['nama'];
 	$nik = $_POST['nik'];
 	$alamat = $_POST['alamat'];

 	$query = "UPDATE  tb_rfid SET nama = '$nama', nik = '$nik', alamat = '$alamat'  WHERE id='$id'";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Data berhasil disimpan')) :  json_encode(array('kode' =>2, 'pesan' => 'Data gagal disimpan'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>