<?php 

	include '../data/koneksi.php';

		$id 			= $_POST['lblId'];
		$nama 			= $_POST['txtNama'];
		$tanggalLahir 	= $_POST['dtgTanggalLahir'];
		$usia 			= $_POST['txtUsia'];
		$kelamin 		= ( $_POST['opgKelamin'] == "Pria") ? "Pria" : "Wanita";
		$isMenikah 		= (isset($_POST['chkIsMenikah'])) ? TRUE : FALSE;
	

	$strQuery = "
		UPDATE peserta 
		SET 
			nama        ='$nama',
			tanggalLahir='$tanggalLahir',
			usia 		='$usia',
			kelamin  	='$kelamin',
			isMenikah 	='$isMenikah'
		WHERE id 		= '$id'
	";

	$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diUpdate..
			<meta http-equiv='refresh' content='1, url=list_peserta.php'>
		";
	} else {
		// code...
		echo "
			Update gagal!
			<meta http-equiv='refresh' content='1, url=list_peserta.php'>
		";
	}

 ?>