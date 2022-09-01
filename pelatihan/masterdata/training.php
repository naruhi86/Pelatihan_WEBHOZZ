<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Master Data | Training</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		

	</head>

	<body>
		<?php include '../shared/header.php'; ?>

		<h4>Master data | Training</h4>

		<table class="table table-striped">
			<a href="training_baru.php">Buat data baru</a>
			<tr>
				<td>ID Training</td>
				<td>Nama Training</td>
				<td>Operation</td>
			</tr>

			<?php  
				include '../data/koneksi.php';

				$strQuery = "SELECT * FROM training";
				$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error());

				while ($data = mysqli_fetch_array($query)) {
					// code...
					$id_training = $data["id_training"];
					$nama_training = $data["nama_training"];
			?>

			<tr>
				<td><?php echo $id_training; ?></td>
				<td><?php echo $nama_training; ?></td>

				<td>
					<a href="training_ubah.php?id_training= <?php echo $id_training; ?>">Edit</a> |
					<a href="training_delete.php?id_training= <?php echo $id_training; ?>" onclick="return confirm('Yakin mau hapus <?php echo $nama_training; ?> ?')">
						Hapus
					</a>
				</td>
			</tr>

			<?php } ?>
		</table>

		<a href="..">Kembali ke Beranda</a>

		<?php include '../shared/footer.php'; ?>
	</body>
</html>