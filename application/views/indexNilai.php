<!DOCTYPE html>
<html>
<head>
	<title>Data Menu Masakan</title>
</head>
<body>
<h1>Index Data Mahasiswa </h1>
	<table border="1">
		<tr>
			<th>NIM </th>
			<th>NAMA </th>
			<th>UTS</th>	
			<th>UAS</th>	
			<th>TUGAS</th>	
			<th>PRESENSI</th>	
			<th>NILAI AKHIR</th>	
		</tr>
		<?php 
		foreach($data_nilai as $res){ 
		?>
		<tr>
			<!-- <td><?php echo $no++; ?></td> -->
			<td><?php echo $res->nim ?></td>
			<td><?php echo $res->nama ?></td>
			<td><?php echo $res->uts ?></td>
			<td><?php echo $res->uas ?></td>
			<td><?php echo $res->tugas ?></td>
			<td><?php echo $res->presensi ?></td>
			<td><?php echo $res->finalScore ?></td>
		</tr>
	<?php } ?>
	</table>
	<br/>

	<a href="<?php echo base_url() ?>NilaiController/add"> Add nilai mahasiswa</a>
</body>
</html>