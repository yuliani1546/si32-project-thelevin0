<?php
include 'config/koneksi.php';

$username = "admin";
$email = "admin@admin.com";
$password = password_hash("123456",PASSWORD_DEFAULT);
$nama_lengkap = "Administrator website";

$query = "
            INSERT INTO users (username, password, nama_lengkap)
            VALUES ('$username','$password','$nama_lengkap')

        ";

if (mysqli_query($conn,$query)) {
    echo "akun berhasil terbuat";
} 

else {
    echo "gagal membuat akun". mysqli_error($conn);
}


?>