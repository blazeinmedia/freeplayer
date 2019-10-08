<?php
header("Content-type: application/x-mpegURL");

$file = "http://82.137.248.16:1935/SEdu/stream20112018/chunklist_w536453290.m3u8";
readfile($file);
?>
