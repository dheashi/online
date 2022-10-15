 <?php 
	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];

		mysqli_query($dbconnect, "DELETE FROM pembeli WHERE id_pembeli='$id' ");

		header("location:?halaman=pembeli&alert=hapus_sukses");
	}
?>