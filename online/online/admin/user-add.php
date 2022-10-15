<?php 
	if (isset($_POST['simpan'])) {
		$nama_user = $_POST['nama_user'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		// menyimpan ke database
		mysqli_query($dbconnect, "INSERT INTO user VALUES ('', '$nama_user', '$username', '$email', '$password')");


		// mengalihkan halaman ke list barang
		header("location:?halaman=user&alert=tambah_sukses");
	}
?>
		<h1>Tambah Admin</h1>
		<form method="post">
			<div class="form-group">
				<label>Nama Admin</label>
				<input type="text" name="nama_user" class="form-control" placeholder="Nama Admin" required>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username" required>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="Email" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" class="form-control" placeholder="Password" required>
			</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		<a href="?halaman=user" class="btn btn-warning">Kembali</a>
		</form>	
