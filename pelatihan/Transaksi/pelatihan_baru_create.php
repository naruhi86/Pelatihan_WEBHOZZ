<?php 
	include '../data/koneksi.php';

		$ruang = $_POST['ruang'];

	    $tanggal = $_POST['tanggal'];

	    $materi = $_POST['materi'];

	    $id_instruktur = $_POST['id_instruktur'];

	    $id_peserta = $_POST['id_peserta'];



	$strQuery = "

		INSERT INTO pelatihan(
                    ruang,
                    tanggal,
                    materi,
                    id_instruktur,
                    id_peserta
                ) VALUES(
                    '$ruang',
                    '$tanggal',
                    '$materi',
                    '$id_instruktur',
                    '$id_peserta'

		);

		";

	$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error($conPelatihan));

	if ($query) {
		// code...
		echo "
			Berhasil diSimpan..
			<meta http-equiv='refresh' content='1, url=pelatihan.php'>
		";
	} else {
		// code...
		echo "
			Gagal simpan..
			<meta http-equiv='refresh' content='1, url=pelatihan.php'>			
		";
	}
	

 ?>