<?php
session_start();
include '../koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM sewa ORDER BY id_sewa");
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../admin/admin.css">
    <title> DATA SEWA MOBIL </title>
    
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
<h2> DAFTAR SEWA MOBIL<h2>

<br></br>
<table class="table">
<tr>
<th> Id Sewa</th>
<th> Id Mobil</th>
<th> Id Karyawan </th>
<th> Id Pelanggan </th>
<th> Tgl Sewa </th>
<th> Tgl Kembali </th>
<th> Total Bayar </th>
<th colspan='3'>Aksi</th>
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
        echo "<td>". $data ['id_sewa'] . "</td>";
        echo "<td>". $data ['id_mobil']. "</td>";
        echo "<td>". $data ['id_karyawan'] . "</td>";
        echo "<td>". $data ['id_pelanggan'] . "</td>";
        echo "<td>". $data ['tgl_sewa'] . "</td>";
        echo "<td>". $data ['tgl_kembali'] . "</td>";
        echo "<td>". $data ['total_bayar'] . "</td>";

        echo "<td><a id='detail' href ='../sewa/detail.php?id_sewa=".$data['id_sewa']."'> Detail</a>  ";
        echo "<td><a id='edit' href ='../sewa/edit.php?id_sewa=".$data['id_sewa']."'> Edit</a>  ";
        echo "<td><a id='hapus' href ='../sewa/delete.php?id_sewa=".$data['id_sewa']."'onclick='return confirm(\"Apakah anda yakin akan menghapus data\")'>Hapus</a>  ";
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
    <a href="../sewa/form-create.php" id="plus">[+] Tambah Data</a>
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

    

