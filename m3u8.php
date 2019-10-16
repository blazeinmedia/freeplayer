<?php
$hls = '2m.m3u8';
header("Content-type: video/MP2T");
readfile($hls);
?>
