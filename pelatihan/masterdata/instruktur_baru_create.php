<?php 
	include '../data/koneksi.php';

		$nama 			= $_POST['txtNama'];
		$tanggalLahir 	= $_POST['dtgTanggalLahir'];
		$usia 			= $_POST['txtUsia'];
		$kelamin 		= ( $_POST['opgKelamin'] == "Pria") ? "Pria" : "Wanita";
		$isMenikah 		= (isset($_POST['chkIsMenikah'])) ? TRUE : FALSE;


	$strQuery = "

		INSERT INTO instruktur(
			nama,
			tanggalLahir,
			usia,
			kelamin,
			isMenikah
		) VALUES(
		'$nama',
		'$tanggalLahir',
		'$usia',
		'$kelamin',
		'$isMenikah'

		);

		";

	$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error($conPelatihan));

	if ($query) {
		// code...
		echo "
			Berhasil diSimpan..
			<meta http-equiv='refresh' content='1, url=list_instruktur.php'>
		";
	} else {
		// code...
		echo "
			Gagal simpan..
			<meta http-equiv='refresh' content='1, url=list_instruktur.php'>			
		";
	}
	

 ?>