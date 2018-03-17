<?php
if (isset($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER'] == 'bobo' && $_SERVER['PHP_AUTH_PW'] == 'banai') {
	header('Content-Type: image/jpg');
	readfile('success.jpg');
} else {
	header('WWW-Authenticate: Basic realm="EIZOR MEMUDAR CHAVERIM"');
	header('HTTP/1.0 401 Unauthorized');
	header('Content-Type: image/jpg');
	readfile('fail.jpg');
	exit;
}
echo("<script>alert('hi');</script>");
/*include("config.php");
include("func.php");
$link = mysqli_connect($host, $user, $pass, $data);

$uaip = strToHex(getIP() . " - " . getUA());
$id   = mysqli_num_rows(mysqli_query($link, "SELECT * FROM pt_data"));
$time = time();
$sres = $_COOKIE['dada'];
$sql  = "INSERT INTO pt_data (ID, UAIP, SRES, TIME) VALUES ('$id', '$uaip', '$sres', '$time')";
mysqli_query($link, $sql);
mysqli_close($link);*/
?>
