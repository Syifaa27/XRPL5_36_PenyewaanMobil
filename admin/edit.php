<?php 

include '../koneksi.php';
session_start();

$id_mobil = $_GET['id_mobil'];
$query = "SELECT * FROM mobil WHERE id_mobil = $id_mobil";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UPDATE</title>
   <link rel="stylesheet" href="form-create.css">
</head>
<body>
    <div class="form" >
        <form action="update.php" method="post" class="form-container">
        <h2 class="form-header">Update Data<h2>
        <table>
        <br>
        <p>
        <br>
            <input type="text" name="id_mobil" id="id_mobil" value="<?php echo $row ['id_mobil']; ?>" placeholder="ID">
            <br>
            <input type="text" name="nomor_mobil" id="nomor_mobil" value="<?php echo $row ['nomor_mobil']; ?>" placeholder="Nomor Mobil">
            <br>
            <input type="text" name="merk" id="merk" value="<?php echo $row ['merk']; ?>" placeholder="merk">
            <br>
            <input type="text" name="jenis" id="jenis" value="<?php echo $row ['jenis']; ?>" placeholder="jenis">
            <br>
            <input type="text" name="warna" id="warna" value="<?php echo $row ['warna']; ?>" placeholder="warna">
            <br>
            <input type="text" name="Stok" id="Stok" value="<?php echo $row ['Stok']; ?>" placeholder="Stok">
            <br>
            <input type="text" name="tahun_pembuatan" id="tahun_pembuatan" value="<?php echo $row ['tahun_pembuatan']; ?>" placeholder="Tahun Pembuatan">
            <br>
            <input type="text" name="biaya_sewa_per_hari" id="biaya_sewa_per_hari" value="<?php echo $row ['biaya_sewa_per_hari']; ?>" placeholder="biaya sewa">
            <br>
            <input type="submit" value="SAVE">
            </p>
            </table>
            </form>
            </body>
            </html>