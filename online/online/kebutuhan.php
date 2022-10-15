<div class="row">
<?php 
	  	$no=0;
			$view = $dbconnect->query("SELECT * FROM barang WHERE id_kategori='4'");
	  		while ($row = $view->fetch_array()) {
	  	$no++;
?>
	<div class="col-sm-2">
		<div class="img-thumbnail">
			<center><img src="assets/gambar/<?= $row['gambar_barang'] ?>"width="100px" alt="<?= $row['nama_barang'] ?>"></center>
			<div class="caption">
				<?php
				$diskon = $row['harga_barang'] - $row['diskon'];
				if ($row['diskon'] > 0) {?>
					<h3><?= $row['nama_barang']?></h3>
				    <s><h7>Rp. <?= $row['harga_barang'] ?></h7></s>
					<br>
					<h5>Rp. <?= $diskon ?></h5>
					<h8>Stock : <?= $row['stok']?></h8>				
				<?php }else{ ?>
					<h3><?= $row['nama_barang']?></h3>
				    <h7>Rp. <?= $row['harga_barang'] ?></h7>
				<?php }?>
					<a href="?halaman=detailproduk&id=<?= $row['id_barang']?>" class="btn btn-success btn-sm btn-block">Lihat Produk</a>
					<a href="#" class="btn btn-primary btn-sm btn-block">Masukan Keranjang</a>
				</p>
			</div>
	    </div>
	</div>
<?php }?>
</div>