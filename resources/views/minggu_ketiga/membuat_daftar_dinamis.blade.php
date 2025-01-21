<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Elemen Dinamis</title>
</head>
<body>
    <h1>Daftar Buah</h1>
    <ul id="daftarBuah">
        <li>Apel</li>
        <li>Pisang</li>
    </ul>
    <button onclick="tambahBuah()">Tambah Buah</button>

    <script>
        function tambahBuah() {
            const buahBaru = prompt("Masukkan nama buah:");
            if (buahBaru) {
                const li = document.createElement('li');
                li.textContent = buahBaru;
                document.getElementById('daftarBuah').appendChild(li);
            }
        }
    </script>
</body>
</html>
