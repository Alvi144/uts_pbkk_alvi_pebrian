<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: url('img/background.jpg');
        }
         footer {
            background: rgb(45, 43, 39);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center" style="color: rgb(15, 15, 15)">Input Barang Database Computer</h1>
        <p style="color: rgb(10, 10, 10)">Silahkan bagi pengunjung yang ingin mencari atau memilih perangkat di toko kami , silakan di isi agar sistem kami bisa memenuhi permintan konsumen.</p>
        <form action="/submit" method="POST" class="mt-4">
                <label for="ATK" style="color: rgb(11, 11, 11)">Barang yang diperlukan:</label>
                <select class="form-control" id="atk" name=atk>
                    <option value="Pilih">Pilih Sesuai Kebutuhan</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Printer">Printer</option>
                    <option value="PC Komputer">PC Komputer</option>
                    <option value="Keyboard">Keryboard Eksternal</option>
                    <option value="CPU">CPU Komputer </option>
                    <option value="Monitor">Monitor</option>
                    <option value="Hardisk">Hardisk / SSD penyimpanan</option>
                    <option value="Mainboat">Mainboat Komputer</option>
                </select>

                <label for="Jumlah" style="color: rgb(11, 11, 11)">Jumlah yang diperlukan:</label>
                <select class="form-control" id="atk" name=atk>
                    <option value="Pilih">Pilih Sesuai Kebutuhan</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>

            </div>
            <div class="d-flex justify-content-center mt-3">
                <a href="clear" class="btn btn-primary btn-lg">Input Barang</a>
            </div>
        </form>
    </div>

    <footer class="bg-dark text-white text-center">
        <p>@Database Computer Pontianak - Pemograman Berbasis Kerangka Kerja (PBKK) tahun 2024
          <a href="https://www.instagram.com/afebriiaan/" class="text-danger font-weight-bold">Alvi Pebrian</a>
        </p>
    </footer>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\proje\application\uts_pbkk_alvi-pebrian\resources\views/iventori.blade.php ENDPATH**/ ?>