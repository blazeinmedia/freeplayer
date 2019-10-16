<?php
$file = 'mbc3.m3u8';
header("Content-Type: application/vnd.apple.mpegurl");
readfile($file);
?>
