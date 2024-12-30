<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desain Terstruktur Sederhana</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        nav {
            background-color: #444;
            color: white;
            padding: 10px 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        main {
            padding: 20px;
        }
        .section {
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ccc;
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
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .media img, .media video, .media audio {
            display: block;
            margin: 10px auto;
            max-width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Website Sederhana</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#struktur">Struktur Dasar HTML</a></li>
            <li><a href="#semantic">Semantic HTML</a></li>
            <li><a href="#media">Media</a></li>
            <li><a href="#tabel-form">Tabel dan Form</a></li>
        </ul>
    </nav>

    <main>
        <!-- Struktur Dasar HTML -->
        <section id="struktur" class="section">
            <h2>Struktur Dasar HTML</h2>
            <p>Ini adalah contoh struktur dasar HTML yang menampilkan tag, elemen, dan atribut.</p>
            <a href="https://www.google.com" target="_blank">Kunjungi Google</a>
        </section>

        <!-- Semantic HTML -->
        <section id="semantic" class="section">
            <h2>Semantic HTML</h2>
            <p>Berikut adalah contoh penggunaan header, nav, main, dan footer untuk membuat layout sederhana.</p>
            <div>
                <header>
                    <h3>Header</h3>
                </header>
                <nav>
                    <p>Navbar sederhana dengan tautan.</p>
                </nav>
                <main>
                    <p>Main content area untuk informasi utama.</p>
                </main>
                <footer>
                    <p>Footer untuk hak cipta atau informasi tambahan.</p>
                </footer>
            </div>
        </section>

        <!-- Media dalam HTML -->
        <section id="media" class="section">
            <h2>Media dalam HTML</h2>
            <div class="media">
                <h3>Gambar</h3>
                <img src="https://via.placeholder.com/300" alt="Contoh Gambar">
                <h3>Video</h3>
                <video controls>
                    <source src="video-contoh.mp4" type="video/mp4">
                    Browser Anda tidak mendukung video tag.
                </video>
                <h3>Audio</h3>
                <audio controls>
                    <source src="audio-contoh.mp3" type="audio/mp3">
                    Browser Anda tidak mendukung audio tag.
                </audio>
            </div>
        </section>

        <!-- Tabel dan Form -->
        <section id="tabel-form" class="section">
            <h2>Tabel dan Form</h2>
            <h3>Tabel Data</h3>
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
            <h3>Form Pendaftaran</h3>
            <form action="#" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama">
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email">
                
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan NIM">
                
                <button type="submit">Daftar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Website Sederhana. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>
