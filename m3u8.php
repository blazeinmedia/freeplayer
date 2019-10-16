<?php
$hls = '2m.m3u8';
header("Content-type: application/vnd.apple.mpegurl");
readfile($hls);
?>
