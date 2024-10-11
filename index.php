<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mental Health</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #fff, #343a40);
        }

        header {
            background: linear-gradient(90deg, #343a40, #00aaff);
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: background-color 0.3s ease;
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
        }

        .navbar-nav a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .login-btn {
            background-color: #28a745;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 1rem;
            margin-top: 4rem;
        }

        h2 {
            color: #007bff;
            text-align: center;
            transition: color 0.3s, transform 0.3s;
        }

        h2:hover {
            transform: scale(1.05);
        }

        .section {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            padding: 1rem;
            transition: box-shadow 0.3s, transform 0.3s;
            animation: fadeIn 1s ease-in-out;
        }

        .section:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 40px 0;
        }

        .footer-content a {
            color: #007bff;
            text-decoration: none;
        }

        .social-media a {
            color: #fff;
            margin: 0 10px;
            font-size: 18px;
        }

        @media (max-width: 768px) {
            .navbar-nav {
                display: none;
                flex-direction: column;
                background-color: #007bff;
                position: absolute;
                top: 100%;
                width: 100%;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
            }

            .navbar-nav.active {
                display: flex;
                max-height: 500px;
            }

            .navbar-toggler {
                display: block;
                background-color: #fff;
                border: none;
                padding: 0.5rem 1rem;
                color: #007bff;
                font-size: 1.5rem;
            }
        }

        .doctor-image {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .doctor-image:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    <header>
        <div class="navbar">
            <div class="navbar-brand">Klinik Mental Health</div>
            <button class="navbar-toggler">&#9776;</button>
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
            <h2>Selamat Datang di Klinik Mental Health</h2>
            <p>Di Klinik Mental Health, kami percaya bahwa kesehatan mental adalah aset yang paling berharga. Temukan dukungan dan informasi terpercaya untuk menjaga kesehatan pikiran dan jiwa Anda.</p>
        </section>

        <section class="section">
            <h2>Visi Kami</h2>
            <p>Menjadi platform kesehatan mental terdepan yang menyediakan akses mudah dan terjangkau bagi semua individu untuk memperoleh informasi, dukungan, dan bantuan profesional dalam menjaga kesejahteraan mental dan emosional.</p>
        </section>

        <section class="section">
            <h2>Misi Kami</h2>
            <ul>
                <li>Menyediakan informasi yang kredibel dan terpercaya tentang kesehatan mental.</li>
                <li>Membuka akses terhadap layanan konseling dan terapi dengan profesional berpengalaman.</li>
                <li>Mengurangi stigma terkait kesehatan mental dengan meningkatkan kesadaran.</li>
                <li>Mengedukasi masyarakat mengenai pentingnya kesehatan mental.</li>
            </ul>
        </section>

        <section class="section">
            <h2>Layanan Kami</h2>
            <ul>
                <li>Konseling Online</li>
                <li>Self-Care</li>
                <li>Program Terapi</li>
                <li>Kampanye Kesehatan Mental dan Edukasi</li>
            </ul>
        </section>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Klinik Mental Health. Semua hak dilindungi.</p>
            <div class="social-media">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script>
        document.querySelector('.navbar-toggler').addEventListener('click', function () {
            const navbarNav = document.querySelector('.navbar-nav');
            navbarNav.classList.toggle('active');
        });
    </script>
    
</body>
</html>