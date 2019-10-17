<?php
session_start();
$sid = session_id();
$file = $_GET['src']];
$_SESSION[$sid] = $file;
header('Content-Type: application/octet-stream');
readfile($file);
?>
