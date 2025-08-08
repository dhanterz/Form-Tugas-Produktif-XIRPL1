
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pinjam'])) {
    $nama    = $_POST['nama'];
    $judul   = $_POST['buku'];
    $pinjam  = $_POST['tgl_pinjam'];
    $kembali = $_POST['tgl_kembali'];
    $kelas = $_POST['kelas'];
    $tgl_pinjam = strtotime($pinjam);
    $tgl_kembali = strtotime($kembali);
    $lama_pinjam = ($tgl_kembali - $tgl_pinjam) / (60*60*24);

if ($lama_pinjam < 0) {
    $lama_pinjam = 0;
}

    echo "<h2>Data Peminjaman</h2>";
    echo "Nama Peminjam: " . htmlspecialchars($nama) . "<br>";
    echo "Kelas : " . htmlspecialchars($kelas) . "<br>";
    echo "Judul Buku: " . htmlspecialchars($judul) . "<br>";
    echo "Tanggal Pinjam: " . $pinjam . "<br>";
    echo "Tanggal Kembali: " . $kembali . "<br>";
    echo "Lama Meminjam : ". $lama_pinjam . " Hari";

} else {
    echo "Akses ditolak!";
}
?>