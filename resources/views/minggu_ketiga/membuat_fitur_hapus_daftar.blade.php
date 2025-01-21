<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Elemen</title>
</head>
<body>
    <h1>Daftar Tugas</h1>
    <ul id="daftarTugas">
        <li>Mengerjakan PR <button onclick="hapusItem(this)">Hapus</button></li>
        <li>Mencuci piring <button onclick="hapusItem(this)">Hapus</button></li>
    </ul>

    <script>
        function hapusItem(tombol) {
            const li = tombol.parentElement;
            li.remove();
        }
    </script>
</body>
</html>
