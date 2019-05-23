<?php
include '../koneksi.php';
session_start();

$id_karyawan = $_POST ['id_karyawan'];
$nama_karyawan = $_POST ['nama_karyawan'];
$alamat_karyawan = $_POST ['alamat_karyawan'];
$kontak = $_POST ['kontak'];
$username = $_POST ['username'];
$password = $_POST ['password'];


$query = "INSERT INTO karyawan (id_karyawan, nama_karyawan, alamat_karyawan, kontak , username, password )
            VALUES ('$id_karyawan', '$nama_karyawan', '$alamat_karyawan', '$kontak', '$username', '$password')";

$result = mysqli_query($koneksi,$query);
$num = mysqli_affected_rows($koneksi);

if($num > 0){
    header("location:../petugas/data_karyawan.php");
} else {
    echo "Gagal tambah data";
}
echo "<a href='../petugas/data_karyawan.php'>Lihat Data </a>";
?>