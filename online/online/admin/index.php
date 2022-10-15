<?php 
	include '../config/koneksi.php';
	session_start();
	if ($_SESSION['status']!="login") {
		header("location:login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<script src="../assets/bootstrap/js/jquery.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	
	<title>Watashi</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-light navbar-light">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?halaman=user">User</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?halaman=barang">Barang</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?halaman=kategori">Kategori</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?halaman=pembeli">Pembeli</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?halaman=logout"><?php echo $_SESSION['nama_user'];?> (Logout)</a>
			</li>
		</ul>
	</nav>
	<div class="container">
		<?php 
			if (isset($_GET['halaman'])) {
				$halaman= $_GET['halaman'];
				switch ($halaman) {
					case 'user':
						include 'user.php';
						break;
					case 'barang':
						include 'barang.php';
						break;
					case 'barangadd':
						include 'barang-add.php';
						break;
					case 'barangedit':
						include 'barang-edit.php';
						break;
					case 'baranghapus':
						include 'barang-hapus.php';
						break;
					case 'user':
						include 'user.php';
						break;
					case 'useradd':
						include 'user-add.php';
						break;	
					case 'useredit':
						include 'user-edit.php';
						break;
					case 'userhapus':
						include 'user-hapus.php';
						break;
					case 'kategori':
						include 'kategori.php';
						break;						
					case 'kategoriadd':
						include 'kategori-add.php';
						break;
					case 'kategoriedit':
						include 'kategori-edit.php';
						break;
					case 'kategorihapus':
						include 'kategori-hapus.php';
						break;
					case 'pembeli':
						include 'pembeli.php';
						break;
					case 'pembeliadd':
						include 'pembeli-add.php';
						break;
					case 'pembeliedit':
						include 'pembeli-edit.php';
						break;
					case 'pembelihapus':
						include 'pembeli-hapus.php';
						break;
					case 'logout':
						include 'logout.php';
						break;
					
					default:
					echo "<center><h4>Maaf. Halaman tidak ditemukan!!</h4></center>";
						break;
					}
			}else{
				include 'dashbord.php';
			}
		?>
	</div>
</body>
<br>
<div class="footer" style="color: white; background-color: black; text-align: center; width: 100%; padding: 10px 100px;">
	<center><small>Copyright &copy; Shinta Dhea</small></center>
</div>
</html>