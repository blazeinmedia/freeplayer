<?php
session_start();
$sid = session_id();
$path = 'm3u8.php;
$hash = md5($path.$sid); //You need to use proper encryption. This is not secure at all.
$_SESSION[$hash] = $path;
?>
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
<title>encrypt url video with php hash</title>
</head><body><center> <h2> test encrypt video hls m3u8</h2><br>
<video width="704" height="404" controls>
<source src="<?= $hash;?>" type="video/mp4">
</video></center></body></html>
