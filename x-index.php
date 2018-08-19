<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>EUESystem - School Management System</title>
	<?php
		include 'main-body-assets/css.html';
	?>
	<link rel="stylesheet" type="text/css" href="assets/main/main.css">
	<link rel="stylesheet" type="text/css" href="assets/main/absensi.css">
</head>
<body>
	<?php
		include 'main-body-assets/header.html';
	?>
	<div class="z-content container" style="margin-top: 10px;";>
	</div>
	<div class="z-footer"></div>
	<script type="text/javascript">
		function nav(){
			var x = document.getElementById("z-nav");
			if (x.className === "topnav") {
				x.className += "responsive";
			}
			else {
				x.className = "topnav"
			}
		}
	</script>
</div>
</body>
</html>
