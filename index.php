<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Helm</title>
    <link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/jumpicon-automotive-filled-line-1/32/-_Helmet-Moto-Safety-Head-Gear-Protection-256.png">
    <link rel="stylesheet" href="model/style.css">
</head>
<body>
    <header>
        <h1>Toko Helm 123</h1>
    </header>

    <main>
        <div class="container">
            <form id="tambahForm">
                    <label for="nama">Nama Helm : </label>
                    <input type="text" name="nama" id="nama">

                    <label for="deskripsi">Deskripsi Helm : </label>
                    <input type="text" name="deskripsi" id="deskripsi">

                    <label for="harga">Harga Helm : </label>
                    <input type="text" name="harga" id="harga">

                    <label for="kuantitas">Kuantitas Helm : </label>
                    <input type="text" name="kuantitas" id="kuantitas">

                    <input type="submit" value="Tambah Barang">
            </form>
            <?php include 'view/component/tabel-helm.php'?> <!-- Memanggil table-helm.php pada folder tertera untuk dimasukkan ke index -->
        </div>
    </main>

    <script src="controller/jquery-3.7.1.js"></script>
    <script src="controller/script.js"></script>
</body>
</html>