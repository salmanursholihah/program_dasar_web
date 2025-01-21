<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        input, button {
            margin: 5px 0;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>To-Do List</h1>
    <input type="text" id="inputTugas" placeholder="Tulis tugas baru...">
    <button onclick="tambahTugas()">Tambah</button>
    <ul id="listTugas"></ul>

    <script>
        function tambahTugas() {
            const tugas = document.getElementById('inputTugas').value;
            if (tugas) {
                const li = document.createElement('li');
                li.innerHTML = `
                    ${tugas} 
                    <button onclick="hapusTugas(this)">Hapus</button>
                `;
                document.getElementById('listTugas').appendChild(li);
                document.getElementById('inputTugas').value = "";
            }
        }

        function hapusTugas(tombol) {
            const li = tombol.parentElement;
            li.remove();
        }
    </script>
</body>
</html>
