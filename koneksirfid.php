<?php
define('DBHOST', 'localhost'); //HOST
define('DBUSER', 'codemant_tugasakhir'); //USER 
define('DBPASS', '6Pg7xVvkHG'); //PASSWORD
define('DBNAME', 'codemant_tugasakhir'); //DATABASE NAME

$dbconnect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($dbconnect->connect_error) {
    die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}
?>