<?php
include '../config/database.php';
include 'function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($_POST['action']) { // Memilih action yang sesuai dengan yang telah ditentukan pada AJAX
        case 'tambah':
            $nama = htmlspecialchars($_POST['nama']);
            $deskripsi = htmlspecialchars($_POST['deskripsi']);
            $harga = $_POST['harga'];
            $kuantitas = $_POST['kuantitas'];
            echo tambahBarang($nama, $deskripsi, $harga, $kuantitas);
            exit;
            break;
        case 'edit':
            $id = $_POST['id'];
            $nama = htmlspecialchars($_POST['nama']);
            $deskripsi = htmlspecialchars($_POST['deskripsi']);
            $harga = $_POST['harga'];
            $kuantitas = $_POST['kuantitas'];
            echo editBarang($id, $nama, $deskripsi, $harga, $kuantitas);
            exit;
        break;
        case 'hapus':
            $id =$_POST['id'];
            echo hapusBarang($id);
            exit;
        break;
        default:
             echo "Tidak ada action yang sesuai!";
        break;
    }
}
?>