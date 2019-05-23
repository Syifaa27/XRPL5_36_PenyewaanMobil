<?php
session_start();
include '../koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM mobil ORDER BY id_mobil");
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="admin.css">
        <title> DATA  MOBIL </title>

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
<h2> DAFTAR MOBIL<h2>

<br></br>
<table class="table">
<tr>
<th> Id Mobil</th>
<th> Nomor Mobil</th>
<th> Merk </th>
<th> Jenis </th>
<th> Warna </th>
<th> Stok </th>
<th> Tahun Pembuatan</th>
<th> Biaya Sewa/hr</th>
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
        echo "<td>". $data ['id_mobil'] . "</td>";
        echo "<td>". $data ['nomor_mobil']. "</td>";
        echo "<td>". $data ['merk'] . "</td>";
        echo "<td>". $data ['jenis'] . "</td>";
        echo "<td>". $data ['warna'] . "</td>";
        echo "<td>". $data ['Stok'] . "</td>";
        echo "<td>". $data ['tahun_pembuatan'] . "</td>";
        echo "<td>". $data ['biaya_sewa_per_hari'] . "</td>";
        echo "<td><a id='edit' href ='../admin/edit.php?id_mobil=".$data['id_mobil']."'> Edit</a>  ";
        echo "<td><a id='hapus' href ='../admin/delete.php?id_mobil=".$data['id_mobil']."'onclick='return confirm(\"Apakah anda yakin akan menghapus data\")'>Hapus</a>  ";
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
    <a href="../admin/form-create.php" id="plus">[+] Tambah Data</a>
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

    

