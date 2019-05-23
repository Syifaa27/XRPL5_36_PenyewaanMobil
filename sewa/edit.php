<?php 

include '../koneksi.php';
session_start();

$id_sewa = $_GET['id_sewa'];
$query = "SELECT * FROM sewa WHERE id_sewa = $id_sewa";
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
        <form action="../sewa/update.php" method="post" class="form-container">
        <h2 class="form-header">Update Data<h2>
        <table>
        <br>
        <p>
        <br>
            <input type="text" name="id_sewa" id="id_sewa" value="<?php echo $row ['id_sewa']; ?>" placeholder="ID_SEWA">
            <br>
            <input type="text" name="id_mobil" id="id_mobil" value="<?php echo $row ['id_mobil']; ?>" placeholder="ID_MOBIL ">
            <br>
            <input type="text" name="id_karyawan" id="id_karyawan" value="<?php echo $row ['id_karyawan']; ?>" placeholder="ID_KARYAWAN">
            <br>
            <input type="text" name="id_pelanggan" id="id_pelanggan" value="<?php echo $row ['id_pelanggan']; ?>" placeholder="ID_PELANGGAN">
            <br>
            <input type="text" name="tgl_sewa" id="tgl_sewa" value="<?php echo $row ['tgl_sewa']; ?>" placeholder="Tanggal Sewa">
            <br>
            <input type="text" name="tgl_kembali" id="tgl_kembali" value="<?php echo $row ['tgl_kembali']; ?>" placeholder="Tanggal Kembali">
            <br>
            <input type="text" name="total_bayar" id="total_bayar" value="<?php echo $row ['total_bayar']; ?>" placeholder="Total bayar">
            <br>
            <input type="submit" value="SAVE">
            </p>
            </table>
            </form>
            </body>
            </html>