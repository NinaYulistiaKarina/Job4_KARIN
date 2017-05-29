<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php
echo"<b>";
	$foo = 'Hello Word!';
	$foo = ucwords($foo); // Hello World!
	$bar = 'Hello World!';
	$bar = ucwords($bar); // Hello World!
	$bar = ucwords(strtolower($bar)); // Hello World!
	echo"$foo <br>$bar";
echo"</b>";
?>
</body>
</html>