<?php

$server = "localhost";
$username = "root";
$password = "";

$db_name = "dbpegawai";

$koneksi = mysqli_connect($server, $username, $password, $db_name);

if (!$koneksi) {
    echo "Koneksi Gagal";
}