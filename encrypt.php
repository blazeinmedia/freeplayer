<?php
session_start();
if (isset($_GET["video"]) && isset($_SESSION[$_GET["video"]])) {
//header("Content-Type: application/vnd.apple.mpegurl");
header('Content-Type: application/octet-stream');
$file = $_SESSION[$_GET["video"]]; //Get the filename
readfile($file); //Proxy
//die();       
}
session_start();
$sid = session_id();
$path = 'http://www.html-editor.tk/nature.mp4';
$hash = md5($path.$sid); //You need to use proper encryption. This is not secure at all.
$_SESSION[$hash] = $path;
?>
