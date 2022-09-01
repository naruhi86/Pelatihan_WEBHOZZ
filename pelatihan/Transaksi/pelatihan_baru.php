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

		<form name="frmPelatihan" action="pelatihan_baru_create.php" method="post">
			<table>
            <tr>
                <td><label>Ruangan</label></td>
                <td><input type="text" name="ruang"></td>
            </tr>
            <tr>
                <td><label>Tanggal Pelatihan</label></td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td><label>Materi Pelatihan</label></td>
                <td><input type="text" name="materi"></td>
            </tr>
            <tr>
                <td><label>ID Instruktur</label></td>
                <td><input type="number" name="id_instruktur"></td>
            </tr>
            <tr>
                <td><label>ID Peserta</label></td>
                <td><input type="number" name="id_peserta"></td>
            </tr>
    </table>

    <input type="submit" name="submit" value="Submit">
	</form>

		<a href="pelatihan.php"> Kembali ke list Pelatihan

		<?php include '../shared/footer.php'; ?>
	</body>
</html>