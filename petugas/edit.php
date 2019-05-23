<?php 

include '../koneksi.php';
session_start();

$id_karyawan = $_GET['id_karyawan'];
$query = "SELECT * FROM karyawan WHERE id_karyawan = $id_karyawan";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UPDATE</title>
   <link rel="stylesheet" href="../admin/form-create.css">
</head>
<body>
    <div class="form" >
        <form action="../petugas/update.php" method="post" class="form-container">
        <h2 class="form-header">Update Data<h2>
        <table>
        <br>
        <p>
        <br>
            <input type="text" name="id_karyawan" id="id_karyawan" value="<?php echo $row ['id_karyawan']; ?>" placeholder="ID">
            <br>
            <input type="text" name="nama_karyawan" id="nama_karyawan" value="<?php echo $row ['nama_karyawan']; ?>" placeholder="Nama  ">
            <br>
            <input type="text" name="alamat_karyawan" id="alamat_karyawan" value="<?php echo $row ['alamat_karyawan']; ?>" placeholder="Alamat">
            <br>
            <input type="text" name="kontak" id="kontak" value="<?php echo $row ['kontak']; ?>" placeholder="Kontak">
            <br>
            <input type="text" name="username" id="username" value="<?php echo $row ['username']; ?>" placeholder="Username">
            <br>
            <input type="text" name="password" id="password" value="<?php echo $row ['password']; ?>" placeholder="Password">
            <br>
            <input type="submit" value="SAVE">
            </p>
            </table>
            </form>
            </body>
            </html>