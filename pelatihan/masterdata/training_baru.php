<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Training | Baru</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		
	</head>
	
	<body>
		<?php include '../shared/header.php'; ?>

		<!-- Form input data Training -->
		<form class=".form-control" action="training_baru_create.php" method="post">
			<table>
				<tr>
					<td colspan="3"><h3>Form Input Training</h3></td>
				</tr>
				<tr>
					<td>Nama Training</td>
					<td>:</td>
					<td><input type="text" name="txtNamaTraining"></td>
				</tr>

				<tr>
					<td colspan="3">
						<input class="btn btn-primary" type="submit" name="cmdSubmit" value="Simpan">
					</td>
				</tr>				
			</table>
		</form>

		<a href="training.php">Kembali ke Training</a>

		<?php include '../shared/footer.php'; ?>
	</body>
</html>