<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		//menampilkan data berdasarkan ID
		$data = mysqli_query($dbconnect, "SELECT * FROM kategori where id_kategori='$id'");
		$data = mysqli_fetch_assoc($data);
	}

	if (isset($_POST['update'])) {
	$id = $_GET['id'];

	$nama_kategori = $_POST['nama_kategori'];

	// menyimpan ke database
	mysqli_query($dbconnect, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id' ");

	//menggunakan halaman ke list barang
	header("location:?halaman=kategori&alert=edit_sukses");
}
?>

	<h1>Edit kategori</h1>
	<form method="post">
		<div class="form-group">
			<label>Nama Kategori</label>
			<input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" value="<?=$data['nama_kategori']?>" required>
		</div>
	<input type="submit" name="update" value="Perbarui" class="btn btn-primary">
	<a href="?halaman=kategori" class="btn btn-warning">Kembali</a>
	</form>

