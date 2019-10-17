<?php
session_start();
$sid = session_id();
$file = urldecode($_GET['src']);
header('Content-Type: application/octet-stream');
readfile($file);
$_SESSION[$file] = $sid;
?>
