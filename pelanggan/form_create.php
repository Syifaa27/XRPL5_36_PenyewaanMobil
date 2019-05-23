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
<form action="create.php" method="post" class="form-container">
        <h2 class="form-header"> Tambah Data </h2>
        <p>
        <br>
        <input type="text" class="form-input" name="id_pelanggan" placeholder="ID" id="id_pelanggan">
        <br>
        <input type="text" class="form-input" name="nama_pelanggan" placeholder="Nama " id="nama_pelanggan">
        <br>
        <input type="text" class="form-input" name="alamat_pelanggan" placeholder="Alamat" id="alamat_pelanggan">
        <br>
        <input type="text" class="form-input" name="kontak" placeholder="kontak" id="kontak">
       
        <br>
        <input type="submit" value="SAVE">
        </p>
        </form>
        </div>
        </body>
        </html>
