	<?php 
		if(isset($_GET['alert'])){
			if ($_GET['alert'] == 'tambah_sukses') { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon">Berhasil !</i></h4>
					Barang sudah ditambahkan
				</div>
			<?php }
			if ($_GET['alert'] == 'edit_sukses') {?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon">Berhasil !</i></h4>
					Barang sudah ditambahkan
				</div>
			<?php }
			if ($_GET['alert'] == 'hapus_sukses') { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon">Berhasil !</i></h4>
					Barang sudah dihapus
				</div>
			<?php 
			}
		}
	?>

	<h2>Data Barang</h2>
	<a href="?halaman=barangadd"><button class="btn btn-success">Tambah Data</button></a>
	<br>
	<br>
		<table class="table table-hover">
			<thead>
			  <tr>
			    <th>No</th>
			    <th>Nama Barang</th>
			    <th>Gambar Barang</th>
			    <th>Harga Barang</th>
			    <th>Stok</th>
			    <th>Diskon</th>
			    <th>Action</th>
			  </tr>
			  <?php 
			  	$no=0;
					$view = $dbconnect->query("SELECT * FROM barang");
			  		while ($row = $view->fetch_array()) {
			  	$no++;
			  ?>
			</thead>
			<tbody>
			  <tr>
			    <td><?= $no;?></td>
			    <td><?= $row['nama_barang'] ?></td>
			    <td width="20%"><img src="../assets/gambar/<?= $row['gambar_barang']?>" width="50%"></td>
			    <td>Rp. <?= $row['harga_barang'] ?></td>			    
			    <td><?= $row['stok'] ?></td>
			    <td><?= $row['diskon'] ?></td>
			    <td>
			    	<a href="?halaman=barangedit&id=<?= $row['id_barang']?>"><button class="btn btn-primary">Edit</button></a>
			    	<a href="?halaman=baranghapus&id=<?= $row['id_barang']?>"><button class="btn btn-danger">Delete</button></a>
			    </td>
			  </tr>
			</tbody>
			<?php } ?>	
		</table>
