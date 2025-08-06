<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Laporan Kerugian Mimake Mart</title>
</head>
<body>

<h2>Form Laporan Kerugian Mimake Mart</h2>

<form action="mimake2.02.php" method="post" enctype="multipart/form-data">
  Nama Petugas:<br>
  <input type="text" name="nama_petugas" required><br><br>

  ID Barang (SKU/Kode):<br>
  <input type="text" name="id_barang" required><br><br>

  Nama Barang:<br>
  <input type="text" name="nama_barang" required><br><br>

  Jumlah Barang:<br>
  <input type="number" name="jumlah_barang" required><br><br>

  Estimasi Nilai Kerugian (Rp):<br>
  <input type="number" name="nilai_kerugian" required><br><br>

  Tanggal Kejadian:<br>
  <input type="date" name="tanggal_kejadian" required><br><br>

  Lokasi Kejadian:<br>
  <input type="text" name="lokasi_kejadian" required><br><br>

  Penyebab Kerugian:<br>
  <input type="text" name="penyebab" required><br><br>

  <input type="submit" value="Kirim Laporan">
</form>

</body>
</html>