<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desain Layout Versi 2</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
        }
        header {
            background-color: #4caf50;
            color: white;
            text-align: center;
            padding: 15px 0;
        }
        nav {
            background-color: #333;
            padding: 10px 0;
        }
        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 0;
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
            display: grid;
            grid-template-columns: 1fr 3fr;
            gap: 20px;
            padding: 20px;
        }
        aside {
            background-color: #fff;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        main {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #4caf50;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
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
        .media img, .media video, .media audio {
            display: block;
            margin: 15px auto;
            max-width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Website Modern Sederhana</h1>
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
        <!-- Sidebar -->
        <aside>
            <h3>Navigasi Samping</h3>
            <ul>
                <li><a href="#struktur">Struktur Dasar HTML</a></li>
                <li><a href="#semantic">Semantic HTML</a></li>
                <li><a href="#media">Media</a></li>
                <li><a href="#tabel-form">Tabel & Form</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main>
            <!-- Struktur Dasar HTML -->
            <section id="struktur" class="section">
                <h2>Struktur Dasar HTML</h2>
                <p>Contoh tag, elemen, dan atribut.</p>
                <a href="https://www.google.com" target="_blank">Kunjungi Google</a>
            </section>

            <!-- Semantic HTML -->
            <section id="semantic" class="section">
                <h2>Semantic HTML</h2>
                <div>
                    <header>
                        <h3>Header</h3>
                    </header>
                    <nav>
                        <p>Contoh navigasi.</p>
                    </nav>
                    <main>
                        <p>Bagian konten utama.</p>
                    </main>
                    <footer>
                        <p>Footer sederhana.</p>
                    </footer>
                </div>
            </section>

            <!-- Media dalam HTML -->
            <section id="media" class="section">
                <h2>Media dalam HTML</h2>
                <div class="media">
                    <h3>Gambar</h3>
                    <img src="https://via.placeholder.com/300" alt="Gambar Contoh">
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
    </div>

    <footer>
        <p>&copy; 2024 Website Modern Sederhana. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>
