<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>edit data</h2>

    <?php
    $id =$_GET['id'];
    $sql = "SELECT * FROM data WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <form method="post">
        nama : <input type="text" name="nama" value="<?php echo $row['nama'];?>"><br>
        kelas : <input type="text" name="kelas" value="<?php echo $row['kelas'];?>"><br>
        jurusan : <input type="text" name="jurusan" value="<?php echo $row['jurusan'];?>"><br>
        <input type="submit" name="submit" value="update">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        
        $sql = "UPDATE data SET nama='$nama', kelas='$kelas', jurusan='$jurusan'
        WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "data berhasil diupdate";
            } else {
                echo "gagal update data";
            }
 }
 ?>
</body>
</html>