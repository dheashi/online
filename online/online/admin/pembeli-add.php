<?php 
	if (isset($_POST['simpan'])) {
		//echo var_dump($_POST);
		$nama_pembeli = $_POST['nama_pembeli'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$alamat = $_POST['alamat'];
		$nomorhp = $_POST['nomorhp'];

		// menyimpan ke database
		mysqli_query($dbconnect, "INSERT INTO pembeli VALUES ('', '$nama_pembeli', '$username', '$password', '$alamat', '$nomorhp')");


		// mengalihkan halaman ke list barang
		header("location:?halaman=pembeli&alert=tambah_sukses");
	}
?>
		<h1>Tambah pembeli</h1>
		<form method="post">
			<div class="form-group">
				<label>Nama pembeli</label>
				<input type="text" name="nama_pembeli" class="form-control" placeholder="Nama pembeli" required>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="username" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" class="form-control" placeholder="Password" required>
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
			</div>
			<div class="form-group">
				<label>Nomor HP</label>
				<input type="text" name="nomorhp" class="form-control" placeholder="Nomor HP" required>
			</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		<a href="?halaman=pembeli" class="btn btn-warning">Kembali</a>
		</form>	
