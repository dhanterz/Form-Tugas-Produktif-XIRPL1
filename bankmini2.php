<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $no_rekening = $_POST["no_rekening"];
    $jumlah_setor = $_POST["jumlah_setor"];
    $tanggal_setor = $_POST["tanggal_setor"];

    echo "<h2>Setoran Berhasil</h2>";
    echo "Nama Penabung: " . htmlspecialchars($nama) . "<br>";
    echo "Nomor Rekening: " . htmlspecialchars(string: $no_rekening) . "<br>";
    echo "Jumlah Setor: Rp " . number_format($jumlah_setor, 0, ',', '.') . "<br>";
    echo "Tanggal Setor: " . htmlspecialchars($tanggal_setor) . "<br>";

    echo "<p>Terima kasih telah menyetor uang ke Bank Mini. Saldo akan diperbarui.</p>";
}
?>

<br>
<a href="bankmini1.html">Kembali ke Form</a>
