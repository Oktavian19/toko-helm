<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $kuantitas = $_POST['kuantitas'];
}
?>

<form id="editForm">
    <input type="text" name="id" id="id" value="<?=$id?>" hidden>

    <label for="nama">Nama Helm: </label>
    <input type="text" name="nama" id="nama" value="<?=$nama?>">
    
    <label for="deskripsi">Deskripsi Helm: </label>
    <input type="text" name="deskripsi" id="deskripsi" value="<?=$deskripsi?>">
    
    <label for="harga">Harga Helm: </label>
    <input type="text" name="harga" id="harga" value="<?=$harga?>">
    
    <label for="kuantitas">Kuantitas Helm: </label>
    <input type="text" name="kuantitas" id="kuantitas" value="<?=$kuantitas?>">
    
    <input type="submit" value="Edit Barang">
</form>

<script src="../../controller/jquery-3.7.1.js"></script>
<script src="../../controller/script.js"></script>