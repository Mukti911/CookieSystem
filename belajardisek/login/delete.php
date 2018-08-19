<?php 
include_once 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM admin WHERE id=$id");
header("Location:index.php");
 ?>