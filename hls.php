<?php
session_start();
if (isset($_GET["video"]) && isset($_SESSION[$_GET["video"]])) {
header('Content-Type: binary/octet-stream');
header('Pragma: no-cache');
$file = $_SESSION[$_GET["video"]]; //Get the filename
readfile($file); //Proxy
die();       
}
session_start();
$sid = session_id();
$path = "2m.m3u8";
$hash = md5($path.$sid); //You need to use proper encryption. This is not secure at all.
$_SESSION[$hash] = $path;
?>
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
<title>encrypt url video with php hash</title>
</head><body><center> <h2> encrypt video hls</h2><br>
<video width="704" height="404" controls>
<source src="hls.php?video=<?= $hash;?>" type="application/vnd.apple.mpegurl">
</video></center></body></html>
