<?php
$latitude = $_GET['lti'];
$longitude = $_GET['lon'];


require 'firebase-php-master/src/firebaseLib.php';

$url = 'https://tugasakhir-6ba7d.firebaseio.com/'; 
$token = '3Gu4rzemufvOYkBQlCuqibuYyz7k9LpejRy9XzfW'; 

$DEFAULT_PATH = '/Data GPS/bikegps';

date_default_timezone_set('Asia/Jakarta');

$_devicestatus= array(
'deviceId' => Sepeda_01,
'latitude' => $latitude + 0.0,
'longitude' => $longitude + 0.0,
'lastUpdate' => date('H:i:s//d-m-Y'),
);

$firebase = new \Firebase\FirebaseLib($url, $token);
$firebase->update($DEFAULT_PATH, $_devicestatus);

?>