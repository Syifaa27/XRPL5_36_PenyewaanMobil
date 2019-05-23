<?php 

include '../koneksi.php';
session_start();

$id_sewa = $_GET['id_sewa'];
$query = "DELETE FROM sewa WHERE id_sewa = $id_sewa";
$result = mysqli_query($koneksi,$query);
$num = mysqli_affected_rows($koneksi);
if($num > 0){
    header("location:../sewa/data_sewa.php");
}
else{
    echo "<p>Gagal hapus data <p> <br>";
}
echo "<p><a href='../sewa/data_sewa.php'>Lihat Data</a></p>";
?>