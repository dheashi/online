		<?php 
			if (isset($_GET['alert'])){
				if ($_GET['alert']=='tambah_sukses'){
					?>
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon">Berhasil !</i></h4>Pembeli sudah ditambahkan
					</div>
					<?php 
				}
				elseif ($_GET['alert']=="edit_sukses"){
					?>
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon">Berhasil !</i></h4>Pembeli sudah diperbarui
					</div>
					<?php 
				}
				elseif ($_GET['alert']=="hapus_sukses"){
					?>
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon">Berhasil !</i></h4>Pembeli sudah dihapus
					</div>
				<?php
				}				
			}
		?>
		<h2>Data Pembeli</h2>
    	<a href="?halaman=pembeliadd"><button class="btn btn-success">Tambah Data</button></a>
    	<br><br/>
		<table class="table table-hover">
			<thead>
			  <tr>
			    <th>No</th>
			    <th>Nama Pembeli</th>
			    <th>Username</th>
			    <th>Password</th>
			    <th>Alamat</th>
			    <th>Nomor HP</th>
			    <th>Action</th>
			  </tr>
			  <?php 
			  	$no=0;
			  		$view = $dbconnect->query("SELECT * FROM pembeli");
			  		while ($row = $view->fetch_array()) {
			  	$no++;
			  ?>
			</thead>
			<tbody>
			  <tr>
			    <td><?= $no;?></td>
			    <td><?= $row['nama_pembeli'] ?></td>
			    <td><?= $row['username'] ?></td>
			    <td><?= $row['password'] ?></td>
			    <td><?= $row['alamat'] ?></td>
			    <td><?= $row['nomorhp'] ?></td>
			    <td>
			    	<a href="?halaman=pembeliedit&id=<?= $row['id_pembeli']?>"><button class="btn btn-primary">Edit</button></a>
			    	<a href="?halaman=pembelihapus&id=<?= $row['id_pembeli']?>"><button class="btn btn-danger">Delete</button></a>
			    </td>
			  </tr>
			</tbody>
			<?php } ?>	
		</table>