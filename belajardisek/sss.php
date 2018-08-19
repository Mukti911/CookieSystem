<?php
  include "kon.php";
  $name = $_REQUEST['nama'];
  $alm = $_REQUEST['alamat'];
  $telp = $_REQUEST['telp'];
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
  $mysqli = "INSERT INTO zzzz (no,sss, ddd, aaaa) VALUES (NULL,'$name', '$alm', '$telp')";
  $result = mysqli_query($conn, $mysqli);
  echo "Input berhasil";
  mysqli_close($conn);
  header('Location:s.php');
?>