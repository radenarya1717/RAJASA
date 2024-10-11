<?php
include 'koneksi.php';

$sql = "SELECT * FROM services";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - Klinik Mental Health</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background: #f0f2f5;
        }

        header {
            background: linear-gradient(90deg, #007bff, #00aaff);
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        header:hover {
            background: linear-gradient(90deg, #0056b3, #007bff);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: auto;
            padding: 0 1rem;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .navbar-nav {
            display: flex;
            gap: 1.5rem;
        }

        .navbar-nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            position: relative;
        }

        .navbar-nav a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 2rem 1rem;
            margin-top: 5rem; /* Offset for fixed header */
        }

        h1, h2 {
            color: #007bff;
            margin-bottom: 1rem;
            transition: color 0.3s, transform 0.3s;
        }

        h1:hover, h2:hover {
            color: #0056b3;
            transform: scale(1.05);
        }

        .section {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            padding: 1.5rem;
            transition: box-shadow 0.3s, transform 0.3s;
        }

        .section:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .service-card {
            display: flex;
            align-items: center;
            background: #e9ecef;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s, transform 0.3s;
            cursor: pointer;
        }

        .service-card img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 1rem;
        }

        .service-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: scale(1.02);
        }

        footer {
            background: #343a40;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }

        footer a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

<header>
    <div class="navbar">
        <div class="navbar-brand">Klinik Mental Health</div>
        <div class="navbar-nav">
            <a href="index.php">Beranda</a>
            <a href="services.php">Layanan</a>
            <a href="about.php">About</a>
            <a href="login.php" class="login-btn">Login</a>
        </div>
    </div>
</header>

<div class="container">
    <section class="section">
        <h1>Layanan Kami</h1>
        <div class="service-card" data-img="konsultasi kesehatan mental.jpg">
            <img src="konsultasi kesehatan mental.jpg" alt="Konsultasi Medis Umum">
            <div>
                <h2>Konsultasi Kesehatan Mental</h2>
                <p>Konsultasi dengan psikolog untuk pemeriksaan kesehatan mental secara menyeluruh dan solusi atas masalah kesehatan Anda.</p>
            </div>
        </div>

        <div class="service-card" data-img="Self-Care.jpg">
            <img src="Self-Care.jpg" alt="Self-Care">
            <div>
                <h2>Self-Care</h2>
                <p>Perawatan diri untuk mencapai kebahagiaan.</p>
            </div>
        </div>

        <div class="service-card" data-img="program terapi.webp">
            <img src="program terapi.webp" alt="Program Terapi">
            <div>
                <h2>Program Terapi</h2>
                <p>Terapis akan membantu Anda memahami dan mengatasi masalah yang memengaruhi kesehatan mental Anda.</p>
            </div>
        </div>

        <div class="service-card" data-img="edukasi.png">
            <img src="edukasi.png" alt="Kampanye Kesehatan Mental dan Edukasi">
            <div>
                <h2>Kampanye Kesehatan Mental dan Edukasi</h2>
                <p>Edukasi yang tepat dan kampanye untuk meningkatkan pemahaman pentingnya kesehatan mental.</p>
            </div>
        </div>

        <div class="service-card" data-img="komunitas.jpg">
            <img src="komunitas.jpg" alt="Forum dan Komunitas Pendukung">
            <div>
                <h2>Forum dan Komunitas Pendukung</h2>
                <p>Tempat berbagi dan mendapat dukungan dari komunitas untuk kesehatan mental yang lebih baik.</p>
            </div>
        </div>
    </section>
</div>

<footer>
    <p>&copy; 2024 Klinik Mental Health. Semua hak dilindungi. | <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat dan Ketentuan</a></p>
</footer>

</body>
</html>
