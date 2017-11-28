<?php
include("config.php");
include("func.php");
header('Content-Type: image/gif');
readfile("pretty.gif");
$link = mysqli_connect($host, $user, $pass, $data);

$uaip = strToHex(getIP() . " - " . getUA());
$id   = mysqli_num_rows(mysqli_query($link, "SELECT * FROM " + $pref + "data"));
$time = time();
$sres = $_COOKIE['dada']; // don't remember why this is here lolol
$sql  = "INSERT INTO " + $pref + "data (ID, UAIP, SRES, TIME) VALUES ('$id', '$uaip', '$sres', '$time')";
mysqli_query($link, $sql);

mysqli_close($link);
echo "<html>"
echo "<head>"
/*
echo "<script>"
INSERT SCRIPT
echo "</script>"
*/
echo "</head>"
echo "</html>"
?>
