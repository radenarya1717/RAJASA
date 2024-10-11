<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Klinik Mental Health</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background: #f0f2f5;
            overflow-x: hidden;
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
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: #d1e7fd;
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
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
            position: relative;
        }

        .navbar-nav a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 2rem 1rem;
            margin-top: 5rem; /* Offset for fixed header */
        }

        h1 {
            color: #007bff;
            margin-bottom: 1rem;
            font-size: 2rem;
            transition: color 0.3s, transform 0.3s;
        }

        h1:hover {
            color: #0056b3;
            transform: scale(1.05);
        }

        .about-section {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
            transition: box-shadow 0.3s, transform 0.3s;
            animation: fadeIn 1s ease-in-out;
        }

        .about-section:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .about-section img {
            border-radius: 8px;
            width: 100%;
            height: auto;
            margin-bottom: 1rem;
            animation: zoomIn 1s ease-in-out;
        }

        .about-text {
            font-size: 1rem;
            line-height: 1.8;
            color: #555;
            animation: slideIn 1s ease-in-out;
        }

        .about-text p {
            margin-bottom: 1rem;
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
    <section class="about-section">
        <h1>Tentang Kami</h1>
        <img src="tentang kami.png" alt="Klinik Sehat">
        <div class="about-text">
            <p>Klinik Mental Health adalah platform kesehatan mental yang didedikasikan untuk membantu setiap individu memahami, merawat, dan meningkatkan kesejahteraan mental mereka. 
            Kami percaya bahwa kesehatan mental sama pentingnya dengan kesehatan fisik, dan setiap orang berhak mendapatkan akses terhadap informasi, dukungan, dan bantuan profesional yang terpercaya. 
            Di era yang serba cepat ini, tantangan kesehatan mental seperti stres, kecemasan, dan depresi semakin meningkat. Namun, dengan pendekatan yang tepat dan dukungan yang memadai, kita semua dapat mencapai keseimbangan hidup yang lebih baik.
            Klinik Mental Health hadir untuk mendampingi perjalanan Anda menuju kesehatan mental yang optimal.</p>
        </div>
    </section>
</div>

<footer>
    <p>&copy; 2024 Klinik Mental Health. Semua hak dilindungi. | <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat dan Ketentuan</a></p>
</footer>

</body>
</html>