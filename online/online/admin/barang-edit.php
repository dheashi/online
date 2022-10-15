<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		//menampilkan data berdasarkan ID
		$data = mysqli_query($dbconnect, "SELECT * FROM barang where id_barang='$id'");
		$data = mysqli_fetch_assoc($data);
	}

	if (isset($_POST['update'])) {
	$id = $_GET['id'];

	$nama_barang = $_POST['nama_barang'];
	$id_kategori = $_POST['id_kategori'];
	$keterangan = $_POST['keterangan'];
	$gambar_barang = $_POST['gambar_barang'];
	$harga_barang = $_POST['harga_barang'];
	$diskon = $_POST['diskon'];
	$stok = $_POST['stok'];

	// menyimpan ke database
	mysqli_query($dbconnect, "UPDATE barang SET nama_barang='$nama_barang', id_kategori='$id_kategori', keterangan='$keterangan', gambar_barang='$gambar_barang', harga_barang='$harga_barang', diskon='$diskon', stok='$stok' WHERE id_barang='$id' ");

	//menggunakan halaman ke list barang
	header("location:?halaman=barang&alert=edit_sukses");
}
?>

	<h1>Edit Barang</h1>
	<form method="post">
		<div class="form-group">
			<label>Nama Barang</label>
			<input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?=$data['nama_barang']?>" required>
		</div>
		<div class="form-group">
			<label>Kategori Barang</label>
			<input type="text" name="id_kategori" class="form-control" placeholder="Kategori Gambar" value="<?=$data['id_kategori']?>" required>
		</div>			
		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?=$data['keterangan']?>" required>
		</div>	
		<div class="form-group">
			<label>Gambar Barang</label>
			<input type="text" name="gambar_barang" class="form-control" placeholder="Gambar Barang" value="<?=$data['gambar_barang']?>" required>
		</div>					
		<div class="form-group">
			<label>Harga Barang</label>
			<input type="number" name="harga_barang" class="form-control" placeholder="Harga Barang" value="<?=$data['harga_barang']?>" required>
		</div>
		<div class="form-group">
			<label>Diskon</label>
			<input type="number" name="diskon" class="form-control" placeholder="Diskon" value="<?=$data[' diskon']?>" required>
		</div>
		<div class="form-group">
			<label>Stok</label>
			<input type="number" name="stok" class="form-control" placeholder="Stok" value="<?=$data['stok']?>" required>		
		</div>
		<input type="submit" name="update" value="Perbarui" class="btn btn-primary">
		<a href="?halaman=barang" class="btn btn-warning">Kembali</a>
	</form>	