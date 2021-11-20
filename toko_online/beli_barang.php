<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
    $dt_barang=mysqli_fetch_array($qry_detail_barang);
?>
<center><h2>Barang Yang Dibeli</h2></center>
<br>
<div class="row">
    <div class="col-md-4">
        <img src="pw.jpg" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_buku=<?=$dt_barang['id_barang']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td><b>Nama Barang</b></td><td><?=$dt_barang['nama_barang']?></td>
                    </tr>
                    <tr>
                        <td><b>Penjual</b></td><td><?=$dt_barang['penjual']?></td>
                    </tr>
                    <tr>
                        <td><b>Nama Toko</b></td><td><?=$dt_barang['nama_toko']?></td>
                    </tr>
                    <tr>
                        <td><b>Deskripsi</b></td><td><?=$dt_barang['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td><b>Jumlah Pinjam</b></td><td><input type="number" name="jumlah_pinjam" value="1"></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Beli"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
