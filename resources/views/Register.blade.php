<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Halaman Cetak</title>
</head>
<body>
    <h1>Ini adalah halaman web contoh</h1>
    <p>Ini adalah paragraf dalam halaman web.</p>
    
    <button onclick="cetakHalaman()">Cetak Halaman</button>

    <script>
        function cetakHalaman() {
            window.print();
        }
    </script>
</body>
</html>
