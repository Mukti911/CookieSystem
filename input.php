<!DOCTYPE html>
<html>
<head>
	<title>Mukti911</title>
</head>
<body>
<form method="POST">
	<p>Nama</p>
	<input type="text" name="x">
	<p>Nomor</p>
	<input type="text" name="y">
	<p>Alamat</p>
	<input type="text" name="z">
	<input type="submit" name="xxx" value="SAVE">
</form>
</body>
</html>
<?php 
include 'action/connect.php';
if (!empty($_POST['xxx'])) {
	$nama = $_POST['x'];
	$no = $_POST['y'];
	$alamat = $_POST['z'];

	mysqli_query($connect, "INSERT INTO `ssss`(`n`, `nama`, `no`, `alamat`) VALUES (NULL,$nama,$no,$alamat)");
	
}


 ?>