<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
	<h2>Login - www.malasngoding.com</h2>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
	<table>
		<tr>
			<th>ID</th>
			<th>User</th>
			<th>Pass</th>
			<th>Option</th>
		</tr>
		<?php
			include_once 'koneksi.php';
			$data = mysqli_query($koneksi, "SELECT * FROM admin");
			while ( $d = mysqli_fetch_array($data)) {
				echo "
					<tr>
						<td>".$d['id']."</td>
						<td>".$d['username']."</td>
						<td>".$d['password']."</td>
						<td><a href='edit.php?id=$d[id]'>Edit</a> | <a href='delete.php?id=$d[id]'>Delete</a></td>
					</tr>			
				";
			}
		?>
		
	</table>
	<form method="post" action="index.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Daftar" name="zzz"></td>
			</tr>
		</table>
	</form>
	<?php
		if (isset($_POST['zzz'])) {
			$name = $_POST['username'];
			$pass = $_POST['password'];
			include_once 'koneksi.php';

			$result = mysqli_query($koneksi, "INSERT INTO admin(id,username,password) VALUES (NULL,'$name','$pass')");
			echo "User Added Successfully";

		}
	?>
</body>
</html>