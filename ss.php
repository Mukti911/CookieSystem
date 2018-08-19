<?php
$folder = "./"; //Sesuaikan Folder nya
if(!($buka_folder = opendir($folder))) die ("eRorr... Tidak bisa membuka Folder");

$file_array = array(); 
while($baca_folder = readdir($buka_folder))
 {
  if(substr($baca_folder,0,1) != '.')
   {
     $file_array[] =  $baca_folder;
    }
 }

 while(list($index, $nama_file) = each($file_array))
  {
   $nomor = $index + 1;
   echo "$nomor. <a href='$nama_file'>$nama_file</a> (". round(filesize($nama_file)/1024,1) . "kb)<br/>";
 }

closedir($buka_folder);
?>

