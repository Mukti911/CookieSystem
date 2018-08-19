<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="up.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" id="fl">
	<input type="submit" name="ss" value="upload">
</form>
</body>
</html>
<?php
	if (isset($_POST["ss"])) {
		$target_dir = "img/";
		$target_file = $target_dir.basename($_FILES["file"]["name"]);
		$uploaded = 1;
		$image = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if (isset($_POST["ss"])) {
			$check = getimagesize($_FILES["file"]["tmp_name"]);
			if ($check !== false) {
				echo "File is".$check["mime"].".";
				echo "<br>";
				$uploaded = 1;
			}
			else {
				echo "Not image";
				echo "<br>";
				$uploaded = 0;
			}
		}

		if ($_FILES["file"]["size"] > 500000) {
			echo "File Terlalu besar";
				echo "<br>";
			$uploaded = 0;
		}

		if ($image != "jpg" && $image != "png" && $image != "jpeg") {
			echo "file mu gk sesuai";
				echo "<br>";
			$uploaded = 0;
		}

		if ($uploaded == 0) {
			echo "Sorry, not uploaded";
				echo "<br>";
		}
		else {
			date_default_timezone_set('Asia/Jakarta');

			$namefile = $target_dir.date('dmY_His').".".$image; 
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $namefile)) {
				echo "file upladded";
			}
			else {
			echo "not uploadded";
			}
		}
		echo $target_dir."<br>";
		echo $target_file."<br>";
		echo basename($_FILES["file"]["name"])."<br>";
		echo $_FILES["file"]["size"]."<br>";
		echo $image."<br>";
		echo var_dump($check)."<br>";
		echo $check["mime"]."<br>";
		echo $_FILES["file"]["tmp_name"]."<br>";
	}
?>