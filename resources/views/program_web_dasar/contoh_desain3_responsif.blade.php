<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desain Modern Responsif</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
        }

        header {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 20px;
        }

        nav {
            background-color: #333;
            padding: 10px 0;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        nav ul li a:hover {
            background-color: #575757;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .card {
            flex: 1 1 calc(33.333% - 40px); /* 3 kolom */
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        form {
            margin-top: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        footer {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .card {
                flex: 1 1 calc(50% - 40px); /* 2 kolom */
            }
        }

        @media (max-width: 576px) {
            .card {
                flex: 1 1 100%; /* 1 kolom */
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Website Modern dan Responsif</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#struktur">Struktur HTML</a></li>
            <li><a href="#semantic">Semantic HTML</a></li>
            <li><a href="#media">Media</a></li>
            <li><a href="#tabel-form">Tabel & Form</a></li>
        </ul>
    </nav>

    <div class="container">
        <!-- Struktur Dasar HTML -->
        <div class="card" id="struktur">
            <h3>Struktur Dasar HTML</h3>
            <p>Ini adalah contoh struktur dasar HTML dengan tag, elemen, dan atribut.</p>
            <a href="https://www.google.com" target="_blank">Kunjungi Google</a>
        </div>

        <!-- Semantic HTML -->
        <div class="card" id="semantic">
            <h3>Semantic HTML</h3>
            <p>Contoh header, nav, main, dan footer untuk layout sederhana.</p>
            <div>
                <header>
                    <h4>Header</h4>
                </header>
                <nav>
                    <p>Contoh navigasi.</p>
                </nav>
                <main>
                    <p>Bagian utama konten.</p>
                </main>
                <footer>
                    <p>Footer sederhana.</p>
                </footer>
            </div>
        </div>

        <!-- Media dalam HTML -->
        <div class="card" id="media">
            <h3>Media dalam HTML</h3>
            <h4>Gambar</h4>
            <img src="https://via.placeholder.com/300" alt="Gambar Contoh" style="width: 100%;">
            <h4>Video</h4>
            <video controls style="width: 100%;">
                <source src="video-contoh.mp4" type="video/mp4">
                Browser Anda tidak mendukung video tag.
            </video>
            <h4>Audio</h4>
            <audio controls style="width: 100%;">
                <source src="audio-contoh.mp3" type="audio/mp3">
                Browser Anda tidak mendukung audio tag.
            </audio>
        </div>

        <!-- Tabel dan Form -->
        <div class="card" id="tabel-form">
            <h3>Tabel dan Form</h3>
            <h4>Tabel Data</h4>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ani</td>
                        <td>12345</td>
                        <td>Teknik Informatika</td>
                    </tr>
                    <tr>
                        <td>Budi</td>
                        <td>67890</td>
                        <td>Sistem Informasi</td>
                    </tr>
                </tbody>
            </table>
            <h4>Form Pendaftaran</h4>
            <form action="#" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama">
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email">
                
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan NIM">
                
                <button type="submit">Daftar</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Website Modern Responsif. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>
