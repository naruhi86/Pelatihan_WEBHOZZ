<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Instruktur | Baru</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		
	</head>
	
	<body>
		<?php include '../shared/header.php'; ?>

		<form name="frmInstruktur" action="instruktur_baru_create.php" method="post">
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

		<input type="submit" name="submit" value="Submit">
	</form>

		<a href="list_instruktur.php">Kembali ke list Instruktur
		<?php include '../shared/footer.php'; ?>
	</body>
</html>