<?php 
	if (isset($_POST['simpan'])) {
		
		$nama_barang = $_POST['nama_barang'];
		$id_kategori = $_POST['id_kategori'];
		$keterangan = $_POST['keterangan'];
		$gambar_barang = $_POST['gambar_barang'];
		$harga_barang = $_POST['harga_barang'];
		$diskon = $_POST['diskon'];
		$stok = $_POST['stok'];

		//Gambar
		$rand = rand();
		$ekstensi = array('png','jpg','jpeg','gif');
		$filename = $_FILES['gambar_barang']['name'];
		$ukuran = $_FILES['gambar_barang']['size'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);

		if (!in_array($ext, $ekstensi)) {
			header("location:?halaman=barang&alert=gagal_ekstensi");
		}else {
			if ($ukuran < 1044070) {
				$xx = $rand.'_'.$filename;
				 move_uploaded_file($_FILES['gambar_barang']['tmp_name'], '../assets/gambar/'.$rand.'_'.$filename);
				mysqli_query($dbconnect, "INSERT INTO barang VALUES ('', '$nama_barang', '$id_kategori', '$keterangan', '$xx', '$harga_barang', '$diskon', '$stok')" );
				header("location:?halaman=barang&alert=tambah_sukses");
			}else{
				header("location:?halaman=barang&alert=gagal_ukuran:");
			}
		}
	}
?>
	<h1>Tambah Barang</h1>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Nama Barang</label>
			<input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required>
		</div>
		<div class="form-group">
			<label>Kategori Barang</label>
			<input type="text" name="id_kategori" class="form-control" placeholder="Kategori Gambar" required>
		</div>			
		<div class="form-group">
			<label>Keterangan</label>
			<textarea type="text" name="keterangan" class="form-control" placeholder="Keterangan" required></textarea>
		</div>	
		<div class="form-group">
			<label>Gambar Barang</label>
			<input type="file" name="gambar_barang" class="form-control" required>
		</div>					
		<div class="form-group">
			<label>Harga Barang</label>
			<input type="number" name="harga_barang" class="form-control" placeholder="Harga Barang" required>
		</div>
		<div class="form-group">
			<label>Diskon</label>
			<input type="number" name="diskon" class="form-control" placeholder="Diskon" required>
		</div>
		<div class="form-group">
			<label>Stok</label>
			<input type="number" name="stok" class="form-control" placeholder="Stok" required>
		</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		<a href="?halaman=barang" class="btn btn-warning">Kembali</a>
	</form>