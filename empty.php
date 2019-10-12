<?php
header("Content-type: application/x-mpegURL");

$hls = "http://cdnamd-hls-globecast.akamaized.net/live/ramdisk/2m_monde/hls_video_ts/index.m3u8";
readfile($hls);
?>

