<?php 
	if (isset($_POST['daftar'])) {
		$nama_pembeli = $_POST['nama_pembeli'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$alamat = $_POST['alamat'];
		$nomorhp = $_POST['nomorhp'];

		mysqli_query($dbconnect, "INSERT INTO pembeli VALUES ('', '$nama_pembeli', '$username', '$password', '$alamat', '$nomorhp') ");

		$login = mysqli_query($dbconnect, "SELECT * FROM pembeli WHERE username='$username' AND password='$password'");

		$row = mysqli_fetch_array($login);

		if ($row['username'] == $username AND $row['password'] == $password) {
			session_start();
			$_SESSION['nama_pembeli'] = $row['nama_pembeli'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['status'] = "login";

			header("location:index.php");
		}
	}
?>

<form method="post">
		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" name="nama_pembeli" class="form-control" placeholder="Nama Lengkap" required>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Username" required>
		</div>			
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" required>
		</div>	
		<div class="form-group">
			<label>Alamat</label>
			<textarea type="text" name="alamat" class="form-control"></textarea>
		</div>					
		<div class="form-group">
			<label>Nomor HP</label>
			<input type="number" name="nomorhp" class="form-control" placeholder="Nomor HP" required>
		</div>
		<input type="submit" name="daftar" value="Simpan" class="btn btn-primary">
		<a href="?halaman=index" class="btn btn-warning">Kembali</a>
</form>




