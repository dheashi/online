<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		//menampilkan data berdasarkan ID
		$data = mysqli_query($dbconnect, "SELECT * FROM pembeli where id_pembeli='$id'");
		$data = mysqli_fetch_assoc($data);
	}

	if (isset($_POST['update'])) {
	$id = $_GET['id'];

	$nama_pembeli = $_POST['nama_pembeli'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];
	$nomorhp = $_POST['nomorhp'];

	// menyimpan ke database
	mysqli_query($dbconnect, "UPDATE pembeli SET nama_pembeli='$nama_pembeli', username='$username', password='$password', alamat='$alamat', nomorhp='$nomorhp' WHERE id_pembeli='$id' ");

	//menggunakan halaman ke list barang
	header("location:?halaman=pembeli&alert=edit_sukses");
}
?>

	<h1>Edit pembeli</h1>
	<form method="post">
		<div class="form-group">
			<label>Nama Pembeli</label>
			<input type="text" name="nama_pembeli" class="form-control" placeholder="Nama Pembeli" value="<?=$data['nama_pembeli']?>" required>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Username" value="<?=$data['username']?>" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="text" name="password" class="form-control" placeholder="Password" value="<?=$data['password']?>" required>
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?=$data['alamat']?>" required>
		</div>
		<div class="form-group">
			<label>Nomor HP</label>
			<input type="text" name="nomorhp" class="form-control" placeholder="Nomor HP" value="<?=$data['nomorhp']?>" required>
		</div>
	<input type="submit" name="update" value="Perbarui" class="btn btn-primary">
	<a href="?halaman=pembeli" class="btn btn-warning">Kembali</a>
	</form>

