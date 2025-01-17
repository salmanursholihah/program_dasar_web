<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        input, select, button {
            margin: 10px;
            padding: 10px;
            width: 200px;
            font-size: 16px;
        }

        #result {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <input type="number" id="num1" placeholder="Angka pertama">
    <input type="number" id="num2" placeholder="Angka kedua">
    <select id="operator">
        <option value="+">Tambah</option>
        <option value="-">Kurang</option>
        <option value="*">Kali</option>
        <option value="/">Bagi</option>
    </select>
    <button onclick="calculate()">Hitung</button>
    <div id="result"></div>

    <script>
        function calculate() {
            const num1 = parseFloat(document.getElementById('num1').value);
            const num2 = parseFloat(document.getElementById('num2').value);
            const operator = document.getElementById('operator').value;

            if (isNaN(num1) || isNaN(num2)) {
                document.getElementById('result').innerText = "Masukkan angka yang valid.";
                return;
            }

            let result;
            switch (operator) {
                case '+': result = num1 + num2; break;
                case '-': result = num1 - num2; break;
                case '*': result = num1 * num2; break;
                case '/': result = num2 !== 0 ? num1 / num2 : "Tidak bisa membagi dengan nol"; break;
                default: result = "Operator tidak valid.";
            }

            document.getElementById('result').innerText = `Hasil: ${result}`;
        }
    </script>
</body>
</html>
