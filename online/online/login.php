<div class="form-login">
	<?php 
		if (isset($_GET['alert'])){
			if ($_GET['alert']=='gagal'){
				?>
				<div class="alert alert-danger alert-dismissible">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <h4><i>Error !</i></h4> 
					username/password salah
				</div>
				<?php 
			}
			elseif ($_GET['alert']=="logout"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4><i class="icon">Sukses !</i></h4> 
					Anda berhasil logout
				</div>
				<?php 
			}			
		}
	?>

		<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="img-thumbnail">
					<center><img src="assets/gambar/logo-toko.png" width="75%" height="200px"></center>
				</div>
			</div>
			<div class="col-sm-4">
				<form method="post" action="?halaman=logincek">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" placeholder="Masukkan Username" name="username" id="username" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" placeholder="Masukkan Password" name="password" id="password" required>
					</div>			
					<input type="submit" class="btn btn-success btn-block" value="Login"> 
					<small>Belum mempunyai akun? Silahkan daftar terlebih dahulu</small>
					<br>
				</form>
				<a href="?halaman=register"><button class="btn btn-primary btn-block">Register</button></a>
			</div>
		</div>
	</div>
</div>

