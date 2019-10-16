<?php
session_start();
if (isset($_GET["video"]) && isset($_SESSION[$_GET["video"]])) {
header("Content-Type: application/vnd.apple.mpegurl");
$file = $_SESSION[$_GET["video"]]; //Get the filename
readfile($file); //Proxy
//die();       
}
?>
