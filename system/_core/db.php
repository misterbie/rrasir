<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_rrasir';
$port = 3306;
$koneksi = mysqli_connect($host, $user, $pass, $db, $port);
//$koneksi = mysqli_connect($host, $user, $pass, $db);
// $koneksi = mysqli_connect('localhost', 'root', '', 'db_rrasir');
if (!$koneksi) {
    echo "Connecting To Database Fail! " . mysqli_error;
}
