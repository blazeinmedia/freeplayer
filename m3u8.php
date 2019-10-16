<?php
$reqpath = '2m.m3u8';
header("Content-type: video/MP2T");
readfile($reqpath);
?>
