 <?php
function daftar_file($dir)
{
if(is_dir($dir))
{
if($handle = opendir($dir))
{
//tampilkan semua file dalam folder kecuali
while(($file = readdir($handle)) !== false)
{
echo '<a target="_blank" href="'.$dir.$file.'">'.$file.'</a><br>'."\n";
}
closedir($handle);
}
}
}
//cara menggunakan
daftar_file("Artikel/");?>