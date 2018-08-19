<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>EUESystem - School Management System</title>
	<?php
		include 'main-body-assets/css.html';
	?>
	<link rel="stylesheet" type="text/css" href="assets/main/main.css">
	<link rel="stylesheet" type="text/css" href="assets/main/siswa.css">
</head>
<body>
	<?php
		include 'main-body-assets/header.html';
	?>
	<div class="z-content container" style="padding: 10px 0px">
		<h2>Tambah Siswa</h2>
		<form class="form-horizontal" action="action/input.php" method="post">
			<div class="row">
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-container">
								<i class="fa fa-user icon"></i>
					    		<input class="input-field" type="text" placeholder="Nama Lengkap" name="FullName">
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-child icon"></i>
							    <input class="input-field" type="text" placeholder="Nama Panggilan" name="NickName">
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-calendar-check-o icon"></i>
							    <input class="input-field" type="text" placeholder="Tempat Tanggal Lahir" name="PlaceOfBirth">
							    <input class="input-field" type="date" placeholder="Password" name="DateOfBirth">
							</div>
						</div>
						<div class="col-md-7">
							<div class="input-container">
							    <i class="fa fa-genderless icon"></i>
							    <select class="input-field" style="background-color: #fff; height: 46px !important;" name="Gender" required>
								    <option value="- " disabled selected>Jenis Kelamin</option>
								    <option value="Laki-laki">Laki Laki</option>
								    <option value="Perempuan">Perempuan</option>
								    <option value="Other">Other</option>
								</select>
							</div>
						</div>
						<div class="col-md-5">
							<div class="input-container">
							    <i class="fa fa-users icon"></i>
							    <select class="input-field" style="background-color: #fff; height: 46px !important;" name="Religion">
								    <option value="- " disabled selected>Agama</option>
								    <option value="Islam">Islam</option>
								    <option value="">Hindu</option>
								    <option>Budha</option>
								    <option>Dll</option>
								</select>
							</div>
						</div>
						<div class="col-md-7">
							<div class="input-container">
							    <i class="fa fa-text-height icon"></i>
							    <input class="input-field" type="text" placeholder="Berat - Kg" name="BodyWeight">
							    <input class="input-field" type="text" placeholder="Tinggi - Kg" name="BodyHeight">
							</div>
						</div>
						<div class="col-md-5">
							<div class="input-container">
							    <i class="fa fa-tint icon"></i>
							    <select class="input-field" name="BloodType" style="background-color: #fff; height: 45px !important;">
								    <option value="- " disabled selected>Gol Darah</option>
								    <option value="O">O</option>
								    <option value="A">A</option>
								    <option value="B">B</option>
								    <option value="AB">AB</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-user-md icon"></i>
							    <select class="input-field" name="PysicalCondition" style="background-color: #fff; height: 45px !important;">
								    <option value="- ">Kondisi Fisik</option>
								    <option value="Sehat">Sehat</option>
								    <option value="Cacat">Cacat</option>
								    <option value="Cacar">Cacar</option>
								    <option value="Panu">Panu</option>
								    <option value="Kadas">Kadas</option>
								</select>
								<select class="input-field" name="MentalCondition" style="background-color: #fff; height: 45px !important;">
								    <option value="- ">Kondisi Mental</option>
								    <option value="Sehat">Sehat</option>
								    <option value="Cacat">Sakit Jiwa</option>
								    <option value="Cacar">Psikopat</option>
								    <option value="Panu">Kejang</option>
								    <option value="Kadas">Depresi</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-male icon"></i>
							    <input class="input-field" type="text" placeholder="Nama Ayah" name="FatherName">
							    <input class="input-field" type="text" placeholder="Nama Ibu" name="MotherName">
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-home icon" style="line-height: 80px;"></i>
								<textarea class="input-field" style="resize: none; height: 100px;" rows="3" id="comment" placeholder="Alamat Rumah Lengkap" name="Address"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-envelope icon"></i>
							    <input class="input-field" type="text" placeholder="Email" name="Email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-phone icon"></i>
							    <input class="input-field" type="text" placeholder="No. Telepon" name="PhoneNumber">
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-user-circle icon"></i>
							    <input class="input-field" type="text" placeholder="NISN" name="NISN">
							    <input class="input-field" type="text" placeholder="No.Induk" name="RegistrationNumber">
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-graduation-cap icon"></i>
							    <select class="input-field" name="Class" style="background-color: #fff; height: 46px !important;">
								    <option value="- " disabled selected>Kelas</option>
								    <option value="X">X</option>
								    <option value="XI">XI</option>
								    <option value="XII">XII</option>
								</select>
							    <select class="input-field" name="Vocational" style="background-color: #fff; height: 46px !important;">
								    <option value="- " disabled selected>Jurusan</option>
								    <option value="BKP 1">BKP 1</option>
								    <option value="BKP 2">BKP 2</option>
								    <option value="TGB 1">TGB 1</option>
								    <option value="TGB 2">TGB 2</option>
								    <option value="TGB 3">TGB 3</option>
								    <option value="KI">KI</option>
								    <option value="TAV 1">TAV 1</option>
								    <option value="TAV 2">TAV 2</option>
								    <option value="TIPTL 1">TIPTL 1</option>
								    <option value="TIPTL 2">TIPTL 2</option>
								    <option value="TIPTL 3">TIPTL 3</option>
								    <option value="TIPTL 4">TIPTL 4</option>
								    <option value="TOI">TOI</option>
								    <option value="TKR 1">TKR 1</option>
								    <option value="TKR 2">TKR 2</option>
								    <option value="TKR 3">TKR 3</option>
								    <option value="TPM 1">TPM 1</option>
								    <option value="TPM 2">TPM 2</option>
								    <option value="TPM 3">TPM 3</option>
								    <option value="TPM 4">TPM 4</option>
								    <option value="TKJ 1">TKJ 1</option>
								    <option value="TKJ 2">TKJ 2</option>
								 </select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-id-card icon"></i>
							    <input class="input-field" type="text" placeholder="Riwayat Pendidikan" name="EducationalBackground">
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-trophy icon"></i>
							    <input class="input-field" type="text" placeholder="Prestasi" name="Archievement">
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-bookmark icon"></i>
							    <input class="input-field" type="text" placeholder="Ekstrakulikuler Luar Sekolah" name="OudsideSchollActivities">
							    <input class="input-field" type="text" placeholder="Ekstrakulikuler" name="Extracurricular">
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-map icon"></i>
							    <input class="input-field" type="text" placeholder="Kewarganegaraan" name="Nationality">
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-language icon"></i>
							    <input class="input-field" type="text" placeholder="Bahasa" name="Languagee">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div style="width: 100%; height: 350px; background-color: #888;">
							
						</div>
						<div class="col-md-12">
							<div class="input-container">
							    <i class="fa fa-language icon"></i>
								<input type="submit" value="Submit" name="submit">
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="z-footer"></div>
</div>
</body>
</html>