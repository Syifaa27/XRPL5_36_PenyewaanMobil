<?php
include '../koneksi.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">                   
<head>
<link rel="stylesheet" href="../admin/form-create.css">

<title> Tambah Data </title>
</head>
<body>
<div class="form" >
        <form action="../sewa/create.php" method="post" class="form-container">
        <h2 class="form-header"> Tambah Data </h2>
        <p>
        <br>
        <input type="text" class="form-input" name="id_sewa" placeholder="ID_SEWA" id="id_sewa">
        <br>
        <input type="text" class="form-input" name="id_mobil" placeholder="ID_MOBIL " id="id_mobil">
        <br>
        <input type="text" class="form-input" name="id_karyawan" placeholder="ID_KARYAWAN" id="id_karyawan">
        <br>
        <input type="text" class="form-input" name="id_pelanggan" placeholder="ID_PELANGGAN" id="id_pelanggan">
        <br>
        <input type="date" class="form-input" name="tgl_sewa" placeholder="Tanggal Sewa" id="tgl_sewa">
        <br>
        <input type="date" class="form-input" name="tgl_kembali" placeholder="Tanggal Kembali" id="tgl_kembali">
        <br>
        <input type="text" class="form-input" name="total_bayar" placeholder="Total Bayar" id="total_bayar">
        <br>
        <input type="submit" value="SAVE">
        </p>
        </form>
        </div>
        </body>
        </html>
