CREATE DATABASE TokoHelm
GO

CREATE TABLE barang
(
    nama VARCHAR(20) NOT NULL PRIMARY KEY,
    deskripsi TEXT NOT NULL,
    harga INT NOT NULL,
    kuantitas INT NOT NULL,
);
GO

-- Insert rows into table 'TokoHelm'
INSERT INTO barang
(nama, deskripsi, harga, kuantitas)
VALUES
('Helm Bogo', 'Helm bertema klasik dan memiliki desain retro dengan visor dan bentuk bulat', 100000, 35),
('Helm Full Face', 'Helm yang menutupi seluruh kepala dan wajah anda termasuk dagu dan rahang. Dirancang untuk memberikan perlindungan maksimal bagi pengendara', 500000, 10),
('Helm Half Face','Helm yang menutupi sebagian area kepala dan wajah.', 250000, 100)