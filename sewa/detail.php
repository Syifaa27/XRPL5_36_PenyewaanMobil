<?php 


include '../koneksi.php';

$id_sewa = $_GET['id_sewa'];

$sql = "SELECT * FROM sewa INNER JOIN mobil
        ON sewa.id_mobil = mobil.id_mobil 
        WHERE id_sewa = $id_sewa";

$result = mysqli_query($koneksi, $sql);

$detail = mysqli_fetch_assoc($result);

?>


<div class="pagewrap-overlay"></div>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-7">
            <h>NOTA Peminjaman</h2>
            <hr class="bg-light">
                <table class="table table-bordered">
                    <tr>
                        <td><strong>ID Mobil</strong></td>
                        <td><?= $detail['id_mobil'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Sewa</strong></td>
                        <td><?= date('d F Y', strtotime($detail['tgl_sewa'])) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Kembali</strong></td>
                        <td><?= date('d F Y', strtotime($detail['tgl_kembali'])) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Total Bayar</strong></td>
                        <td><?= $detail['total_bayar'] ?></td>
                    </tr>
                   
                       
                    <tr>
                        <td class="text-right" colspan="2">
                        <a href="../sewa/data_sewa.php" class="btn btn-success">
                            <i class="fas fa-angle-double-left"></i> Kembali
                        </a>
                       
                        </td>
                    </tr>
                </table>
        </div>
    </div>
</div>