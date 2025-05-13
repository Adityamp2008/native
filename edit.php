<?php include 'config.php';?>
    <?php
    $id =$_GET['id'];
    $sql = "SELECT * FROM data WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
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
          <?php
            if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        if($nama == '' || $kelas == '' || $jurusan == '') {
            echo "<div class='alert alert-danger text-center'>!!Data yang di update tidak bisa kosong!!</div>";
            } else {
        
        $sql = "UPDATE data SET nama='$nama', kelas='$kelas', jurusan='$jurusan'
        WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<div class='alert alert-info text-center'>BERHASIL DI UPDATE</div>";
            } else {
                echo "gagal update data";
            }
            if($result){
                header("location: index.php");
            }
 }
}
?>

    <div class="container mt-5">
            <div class="card shadow rounded">
                <div class="card-header bg-primary text white">
                    <h5 class="mb-0">Edit data</h5>
                </div>
                 <div class="card-body">
            <form method="POST">
                <label for="nama" class="label-form">nama</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $row['nama'];?>">
                <label for="kelas" class="label-form">kelas</label>
                <input type="text" id="kelas" name="kelas" class="form-control" value="<?php echo $row['kelas'];?>">
                <label for="jurusan" class="label-form">jurusan</label>
                <input type="text" id="jurusan" name="jurusan" class="form-control" value="<?php echo $row['jurusan'];?>">
                <input type="submit" class="btn btn-success mt-2 " name="submit" value="update"> 
            </form>
            
        </div>
        </div>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>