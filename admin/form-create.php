<?php
include '../koneksi.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">                   
<head>
<link rel="stylesheet" href="form-create.css">
<title> Tambah Data </title>
</head>
<body>
<div class="form" >
        <form action="../admin/create.php" method="post" class="form-container">
        <h2 class="form-header"> Tambah Data </h2>
        <p>
        <br>
        <input type="text" class="form-input" name="id_mobil" placeholder="ID" id="id_mobil">
        <br>
        <input type="text" class="form-input" name="nomor_mobil" placeholder="Nomor Mobil" id="nomor_mobil">
        <br>
        <input type="text" class="form-input" name="merk" placeholder="merk" id="merk">
        <br>
        <input type="text" class="form-input" name="jenis" placeholder="jenis" id="jenis">
        <br>
        <input type="text" class="form-input" name="warna" placeholder="warna" id="warna">
        <br>
        <input type="text" class="form-input" name="Stok" placeholder="Stok" id="Stok">
        <br>
        <input type="text" class="form-input" name="tahun_pembuatan" placeholder="Tahun Pembuatan" id="tahun_pembuatan">
        <br>
        <input type="text" class="form-input" name="biaya_sewa_per_hari" placeholder="biaya sewa" id="biaya_sewa_per_hari">
        <br>
        <input type="submit" value="SAVE">
        </p>
        </form>
        </div>
        </body>
        </html>
