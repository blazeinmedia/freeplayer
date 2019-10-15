<?php
$file = "" .$_GET['src'];
//header('Content-Type: application/octet-stream');
header('Content-Disposition:filename="video.mp4"');
readfile($file);
exit;
?>
