<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
	$str="Kampus Saya adalah STEKOM";
	echo "$str<br>";
	$ganti = str_replace ("Saya", "kami", $str);
	echo $ganti;
echo"</b>";
?>
</body>
</html>