<?php
include '../koneksi.php';
session_start();

$id_sewa = $_POST ['id_sewa'];
$id_mobil = $_POST ['id_mobil'];
$id_karyawan = $_POST ['id_karyawan'];
$id_pelanggan = $_POST ['id_pelanggan'];
$tgl_sewa = $_POST ['tgl_sewa'];
$tgl_kembali = $_POST ['tgl_kembali'];
$total_bayar = $_POST ['total_bayar'];

$query = "INSERT INTO sewa (id_sewa, id_mobil, id_karyawan, id_pelanggan, tgl_sewa, tgl_kembali, total_bayar)
            VALUES ('$id_sewa', '$id_mobil', '$id_karyawan', '$id_pelanggan', '$tgl_sewa', '$tgl_kembali', '$total_bayar')";

$result = mysqli_query($koneksi,$query);
$num = mysqli_affected_rows($koneksi);

if($num > 0){
    header("location:../sewa/data_sewa.php");
} else {
    echo "Gagal tambah data";
}
echo "<a href='../sewa/data_sewa.php'>Lihat Data </a>";
?>