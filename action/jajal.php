<?php
$s = mt_srand(1111);
echo "Kediri".$s;
echo date("YismidH");
echo "<br>";
echo md5(date("YismidH"));
echo "<br>";
echo strlen(md5(date("YismidH")));
echo substr(md5(date("YismidH")), 20);
echo "<br>";
echo strtoupper(substr(md5(date("YismidH")), 24));
echo "<br>";
echo strtoupper(substr(md5(date("Yism")), 26));
echo "<br>";
echo strtoupper(substr(md5(date("Yism")), 24));
echo "<br>";
echo "<br>";
echo strtolower(strtoupper(substr(md5(date("YismidH")), 26)));

echo "<br>";
date_default_timezone_set('Asia/Jakarta');
echo date('dmY_His'); // Hasil: 20-01-2017 05:32:15
echo date('dmY_His').".png";

$s = 's';
if (is_dir($s)) {
	echo "EUE";
}

$md5 = md5("ssss");
$ss = md5($md5);
echo $md5;
echo "<br>";
echo $ss;
echo "<br>";

?>