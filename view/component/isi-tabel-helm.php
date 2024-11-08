<?php
require './config/database.php';

$sql = "SELECT * FROM barang";

$result = $conn->query($sql);

if ($result->rowCount() != 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "  <tr>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['deskripsi'] . "</td>
                    <td>" . $row['harga'] . "</td>
                    <td>" . $row['kuantitas'] . "</td>
                    <td>
                        <form id=\"hapusForm-". $row['id'] ."\" class=\"hapusForm\">
                            <input type=\"text\" name=\"id\" id=\"id-". $row['id'] ."\" value=\"". $row['id'] . "\" hidden>
                            <input type=\"submit\" value=\"Hapus Barang\">
                        </form>
                    </td>
                    <td>
                        <form method=\"POST\" action=\"view/component/update-form.php\" id=\"edit\">
                            <input name=\"id\" value=\"" . $row['id'] . "\" hidden>
                            <input name=\"nama\" value=\"" . $row['nama'] . "\" hidden>
                            <input name=\"deskripsi\" value=\"" . $row['deskripsi'] . "\" hidden>
                            <input name=\"harga\" value=\"" . $row['harga'] . "\" hidden>
                            <input name=\"kuantitas\" value=\"" . $row['kuantitas'] . "\" hidden>
                            <input type=\"submit\" value=\"Edit Barang\">
                        </form>
                    </td>
                </tr>
            ";
    }
}
?>