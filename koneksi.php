<?php
// Konfigurasi database
$host = "localhost"; // Nama host
$user = "root";      // Nama pengguna
$pass = "";          // Kata sandi (kosongkan jika tidak ada kata sandi)
$db   = "klinik_db"; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika berhasil
// echo "Koneksi ke database berhasil!";
?>
