<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknik Informatika - Institut Teknologi dan Bisnis Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            color: #fff;
        }

        header {
            position: relative;
            text-align: center;
            padding: 50px 20px;
            background: rgba(0, 0, 0, 0.7);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            font-size: 3rem;
            text-transform: uppercase;
            animation: float 3s ease-in-out infinite;
        }

        header p {
            margin-top: 10px;
            font-size: 1.2rem;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        nav {
            display: flex;
            justify-content: center;
            padding: 15px 0;
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            transition: transform 0.3s, color 0.3s;
        }

        nav a:hover {
            color: #fdbb2d;
            transform: scale(1.2);
        }

        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 50px 20px;
        }

        .card {
            background: #fff;
            color: #000;
            border-radius: 10px;
            margin: 20px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            transform: perspective(1000px) rotateY(0deg);
            transition: transform 0.6s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: perspective(1000px) rotateY(15deg);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
        }

        .card h3 {
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .card p {
            font-size: 1rem;
            line-height: 1.5;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 50px 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
        }

        footer p {
            font-size: 0.9rem;
        }

        footer p a {
            color: #fdbb2d;
            text-decoration: none;
        }

        footer p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Teknik Informatika</h1>
        <p>Institut Teknologi dan Bisnis Indonesia</p>
    </header>
    <nav>
        <a href="#about">Tentang Kami</a>
        <a href="#program">Program Studi</a>
        <a href="#gallery">Galeri</a>
        <a href="#kontak">Kontak</a>
    </nav>
    <section id="about" class="main-content">
        <div class="card">
            <h3>Visi</h3>
            <p>Mencetak lulusan yang berkompeten dalam bidang teknologi informasi dan mampu bersaing di era global.</p>
        </div>
        <div class="card">
            <h3>Misi</h3>
            <p>Melaksanakan pendidikan, penelitian, dan pengabdian masyarakat berbasis teknologi dan inovasi.</p>
        </div>
    </section>
    <section id="program" class="main-content">
        <div class="card">
            <h3>Program Sarjana</h3>
            <p>Program Teknik Informatika menawarkan kurikulum yang up-to-date dengan kebutuhan industri.</p>
        </div>
        <div class="card">
            <h3>Fasilitas Modern</h3>
            <p>Laboratorium, perpustakaan digital, dan ruang belajar yang mendukung pembelajaran interaktif.</p>
        </div>
    </section>
        <section id="kontak" class="main-content">
        <div class="card">
            <h3>kontak</h3>
            <p>Laboratorium, perpustakaan digital, dan ruang belajar yang mendukung pembelajaran interaktif.</p>
        </div>
    </section>
    <section id="gallery" class="gallery">
        <img src="images/ti1.jpg" alt="Gambar 1">
        <img src="images/ti2.jpg" alt="Gambar 2">
        <img src="images/ti3.jpg" alt="Gambar 3">
        <img src="images/ti4.jpg" alt="Gambar 4">
    </section>
    
    <footer>
        <p>&copy; 2024 Institut Teknologi dan Bisnis Indonesia. All rights reserved. | <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>
