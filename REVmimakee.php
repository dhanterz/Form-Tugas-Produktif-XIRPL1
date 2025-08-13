<html>
    <h2>Form Pemasukan Barang</h2>
    <form method="POST">
        <input type="text" name="kode_barang" placeholder="Kode Barang" required><br><br>
        <input type="text" name="nama" placeholder="Nama Barang" required><br><br>
        <input type="number" name="Jumlah" placeholder="Jumlah" required><br><br>
        <input type="number" step="0.01" name="harga" placeholder="Harga Barang (Rp)" required><br><br>

        <label>Jenis Barang:</label><br>
        <select name="jenis" required>
            <option value="Makanan">Makanan</option>
            <option value="Minuman">Minuman</option>
        </select><br><br>

        <label>Tanggal Pemasukan:</label><br>
        <input type="date" name="tgl_masuk" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
    </form>
</html>

<?php
$data = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_barang       = $_POST['kode_barang'];
    $nama              = $_POST['nama'];
    $Jumlah            = $_POST['Jumlah'];
    $harga             = $_POST['harga'];
    $jenis             = $_POST['jenis'];
    $tanggalpemasukan  = $_POST['tgl_masuk'];

    $data[] = [
        'kode_barang' => $kode_barang,
        'nama'        => $nama,
        'Jumlah'      => $Jumlah,
        'harga'       => $harga,
        'jenis'       => $jenis,
        'tanggal'     => $tanggalpemasukan
    ];

    echo "<h2>Data Pemasukan</h2>";
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Jenis</th>
                <th>Tanggal</th>
            </tr>";
    foreach ($data as $d) {
        echo "<tr>
                <td>" . htmlspecialchars($d['kode_barang']) . "</td>
                <td>" . htmlspecialchars($d['nama']) . "</td>
                <td>" . htmlspecialchars($d['Jumlah']) . "</td>
                <td>Rp " . number_format($d['harga'], 2, ',', '.') . "</td>
                <td>" . htmlspecialchars($d['jenis']) . "</td>
                <td>" . htmlspecialchars($d['tanggal']) . "</td>
            </tr>";
    }
    echo "</table>";
}
?>