<?php 
	include 'config/koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($dbconnect, "SELECT * FROM pembeli WHERE username='$username' AND password='$password'");

	$row = mysqli_fetch_array($login);

	if ($row['username'] == $username AND $row['password'] == $password) {
		session_start();
		$_SESSION['nama_pembeli'] = $row['nama_pembeli'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['status'] = "login";
		header('location:index.php');
	} else{
		echo "<script>location='?halaman=login&alert=gagal';</script>";
	}
?>