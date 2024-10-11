<?php
session_start(); // Memulai sesi untuk menyimpan data login

// Menghubungkan ke database
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "klinik_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL untuk mendapatkan data pengguna berdasarkan username
$sql = "SELECT id_pengguna, username, password, role FROM pengguna WHERE username = ?";
$stmt = $conn->prepare($sql);

// Pastikan pernyataan berhasil dipersiapkan
if ($stmt === false) {
    die("Error: " . $conn->error);
}

// Mengikat parameter dan menjalankan pernyataan
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Memeriksa apakah pengguna ditemukan
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    
    // Memeriksa password
    if (password_verify($password, $user['password'])) {
        // Menyimpan data pengguna ke sesi
        $_SESSION['user'] = [
            'id_pengguna' => $user['id_pengguna'],
            'username' => $user['username'],
            'role' => $user['role']
        ];
        // Redirect ke halaman setelah login, misalnya dashboard
        header("Location: index.php");
        exit();
    } else {
        echo "Username atau password salah.";
    }
} else {
    echo "Username atau password salah.";
}

// Menutup koneksi
$stmt->close();
$conn->close();
?>
