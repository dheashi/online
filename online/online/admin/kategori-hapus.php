<?php 
	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];

		mysqli_query($dbconnect, "DELETE FROM kategori WHERE id_kategori='$id' ");

		header("location:?halaman=kategori&alert=hapus_sukses");
	}
?>