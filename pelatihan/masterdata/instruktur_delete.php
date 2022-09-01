<?php 

	include '../data/koneksi.php';
	$id = $_GET['id'];
	$strQuery = "DELETE FROM instruktur WHERE id = '$id'";
	$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diHapus..
			<meta http-equiv='refresh' content='1, url=list_instruktur.php'>
		";
	} else {
		// code...
		echo "
			Hapus data gagal!
			<meta http-equiv='refresh' content='1, url=list_instruktur.php'>
		";
	}	

 ?>