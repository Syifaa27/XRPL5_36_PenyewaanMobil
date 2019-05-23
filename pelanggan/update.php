<?php 

include '../koneksi.php';
session_start();

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat_pelanggan = $_POST['alamat_pelanggan'];
$kontak = $_POST['kontak'];


$query ="UPDATE pelanggan SET nama_pelanggan ='$nama_pelanggan', alamat_pelanggan='$alamat_pelanggan', kontak='$kontak' WHERE id_pelanggan= $id_pelanggan";
$result = mysqli_query($koneksi, $query);

$num = mysqli_affected_rows($koneksi);

if($num > 0){
    header("location:../pelanggan/data_pelanggan.php");
}
else{
    echo "Gagal update data <br>";
}
echo "<a href='../pelanggan/data_pelanggan.php'>Lihat Data</a>";
?>