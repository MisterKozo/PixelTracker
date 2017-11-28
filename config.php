<?php
$host = "HOSTADDR";
$data = "DATABASE";
$user = "USERNAME";
$pass = "PASSWORD";
$pref = "pt_";
$char = "utf8";

$dsn  = "mysql:host=$host;dbname=$data;charset=$char";
$opt  = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
?>
