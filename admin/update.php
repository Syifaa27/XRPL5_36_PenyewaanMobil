<?php 

include '../koneksi.php';
session_start();

$id_mobil = $_POST['id_mobil'];
$nomor_mobil = $_POST['nomor_mobil'];
$merk = $_POST['merk'];
$jenis = $_POST['jenis'];
$warna = $_POST['warna'];
$Stok = $_POST['Stok'];
$tahun_pembuatan = $_POST['tahun_pembuatan'];
$biaya_sewa_per_hari = $_POST['biaya_sewa_per_hari'];

$query ="UPDATE mobil SET nomor_mobil ='$nomor_mobil', merk='$merk', jenis='$jenis',warna ='$warna', Stok ='$Stok', tahun_pembuatan ='$tahun_pembuatan', biaya_sewa_per_hari='$biaya_sewa_per_hari' WHERE id_mobil= $id_mobil";
$result = mysqli_query($koneksi, $query);

$num = mysqli_affected_rows($koneksi);

if($num > 0){
    header("location:admin.php");
}
else{
    echo "Gagal update data <br>";
}
echo "<a href='../admin/admin.php'>Lihat Data</a>";
?>