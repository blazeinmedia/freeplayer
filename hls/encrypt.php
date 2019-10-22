<?php
session_start();
if (isset($_GET["video"]) && isset($_SESSION[$_GET["video"]])) {
header("Content-Type: application/vnd.apple.mpegurl");
$file = $_SESSION[$_GET["video"]]; //Get the filename
readfile($file); 
}
session_start();
$sid = session_id();
$path = 'video.m3u8';
$hash = md5($path.$sid); //You need to use proper encryption. This is not secure at all.
$_SESSION[$hash] = $path;
?>
