<?php
$reqpath = '2m.m3u8';
header("Cache-Control: no-store, no-cache,must-revalidate");
header("Cache-Control: post-check=0, pre-check=0",false);
header("Pragma: no-cache");
header('Content-type:application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($reqpath));
header('Content-Length: ' . filesize($reqpath));
@readfile($reqpath);
?>
