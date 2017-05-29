<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php echo"<br>";
	$pizza="piece1 piece2 piece3 piece4 piece5 piece6";
	$pieces= explode(" ", $pizza);
	echo "$pieces[0] <br>";// piece1
	echo "$pieces[1] <br>";// piece2
	// contoh 2
	$data = "foto:*:1023:1000::/home/foo:/bin/sh";
	list($user,$pass,$uid,$gid,$gecos,$home,$shell)= explode(":", $data);
	echo $user; // foo
	echo $pass; // *
echo"</b>"; ?>
</body>
</html>
	