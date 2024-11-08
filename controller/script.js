$(document).ready(function() {
    $('#tambahForm').submit(function(event) {
        event.preventDefault();
        var nama = $('#nama').val();
        var deskripsi = $('#deskripsi').val();
        var harga = $('#harga').val();
        var kuantitas = $('#kuantitas').val();

        $.ajax({
            url: 'controller/process-form.php',
            type: 'POST',
            data: {
                action: 'tambah',
                nama: nama,
                deskripsi: deskripsi,
                harga: harga,
                kuantitas: kuantitas
            },
            success: function (response) {
                var data = JSON.parse(response);
                if (data.status === 'success') {
                    alert("Data berhasil ditambah!");
                    window.location.reload();
                } else {
                    alert("Error")
                }
            },
            error: function() {
                console.error(error);
                alert('Proses Error');
            }
        })
    })

    $('.hapusForm').submit(function(event) {
        event.preventDefault();
        var form = $(this);
        var id = form.find('input[name="id"]').val();

        $.ajax({
            url: 'controller/process-form.php',
            type: 'POST',
            data: {
                action: 'hapus',
                id: id
            },
            success: function (response) {
                var data = JSON.parse(response);
                if (data.status === 'success') {
                    alert("Data berhasil dihapus!");
                    window.location.reload();
                } else {
                    alert("Error");
                }
            },
            error: function() {
                console.error(error);
                alert('Proses Error');
            }
        })
    })

    $('#editForm').submit(function(event) {
        event.preventDefault();
        var id = $('#id').val();
        var nama = $('#nama').val();
        var deskripsi = $('#deskripsi').val();
        var harga = $('#harga').val();
        var kuantitas = $('#kuantitas').val();

        $.ajax({
            url: '../../controller/process-form.php',
            type: 'POST',
            data: {
                action: 'edit',
                id: id,
                nama: nama,
                deskripsi: deskripsi,
                harga: harga,
                kuantitas: kuantitas
            },
            success: function (response) {
                var data = JSON.parse(response);
                if (data.status === 'success') {
                    alert("Data berhasil diubah!");
                    window.location.href = "../../index.php";
                } else {
                    alert("Error");
                }
            },
            error: function() {
                console.error(error);
                alert('Proses Error');
            }
        })
    })
})