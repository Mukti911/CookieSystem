
<?php
include_once 'koneksi.php';
if (isset($_POST['up'])) {
	$id = $_POST['eue'];
	$name = $_POST['username'];
	$pass = $_POST['password'];

	$result = mysqli_query($koneksi, "UPDATE admin SET username='$name', password='$pass' WHERE id=$id");
	header('Location:index.php');
}
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE id=$id");
while ( $data = mysqli_fetch_array($result)) {
	$sss = $data['id'];
	$name = $data['username'];
	$pass = $data['password'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="update" method="post" action="edit.php">
		<input type="text" name="eue" placeholder="Masukkan username"  style="display: none;" value="<?php echo "$sss"; ?>">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username" value="<?php echo "$name"; ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password" value="<?php echo "$pass"; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Daftar" name="up"></td>
			</tr>
		</table>
	</form>
</body>
</html>