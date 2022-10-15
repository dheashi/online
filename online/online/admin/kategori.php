	<?php 
		if (isset($_GET['alert'])){
			if ($_GET['alert']=='tambah_sukses'){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon">Berhasil !</i></h4>
					Kategori sudah ditambahkan
				</div>
				<?php 
			}
			elseif ($_GET['alert']=="edit_sukses"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon">Berhasil !</i></h4>
					Kategori sudah diperbarui
				</div>
				<?php 
			}
			elseif ($_GET['alert']=="hapus_sukses"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon">Berhasil !</i></h4>
					Kategori sudah dihapus
				</div>
			<?php
			}				
		}
	?>
	<h2>Tambah Kategori</h2>
	<a href="?halaman=kategoriadd"><button class="btn btn-success">Tambah Data</button></a>
	<br>
	<br>
	<table class="table table-hover">
		<thead>
		  <tr>
		    <th>No</th>
		    <th>Kategori</th>
		    <th>Action</th>
		  </tr>
		</thead>
		  <?php 
		  	$no=0;
		  		$view = $dbconnect->query("SELECT * FROM kategori");
		  		while ($row = $view->fetch_array()) {
		  	$no++;
		  ?>		
		<tbody>
		  <tr>
		    <td><?= $no;?></td>
		    <td><?= $row['nama_kategori'] ?></td>
		    <td>
		    	<a href="?halaman=kategoriedit&id=<?= $row['id_kategori']?>"><button class="btn btn-primary">Edit</button></a>
		    	<a href="?halaman=kategorihapus&id=<?= $row['id_kategori']?>"><button class="btn btn-danger">Delete</button></a>
		    </td>
		  </tr>
		</tbody>
		<?php } ?>	
	</table>