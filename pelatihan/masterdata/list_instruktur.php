<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Master Data | LIST PESERTA</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		

	</head>

	<body>
		<?php include '../shared/header.php'; ?>

		<h4>Master data | LIST INSTRUKTUR</h4>

		<table class="table table-striped">
			<a href="instruktur_baru.php">Buat data baru</a>
			<tr>
				<td>ID Instruktur</td>
				<td>Nama</td>
				<td>Tanggal Lahir</td>
				<td>Usia</td>
				<td>Kelamin</td>
				<td>Operation</td>
				
			</tr>

			<?php  
				include '../data/koneksi.php';

				$strQuery = "SELECT * FROM instruktur";
				$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error());

				while ($data = mysqli_fetch_array($query)) {
					// code...
				$id = $data["id"];
				$nama = $data["nama"];
				$tanggalLahir = $data["tanggalLahir"];
				$usia = $data["usia"];
				$kelamin = $data["kelamin"];	
			?>

			<tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $nama; ?></td>
				<td><?php echo $tanggalLahir; ?></td>
				<td><?php echo $usia; ?></td>
				<td><?php echo $kelamin; ?></td>
								
				
				<td>
					<a href="instruktur_edit.php?id= <?php echo $id; ?>">Edit</a> |
					<a href="instruktur_delete.php?id= <?php echo $id; ?>" onclick="return confirm('Yakin mau hapus <?php echo $nama; ?> ?')">
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