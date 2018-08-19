<?php
	include 'connect.php';
	session_start();
	if (isset($_POST['log'])) {
		$username = $_POST['name'];
		$password = md5($_POST['pass']);

		if (strpos($username, "'") OR strpos($username, "=")) {
			echo "gk iso";
		}
		else{ 
			if (!filter_var($username, FILTER_SANITIZE_STRING) === false && !filter_var($password, FILTER_SANITIZE_STRING) === false) {
				$result = mysqli_query($connect,"SELECT * FROM user_admin WHERE Username='$username' AND Password='$password'");
			echo var_dump($result);
			echo $username;
			echo $password;
			$check = mysqli_num_rows($result);

				if ($check > 0) {
					$_SESSION['username'] = $username;
					$_SESSION['status'] = "login";
					header("Location:../admin.php");
					echo "ada";
				}
				else {
					header("Location:../login.php?notice=gagal");
				}
			}
		}
		

	}
	
	
?>