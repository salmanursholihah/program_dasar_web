<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel dan Form</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1">
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
    
    <h2>Form Pendaftaran</h2>
    <form action="#" method="post">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim"><br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>
