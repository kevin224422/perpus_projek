<?php

$server = "localhost";
$user = "u291096144_perpus_kevin";
$password = "?T+OZktKS9a";
$nama_database = "u291096144_perpus_kevin";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>