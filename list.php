<?php
require('config.php');
require('func.php');

if (!isset($_REQUEST['pass']) || $_REQUEST['pass'] != 'lo tegalu lol') {
	echo("invalid password, exiting");
	exit();
}

$link = mysqli_connect($host, $user, $pass, $data);

$perpage = 25;
$page = 'notnumeric';
if (isset($_REQUEST['page'])) {
	$page = $_REQUEST['page'];
}
if (!is_numeric($page)) {
	$page = 1;
}
$lowest  = ($page - 1) * $perpage;
$highest = $lowest + $perpage;

$sql = "SELECT ID, UAIP, SRES, TIME FROM pt_data WHERE ID >= $lowest AND ID < $highest";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo (1+$row["ID"]) . "|" . hexToStr($row["UAIP"]) . "|" . $row["SRES"] . "|";
		$time = $row["TIME"];
		$dt = new DateTime("@$time");  // convert UNIX timestamp to PHP DateTime
		echo $dt->format('Y-m-d H:i:s');
		echo "<br>";
	}
} else {
	echo "EMPTY";
}
if (!isset($_REQUEST['page'])) {
	echo ("<center>is that it?</center>");
}

mysqli_close($link);
?>
