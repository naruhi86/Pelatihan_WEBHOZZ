<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>MKEGIATAN PELATIHAN</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		

	</head>

	<body>
		<?php include '../shared/header.php'; ?>

		<h4>KEGIATAN PELATIHAN</h4>

		<table class="table table-striped">
			<a href="pelatihan_baru.php">Buat data baru</a>
			
			<table class="table">
		<tr>
			<td>Ruang</td>
			<td>Tanggal</td>
			<td>Materi</td>
			<td>Peserta</td>
			<td>Instruktur</td>
		</tr>


			<?php  
				include '../data/koneksi.php';

				$strQuery = "SELECT * FROM viewpelatihan";
				$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error());

				while ($data = mysqli_fetch_array($query)) {
					// code...
				$ruang = $data["ruang"];
				$tanggal = $data["tanggal"];
				$materi = $data["materi"];
				$murid = $data["murid"];
				$guru = $data["guru"];	
			?>

			<tr>
			<td><?php echo $ruang; ?></td>
			<td><?php echo $tanggal; ?></td>
			<td><?php echo $materi; ?></td>
			<td><?php echo $murid; ?></td>
			<td><?php echo $guru; ?></td>
			
			</tr>

			<?php } ?>
		</table>

		<a href="..">Kembali ke Beranda</a>

		<?php include '../shared/footer.php'; ?>
	</body>
</html>