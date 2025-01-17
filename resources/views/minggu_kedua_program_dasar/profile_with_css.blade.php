<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil dengan CSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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

        main {
            padding: 20px;
            text-align: center;
        }

        footer {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        .profile-picture {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Profil Saya</h1>
    </header>
    <main>
        <img class="profile-picture" src="https://via.placeholder.com/150" alt="Foto Profil">
        <h2>Nama: John Doe</h2>
        <p>Profesi: Web Developer</p>
        <p>Hobi: Membaca, Coding, dan Traveling</p>
    </main>
    <footer>
        <p>&copy; 2024 John Doe. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
