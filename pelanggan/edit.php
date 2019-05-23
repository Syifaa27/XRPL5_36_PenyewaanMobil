<?php 

include '../koneksi.php';
session_start();

$id_pelanggan = $_GET['id_pelanggan'];
$query = "SELECT * FROM pelanggan WHERE id_pelanggan = $id_pelanggan";
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
        <form action="../pelanggan/update.php" method="post" class="form-container">
        <h2 class="form-header">Update Data<h2>
        <table>
        <br>
        <p>
        <br>
            <input type="text" name="id_pelanggan" id="id_pelanggan" value="<?php echo $row ['id_pelanggan']; ?>" placeholder="ID">
            <br>
            <input type="text" name="nama_pelanggan" id="nama_pelanggan" value="<?php echo $row ['nama_pelanggan']; ?>" placeholder="Nama  ">
            <br>
            <input type="text" name="alamat_pelanggan" id="alamat_pelanggan" value="<?php echo $row ['alamat_pelanggan']; ?>" placeholder="Alamat">
            <br>
            <input type="text" name="kontak" id="kontak" value="<?php echo $row ['kontak']; ?>" placeholder="Kontak">
            <br>
            <input type="submit" value="SAVE">
            </p>
            </table>
            </form>
            </body>
            </html>