<html>
<h2>Form Pemasukan Barang</h2>
<form method="POST">
    <input type="text" name="nama" placeholder="Nama_Barang" required><br><br>
    <input type="text" name="Jumlah" placeholder="Jumlah" required><br><br>

    <label>Tanggal Pemasukan:</label><br>
    <input type="date" name="tgl_masuk" required><br><br>


    <button type="submit" name="pinjam">Simpan</button>
</form>
</html>
<?php

$data = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggalpemasukan    = $_POST['tgl_masuk'];
    $nama   = $_POST['nama'];
    $Jumlah  = $_POST['Jumlah'];

    $data[''] = [
        'nama'=> $nama,
        'tanggal'=> $tanggalpemasukan,
        'Jumlah'=> $Jumlah
    ];
echo "<h2>Data Pemasukan</h2>";
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
            </tr>";
    foreach ($data as $d) {
        echo "<tr>
                <td>" . htmlspecialchars($d['nama']) . "</td>
                <td>" . htmlspecialchars($d['Jumlah']) . "</td>
                <td>" . htmlspecialchars($d['tanggal']) . "</td>
            </tr>";
    }
    echo "</table>";
}
?>
