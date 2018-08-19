<?php
$servername = "localhost";
$username = "mukti911";
$password = "C039loeNj1n9";
$database = "euesystem";

$connect = mysqli_connect($servername,$username,$password,$database);
if (!$connect) {
	die("Koneksi Gagal dilakukan". mysqli_connect_error());
}
else {
}

?>