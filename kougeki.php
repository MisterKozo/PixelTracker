<?php
include("config.php");
include("func.php");
header('Content-Type: image/gif');
readfile("pretty.gif");
$link = mysqli_connect($host, $user, $pass, $data);

$uaip = strToHex(getIP() . " - " . getUA());
$id   = mysqli_num_rows(mysqli_query($link, "SELECT * FROM pt_data"));
$time = time();
$sres = $_COOKIE['dada'];
$sql  = "INSERT INTO pt_data (ID, UAIP, SRES, TIME) VALUES ('$id', '$uaip', '$sres', '$time')";
mysqli_query($link, $sql);

mysqli_close($link);
?>
<script>alert("hi");</script>
