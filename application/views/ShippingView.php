<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pengiriman Barang</title>
</head>
<body>
	<h1>Form Pengiriman Barang</h1>
	<form action="shippingEstimation" method="POST">
		<b>Nama Pengirim :</b><br>
		<input type="text" name="sender">
		<br><br>
		<b>Nama Penerima :</b><br>
		<input type="text" name="recipient" >
		<br><br>
		<b>Berat barang : </b><br>
		<input type="number" name="berat"> <b>kg</b>
		<br><br>
		<b>Jarak :</b><br>
		<input type="number" name="jarak"> <b>km</b>
		<br><br>
		<b>Tanggal Pengiriman: </b> <br>
  		<input type="date" name="tanggal">
		<br><br><br>
		<input type="submit" value="Submit" name="shipping">
	</form> 

</body>
</html>