<?php
include 'connect.php';
if ($_POST["User-Admin-Submit"]) {
	$CodeUnix = strtoupper(substr(md5(date("YismidH")), 24));
	$AdminCode = strtoupper(substr(md5(date("Yism")), 26));
	$Username = $_POST["Username"];
	$Password = $_POST["Password"];
	$Email = $_POST["Email"];
	$FullName = $_POST["FullName"];
	$NickName = $_POST["NickName"];
	$Permission = $_POST["Permission"];
	$Phone = $_POST["Phone"];
	$UserImage = 
	$Address = $_POST["Address"];
	$DateAdded =  date(format, timestamp);


	$sql = "INSERT INTO `user_admin` (`Number`, `CodeUnix`, `AdminCode`, `Username`, `Password`, `Email`, `FullName`, `NickName`, `Permission`, `NumberPhone`, `UserImage`, `Address`, `DateAdded`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '')";
	if (mysqli_master_query($connect, $sq)) {
		echo "Input Admin Success";
	}
	else {
		echo "Error".$sql."<br>".mysqli_error($connect);
	}
}
?>