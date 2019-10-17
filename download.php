<?php
session_start();
$sid = session_id();
$file = $sid.$_GET['src'];
header('Content-Type: application/octet-stream');
readfile($file);
?>
