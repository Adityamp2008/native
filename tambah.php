<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO data (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "Data Berhasil Ditambahkan";
    } else {
        echo "Data Gagal Ditambahkan";
        }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>

    <h2>Tambah Data Siswa</h2>
    <form action="tambah.php" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required><br><br>

        <input type="submit" value="Simpan">
        <a href="index.php">Kembali</a>
    </form>

</body>
</html>
