<?php 

include '../koneksi.php';
session_start();

$id_sewa = $_POST['id_sewa'];
$id_mobil = $_POST['id_mobil'];
$id_karyawan = $_POST['id_karyawan'];
$id_pelanggan = $_POST['id_pelanggan'];
$tgl_sewa = $_POST['tgl_sewa'];
$tgl_kembali = $_POST['tgl_kembali'];
$total_bayar = $_POST['total_bayar'];

$query ="UPDATE sewa SET id_mobil ='$id_mobil', id_karyawan='$id_karyawan', id_pelanggan='$id_pelanggan', tgl_sewa='$tgl_sewa', tgl_kembali='$tgl_kembali', total_bayar='$total_bayar' WHERE id_sewa= $id_sewa";
$result = mysqli_query($koneksi, $query);

$num = mysqli_affected_rows($koneksi);

if($num > 0){
    header("location:../sewa/data_sewa.php");
}
else{
    echo "Gagal update data <br>";
}
echo "<a href='../sewa/data_sewa.php'>Lihat Data</a>";
?>