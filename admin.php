<?php
	session_start();
	if ($_SESSION['status']!="login") {
		header("location:login.php?notice=belum_login");
	}
?>
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
	<link rel="stylesheet" type="text/css" href="assets/main/school.css">
	<link rel="stylesheet" type="text/css" href="assets/main/admin.css">
	<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<style type="text/css">
	* {
		box-sizing: border-box;
	}
	.row {
		display: flex;
	}
.z-menu {
	height: 529px; 
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.z-menu li a {
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: #fff;
  display: block
}

.z-menu	 li a:hover {
  background-color: #37474f;
}
ul.z-menu li ul {
	list-style-type: none;
	padding-left: 0px;
}
ul.z-menu li ul li a {
	padding-left: 30px;
	font-size: 16px;
}
</style>
<?php
	for ($i=0; $i < 5 ; $i++) { 
		echo '
			<script>
			$(document).ready(function(){
			    $("#f'.$i.'").click(function(){
			        $("#s'.$i.'").toggle();
			    });
			});
			</script>
		';
	}
?>
</head>
<body style="overflow-y: hidden;">
	<?php
		include 'main-body-assets/header.html';
	?>
	<div class="z-content container-fluid">
		<div class="row" >
			<div class="col-md-3 zaza" style="background-color: #102027; padding: 0px;  overflow-y: scroll; height: 612px;">
				<div class="ads-page">
					<div class="ads-img"></div>
					<div class="ads-pro">
						<h4><?php echo $_SESSION['username']; ?></h4>
						<p>Administrator</p>
						<div class="closed"><a href="action/ad_logout.php">Logout</a></div>
					</div>
				</div>
				<h3 style="padding: 10px;color: #fff; ">Menu Admin</h3>
				<ul class="z-menu" style="height: auto;" >
					<li ><a href="#" id="f0">School<i class="fa fa-caret-down" style="float: right;"></i></a>
						<ul class="dropdown-container" id="s0">
							<li><a href="#">School Profile</a></li>
							<li><a href="#">School Vision And Mission</a></li>
							<li><a href="#">School History</a></li>
							<li><a href="#">Strukur Sekolah</a></li>
							<li><a href="#">Link 1</a></li>
						</ul>
					</li>
					<li><a href="#">Student</a></li>
					<li><a href="#">Teacher</a></li>
					<li><a href="#">Class</a></li>
					<li><a href="#">Vocational</a></li>
					<li><a href="#">Absentc</a></li>
					<li><a href="#">School Maps</a></li>
					<li ><a href="#" id="f1">Admin</a></li>
				</ul>
			</div>
			<?php
				include 'admin/admin-cr.php';
			?>
		</div>
	</div>
	</div>
	<div class="z-footer">

	</div>

</body>
</html>
