<?php
$folder = "./"; //Sesuaikan Folder nya
if(!($buka_folder = opendir($folder))) die ("eRorr... Tidak bisa membuka Folder");

$file_array = array(); 
while($baca_folder = readdir($buka_folder))
 {
  $file_array[] = $baca_folder;
 }

$jumlah_array = count($file_array);
for($i=2; $i<$jumlah_array; $i++)
  {
   $nama_file = $file_array;
   $nomor = $i - 1;
   echo "$nomor. <a href='$nama_file[$i]'>$nama_file[$i]</a> (". round(filesize($nama_file[$i])/1024,1) . "kb)<br/>";
 }

closedir($buka_folder);
?>
