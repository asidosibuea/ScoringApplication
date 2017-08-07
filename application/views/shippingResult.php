<!DOCTYPE html>
<html>
<head>
	<title> Estimasi Pengiriman Barang </title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
	<h1> Detail Pengiriman Barang </h1>
	<form action="index" method="POST">
		<table>
		<tr>
			<th> Nama Pengirim</th>
			<th> Nama Penerima</th>
			<th> Berat Barang </th>
			<th> Jarak </th>
			<th> Total biaya </th>
			<th> Tanggal Pengiriman </th>
			<th> Estimasi Selesai </th>
		</tr>
		<tr>
			<td><?php echo $sender; ?></td>
			<td><?php echo $recipient; ?></td>
			<td><?php echo $berat; ?></td>
			<td><?php echo $jarak; ?></td>
			<td><?php echo $total; ?></td>
			<td><?php echo $tglMasuk; ?></td>
			<td><?php echo $tglSelesai; ?></td>
		</tr>
		<tr>
		<td colspan="7">
			<input type="submit" name="kembali" value="kembali">
		</td>
		</tr>
	</table>	
	</form>
	
</body>
</html>