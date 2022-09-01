<?php 

	include '../data/koneksi.php';
	$id_training = $_POST['lblId_Training'];
	$nama_training = $_POST['txtNamaTraining'];

	$strQuery = "UPDATE training SET nama_training = '$nama_training' WHERE id_training = '$id_training'";
	$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diUpdate..
			<meta http-equiv='refresh' content='1, url=training.php'>
		";
	} else {
		// code...
		echo "
			Update gagal!
			<meta http-equiv='refresh' content='1, url=training.php'>
		";
	}

 ?>