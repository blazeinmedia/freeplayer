<?php
$file = 'http://freeplayer.herokuapp.com/tamazight.m3u8';
header("Content-Type: application/vnd.apple.mpegurl");
readfile($file);
?>
