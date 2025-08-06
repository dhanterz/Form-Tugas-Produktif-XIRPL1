
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pinjam'])) {
    $nama    = $_POST['nama'];
    $judul   = $_POST['judul'];
    $pinjam  = $_POST['tgl_pinjam'];
    $kembali = $_POST['tgl_kembali'];

    echo "<h2>Data Peminjaman</h2>";
    echo "Nama Peminjam: " . htmlspecialchars($nama) . "<br>";
    echo "Judul Buku: " . htmlspecialchars($judul) . "<br>";
    echo "Tanggal Pinjam: " . $pinjam . "<br>";
    echo "Tanggal Kembali: " . $kembali . "<br>";
} else {
    echo "Akses ditolak!";
}
?>