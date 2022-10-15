<?php
 	include 'config/koneksi.php';
 	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<script src="assets/bootstrap/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
 	<style>
		/* Make the image fully responsive */
		.carousel-inner img {
		width: 100%;
		height: 100%;
		}

		.body{
			background-color: darkolivegreen;
		}
	</style>	
	<title>Watashi</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-light navbar-light">
		<ul class="navbar-nav"> 
			<li class="nav-item active disabled">
				<a class="nav-link"><img src="assets/gambar/logo-toko.png" width="150px"></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?halaman=transaksi">Transaksi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?halaman=login">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?halaman=logout">Logout</a>
			</li>			
			<li>
				<a href="?halaman=cart"><img src="assets/icon/keranjang.png" align="left" width="5%"></a>
			</li>
		</ul>
	</nav>
	<div class="container">
		<br>
		<?php 
			if (isset($_GET['halaman'])) {
				$halaman= $_GET['halaman'];
				switch ($halaman) {
					case 'detailproduk':
						include 'detail-produk.php';
						break;
					case 'transaksi':
						include 'transaksi.php';
						break;
					case 'kebutuhan':
						include 'kebutuhan.php';
						break;
					case 'elektronik':
						include 'elektronik.php';
						break;
					case 'cosmetic':
						include 'cosmetic.php';
						break;
					case 'cart':
						include 'cart.php';
						break;
					case 'register':
						include 'register.php';
						break;
					case 'login':
						include 'login.php';
						break;
					case 'logout':
						include 'logout.php';
						break;
					case 'logincek':
						include 'login-cek.php';
						break;
					default:
					echo "<center><h4>Maaf. Halaman tidak ditemukan!!</h4></center>";
						break;
					}
			}else{
				include 'home.php';
			}
		?>
	</div>

<br>
<br>
<div class="footer" style="background-color: #019585;">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<br>
				<div class="row">
					<div class="col-sm-4">
						<h4>Metode Pembayaran</h4>
					</div>
					<div class="col-sm-8">						
						<img src="assets/gambar/bni.jpg" class="rounded" width="15%">
						<img src="assets/gambar/mandiri.jpg" class="rounded" width="15%">
						<img src="assets/gambar/alfamart.png" class="rounded" width="15%">
						<img src="assets/gambar/link-aja.png" class="rounded" width="15%">
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<br>
				<div class="row">
					<div class="col-sm-4">
						<h4>Jasa Pengiriman</h4>
					</div>
					<div class="col-sm-8">						
						<img src="assets/gambar/bni.jpg" class="rounded" width="15%">
						<img src="assets/gambar/mandiri.jpg" class="rounded" width="15%">
						<img src="assets/gambar/alfamart.png" class="rounded" width="15%">
						<img src="assets/gambar/link-aja.png" class="rounded" width="15%">
					</div>
				</div>
			</div>			
		</div>		
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<img class="float-left" src="assets/gambar/logo-toko.png" width="50%">
				<br><br><br><br>
				<p>Toko Online Watashi<br>
					Jl. Joe No. 11<br>Jagakarsa, Jakarta Selatan<br>Indonesia - 12610<br>
					0855555555<br>
					cs.watasi@email.com
				</p>
			</div>
			<div class="col-sm-6">
				<h4>INFO PROMO DAN DISKON</h4>
				<p>Dapatkan info promo serta diskon spesial dari watashi</p>
				<form>
					<input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required>
					<br>
					<input type="text" name="id_kategori" class="form-control" placeholder="Kategori Gambar" required>
					<br>
					<input href="?halaman=detailproduk&id=<?= $row['id_kategori']?>" type="submit" name="kirim" value="Kirim" class="btn btn-success btn-block">
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>