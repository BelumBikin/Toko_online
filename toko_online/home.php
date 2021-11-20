<?php 
    include "header.php";
?>
<div class="jumbotron-fluid">
  <h1 class="text-primary">Selamat Datang (<?=$_SESSION['nama_user']?>)</h1>
  <p>Kamu telah berada di Halaman Awal Ruang Pensil, untuk melihat katalog penjualan kami, kamu bisa sentuh menu di bawah ini!</p>
  <a button type="button" class="btn btn-primary" data-toggle="collapse" href="produk.php">Ketuk Di sini</a>
</div>
<br>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_barang=mysqli_query($conn,"select * from barang");
    while($dt_barang=mysqli_fetch_array($qry_barang)){
    ?>
        <div class="col-md-4">
            <div class="card" align="center">
              <img src="pw.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_barang['nama_barang']?></h5>
                Penjual :
                <b><p class="card-text"><?=substr($dt_barang['penjual'], 0,20)?></p></b>
                Nama Toko :
                <b><p class="card-text"><?=substr($dt_barang['nama_toko'], 0,100)?></p></b>
                Deskripsi:
                <b align="center" ><p class="card-text"><?=substr($dt_barang['deskripsi'], 0,100)?></p></b>
                <br>
                <a href="beli_barang.php?id_barang=<?=$dt_barang['id_barang']?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php
    include "footer.php";
?>
