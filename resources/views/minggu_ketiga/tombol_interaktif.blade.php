<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Listener</title>
</head>
<body>
    <button id="klikSaya">Klik Saya</button>
    <p id="pesan">Tombol belum diklik.</p>

    <script>
        document.getElementById('klikSaya').addEventListener('click', function() {
            document.getElementById('pesan').textContent = "Tombol sudah diklik!";
        });
    </script>
</body>
</html>
