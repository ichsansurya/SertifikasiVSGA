<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "dbpus";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db){
    die("Gagal Konek dengan database:" . mysqli_connect_error());
}

?>