<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    if($nama == "" || $kelas =="" || $jurusan ==""){
        echo "<div class='alert alert-danger'>!!Data tidak boleh kosong bos!!</div>";
    }else{
    $query = "INSERT INTO data (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')";
    $result = mysqli_query($conn, $query);
if ($result) {
    echo "<div class='alert alert-info'>Data sudah masuk salam terimakasih</div>";
    } else {
        echo "<div class='alert alert-danger'>Data gagal masuk bos</div>";
        }
     }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
   <div class="container mt-5"> 
      <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah data siswa</h5>
        </div>
        <div class="card-body">
            <form action="tambah.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" require>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" require>
                 </div>
                 <div class="mb-3">
                    <label for="nama" class="form-label">jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" require>
                 </div>
                 <button type="submit" class="btn btn-success">Kirim</button>
                 <a href="index.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
      </div>
   </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>