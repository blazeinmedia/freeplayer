<?php
header('Content-type: application/vnd.apple.mpegurl');
$file = $_GET['src'];
readfile($file);
?>
