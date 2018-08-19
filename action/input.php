<?php 
	$FullName = $_POST["FullName"];
	$NickName = $_POST["NickName"];
	$Email = $_POST["Email"];
	$PlaceOfBirth = $_POST["PlaceOfBirth"];
	$DateOfBirth = $_POST["DateOfBirth"];
	$Gender = $_POST["Gender"];
	$Religion = $_POST["Religion"];
	$Vocational = $_POST["Vocational"];
	$Class = $_POST["Class"];
	$Nationality = $_POST["Nationality"];
	$BodyWeight = $_POST["BodyWeight"];
	$BodyHeight = $_POST["BodyHeight"];
	$BloodType = $_POST["BloodType"];
	$Extracurricular = $_POST["Extracurricular"];
	$NISN = $_POST["NISN"];
	$RegistrationNumber = $_POST["RegistrationNumber"];
	$PhysicalCondition = $_POST["PysicalCondition"];
	$MentalCondition = $_POST["MentalCondition"];
	$EducationalBacground = $_POST["EducationalBackground"];
	$OutsideSchoolActivities = $_POST["OudsideSchollActivities"];
	$Achievement = $_POST["Archievement"];
	$Languagee = $_POST["Languagee"];
	$FatherName = $_POST["FatherName"];
	$MotherName = $_POST["MotherName"];
	$PhoneNumber = $_POST["PhoneNumber"];
	$Address = $_POST["Address"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>
<h1 style="text-align: center; padding: 30px 30px 0px 30px;">Mukti911 - Belajar PHP Part 1 <br>(-_-)</h1>
<h2 style="padding: 0px 100px;">Ini     Hasil Coding-nya : </h2>
<h4 style="margin: 0px 90px 40px 90px; padding: 10px; background-color: #555; border-radius: 10px; color: #fff;">
	<?php
		echo $FullName."<br>";
		echo $NickName."<br>";
		echo $Email."<br>";
		echo $PlaceOfBirth."<br>";
		echo $DateOfBirth."<br>";
		echo $Gender."<br>";
		echo $Religion."<br>";
		echo $Vocational."<br>";
		echo $Class."<br>";
		echo $Nationality."<br>";
		echo $BodyWeight."<br>";
		echo $BodyHeight."<br>";
		echo $BloodType."<br>";
		echo $Extracurricular."<br>";
		echo $NISN."<br>";
		echo $RegistrationNumber."<br>";
		echo $PhysicalCondition."<br>";
		echo $MentalCondition."<br>";
		echo $EducationalBacground."<br>";
		echo $OutsideSchoolActivities."<br>";
		echo $Achievement."<br>";
		echo $Languagee."<br>";
		echo $FatherName."<br>";
		echo $MotherName."<br>";
		echo $PhoneNumber."<br>";
		echo $Address."<br>";

		$StudentID = bin2hex($NickName) ;
		$servername = "localhost";
		$username = "root";
		$password = "eue";
		$dbname = "absensystem";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO `Student`(`StudentID`, `FullName`, `NickName`, `Email`, `PlaceOfBirth`, `DateOfBirth`, `Gender`, `Religion`, `Vocational`, `Class`, `Nationality`, `BodyWeight`, `BodyHeight`, `BloodType`, `Extracurricular`, `NISN`, `RegistrationNumber`, `PhysicalCondition`, `MentalCondition`, `EducationalBackground`, `OutsideSchoolActivities`, `Achievement`, `Languagee`, `FatherName`, `MotherName`, `PhoneNumber`, `Address`) VALUES ('$StudentID','$FullName','$NickName','$Email','$PlaceOfBirth','$DateOfBirth','$Gender','$Religion','$Vocational','$Class','$Nationality','$BodyWeight','$BodyHeight','$BloodType','$Extracurricular','$NISN','$RegistrationNumber','$PhysicalCondition','$MentalCondition','$EducationalBacground','$OutsideSchoolActivities','$Achievement','$Languagee','$FatherName','$MotherName','$PhoneNumber','$Address')";

		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	?>
</h4>
</body>
</html>