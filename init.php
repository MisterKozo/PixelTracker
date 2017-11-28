<?php
include("config.php");

if ($_GET['pass'] == "faakiforgottoinit") {
	$sql="CREATE TABLE `pt_data` (
  `ID` int(255) NOT NULL,
  `UAIP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `SRES` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `TIME` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;"
	$link = mysqli_connect($host, $user, $pass, $data)
	mysqli_query($link,$sql)
	mysqli_close($link)
}
?>
