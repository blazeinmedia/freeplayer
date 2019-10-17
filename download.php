<?php
session_start();
$sid = session_id();
$file = "" .$_GET['src'];
header('Content-Type: application/octet-stream');
readfile($file);
$_SESSION[$sid] = $file;
?>
