<?php
	include 'kon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form method="post" action="sss.php">
    Nama : <input type="text" name="nama" /><br />
    Alamat : <input type="text" name="alamat" /><br />
    Telpon : <input type="text" name="telp" /><br />
    <input type="submit" value="Submit" />
  </form>
<table>
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Telp</td>
	</tr>
	<?php
		$query = mysqli_query($conn,"SELECT * FROM zzzz ORDER BY no DESC");
		if (mysqli_num_rows($query)>0) {
			$no = 1;
			while ( $data <= mysqli_fetch_array($query)) {
				echo "
					<tr>
						<td>".$data["no"]."</td>
						<td>".$data["sss"]."</td>
						<td>".$data["ddd"]."</td>
						<td>".$data["aaaa"]."</td>
					</tr>
				";	
			}
		}
	?>
	
</table>
</body>
</html>