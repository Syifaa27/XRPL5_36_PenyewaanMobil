<?php
$host="localhost";
$username="root";
$password="";
$db="rent_car";
$koneksi = mysqli_connect($host, $username, $password, $db);
if($koneksi){
    echo "";
} else {
    echo "belum terhubung DB";
}
?>
