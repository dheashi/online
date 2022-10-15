		<?php 
			if (isset($_GET['alert'])){
				if ($_GET['alert']=='tambah_sukses'){
					?>
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon">Berhasil !</i></h4>
						User sudah ditambahkan
					</div>
					<?php 
				}
				elseif ($_GET['alert']=="edit_sukses"){
					?>
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon">Berhasil !</i></h4>User sudah diperbarui
					</div>
					<?php 
				}
				elseif ($_GET['alert']=="hapus_sukses"){
					?>
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon">Berhasil !</i></h4>User sudah dihapus
					</div>
				<?php
				}				
			}
		?>
		<h2>Data Admin</h2>
    	<a href="?halaman=useradd"><button class="btn btn-success">Tambah Data</button></a>
    	<br><br/>
		<table class="table table-hover">
			<thead>
			  <tr>
			    <th>No</th>
			    <th>Nama Admin</th>
			    <th>Username</th>
			    <th>Email</th>
			    <th>Password</th>
			    <th>Action</th>
			  </tr>
			  <?php 
			  	$no=0;
			  		$view = $dbconnect->query("SELECT * FROM user");
			  		while ($row = $view->fetch_array()) {
			  	$no++;
			  ?>
			</thead>
			<tbody>
			  <tr>
			    <td><?= $no;?></td>
			    <td><?= $row['nama_user'] ?></td>
			    <td><?= $row['username'] ?></td>
			    <td><?= $row['email'] ?></td>
			    <td><?= $row['password'] ?></td>
			    <td>
			    	<a href="?halaman=useredit&id=<?= $row['id_user']?>"><button class="btn btn-primary">Edit</button></a>
			    	<a href="?halaman=userhapus&id=<?= $row['id_user']?>"><button class="btn btn-danger">Delete</button></a>
			    </td>
			  </tr>
			</tbody>
			<?php } ?>	
		</table>