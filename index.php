<?php
include("config.php");
include("func.php");
$link = mysqli_connect($host, $user, $pass, $data);
//$link = new PDO($dsn, $user, $pass, $opt);

if (!$link)
	die("Oops!");
else
	echo("Tf you lookin' at?<br><a href='izuku.html'>it seems that you cant run javascript after setting the header to an image but look here</a>");

$link = mysqli_connect($host, $user, $pass, $data);

echo("<br>");
echo("<img src='/kougeki.gif'>");

mysqli_close($link);
//$link = null;
?>
