<?php


$servername = "localhost";
$database = "uinsi32";
$username = "root";
$password =  "";

// Buat koneksi database

$conn = mysqli_connect($servername,$username,$password,$database);

// Cek Koneksi

if (!$conn) {
    die("Koneksi Gagal".mysqli_connect_error());
}

?>