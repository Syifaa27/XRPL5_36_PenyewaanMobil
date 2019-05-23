<?php
include '../koneksi.php';

session_start();

$id_pelanggan = $_POST ['id_pelanggan'];
$nama_pelanggan = $_POST ['nama_pelanggan'];
$alamat_pelanggan = $_POST ['alamat_pelanggan'];
$kontak = $_POST ['kontak'];


$query = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat_pelanggan, kontak )
            VALUES ('$id_pelanggan', '$nama_pelanggan', '$alamat_pelanggan', '$kontak')";

$result = mysqli_query($koneksi,$query);
$num = mysqli_affected_rows($koneksi);

if($num > 0){
    header("location:../pelanggan/data_pelanggan.php");
} else {
    echo "Gagal tambah data";
}
echo "<a href='../pelanggan/data_pelanggan.php'>Lihat Data </a>";
?>