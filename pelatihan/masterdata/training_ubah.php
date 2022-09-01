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

			$id_training = $_GET['id_training'];
			$strQuery = "SELECT * FROM training WHERE id_training = '$id_training'";
			$query = mysqli_query($conPelatihan, $strQuery) or die(mysqli_error());
			while ($data = mysqli_fetch_array($query)) {
				// code...
				$id_training = $data['id_training'];
				$nama_training = $data['nama_training'];
		 ?>

		 <form action="training_ubah_update.php" method="post">
		 	<!-- Label Form -->
		 	<h3>Form Edit Training</h3>

		 	<!-- Sembunyikan ID Training -->
		 	<input type="hidden" name="lblId_Training" value="<?php echo $id_training; ?>">

		 	<!-- Field Table Training -->
		 	<table>
		 		<tr>
		 			<td>Nama Training</td>
		 			<td>:</td>
		 			<td><input type="text" name="txtNamaTraining" value="<?php echo $nama_training; ?>"></td>
		 		</tr>
		 	</table>

		 	<!-- Command Button -->
		 	<input class="btn btn-primary" type="submit" name="cmdSubmit" value="Ubah">
		 </form>

		<?php 
			}
		 ?>

		 <a href="training.php">Kembali ke Training</a>

		 <?php include '../shared/footer.php'; ?>
	</body>
</html>