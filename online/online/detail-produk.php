<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		//menampilkan data berdasarkan ID
		$data = mysqli_query($dbconnect, "SELECT * FROM barang where id_barang='$id'");
		$data = mysqli_fetch_assoc($data);
	}
?>
<div class="row">
	<div class="col-sm-5">
		<div class="img-thumbnail">
			<a href="#"><img src="assets/gambar/<?= $data['gambar_barang']?>" width="40%"></a>
	    </div>
	</div>
	<div class="col-sm-7">
		<?php
			$diskon = $data['harga_barang'] - $data['diskon'];
			if ($data['diskon'] > 0) {?>
				<h3><?= $data['nama_barang']?></h3>
			    <s><h7>Rp. <?= $data['harga_barang'] ?></h7></s>
				<br>
				<h5>Rp. <?= $diskon ?></h5>
			<?php }else{
				?>
				<h3><?= $data['nama_barang']?></h3>
			    <h7>Rp. <?= $data['harga_barang'] ?></h7>
			<?php }?>				
		<div class="img-thumbnail">
			<p><?= $data['keterangan']?></p>
		</div>
	</div>
</div>