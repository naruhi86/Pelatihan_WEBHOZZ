<?php 
	// Informasi server
	$server = "localhost";
	$userName = "root";
	$password = "";
	$database = "pelatihan";

	// Koneksi ke MySQL
	$conPelatihan = mysqli_connect(
		$server,
		$userName,
		$password,
		$database
	);

 ?>