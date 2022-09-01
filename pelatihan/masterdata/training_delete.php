<?php 

	include '../data/koneksi.php';
	$id_training = $_GET['id_training'];
	$strQuery = "DELETE FROM training WHERE id_training = '$id_training'";
	$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diHapus..
			<meta http-equiv='refresh' content='1, url=training.php'>
		";
	} else {
		// code...
		echo "
			Hapus data gagal!
			<meta http-equiv='refresh' content='1, url=training.php'>
		";
	}	

 ?>