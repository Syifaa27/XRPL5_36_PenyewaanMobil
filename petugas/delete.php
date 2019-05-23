<?php 

include '../koneksi.php';
session_start();

$id_karyawan = $_GET['id_karyawan'];
$query = "DELETE FROM karyawan WHERE id_karyawan = $id_karyawan";
$result = mysqli_query($koneksi,$query);
$num = mysqli_affected_rows($koneksi);
if($num > 0){
    header("location:../petugas/data_karyawan.php");
}
else{
    echo "<p>Gagal hapus data <p> <br>";
}
echo "<p><a href='admin.php'>Lihat Data</a></p>";
?>