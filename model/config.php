<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "easpweb";
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
// $db = mysqli_connect($server, $user, $password, $nama_database);

if( !$pdo ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    echo "Koneksi gagal!";
}


?>
