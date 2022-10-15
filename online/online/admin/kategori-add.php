<?php 
	if (isset($_POST['simpan'])) {
		$nama_kategori = $_POST['nama_kategori'];
		// menyimpan ke database
		mysqli_query($dbconnect, "INSERT INTO kategori VALUES ('', '$nama_kategori')");


		// mengalihkan halaman ke list barang
		header("location:?halaman=kategori&alert=tambah_sukses");
	}
?>
		<h1>Tambah kategori</h1>
		<form method="post">
			<div class="form-group">
				<label>Nama kategori</label>
				<input type="text" name="nama_kategori" class="form-control" placeholder="Nama kategori" required>
			</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		<a href="?halaman=kategori" class="btn btn-warning">Kembali</a>
		</form>	
