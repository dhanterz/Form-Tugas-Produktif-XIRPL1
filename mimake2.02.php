<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_petugas = $_POST["nama_petugas"];
    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $nilai_kerugian = $_POST["nilai_kerugian"];
    $tanggal_kejadian = $_POST["tanggal_kejadian"];
    $lokasi_kejadian = $_POST["lokasi_kejadian"];
    $penyebab = $_POST["penyebab"];

    echo "<h2>Laporan Kerugian Diterima</h2>";
    echo "Nama Petugas: " . htmlspecialchars($nama_petugas) . "<br>";
    echo "ID Barang: " . htmlspecialchars($id_barang) . "<br>";
    echo "Nama Barang: " . htmlspecialchars($nama_barang) . "<br>";
    echo "Jumlah Barang: " . htmlspecialchars($jumlah_barang) . "<br>";
    echo "Estimasi Nilai Kerugian: Rp " . number_format($nilai_kerugian, 0, ',', '.') . "<br>";
    echo "Tanggal Kejadian: " . htmlspecialchars($tanggal_kejadian) . "<br>";
    echo "Lokasi Kejadian: " . htmlspecialchars($lokasi_kejadian) . "<br>";
    echo "Penyebab Kerugian: " . htmlspecialchars($penyebab) . "<br>";

    echo "<p>Laporan telah kami catat. Tim terkait akan menindaklanjuti dalam waktu <strong>1x24 jam</strong>.</p>";
}
?>

<br>
<a href="mimake2.01.php">Laporkan Kerugian Lagi</a>