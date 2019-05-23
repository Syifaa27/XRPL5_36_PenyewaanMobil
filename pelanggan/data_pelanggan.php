<?php
session_start();
include '../koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM pelanggan ORDER BY id_pelanggan");
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../admin/admin.css">
    <title> DATA PELANGGAN </title>

<body onload="myFunction()">
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
<div id="sideNavigation" class="sidenav">
<h1> MENU </h1>
<a href="../admin/admin.php">DATA PEMINJAMAN MOBIL</a>
<a href="../petugas/data_karyawan.php"> DATA PETUGAS</a>
<a href="../pelanggan/data_pelanggan.php"> DATA PELANGGAN</a>
<a href="../sewa/data_sewa.php"> DATA SEWA</a>
<a href="../login/logout.php">LOG OUT || <?php echo $_SESSION['user']; ?> </a>
<footer> <p> Syifa- Copyright &copy; 2019 </p> </footer>
</div>
<h2> DAFTAR PELANGGAN<h2>

<br></br>
<table class="table">
<tr>
<th> Id Pelanggan</th>
<th> Nama Pelanggan</th>
<th> Alamat Pelanggan </th>
<th> Kontak </th>
<th colspan='2'>Aksi</th>
</tr>

<script>
function openNav(){
    document.getElementById("sideNavigation").style.width="250px";
    document.getElementById("main").style.marginLeft = "250px";

}

function closeNav(){
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft ="0";
}
</script>

<?php
    if($num > 0) {
        $no = 1;
        // mysqli_fetch_assoc digunakan untuk menghasilkan array yang itu tidak urut tidak papa jadi langsung sesuai dengan namanya
        while($data = mysqli_fetch_assoc($result))
        {
        echo "<tr>";
        echo "<td>". $data ['id_pelanggan'] . "</td>";
        echo "<td>". $data ['nama_pelanggan']. "</td>";
        echo "<td>". $data ['alamat_pelanggan'] . "</td>";
        echo "<td>". $data ['kontak'] . "</td>";
        echo "<td><a id='edit' href ='../pelanggan/edit.php?id_pelanggan=".$data['id_pelanggan']."'> Edit</a>  ";
        echo "<td><a id='hapus' href ='../pelanggan/delete.php?id_pelanggan=".$data['id_pelanggan']."'onclick='return confirm(\"Apakah anda yakin akan menghapus data\")'>Hapus</a>  ";
        echo "</tr>";

        $no++;
        // ++ berfungsi untuk menambahkan 1 pada nomor
        }
    } else {
        echo "<td colspan ='3'>NO DATA FOUND </td>";

    }

    ?>

    </table>
    <br> </br>
    <a href="form_create.php" id="plus">[+] Tambah Data</a>
    <br></br>
    <br>

    <script>
    var myVar;

    function myFunction(){
        myVar = setTimeout(showPage, 100);
    }

    function showPage(){
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
    </script>

</body>
</html>

    

