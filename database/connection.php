<?php

$server = "localhost";
$username = "root";
$password = "SMAN1.malang";
$database = "serviceit";

//$connection = mysqli_connect($server, $username, $password, $database);
$connection = mysqli_connect($server, $username, $password, $database, 3307);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>