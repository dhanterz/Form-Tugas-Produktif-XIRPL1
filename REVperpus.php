<html>
<h2>Form Peminjaman Buku</h2>
<form action="calloutPERPUS.php" method="POST">
    <input type="text" name="nama" placeholder="Nama Peminjam" required><br><br>
    <input list="listjudulbuku" name="buku" placeholder="Judul Buku"required>
    <datalist id="listjudulbuku">
        <option value="Dilan: Dia Adalah Dilanku Tahun 1990 (2014)">
        <option value="Dilan Bagian Kedua: Dia Adalah Dilanku Tahun 1991 (2015)">
        <option value="Milea: Suara Dari Dilan (2016)">
        <option value="Ancika: Dia yang Bersamaku Tahun 1995 (2021)">
        <option value="Dilan 1983: Wo Ai Ni (2024)">
        <option value="Drunken Monster: Kumpulan Kisah Tidak Teladan (2008)">
        <option value="Drunken Molen: Kumpulnya Kisah Tidak Teladan (2008)">
        <option value="Drunken Mama: Keluarga Besar Kisah-kisah Non Teladan (2009)">
        <option value="Drunken Marmut: Ikatan Perkumpulan Cerita Teladan (2009)">
        <option value="Laskar Pelangi (2005)">
        <option value="5 cm (2005)">
        <option value="Perahu Kertas (2009)">
        <option value="Critical Eleven (2015)">
        <option value="Mariposa (2019)">
        <option value="Danur (2011)">
        <option value="Bumi Manusia (1980)">
        <option value="Gadis Kretek (2012)">
        <option value="Sang Penari (1982)">
        <option value="24 Jam Bersama Gaspar (2017)">
        <option value="Home Sweet Loan (2021)">
        <option value="Nanti Kita Cerita Tentang Hari Ini (2018)">
        <option value="Hafalan Shalat Delisa (2005)">
        <option value="Tenggelamnya Kapal van Der Wijck (1938)">
        <option value="Badai Pasti Berlalu (1974)">
        <option value="Si Juki (2014)">
        <option value="Gita Cinta dari SMA (1976)">
        <option value="Gita Cinta dari SMA (1979)">
    </datalist><br><br>


    <input list="kelaslist" name="kelas" placeholder="Kelas" required>
    <datalist id="kelaslist">
        <option value="X PPLG 1">
        <option value="X PPLG 2">
        <option value="X TJKT 1">
        <option value="X TJKT 2">
        <option value="XI RPL 1">
        <option value="XI RPL 2">
        <option value="XI TKJ 1">
        <option value="XI TKJ 2"></option>
    </datalist><BR><BR>




    <label>Tanggal Pinjam:</label><br>
    <input type="date" name="tgl_pinjam" required><br><br>

    <label>Tanggal Kembali:</label><br>
    <input type="date" name="tgl_kembali" required><br><br>


    <button type="submit" name="pinjam">Simpan</button>
</form>
</html>