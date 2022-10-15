<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		//menampilkan data berdasarkan ID
		$data = mysqli_query($dbconnect, "SELECT * FROM user where id_user='$id'");
		$data = mysqli_fetch_assoc($data);
	}

	if (isset($_POST['update'])) {
	$id = $_GET['id'];

	$nama_user = $_POST['nama_user'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	// menyimpan ke database
	mysqli_query($dbconnect, "UPDATE user SET nama_user='$nama_user', username='$username', password='$password' WHERE id_user='$id' ");

	//menggunakan halaman ke list barang
	header("location:?halaman=user&alert=edit_sukses");
}
?>

	<h1>Edit Admin</h1>
	<form method="post">
		<div class="form-group">
			<label>Nama Admin</label>
			<input type="text" name="nama_user" class="form-control" placeholder="Nama Admin" value="<?=$data['nama_user']?>" required>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Username" value="<?=$data['username']?>" required>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Email" value="<?=$data['email']?>" required>
		</div>
		<div class="form-group">
			<label>Passowrd</label>
			<input type="text" name="password" class="form-control" placeholder="Password" value="<?=$data['password']?>" required>
		</div>
	<input type="submit" name="update" value="Perbarui" class="btn btn-primary">
	<a href="?halaman=user" class="btn btn-warning">Kembali</a>
	</form>

