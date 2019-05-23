<?php
//mengaktifkan session
session_start();
// menghubungkan ke koneksi
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
//menyeleksi data yang sesuai di database
$result = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE username = '$username' AND password = '$password'");
//mengambil jumlah data dari query
$num = mysqli_affected_rows($koneksi);
//proses
if($num > 0){
    header ("location: ../admin/admin.php");
    $_SESSION['user'] = $username;
}else{
    header ("location: ../login/login.php");
}
?>