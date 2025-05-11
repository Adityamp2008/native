<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <div class="bg-dark w-100 m-0 d-flex justify-content-center p-3" style="height: 10vh;">
    <span class= "text-white fs-5">
        CRUD PHP
    </span>
   </div>
   <div class="content p-2">

    <table class="table table-dark mt-4 ">
   <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">jurusan</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
    </table>


       <?php
        $nomor = 1;
        $result = mysqli_query($conn, "SELECT * FROM data");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>$nomor</td>
                <td>{$row['nama']}</td>
                <td>{$row['kelas']}</td>
                <td>{$row['jurusan']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Yakin ingin menghapus data ini?\");'>Hapus</a>
                </td>
            </tr>";
            $nomor ++;
        }
        ?>
   </div>

   <div class="bg-dark text-white w-100 fixed-bottom py-2 text-center">
     <div class="bg-white w-100 "style="height: 1vh;"></div> 
   <span class="fs-6">2025</span>
   </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>