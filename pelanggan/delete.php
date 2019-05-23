<?php 

include '../koneksi.php';
session_start();

$id_pelanggan = $_GET['id_pelanggan'];
$query = "DELETE FROM pelanggan WHERE id_pelanggan = $id_pelanggan";
$result = mysqli_query($koneksi,$query);
$num = mysqli_affected_rows($koneksi);
if($num > 0){
    header("location:../pelanggan/data_pelanggan.php");
}
else{
    echo "<p>Gagal hapus data <p> <br>";
}
echo "<p><a href='../pelanggan/data_pelanggan.php'>Lihat Data</a></p>";
?>