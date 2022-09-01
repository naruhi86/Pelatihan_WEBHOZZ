<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Training | Ubah</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		
	</head>

	<body>
		<?php 
			include '../shared/header.php';
			include '../data/koneksi.php';

			$id = $_GET['id'];
			$strQuery = "SELECT * FROM peserta WHERE id = '$id'";
			$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error());
			while ($data = mysqli_fetch_array($query)) {
				// code...
				$id = $data["id"];
				$nama = $data["nama"];
				$tanggalLahir = $data["tanggalLahir"];
				$usia = $data["usia"];
				$kelamin = $data["kelamin"];
		?>

		 <form action="peserta_edit_update.php" method="post">
		 	<!-- Label Form -->
		 	<h3>Form Edit Peserta</h3>

		 	<!-- Sembunyikan ID peserta-->
		 	<input type="hidden" name="lblId" value="<?php echo $id; ?>">

		 	<!-- Field Table peserta-->
		 	<table>
			<tr>
				<td><label>Nama</label></td>
				<td><input type="text" name="txtNama"></td>
			</tr>
			<tr>
				<td><label>Tanggal Lahir</label></td>
				<td><input type="date" name="dtgTanggalLahir"></td>
			</tr>
			<tr>
				<td><label>Usia</label></td>
				<td><input type="number" name="txtUsia"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</label></td>
				<td>
					<input type="radio" name="opgKelamin" value="Pria" checked="Pria">Pria
					<input type="radio" name="opgKelamin" value="Wanita">Wanita
				</td>
			</tr>
			<tr>
				<td><label>Is Menikah</label></td>
				<td><input type="checkbox" name="chkIsMenikah" checked="true"></td>
			</tr>
		</table>

		 	<!-- Command Button -->
		 	<input class="btn btn-primary" type="submit" name="cmdSubmit" value="Ubah">
		 </form>

		<?php 
			}
		 ?>

		 <a href="list_peserta.php">Kembali ke List Peserta</a>

		 <?php include '../shared/footer.php'; ?>
	</body>
</html>