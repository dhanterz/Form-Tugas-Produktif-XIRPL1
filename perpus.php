<html>
<h2>Form Peminjaman Buku</h2>
<form action="db.php"method="POST">
    <input type="text" name="nama" placeholder="Nama Peminjam" required><br><br>
    <input type="text" name="judul" placeholder="Judul Buku" required><br><br>

    <label>Tanggal Pinjam:</label><br>
    <input type="date" name="tgl_pinjam" required><br><br>

    <label>Tanggal Kembali:</label><br>
    <input type="date" name="tgl_kembali" required><br><br>

    <button type="submit" name="pinjam">Simpan</button>
</form>
</html>