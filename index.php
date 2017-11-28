<?php
include("config.php");
include("func.php");
$link = mysqli_connect($host, $user, $pass, $data);
//$link = new PDO($dsn, $user, $pass, $opt);

if (!$link)
	die("Oops!");
else
	echo("hi");

$link = mysqli_connect($host, $user, $pass, $data);

echo("<br>");
echo("<img src='/kougeki.gif'>");

mysqli_close($link);
//$link = null;
?>
