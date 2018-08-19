<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if (isset($_POST['ad-add'])) {
		$Username = $_POST['Username'];
		$Password = md5($_POST['Password']);
		$Email = $_POST['Email'];
		$FullName = $_POST['FullName'];
		$NickName = $_POST['NickName'];
		$Permission = $_POST['Permission'];
		$Phone = $_POST['Phone'];
		$Address = $_POST['Address'];

		if (isset($_FILES['UserImage']['name'])) {
			$target_dir = "../img/user/".$Username."/";
			if (!is_dir($target_dir)) {
				mkdir($target_dir,0777,true);
			}
			$target_file = $target_dir.basename($_FILES['UserImage']['name']);
			$Condition = 1 ;
			$img = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			if (isset($_FILES['UserImage']['tmp_name'])) {
				$Check = getimagesize($_FILES['UserImage']['tmp_name']);
				if ($Check !== false) {
					echo "File Yang Di Upload".$Check['mime'].".";
					$Condition = 1;
				}
				else {
					echo "This File Not Image";
					$Condition = 0;
				}
				if ($_FILES['UserImage']['size'] > 2000000) {
					echo "Ukuran File Tidak Sesuai";
					$Condition = 0;
				}
				if ($img != "jpg" && $img != "jpeg" && $img != "png") {
					echo "Format File mu tidak sesuai";
					$Condition = 0;
				}
				if ($Condition == 0) {
					echo "Mohon Maaf File Kamu Tidak Bisa Di Upload";
				}
				else {
					date_default_timezone_set('Asia/Jakarta');
					$NameFile = $target_dir.$Username.date('dmY_His').".".$img;
					if (move_uploaded_file($_FILES['UserImage']['tmp_name'], $NameFile)) {
						echo "File mu Telah Teruplaod ";
					}
					else {
						echo "Mohon Maaf File Kamu Tidak Bisa Di Upload";
					}
				}

			}
			
		}
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo $Username;
		echo "<br>";
		echo $Password;
		echo "<br>";
		echo $Email;
		echo "<br>";
		echo $FullName;
		echo "<br>";
		echo $NickName;
		echo "<br>";
		echo $Permission;
		echo "<br>";
		echo $Phone;
		echo "<br>";
		echo $Address;
		echo "<br>";
		echo $target_dir;
		echo "<br>";
		echo $target_file;
		echo "<br>";
		echo $Condition;
		echo "<br>";
		echo $img;
		echo "<br>";
		echo basename($_FILES['UserImage']['name']);;
		echo "<br>";
		echo var_dump($Check);
		echo "<br>";
		echo $Check["mime"];
		echo "<br>";
		echo $_FILES['UserImage']['tmp_name'];
		echo "<br>";
		echo $_FILES['UserImage']['size'];
		echo "<br>";
		echo "<br>";
		$NameFile = $target_dir.$Username.date('dmY_His').".".$img;
		include_once 'connect.php';

		$CodeUnix = strtoupper(substr(md5(date("Yism")), 20));
		$AdminCode = strtoupper(substr(md5(strtoupper(substr(strrev(md5(date("Yisim"))), 24))), 24));
		$sql = "INSERT INTO `user_admin` (`Number`, `CodeUnix`, `AdminCode`, `Username`, `Password`, `Email`, `FullName`, `NickName`, `Permission`, `NumberPhone`, `UserImage`, `Address`, `DateAdded`) VALUES (NULL, '$CodeUnix', '$AdminCode', '$Username', '$Password', '$Email', '$FullName', '$NickName', '$Permission', '$Phone', '$NameFile', '$Address', CURRENT_TIMESTAMP)";
		if (mysqli_query($connect,$sql)) {
			echo "New record created successfully";
		}
		else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
		}
		mysqli_close($connect);
		header('Location:../admin.php');
	}
?>
</body>
</html>
