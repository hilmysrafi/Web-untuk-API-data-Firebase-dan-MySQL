<?php
$datamanufacturer = $_GET['manufacturer'];
$datarssi = $_GET['rssi'];
$id =  $_GET['no'];

require 'firebase-php-master/src/firebaseLib.php';

$url = 'https://tugasakhir-6ba7d.firebaseio.com/'; 
$token = '3Gu4rzemufvOYkBQlCuqibuYyz7k9LpejRy9XzfW'; 

$DEFAULT_PATH = '/BLE/Motor '.$id;

date_default_timezone_set('Asia/Jakarta');

$_devicestatus= array(
'Manufactur' => $datamanufacturer,
'RSSI' => $datarssi,
'Waktu' => date('H:i:s||d-m-Y'),
);

$firebase = new \Firebase\FirebaseLib($url, $token);
$firebase->update($DEFAULT_PATH, $_devicestatus);

?>