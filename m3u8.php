<?php
$reqpath = '2m.m3u8';
header('Content-type:application/octet-stream');
@readfile($reqpath);
?>
