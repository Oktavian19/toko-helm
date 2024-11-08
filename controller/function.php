<?php

// Fungsi untuk mendapatkan status ketika query dijalankan (cek apakah query berhasil/gagal)
function getStatus($sql, $successMsg = "Sukses", $errMsg = "Error!") {
    global $conn;
    $result = $conn->query($sql);

    if ($result->rowCount() != 0) {
        return json_encode(["status" => "success", "message" => $successMsg]);
    } else {
        return json_encode(["status" => "error", "message" => $errMsg]);
    }
}

// Fungsi untuk menambahkan barang dengan query
function tambahBarang($nama, $deskripsi, $harga, $kuantitas) {
    $sql = "INSERT INTO barang (nama, deskripsi, harga, kuantitas)
            VALUES ('$nama', '$deskripsi', '$harga', '$kuantitas')";
            
    // Memanggil function getStatus dengan parameter query sql yang akan dieksekusi dan pesan ketika success
    return getStatus($sql, "Barang berhasil ditambah!"); 
}

// Fungsi untuk melakukan update dengan query
function editBarang($id, $nama, $deskripsi, $harga, $kuantitas) {
    $sql = "UPDATE barang 
            SET nama = '$nama',
                deskripsi = '$deskripsi', 
                harga = '$harga', 
                kuantitas = '$kuantitas'
            WHERE id = '$id'";
    return getStatus($sql ,"Barang berhasil diedit!");
}

// Fungsi untuk menghapus row dengan query
function hapusBarang($id) {
    $sql = "DELETE FROM barang WHERE id='$id' ";
    return getStatus($sql, "Barang berhasil dihapus!");
}

?>