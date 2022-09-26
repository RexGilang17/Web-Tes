<?php
$server = "localhost";
$user = "root";
$password = "";
$db_mahasiswa = "db_mahasiswa";
$koneksi = mysqli_connect($server, $user, $password, $db_mahasiswa);
if (!$koneksi) {
     die("Gagal terhubung dengan database: " . mysqli_connect_error());
}