<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Penghitungan Nilai Akhir</title>
</head>
<body>
	<form action="<?php echo base_url() ?>NilaiController/hitung" method="POST">
		<b>NIM : </b><br>
		<input type="number" name="nim"><br><br>
		<b>Nama : </b><br>
		<input type="text" name="nama"><br><br>
		<b>NILAI UTS :</b><br>
		<input type="number" name="uts"><br><br>
		<b>NILAI UAS :</b><br>
		<input type="numbr" name="uas"><br><br>
		<b>NILAI TUGAS :</b><br>
		<input type="number" name="tugas"><br><br>
		<b>KEHADIRAN : </b><br>
		<input type="number" name="presensi"><br>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>