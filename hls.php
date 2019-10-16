<?php
session_start();
$sid = session_id();
$path = 'tamazight.m3u8';
$hash = md5($path.$sid); //You need to use proper encryption. This is not secure at all.
$_SESSION[$hash] = $path;
?>

<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
<title>encrypt url video with php hash</title>
</head><body><center> <h2> test encrypt url hls m3u8</h2><br>
<iframe src="jw.html?src=encrypt.php?video=<?php echo $hash;?>" frameborder="0" width="714" height="402"></iframe> 
<!-- <video width="704" height="404" controls>
<source src="encrypt.php?video=<?php echo $hash;?>" type="video/mp4"></video> -->
</center></body></html>
