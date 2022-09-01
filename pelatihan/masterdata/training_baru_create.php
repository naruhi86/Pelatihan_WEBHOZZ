<?php 
	include '../data/koneksi.php';

	$nama_training = $_POST['txtNamaTraining'];
	$strQuery = "INSERT INTO training(nama_training) VALUES('$nama_training')";
	$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error($conInventory));

	if ($query) {
		// code...
		echo "
			Berhasil diSimpan..
			<meta http-equiv='refresh' content='1, url=training.php'>
		";
	} else {
		// code...
		echo "
			Gagal simpan..
			<meta http-equiv='refresh' content='1, url=training.php'>			
		";
	}
	

 ?>