<div style="background-size: auto;">
<div id="demo" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="assets/gambar/corousel.png" alt="Los Angeles" width="1100" height="500">
	      <div class="carousel-caption">
	        <h3>Los Angeles</h3>
	        <p>We had such a great time in LA!</p>
	      </div>   
	    </div>
	     <div class="carousel-item">
	      <img src="assets/gambar/corousel2.png" alt="Los Angeles" width="1100" height="500">
	      <div class="carousel-caption">
	        <h3>Chicago</h3>
	        <p>Thank you, Chicago!</p>
	      </div>   
	    </div>
	    <div class="carousel-item">
	      <img src="assets/gambar/corousel3.png" alt="Los Angeles" width="1100" height="500">
	      <div class="carousel-caption">
	        <h3>New York</h3>
	        <p>We love the Big Apple!</p>
	      </div>   
	    </div>
    </div>
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>
<br>
<br>
<div class="container">
	<div class="row" align="center">
		<div class="col-sm-4">
			<div class="img-thumbnail">
				<a href="?halaman=kebutuhan"><img src="assets/icon/rumah.png" width="20%"></a>
				<br>
				<br>
				<label><h6>Kebutuhan Rumah Tangga</h6></label>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="img-thumbnail">
				<a href="?halaman=elektronik"><img src="assets/icon/elektronik.png" width="20%"></a>
				<br>
				<br>
				<label><h6>Elektronik</h6></label>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="img-thumbnail">
				<a href="?halaman=cosmetic"><img src="assets/icon/cosmetics.png" width="20%"></a>
				<br>
				<br>
				<label><h6>Cosmetics</h6></label>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<b><p align="center"><h3>Promosi Produk Bulan Ini</h3></p></b>
	</div>
	<div class="row">
		<?php 
		  	$no=0;
				$view = $dbconnect->query("SELECT * FROM barang WHERE diskon !=0");
		  		while ($row = $view->fetch_array()) {
		  	$no++;
		?>	
		<div class="col-sm-3">
			<div class="img-thumbnail">
				<center><img src="assets/gambar/<?= $row['gambar_barang']?>" width="100px"></center>
				<div class="caption">
				<?php
					$diskon = $row['harga_barang'] - $row['diskon'];?>					
					<h3><?= $row['nama_barang'];?></h3>
			    	<s><h7>Rp. <?php echo ($row['harga_barang']); ?></h7></s>
					<br>
					<h5>Rp. <?php echo $diskon; ?></h5>
				</div>	
				<a href="?halaman=detailproduk&id=<?= $row['id_barang']?>" class="btn btn-success btn-block">Lihat Produk</a>
				<a href="?halaman=cart&id_barang=<?= $row['id_barang'];?>&action=tambah_produk&jumlah=1" class="btn btn-primary btn-block">Tambah ke Keranjang</a>
		    </div>
		</div>
		<?php } ?>	
	</div>

	<div class="row">
		<b><p><h3>All Item</h3></p></b>
	</div>
	<div class="row">
		<?php 
		  	$no=0;
				$view = $dbconnect->query("SELECT * FROM barang");
		  		while ($row = $view->fetch_array()) {
		  	$no++;
		?>	
		<div class="col-sm-3">
			<div class="img-thumbnail">
				<center><img src="assets/gambar/<?= $row['gambar_barang']?>" width="100px"></center>
				<div class="caption">
				<?php
					$diskon = $row['harga_barang'] - $row['diskon'];
					if ($row['diskon']!=0) {?>					
					<h3><?= $row['nama_barang'];?></h3>
			    	<s><h7>Rp. <?php echo($row['harga_barang']); ?></h7></s>
					<br>
					<h5>Rp. <?php echo $diskon ; ?></h5>
				<?php } else{ ?>
					<h3><?= $row['nama_barang'];?></h3>
					<h7>Rp. <?php echo($row['harga_barang']);?></h7>
					<br>
					<br>
				<?php } ?>
				</div>
				<a href="?halaman=detailproduk&id=<?= $row['id_barang']?>" class="btn btn-success btn-block">Lihat Produk</a>
				<a href="?halaman=cart&id_barang=<?= $row['id_barang'];?>&action=tambah_produk&jumlah=1" class="btn btn-primary btn-block">Tambah ke Keranjang</a>
		    </div>
		</div>
		<?php } ?>	
	</div>