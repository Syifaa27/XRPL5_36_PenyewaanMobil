<?php 

include '../koneksi.php';
session_start();

$id_mobil = $_GET['id_mobil'];
$query = "DELETE FROM mobil WHERE id_mobil = $id_mobil";
$result = mysqli_query($koneksi,$query);
$num = mysqli_affected_rows($koneksi);
if($num > 0){
    header("location:admin.php");
}
else{
    echo "<p>Gagal hapus data <p> <br>";
}
echo "<p><a href='admin.php'>Lihat Data</a></p>";
?>