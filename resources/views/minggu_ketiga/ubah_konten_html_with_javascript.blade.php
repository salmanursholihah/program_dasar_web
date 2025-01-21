<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM Tree dan Seleksi Elemen</title>
</head>
<body>
    <h1 id="judul">Judul Lama</h1>
    <p class="paragraf">Ini adalah paragraf awal.</p>
    <button onclick="ubahKonten()">Ubah Konten</button>

    <script>
        function ubahKonten() {
            document.getElementById('judul').textContent = "Judul Baru";
            document.querySelector('.paragraf').textContent = "Paragraf ini telah diubah menggunakan JavaScript.";
        }
    </script>
</body>
</html>
