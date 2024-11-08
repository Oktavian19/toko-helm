<?php
try {
    $srvName = "LAPTOP-0H3EPKAS\SQLEXPRESS"; // Menyesuaikan Nama Server
    $db = "TokoHelm"; // Memilih Database yang akan digunakan

    $dsn = "sqlsrv:Server=$srvName;Database=$db";  // Menyimpan informasi database berdasarkan informasi yang telah dikumpulkan
    $conn = new PDO($dsn); // Menghubungkan ke Database
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi Database Gagal!<br/>";
    die("Error: ". $e->getMessage());
}
?>