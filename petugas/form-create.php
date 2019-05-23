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
        <form action="../petugas/create.php" method="post" class="form-container">
        <h2 class="form-header"> Tambah Data </h2>
        <p>
        <br>
        <input type="text" class="form-input" name="id_karyawan" placeholder="ID" id="id_karyawan">
        <br>
        <input type="text" class="form-input" name="nama_karyawan" placeholder="Nama " id="nama_karyawan">
        <br>
        <input type="text" class="form-input" name="alamat_karyawan" placeholder="Alamat" id="alamat_karyawan">
        <br>
        <input type="text" class="form-input" name="kontak" placeholder="Kontak" id="kontak">
        <br>
        <input type="text" class="form-input" name="username" placeholder="Username" id="username">
        <br>
        <input type="text" class="form-input" name="password" placeholder="Password" id="password">
        <br>
        
        <input type="submit" value="SAVE">
        </p>
        </form>
        </div>
        </body>
        </html>
