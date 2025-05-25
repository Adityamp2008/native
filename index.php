<?php
include 'config.php';


session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="bg-dark text-white py-3 text-center">
      <h4>CRUD</h4>
    </div>
 
 
  <div class="container mt-3 mb-5">
  <div class="card shadow rounded-3">
      <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
       <h5 class="mb-0">daftar murid</h5>
       <a href="tambah.php" class="btn btn-light btn-sm bi bi-plus">Tambah</a>
      </div>
      <div class="card-body p-0">
    <table class="table table-bordered table-hover table-striped mb-0">
      <thead class="table-primary text-center">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Kelas</th>
          <th scope="col">Jurusan</th>
          <th scope="col">User name</th>
          <th scope="col">Password</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $nomor = 1;
        $result = mysqli_query($conn, "SELECT * FROM data");

        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
              <td class='text-center'>{$nomor}</td>
              <td>{$row['nama']}</td>
              <td>{$row['kelas']}</td>
              <td>{$row['jurusan']}</td>
              <td>{$row['uname']}</td>
              <td>{$row['pass']}</td>
              <td  class='text-center'>
                  <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'><i class='bi bi-pencil-fill'></i></a>
                  <a href='hapus.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"apakah anda ingin menghapus data ini?\");'><i class='bi bi-trash3-fill'></i></a>
              </td>
            </tr>";
          $nomor++;
        }
        ?>
      </tbody>
    </table>

  </div>
  </div>
  </div>

  <!-- 2025 - aditya m.p -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>